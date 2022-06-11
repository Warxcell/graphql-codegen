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
use GraphQL\Type\Definition\ResolveInfo;
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

use function array_map;
use function array_merge;
use function count;
use function file_get_contents;
use function get_class;
use function implode;
use function in_array;
use function iterator_to_array;
use function property_exists;
use function sprintf;

final class Generator
{
    /**
     * @var DocumentNode[]
     */
    private array $allDocuments;

    /**
     * @var array<string, string>
     */
    private array $allModulesTypeMapping;

    /**
     * @var array<class-string, array<string, ClassLike>>
     */
    private array $typeRegistry = [];

    /**
     * @param iterable<Module> $modules
     * @param LoggerInterface $logger
     */
    public function __construct(
        private readonly iterable $modules,
        private readonly WriterInterface $writer,
        private readonly ResolverParameterTypes $resolverParameterTypes = new ResolverParameterTypes(
            contextType: 'mixed',
            info: ResolveInfo::class
        ),
        private readonly NamingStrategy $namingStrategy = new DefaultStrategy(),
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
            $mappings = array_merge($mappings, $module->getTypeMapping());
            $allDocs[] = Parser::parse(file_get_contents($module->getSchema()));
        }
        $this->allModulesTypeMapping = $mappings;
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
        $this->logger->info(sprintf('Writing %s', $type->getName()));
    }

    private function addGeneratedType(ModuleInterface $module, ClassLike $type): void
    {
        if (isset($this->typeRegistry[get_class($module)][$type->getName()])) {
            return;
        }
        $this->typeRegistry[get_class($module)][$type->getName()] = $type;

        $this->writeGeneratedType($module, $type);
    }

    /**
     * @throws Exception
     */
    private function generate(ModuleInterface $module, DefinitionNode $definitionNode): ?ClassLike
    {
        return match (get_class($definitionNode)) {
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
            ScalarTypeDefinitionNode::class, ScalarTypeExtensionNode::class => $this->generateScalarType(
                $module,
                $definitionNode
            ),
            InterfaceTypeDefinitionNode::class, InterfaceTypeExtensionNode::class => $this->generateInterfaceType(
                $module,
                $definitionNode
            ),
            UnionTypeDefinitionNode::class, UnionTypeExtensionNode::class => $this->generateUnionType(
                $module,
                $definitionNode
            ),
            SchemaDefinitionNode::class => null,
            default => throw new LogicException(sprintf('Definition %s not supported', get_class($definitionNode))),
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

        return $module->getNamespace() . '\\' . $generated->getName();
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
        return in_array($type, ['string', 'int', 'float', 'bool']);
    }

    /**
     * @throws Exception
     */
    private function handleDefinitionByName(string $name): string
    {
        switch ($name) {
            case 'ID':
            case 'String':
                return 'string';
            case 'Int':
                return 'int';
            case 'Float':
                return 'float';
            case 'Boolean':
                return 'bool';
            default:
                $handleType = function () use ($name): ?string {
                    foreach ($this->modules as $i => $module) {
                        foreach ($this->allDocuments[$i]->definitions as $definition) {
                            if (property_exists(
                                    $definition,
                                    'name'
                                )
                                && $definition->name instanceof NameNode
                                && $definition->name->value === $name) {
                                if ($definition instanceof ScalarTypeDefinitionNode || $definition instanceof ScalarTypeExtensionNode) {
                                    throw new LogicException(sprintf('Please define type for %s', $name));
                                }

                                return $this->handleDefinition(
                                    $module,
                                    $definition
                                );
                            }
                        }
                    }

                    return null;
                };

                return $this->allModulesTypeMapping[$name] ?? $handleType() ?? throw new LogicException(
                        sprintf('Definition %s not found', $name)
                    );
        }
    }

    /**
     * @throws Exception
     */
    public function getPhpTypeFromGraphQLType(TypeNode $typeNode): string
    {
        return match (get_class($typeNode)) {
            ListTypeNode::class => 'iterable',
            NonNullTypeNode::class => $this->getPhpTypeFromGraphQLType($typeNode->type),
            NamedTypeNode::class => $this->handleDefinitionByName($typeNode->name->value),
            default => throw new LogicException(),
        };
    }

    /**
     * @param NodeList<FieldDefinitionNode|InputValueDefinitionNode> $params
     * @return array<FieldDefinitionNode|InputValueDefinitionNode>
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
    public function generateObjectType(
        ModuleInterface $module,
        ObjectTypeDefinitionNode|ObjectTypeExtensionNode $definitionNode
    ): ?ClassLike {
        $class = null;
        //$type = $module->getTypeMapping()[$definitionNode->name->value] ?? null;
        $type = $this->allModulesTypeMapping[$definitionNode->name->value] ?? null;
        if (!$type) {
            $class = new ClassType($this->namingStrategy->nameForObject($module, $definitionNode));
            $class->setFinal();

            if (count($definitionNode->fields) > 0) {
                $method = $class->addMethod('__construct');
                foreach ($this->reorderParameters($definitionNode->fields) as $field) {
                    $this->handleInputValue($method, $field);
                }
            }
            $this->addGeneratedType($module, $class);

            $type = $module->getNamespace() . '\\' . $class->getName();
        }

        $resolvers = $this->generateResolversForObject($module, $definitionNode, $type);
        $this->writeGeneratedType($module, $resolvers);

        return $class;
    }

    /**
     * @throws Exception
     */
    private function generateResolversForObject(
        ModuleInterface $module,
        ObjectTypeDefinitionNode|ObjectTypeExtensionNode $definitionNode,
        string $parentType
    ): ClassLike {
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

            $returnType = $this->getPhpTypeFromGraphQLType($field->type);

            $returnTypes = [$returnType, Promise::class];
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

        return $type;
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

    private function fixTypeForGenerics(string $type): string
    {
        if (!$this->isNativeType($type)) {
            $type = '\\' . $type;
        }

        return $type;
    }

    /**
     * @return string[]
     * @throws Exception
     */
    private function getGenericsType(TypeNode $typeNode, ?TypeNode $parentType = null): array
    {
        return match (get_class($typeNode)) {
            ListTypeNode::class => [
                sprintf(
                    'iterable<%s>',
                    $this->generateUnion($this->getGenericsType($typeNode->type, $typeNode))
                ),
            ],
            NonNullTypeNode::class => $this->getGenericsType($typeNode->type, $typeNode),
            NamedTypeNode::class => (function () use ($typeNode, $parentType) {
                $type = $this->fixTypeForGenerics($this->handleDefinitionByName($typeNode->name->value));
                if ($parentType === null) {
                    return [$type, 'null'];
                }

                return [$type];
            })(),
            default => throw new LogicException(),
        };
    }

    /**
     * @throws Exception
     */
    public function generateFieldArgs(
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

        $this->addGeneratedType($module, $class);

        return $module->getNamespace() . '\\' . $class->getName();
    }

    /**
     * @throws Exception
     */
    public function generateInputObjectType(
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
        ($nullable ? $method->addPromotedParameter(
            $definitionNode->name->value,
            $definitionNode instanceof InputValueDefinitionNode ? $definitionNode->defaultValue : null
        ) : $method->addPromotedParameter(
            $definitionNode->name->value
        ))
            ->setReadOnly()
            ->setType($this->getPhpTypeFromGraphQLType($definitionNode->type))
            ->setNullable($nullable);

        $method->addComment(
            sprintf(
                '@param %s $%s',
                $this->generateUnion($this->getGenericsType($definitionNode->type)),
                $definitionNode->name->value
            )
        );
    }

    /**
     */
    public function generateEnumType(
        ModuleInterface $module,
        EnumTypeDefinitionNode|EnumTypeExtensionNode $definitionNode
    ): ?ClassLike {
        $typeName = $module->getTypeMapping()[$definitionNode->name->value] ?? null;

        if (null !== $typeName) {
            return null;
        }
        $enum = new EnumType($this->namingStrategy->nameForEnum($module, $definitionNode));
        foreach ($definitionNode->values as $value) {
            $enum->addCase($value->name->value, $value->name->value);
        }

        return $enum;
    }

    /**
     */
    public function generateScalarType(
        ModuleInterface $module,
        ScalarTypeDefinitionNode|ScalarTypeExtensionNode $definitionNode
    ): ClassLike {
        $type = new InterfaceType($this->namingStrategy->nameForScalarResolverInterface($module, $definitionNode));
        $serialize = $type->addMethod('serialize')->setReturnType('string');
        $serialize->setPublic();
        $serialize->addParameter('value')->setType($module->getTypeMapping()[$definitionNode->name->value] ?? 'mixed');
        $serialize->setBody('return $value;');

        $parseValue = $type->addMethod('parseValue')->setReturnType(
            $module->getTypeMapping()[$definitionNode->name->value] ?? 'mixed'
        );

        $throws = sprintf('@throws \%s', Error::class);
        $parseValue->setPublic();
        $parseValue->addParameter('value')->setType('string');
        $parseValue->addComment($throws);

        $parseLiteral = $type->addMethod('parseLiteral')->setReturnType(
            $module->getTypeMapping()[$definitionNode->name->value] ?? 'mixed'
        );
        $parseLiteral->setPublic();
        $parseLiteral->addParameter('valueNode')->setType(Node::class);
        $parseLiteral->addParameter('variables', null)->setType('?array');

        $parseLiteral->addComment($throws);

        return $type;
    }

    /**
     */
    private function generateUnionType(
        ModuleInterface $module,
        UnionTypeDefinitionNode|UnionTypeExtensionNode $definitionNode
    ): ClassLike {
        $type = new InterfaceType($this->namingStrategy->nameForUnionResolverInterface($module, $definitionNode));
        $resolveType = $type->addMethod('resolveType');
        $resolveType->setPublic();
        $resolveType->setReturnType('string');
        $resolveType->addParameter('value')->setType(
            implode(
                '|',
                array_map(
                /**
                 * @throws Exception
                 */
                    [$this, 'getPhpTypeFromGraphQLType'],
                    iterator_to_array($definitionNode->types)
                )
            )
        );

        $resolveType->addParameter('context')->setType($this->resolverParameterTypes->contextType);
        $resolveType->addParameter('info')->setType($this->resolverParameterTypes->info);

        return $type;
    }

    /**
     */
    private function generateInterfaceType(
        ModuleInterface $module,
        InterfaceTypeDefinitionNode|InterfaceTypeExtensionNode $definitionNode
    ): ClassLike {
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

        $type = new InterfaceType($this->namingStrategy->nameForInterfaceResolverInterface($module, $definitionNode));
        $resolveType = $type->addMethod('resolveType');
        $resolveType->setPublic();
        $resolveType->setReturnType('string');
        $resolveType->addParameter('value')->setType(
            implode(
                '|',
                array_map(
                /**
                 * @throws Exception
                 */
                    [$this, 'getPhpTypeFromGraphQLType'],
                    $allTypesThatImplements
                )
            )
        );
        $resolveType->addParameter('context')->setType($this->resolverParameterTypes->contextType);
        $resolveType->addParameter('info')->setType($this->resolverParameterTypes->info);

        return $type;
    }
}
