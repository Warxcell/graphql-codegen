<?php

declare(strict_types=1);

namespace Arxy\GraphQLCodegen;

use Arxy\GraphQLCodegen\NamingStrategy\DefaultStrategy;
use Exception;
use GraphQL\Error\Error;
use GraphQL\Error\SyntaxError;
use GraphQL\Executor\Promise\Promise;
use GraphQL\Language\AST\DefinitionNode;
use GraphQL\Language\AST\DocumentNode;
use GraphQL\Language\AST\EnumTypeDefinitionNode;
use GraphQL\Language\AST\EnumTypeExtensionNode;
use GraphQL\Language\AST\FieldDefinitionNode;
use GraphQL\Language\AST\InputObjectTypeDefinitionNode;
use GraphQL\Language\AST\InputObjectTypeExtensionNode;
use GraphQL\Language\AST\InputValueDefinitionNode;
use GraphQL\Language\AST\InterfaceTypeDefinitionNode;
use GraphQL\Language\AST\InterfaceTypeExtensionNode;
use GraphQL\Language\AST\ListTypeNode;
use GraphQL\Language\AST\NamedTypeNode;
use GraphQL\Language\AST\NameNode;
use GraphQL\Language\AST\Node;
use GraphQL\Language\AST\NodeList;
use GraphQL\Language\AST\NonNullTypeNode;
use GraphQL\Language\AST\ObjectTypeDefinitionNode;
use GraphQL\Language\AST\ObjectTypeExtensionNode;
use GraphQL\Language\AST\ScalarTypeDefinitionNode;
use GraphQL\Language\AST\ScalarTypeExtensionNode;
use GraphQL\Language\AST\SchemaDefinitionNode;
use GraphQL\Language\AST\TypeNode;
use GraphQL\Language\AST\UnionTypeDefinitionNode;
use GraphQL\Language\AST\UnionTypeExtensionNode;
use GraphQL\Language\Parser;
use GraphQL\Type\Definition\Type;
use LogicException;
use Nette\PhpGenerator\ClassLike;
use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\EnumType;
use Nette\PhpGenerator\InterfaceType;
use Nette\PhpGenerator\Method;
use Nette\PhpGenerator\PhpFile;
use Nette\PhpGenerator\PhpNamespace;
use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;
use ReflectionEnum;
use ReflectionException;

use function array_merge;
use function assert;
use function count;
use function file_get_contents;
use function implode;
use function in_array;
use function sprintf;

final class Generator
{
    public const MIXED = 'mixed';
    public const PHP_NATIVE_TYPES = [
        'string',
        'int',
        'float',
        'bool',
        'iterable',
        'array',
        'null',
        'mixed',
        'object',
        'callable',
    ];

    /**
     * @var DocumentNode[]
     */
    private array $allDocuments = [];

    /**
     * @var array<class-string, array<string, ClassLike>>
     */
    private array $generatedTypes = [];

    /**
     * @var array<string, string|class-string>
     */
    private array $typeRegistry = [];

    public function __construct(
        /**
         * @var list<Module> $modules
         */
        private readonly iterable $modules,
        private readonly WriterInterface $writer,
        private readonly ResolverParameterTypes $resolverParameterTypes = new ResolverParameterTypes(
            contextType: self::MIXED
        ),
        private readonly NamingStrategy $namingStrategy = new DefaultStrategy(),
        private readonly ?TypeDecoratorInterface $typeDecorator = null,
        private readonly LoggerInterface $logger = new NullLogger()
    ) {
    }

    /**
     * @throws SyntaxError
     */
    public function execute(): void
    {
        $mappings = [];
        $allDocs = [];
        foreach ($this->modules as $module) {
            foreach ($module->getTypeMapping() as $graphqlType => $phpType) {
                $this->typeRegistry[$graphqlType] = $phpType;
            }
            $mappings = array_merge($mappings, $module->getTypeMapping());
            $allDocs[] = Parser::parse(file_get_contents($module->getSchema()));
        }
        $this->allDocuments = $allDocs;

        foreach ($this->modules as $module) {
            $this->writer->init($module);
        }

        foreach ($this->modules as $i => $module) {
            $this->handleModule($module, $this->allDocuments[$i]);
        }
    }

    private function writeGeneratedType(ModuleInterface $module, ClassLike $type): void
    {
        $file = new PhpFile();
        $file->setStrictTypes();
        $file->addNamespace((new PhpNamespace($module->getNamespace()))->add($type));
        $file->addComment('Auto-Generated');

        $this->writer->write($module, $file);

        $className = $type->getName();
        assert($className !== null);
        $this->logger->info(sprintf('Writing %s', $className));
    }

    private function addTypeRegistry(string $graphqlType, string $phpType): void
    {
        $this->typeRegistry[$graphqlType] = $phpType;
    }

    private function addGeneratedType(ModuleInterface $module, ClassLike $type): void
    {
        $className = $type->getName();
        assert($className !== null);

        if (isset($this->generatedTypes[$module->getName()][$className])) {
            return;
        }
        $this->generatedTypes[$module->getName()][$className] = $type;

        $this->writeGeneratedType($module, $type);
    }

    /**
     * @throws Exception
     */
    private function generate(ModuleInterface $module, DefinitionNode $definitionNode): ?ClassLike
    {
        return match ($definitionNode::class) {
            ObjectTypeDefinitionNode::class, ObjectTypeExtensionNode::class => $this->generateObjectType(
                $module,
                $definitionNode
            ),
            InputObjectTypeDefinitionNode::class, InputObjectTypeExtensionNode::class => $this->generateInputObjectType(
                $module,
                $definitionNode
            ),
            EnumTypeDefinitionNode::class, EnumTypeExtensionNode::class => $this->generateEnumType(
                $module,
                $definitionNode
            ),
            ScalarTypeDefinitionNode::class, ScalarTypeExtensionNode::class => $this->generateScalarResolver(
                $module,
                $definitionNode
            ),
            InterfaceTypeDefinitionNode::class, InterfaceTypeExtensionNode::class => $this->generateInterfaceResolver(
                $module,
                $definitionNode
            ),
            UnionTypeDefinitionNode::class, UnionTypeExtensionNode::class => $this->generateUnionResolver(
                $module,
                $definitionNode
            ),
            SchemaDefinitionNode::class => null,
            default => throw new LogicException(sprintf('Definition %s not supported', $definitionNode::class)),
        };
    }

    /**
     * @throws Exception
     */
    private function handleDefinition(ModuleInterface $module, DefinitionNode $definitionNode): ?string
    {
        $generated = $this->generate($module, $definitionNode);
        if (!$generated) {
            return null;
        }

        $this->addGeneratedType($module, $generated);

        $className = $generated->getName();
        assert($className !== null);

        return $module->getNamespace() . '\\' . $className;
    }

    /**
     * @throws SyntaxError
     * @throws Exception
     */
    private function handleModule(ModuleInterface $module, DocumentNode $document): void
    {
        foreach ($document->definitions as $definition) {
            $this->handleDefinition($module, $definition);
        }
    }

    private function isNativeType(string $type): bool
    {
        return in_array($type, self::PHP_NATIVE_TYPES);
    }

    /**
     * @return list<string>
     * @throws Exception
     */
    private function handleDefinitionByName(string $name): array
    {
        switch ($name) {
            case Type::ID:
            case Type::STRING:
                return ['string'];
            case Type::INT:
                return ['int'];
            case Type::FLOAT:
                return ['float'];
            case Type::BOOLEAN:
                return ['bool'];
            default:
                $handleType = function () use ($name): ?array {
                    if (isset($this->typeRegistry[$name])) {
                        return [$this->typeRegistry[$name]];
                    }

                    foreach ($this->modules as $i => $module) {
                        foreach ($this->allDocuments[$i]->definitions as $definition) {
                            if (isset($definition->name)
                                && $definition->name instanceof NameNode
                                && $definition->name->value === $name) {
                                if ($definition instanceof ScalarTypeDefinitionNode
                                    || $definition instanceof ScalarTypeExtensionNode
                                    || $definition instanceof InterfaceTypeDefinitionNode
                                    || $definition instanceof InterfaceTypeExtensionNode) {
                                    throw new LogicException(sprintf('Please define type for %s', $name));
                                }

                                if ($definition instanceof UnionTypeDefinitionNode || $definition instanceof UnionTypeExtensionNode) {
                                    $types = [];
                                    foreach ($definition->types as $type) {
                                        $types = [...$types, ...$this->handleDefinitionByName($type->name->value)];
                                    }

                                    return $types;
                                }

                                return [
                                    $this->handleDefinition(
                                        $module,
                                        $definition
                                    ),
                                ];
                            }
                        }
                    }

                    return null;
                };

                return $handleType() ?? throw new LogicException(
                        sprintf('Definition %s not found', $name)
                    );
        }
    }

    /**
     * @throws Exception
     */
    private function getPhpTypeFromGraphQLType(TypeNode $typeNode): array
    {
        return match ($typeNode::class) {
            ListTypeNode::class => ['iterable'],
            NonNullTypeNode::class => $this->getPhpTypeFromGraphQLType($typeNode->type),
            NamedTypeNode::class => $this->handleDefinitionByName($typeNode->name->value),
            default => throw new LogicException(),
        };
    }

    /**
     * @param NodeList<InputValueDefinitionNode>|NodeList<FieldDefinitionNode> $params
     * @return array<InputValueDefinitionNode>|array<FieldDefinitionNode>
     */
    private function reorderParameters(NodeList $params): array
    {
        $nonNullable = [];
        $nullable = [];

        foreach ($params as $param) {
            if ($param->type instanceof NonNullTypeNode) {
                $nonNullable[] = $param;
            } else {
                $nullable[] = $param;
            }
        }

        return array_merge($nonNullable, $nullable);
    }

    /**
     * @throws Exception
     */
    private function generateObjectType(
        ModuleInterface $module,
        ObjectTypeDefinitionNode|ObjectTypeExtensionNode $definitionNode
    ): ?ClassLike {
        $class = null;
        $type = $this->typeRegistry[$definitionNode->name->value] ?? null;
        $generateDefaultImplementation = $type === null;
        if (!$type) {
            $className = $this->namingStrategy->nameForObject($module, $definitionNode);
            $this->addTypeRegistry($definitionNode->name->value, $module->getNamespace() . '\\' . $className);

            $class = new ClassType($className);
            $class->setFinal();

            if (count($definitionNode->fields) > 0) {
                $method = $class->addMethod('__construct');
                foreach ($this->reorderParameters($definitionNode->fields) as $field) {
                    $this->handleInputValue($method, $field);
                }
            }

            if ($this->typeDecorator) {
                $this->typeDecorator->handleObject($module, $definitionNode, $class);
            }

            $this->addGeneratedType($module, $class);

            $className = $class->getName();
            assert($className !== null);
            $type = $module->getNamespace() . '\\' . $className;

            $interface = $this->generateResolversForObject($module, $definitionNode, $type);
            if ($generateDefaultImplementation) {
                $this->generateDefaultResolverImplementation($module, $definitionNode, $interface);
            }
        } else {
            $this->generateResolversForObject($module, $definitionNode, $type);
        }

        return $class;
    }

    /**
     * @throws Exception
     */
    private function generateResolversForObject(
        ModuleInterface $module,
        ObjectTypeDefinitionNode|ObjectTypeExtensionNode $definitionNode,
        string $parentType
    ): InterfaceType {
        $type = new InterfaceType($this->namingStrategy->nameForObjectResolverInterface($module, $definitionNode));

        foreach ($definitionNode->fields as $field) {
            try {
                $argType = $this->generateFieldArgs($module, $definitionNode, $field);
            } catch (Exception $exception) {
                throw new Exception(
                    sprintf(
                        'Error during generating field %s of %s',
                        $field->name->value,
                        $definitionNode->name->value
                    ), 0, $exception
                );
            }

            $method = $type->addMethod($field->name->value);
            $method->setPublic();
            $method->setAbstract();
            $method->addParameter('parent')->setType($parentType);
            $method->addParameter('args')->setType($argType);
            $method->addParameter('context')->setType($this->resolverParameterTypes->contextType);
            $method->addParameter('info')->setType($this->resolverParameterTypes->info);

            $returnTypes = $this->getPhpTypeFromGraphQLType($field->type);
            $returnTypes[] = Promise::class;
            if (!$field->type instanceof NonNullTypeNode) {
                $returnTypes[] = 'null';
            }
            $method->setReturnType($this->generateUnion($returnTypes));

            $genericsTypes = $this->generateUnion($this->getGenericsType($field->type));
            $promise = $this->wrapInPromise($genericsTypes);
            $method->addComment(
                sprintf(
                    '@return %s',
                    $this->generateUnion([
                        $genericsTypes,
                        $promise,
                    ])
                )
            );
        }

        if ($this->typeDecorator) {
            $this->typeDecorator->handleObjectResolverInterface($module, $definitionNode, $type);
        }
        $this->writeGeneratedType($module, $type);

        return $type;
    }

    private function generateDefaultResolverImplementation(
        ModuleInterface $module,
        ObjectTypeDefinitionNode|ObjectTypeExtensionNode $definitionNode,
        InterfaceType $interface
    ): void {
        $class = new ClassType($this->namingStrategy->nameForObjectResolverImplementation($module, $definitionNode));

        $name = $interface->getName();
        assert($name !== null);
        $class->addImplement($module->getNamespace() . '\\' . $name);

        $class->setMethods(
            array_map(static function (Method $method) {
                $implementation = clone($method);
                $implementation->setAbstract(false);
                $implementation->setBody(sprintf('return $parent->%s;', $method->getName()));

                return $implementation;
            }, $interface->getMethods())
        );

        if ($this->typeDecorator) {
            $this->typeDecorator->handleObjectResolverImplementation($module, $definitionNode, $class);
        }

        $this->writeGeneratedType($module, $class);
    }

    private function wrapInPromise(string $type): string
    {
        return sprintf('\%s<%s>', Promise::class, $type);
    }

    /**
     * @param string[] $types
     */
    private function generateUnion(array $types): string
    {
        return implode('|', $types);
    }

    /**
     * @param array<string> $types
     * @return array<string>
     */
    private function fixTypeForGenerics(array $types): array
    {
        return array_map(function (string $type): string {
            if (!$this->isNativeType($type)) {
                $type = '\\' . $type;
            }

            return $type;
        }, $types);
    }

    /**
     * @return string[]
     * @throws Exception
     */
    private function getGenericsType(TypeNode $typeNode, ?TypeNode $parentType = null): array
    {
        $types = match ($typeNode::class) {
            ListTypeNode::class => [
                sprintf(
                    'list<%s>',
                    $this->generateUnion($this->getGenericsType($typeNode->type, $typeNode))
                ),
            ],
            NonNullTypeNode::class => $this->getGenericsType($typeNode->type, $typeNode),
            NamedTypeNode::class => $this->fixTypeForGenerics($this->handleDefinitionByName($typeNode->name->value)),
            default => throw new LogicException(sprintf('%s not supported', $typeNode::class)),
        };
        if (!$typeNode instanceof NonNullTypeNode && !$parentType instanceof NonNullTypeNode) {
            $types[] = 'null';
        }

        return $types;
    }

    /**
     * @throws Exception
     */
    private function generateFieldArgs(
        ModuleInterface $module,
        ObjectTypeDefinitionNode|ObjectTypeExtensionNode $objectType,
        FieldDefinitionNode $definitionNode
    ): string {
        $class = new ClassType(
            $this->namingStrategy->nameForArgumentsObject($module, $objectType, $definitionNode)
        );
        $class->setFinal();

        if (count($definitionNode->arguments) > 0) {
            $method = $class->addMethod('__construct');
            foreach ($this->reorderParameters($definitionNode->arguments) as $field) {
                $this->handleInputValue($method, $field);
            }
        }

        if ($this->typeDecorator) {
            $this->typeDecorator->handleObjectFieldArgs($module, $objectType, $definitionNode, $class);
        }

        $this->addGeneratedType($module, $class);
        $className = $class->getName();
        assert($className !== null);

        return $module->getNamespace() . '\\' . $className;
    }

    /**
     * @throws Exception
     */
    private function generateInputObjectType(
        ModuleInterface $module,
        InputObjectTypeDefinitionNode|InputObjectTypeExtensionNode $definitionNode
    ): ClassLike {
        $class = new ClassType($this->namingStrategy->nameForInputObject($module, $definitionNode));
        $class->setFinal();
        if (count($definitionNode->fields) > 0) {
            $method = $class->addMethod('__construct');
            foreach ($this->reorderParameters($definitionNode->fields) as $field) {
                $this->handleInputValue($method, $field);
            }
        }

        if ($this->typeDecorator) {
            $this->typeDecorator->handleInputObjectType($module, $definitionNode, $class);
        }

        $this->addGeneratedType($module, $class);

        return $class;
    }

    /**
     * @throws Exception
     */
    private function handleInputValue(
        Method $method,
        InputValueDefinitionNode|FieldDefinitionNode $definitionNode
    ): void {
        $nullable = !$definitionNode->type instanceof NonNullTypeNode;

        // TODO maybe handle default value?
        // $definitionNode instanceof InputValueDefinitionNode ? $definitionNode->defaultValue : null
        ($nullable ? $method->addPromotedParameter(
            $definitionNode->name->value,
        ) : $method->addPromotedParameter(
            $definitionNode->name->value
        ))
            ->setReadOnly()
            ->setType($this->generateUnion($this->getPhpTypeFromGraphQLType($definitionNode->type)))
            ->setNullable($nullable);

        $method->addComment(
            sprintf(
                '@param %s $%s',
                $this->generateUnion($this->getGenericsType($definitionNode->type)),
                $definitionNode->name->value
            )
        );
    }

    private function generateEnumType(
        ModuleInterface $module,
        EnumTypeDefinitionNode|EnumTypeExtensionNode $definitionNode
    ): ?ClassLike {
        $typeName = $this->typeRegistry[$definitionNode->name->value] ?? null;

        if (null !== $typeName) {
            try {
                $reflection = new ReflectionEnum($typeName);
            } catch (ReflectionException $exception) {
                throw CodegenException::notEnum($module, $definitionNode, $typeName, $exception);
            }

            if (!$reflection->isBacked()) {
                throw CodegenException::notBackedEnum($module, $definitionNode, $typeName);
            }

            return null;
        }
        $enum = new EnumType($this->namingStrategy->nameForEnum($module, $definitionNode));
        foreach ($definitionNode->values as $value) {
            $enum->addCase($value->name->value, $value->name->value);
        }

        if ($this->typeDecorator) {
            $this->typeDecorator->handleEnumType($module, $definitionNode, $enum);
        }

        return $enum;
    }

    private function generateScalarResolver(
        ModuleInterface $module,
        ScalarTypeDefinitionNode|ScalarTypeExtensionNode $definitionNode
    ): ?ClassLike {
        $type = new InterfaceType($this->namingStrategy->nameForScalarResolverInterface($module, $definitionNode));
        $serialize = $type->addMethod('serialize')->setReturnType('string');
        $serialize->setPublic();
        $serialize->addParameter('value')->setType(
            $this->typeRegistry[$definitionNode->name->value] ?? self::MIXED
        );
        $serialize->setBody('return $value;');

        $parseValue = $type->addMethod('parseValue')->setReturnType(
            $this->typeRegistry[$definitionNode->name->value] ?? self::MIXED
        );

        $throws = sprintf('@throws \%s', Error::class);
        $parseValue->setPublic();
        $parseValue->addParameter('value')->setType('string');
        $parseValue->addComment($throws);

        $parseLiteral = $type->addMethod('parseLiteral')->setReturnType(
            $this->typeRegistry[$definitionNode->name->value] ?? self::MIXED
        );
        $parseLiteral->setPublic();
        $parseLiteral->addParameter('valueNode')->setType(Node::class);
        $parseLiteral->addParameter('variables', null)->setType('?array');

        $parseLiteral->addComment($throws);

        if ($this->typeDecorator) {
            $this->typeDecorator->handleScalarResolverInterface($module, $definitionNode, $type);
        }

        $this->writeGeneratedType($module, $type);

        return null;
    }

    /**
     * @throws Exception
     */
    private function generateUnionResolver(
        ModuleInterface $module,
        UnionTypeDefinitionNode|UnionTypeExtensionNode $definitionNode
    ): ?ClassLike {
        $class = new InterfaceType($this->namingStrategy->nameForUnionResolverInterface($module, $definitionNode));
        $resolveType = $class->addMethod('resolveType');
        $resolveType->setPublic();
        $resolveType->setReturnType('string');

        $types = [];
        foreach ($definitionNode->types as $type) {
            $types = [...$types, ...$this->getPhpTypeFromGraphQLType($type)];
        }
        $resolveType->addParameter('value')->setType($this->generateUnion($types));
        $resolveType->addParameter('context')->setType($this->resolverParameterTypes->contextType);
        $resolveType->addParameter('info')->setType($this->resolverParameterTypes->info);

        if ($this->typeDecorator) {
            $this->typeDecorator->handleUnionResolverInterface($module, $definitionNode, $class);
        }

        $this->writeGeneratedType($module, $class);

        return null;
    }

    /**
     * @throws Exception
     */
    private function generateInterfaceResolver(
        ModuleInterface $module,
        InterfaceTypeDefinitionNode|InterfaceTypeExtensionNode $definitionNode
    ): ?ClassLike {
        $type = $this->typeRegistry[$definitionNode->name->value] ?? null;
        $types = [];

        if ($type) {
            $types = [$type];
        } else {
            /** @var NamedTypeNode[] $allTypesThatImplements */
            $allTypesThatImplements = [];

            foreach ($this->allDocuments as $document) {
                foreach ($document->definitions as $definition) {
                    if (!$definition instanceof ObjectTypeDefinitionNode && !$definition instanceof ObjectTypeExtensionNode) {
                        continue;
                    }

                    foreach ($definition->interfaces as $interface) {
                        if ($interface->name->value === $definitionNode->name->value) {
                            $allTypesThatImplements[] = new NamedTypeNode([
                                'name' => $definition->name,
                            ]);
                        }
                    }
                }
            }

            foreach ($allTypesThatImplements as $type) {
                $types = [...$types, ...$this->getPhpTypeFromGraphQLType($type)];
            }
        }

        $class = new InterfaceType($this->namingStrategy->nameForInterfaceResolverInterface($module, $definitionNode));
        $resolveType = $class->addMethod('resolveType');
        $resolveType->setPublic();
        $resolveType->setReturnType('string');

        $resolveType->addParameter('value')->setType($this->generateUnion($types));
        $resolveType->addParameter('context')->setType($this->resolverParameterTypes->contextType);
        $resolveType->addParameter('info')->setType($this->resolverParameterTypes->info);

        if ($this->typeDecorator) {
            $this->typeDecorator->handleInterfaceResolverInterface($module, $definitionNode, $class);
        }

        $this->writeGeneratedType($module, $class);

        return null;
    }
}
