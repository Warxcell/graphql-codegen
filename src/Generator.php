<?php

declare(strict_types=1);

namespace Arxy\GraphQLCodegen;

use Arxy\GraphQLCodegen\NamingStrategy\DefaultStrategy;
use Closure;
use Exception;
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
use GraphQL\Language\AST\NodeKind;
use GraphQL\Language\AST\NonNullTypeNode;
use GraphQL\Language\AST\ObjectTypeDefinitionNode;
use GraphQL\Language\AST\ObjectTypeExtensionNode;
use GraphQL\Language\AST\ScalarTypeDefinitionNode;
use GraphQL\Language\AST\ScalarTypeExtensionNode;
use GraphQL\Language\AST\SchemaDefinitionNode;
use GraphQL\Language\AST\SchemaExtensionNode;
use GraphQL\Language\AST\TypeExtensionNode;
use GraphQL\Language\AST\TypeNode;
use GraphQL\Language\AST\UnionTypeDefinitionNode;
use GraphQL\Language\AST\UnionTypeExtensionNode;
use GraphQL\Language\Parser;
use GraphQL\Language\Visitor;
use GraphQL\Type\Definition\Type;
use LogicException;
use Nette\InvalidArgumentException;
use Nette\PhpGenerator\ClassLike;
use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\EnumType;
use Nette\PhpGenerator\InterfaceType;
use Nette\PhpGenerator\Method;
use Nette\PhpGenerator\PhpFile;
use Nette\PhpGenerator\PhpNamespace;
use Nette\PhpGenerator\Printer;
use Nette\PhpGenerator\PsrPrinter;
use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;
use ReflectionFunction;
use ReflectionUnionType;
use RuntimeException;

use function array_map;
use function array_merge;
use function array_unique;
use function assert;
use function count;
use function file_get_contents;
use function file_put_contents;
use function glob;
use function implode;
use function in_array;
use function is_dir;
use function is_file;
use function mkdir;
use function preg_match;
use function reset;
use function sprintf;
use function ucfirst;
use function unlink;
use function var_export;

use const PHP_EOL;

final class Generator
{
    public const MIXED = 'mixed';
    public const DO_NOT_SLASH_TYPES = [
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
        'numeric-string',
    ];

    /**
     * @var array<string, string>
     */
    private array $rootTypes = ['Query' => 'Query', 'Mutation' => 'Mutation', 'Subscription' => 'Subscription'];

    /**
     * @var array<string, Module> $modules
     */
    private array $modules = [];

    /**
     * @var array<string, DocumentNode>
     */
    private array $documents = [];

    private readonly TypeRegistry $typeRegistry;

    private array $baseTypeMappingRegistry = [];
    private array $moduleTypeMappingRegistry = [];
    private array $moduleTypeMapping = [];

    private readonly Printer $printer;

    /**
     * @var array<string, ClassType[]>
     */
    private array $baseTypes = [];

    private array $argumentsMapping = [];
    private array $argumentsMappingModule = [];
    private array $enumsMapping = [];
    private array $inputObjectsMapping = [];

    /**
     * @param list<Module> $modules
     */
    public function __construct(
        private readonly BaseModule $baseModule,
        array $modules,
        private readonly ResolverParameterTypes $resolverParameterTypes = new ResolverParameterTypes(),
        private readonly NamingStrategy $namingStrategy = new DefaultStrategy(),
        private readonly ?TypeDecoratorInterface $typeDecorator = null,
        private readonly LoggerInterface $logger = new NullLogger()
    ) {
        $this->typeRegistry = new TypeRegistry();
        foreach ($modules as $module) {
            if (isset($this->modules[$module->getName()])) {
                throw new LogicException(sprintf('Module %s already set', $module->getName()));
            }
            $this->modules[$module->getName()] = $module;

            foreach ($module->getTypeMapping() as $name => $value) {
                $this->moduleTypeMappingRegistry[$module->getName()][$name] = [$value];
                $this->moduleTypeMapping[$name] = [$value];
                $this->baseTypeMappingRegistry[$name] = [$value];
            }
        }

        $this->printer = new PsrPrinter();
    }

    /**
     * @throws SyntaxError
     * @throws Exception
     */
    public function execute(): void
    {
        foreach ($this->modules as $module) {
            $schema = file_get_contents($module->getSchema());
            if ($schema === false) {
                throw new RuntimeException('Could not read schema ' . $module->getSchema());
            }
            $document = Parser::parse($schema);
            $this->documents[$module->getName()] = $document;

            $currentNode = null;

            $schemaVisitor = function (SchemaDefinitionNode|SchemaExtensionNode $definitionNode) {
                foreach ($definitionNode->operationTypes as $operationType) {
                    $this->rootTypes[$operationType->operation] = $operationType->type->name->value;
                }
            };

            Visitor::visit($document, [
                'enter' => [
                    NodeKind::SCHEMA_DEFINITION => $schemaVisitor,
                    NodeKind::SCHEMA_EXTENSION => $schemaVisitor,
                    NodeKind::OBJECT_TYPE_DEFINITION => function (ObjectTypeDefinitionNode $definitionNode) use (
                        $module,
                        &$currentNode
                    ) {
                        $currentNode = $definitionNode;
                        if (isset($this->moduleTypeMapping[$definitionNode->name->value])) {
                            return;
                        }
                        $className = $this->namingStrategy->nameForObjectInterface($definitionNode);

                        $this->baseTypeMappingRegistry[$definitionNode->name->value] = [
                            $this->baseModule->getNamespace() . '\\' . $className,
                        ];
                        $this->moduleTypeMappingRegistry[$module->getName(
                        )][$definitionNode->name->value] = [$module->getNamespace() . '\\' . $className];
                    },
                    NodeKind::OBJECT_TYPE_EXTENSION => function (ObjectTypeExtensionNode $definitionNode) use (
                        $module,
                        &$currentNode
                    ) {
                        $currentNode = $definitionNode;
                        if (isset($this->moduleTypeMapping[$definitionNode->name->value])) {
                            return;
                        }
                        $className = $this->namingStrategy->nameForObjectInterface($definitionNode);
                        $this->moduleTypeMappingRegistry[$module->getName(
                        )][$definitionNode->name->value] = [$module->getNamespace() . '\\' . $className];
                    },
                    NodeKind::FIELD_DEFINITION => function (FieldDefinitionNode $definitionNode) use (
                        $module,
                        &$currentNode
                    ) {
                        if (!$currentNode) {
                            return;
                        }
                        $interfaceName = $this->namingStrategy->nameForObjectFieldArgumentsObjectInterface(
                            $currentNode,
                            $definitionNode
                        );
                        $name = $module->getNamespace() . '\\' . $interfaceName;
                        $this->argumentsMappingModule[$module->getName(
                        )][$currentNode->name->value][$definitionNode->name->value] = $name;

                        $className = $this->baseModule->getNamespace(
                            ) . '\\' . $this->namingStrategy->nameForObjectFieldArgumentsObject(
                                $currentNode,
                                $definitionNode
                            );
                        $this->argumentsMapping[$currentNode->name->value][$definitionNode->name->value] = $className;
                    },
                    NodeKind::INPUT_OBJECT_TYPE_DEFINITION => function (InputObjectTypeDefinitionNode $definitionNode
                    ) use (
                        $module
                    ) {
                        $mapped = $module->getTypeMapping()[$definitionNode->name->value] ?? null;
                        if ($mapped) {
                            $this->baseTypeMappingRegistry[$definitionNode->name->value] = [$mapped];

                            $this->moduleTypeMappingRegistry[$module->getName(
                            )][$definitionNode->name->value] = [$mapped];
                        } else {
                            $className = $this->namingStrategy->nameForInputObject($definitionNode);
                            $this->baseTypeMappingRegistry[$definitionNode->name->value] = [
                                $this->baseModule->getNamespace() . '\\' . $className,
                            ];

                            $this->moduleTypeMappingRegistry[$module->getName(
                            )][$definitionNode->name->value] = [$module->getNamespace() . '\\' . $className];
                        }
                    },
                    NodeKind::INPUT_OBJECT_TYPE_EXTENSION => function (InputObjectTypeExtensionNode $definitionNode) use
                    (
                        $module
                    ) {
                        $className = $this->namingStrategy->nameForInputObjectInterface($definitionNode);
                        $this->moduleTypeMappingRegistry[$module->getName(
                        )][$definitionNode->name->value] = [$module->getNamespace() . '\\' . $className];
                    },
                    NodeKind::SCALAR_TYPE_DEFINITION => function (ScalarTypeDefinitionNode $definitionNode) use (
                        $module
                    ) {
                        if (!isset(
                            $this->moduleTypeMappingRegistry[$module->getName()][$definitionNode->name->value]
                        )) {
                            throw new LogicException(
                                sprintf('Please define type for %s', $definitionNode->name->value)
                            );
                        }
                    },
                    NodeKind::SCALAR_TYPE_EXTENSION => function (ScalarTypeDefinitionNode $definitionNode) {
                        throw new LogicException('Not supported');
                    },
                    NodeKind::ENUM_TYPE_DEFINITION => function (EnumTypeDefinitionNode $definitionNode) use (
                        $module
                    ) {
                        if (isset($this->moduleTypeMapping[$definitionNode->name->value])) {
                            $this->enumsMapping[$definitionNode->name->value] = $this->moduleTypeMapping[$definitionNode->name->value][0];

                            return;
                        }
                        $name = $module->getNamespace() . '\\' . $this->namingStrategy->nameForEnum($definitionNode);
                        $this->moduleTypeMappingRegistry[$module->getName()][$definitionNode->name->value] = [$name];
                        $this->baseTypeMappingRegistry[$definitionNode->name->value] = [$name];

                        $this->enumsMapping[$definitionNode->name->value] = $name;
                    },
                ],
                'leave' => function ($node) use (&$currentNode) {
                    unset($currentNode);
                },
            ]);
        }
        foreach ($this->modules as $module) {
            $document = $this->documents[$module->getName()];
            Visitor::visit($document, [
                NodeKind::UNION_TYPE_DEFINITION => function (UnionTypeDefinitionNode $union) use ($module) {
                    foreach ($union->types as $type) {
                        $this->baseTypeMappingRegistry[$union->name->value] = [
                            ...($this->baseTypeMappingRegistry[$union->name->value] ?? []),
                            ...$this->baseTypeMappingRegistry[$type->name->value],
                        ];

                        foreach ($this->documents as $moduleInner => $document) {
                            foreach ($document->definitions as $definition) {
                                if ($definition instanceof TypeExtensionNode) {
                                    continue;
                                }
                                if (!isset($definition->name) || !$definition->name instanceof NameNode || $definition->name->value !== $type->name->value) {
                                    continue;
                                }
                                $this->moduleTypeMappingRegistry[$module->getName()][$union->name->value] = [
                                    ...($this->moduleTypeMappingRegistry[$module->getName(
                                    )][$union->name->value] ?? []),
                                    ...($this->moduleTypeMappingRegistry[$moduleInner][$type->name->value] ?? []),
                                ];
                            }
                        }

                        $this->moduleTypeMappingRegistry[$module->getName()][$union->name->value] = array_unique(
                            $this->moduleTypeMappingRegistry[$module->getName()][$union->name->value]
                        );
                        //                        foreach ($this->modules as $moduleInner) {
                        //                            if (isset($this->moduleTypeMappingRegistry[$moduleInner->getName()][$type->name->value])) {
                        //                                $this->moduleTypeMappingRegistry[$module->getName()][$definitionNode->name->value] = [
                        //                                    ...($this->moduleTypeMappingRegistry[$module->getName()][$definitionNode->name->value] ?? []),
                        //                                    ...$this->moduleTypeMappingRegistry[$moduleInner->getName()][$type->name->value],
                        //                                ];
                        //                            }
                        //                        }
                    }
                },
            ]);
        }
        foreach ($this->modules as $module) {
            $document = $this->documents[$module->getName()];
            $this->processDef(
                $document,
                function (ScalarTypeDefinitionNode $definitionNode) use ($module) {
                    $this->handleScalarType($module, $definitionNode);
                }
            );
            $this->processDef(
                $document,
                function (ScalarTypeExtensionNode $definitionNode) {
                    throw new LogicException('Not supported');
                }
            );
            $this->processDef(
                $document,
                function (EnumTypeDefinitionNode $definitionNode) use ($module) {
                    $this->handleEnum($module, $definitionNode);
                }
            );
            $this->processDef(
                $document,
                function (InputObjectTypeDefinitionNode $definitionNode) use ($module) {
                    $this->handleInputObjectType($module, $definitionNode);
                }
            );
            $this->processDef(
                $document,
                function (InputObjectTypeExtensionNode $definitionNode) use ($module) {
                    $this->handleInputObjectType($module, $definitionNode);
                }
            );

            $this->processDef(
                $document,
                function (ObjectTypeDefinitionNode $definitionNode) use ($module) {
                    $this->handleObjectType($module, $definitionNode);
                }
            );
            $this->processDef(
                $document,
                function (ObjectTypeExtensionNode $definitionNode) use ($module) {
                    $this->handleObjectType($module, $definitionNode);
                }
            );

            $this->processDef(
                $document,
                function (UnionTypeDefinitionNode $definitionNode) use ($module) {
                    $this->handleUnionType($module, $definitionNode);
                }
            );
            $this->processDef(
                $document,
                function (UnionTypeExtensionNode $definitionNode) {
                    throw new LogicException('Not supported');
                }
            );

            $this->processDef(
                $document,
                function (InterfaceTypeDefinitionNode $definitionNode) use ($module) {
                    $this->handleInterfaceType($module, $definitionNode);
                }
            );
        }

        $initDir = static function (string $directory): void {
            if (!is_dir($directory)) {
                $result = mkdir($directory);
                if (false === $result) {
                    throw new RuntimeException('Could not create directoy ' . $directory);
                }
            } else {
                $files = glob(sprintf('%s/*', $directory));
                if (false === $files) {
                    throw new RuntimeException('Could not traverse ' . $directory);
                }
                foreach ($files as $file) {
                    if (is_file($file)) {
                        unlink($file);
                    }
                }
            }
        };

        foreach ($this->typeRegistry->all() as $moduleName => $types) {
            $module = $this->getModuleByName($moduleName);

            $initDir($module->getDirectory());

            foreach ($types as $type) {
                $this->write($module->getNamespace(), $type, $module->getDirectory());
            }
        }

        $initDir($this->baseModule->getDirectory());
        foreach ($this->baseTypes as $type => $classes) {
            foreach ($classes as $class) {
                if (in_array($type, [
                        'ObjectFieldArgs',
                        'InputObject',
                    ])
                    && $class instanceof ClassType
                    && $class->hasMethod('__construct')) {
                    $construct = $class->getMethod('__construct');
                    $params = $construct->getParameters();

                    $nullables = [];
                    $nonNullables = [];

                    foreach ($params as $param) {
                        if ($param->isNullable() || in_array('null', $param->getType(true)->getTypes())) {
                            $nullables[] = $param;
                        } else {
                            $nonNullables[] = $param;
                        }
                    }

                    $construct->setParameters(array_merge($nonNullables, $nullables));
                }
                //$this->typeDecorator->handleObjectFieldArgs($module, $objectType, $field, $baseObjectFieldArgs);
                $this->write($this->baseModule->getNamespace(), $class, $this->baseModule->getDirectory());
            }
        }

        file_put_contents(
            $this->baseModule->getDirectory() . '/mapping.php',
            "<?php\n\ndeclare(strict_types=1);\n\nreturn " . var_export([
                'argumentsMapping' => $this->argumentsMapping,
                'inputObjectsMapping' => $this->inputObjectsMapping,
                'enumsMapping' => $this->enumsMapping,
            ], true) . ";\n"
        );
    }

    private function processDef(DocumentNode $node, callable $callback): void
    {
        $reflection = new ReflectionFunction($callback);
        $params = $reflection->getParameters();

        $param = $params[0];
        $type = $param->getType();

        $classes = [];
        if ($type instanceof ReflectionUnionType) {
            foreach ($type->getTypes() as $unionType) {
                $classes[] = $unionType->getName();
            }
        } else {
            $classes[] = $type->getName();
        }

        foreach ($node->definitions as $definition) {
            if (in_array($definition::class, $classes)) {
                $callback($definition);
            }
        }
    }

    /**
     * @throws Exception
     */
    private function handleScalarType(
        Module $module,
        ScalarTypeDefinitionNode|ScalarTypeExtensionNode $definitionNode
    ): void {
        [$types, $generics] = $this->getTypesFromGraphQLType(
            new NonNullTypeNode([
                'type' => new NamedTypeNode([
                    'name' => $definitionNode->name,
                ]),
            ]),
            $module
        );

        $phpTypes = $this->generateUnion($types);
        $generics = $this->generateUnion($generics);
        $interface = new InterfaceType($this->namingStrategy->nameForScalarResolverInterface($definitionNode));
        $serialize = $interface->addMethod('serialize')->setReturnType($this->generateUnion(['string']));
        $serialize->setPublic();
        $serialize->addParameter('value')->setType($phpTypes);
        $serialize->addComment(sprintf('@param %s $value', $generics));

        $parseValue = $interface->addMethod('parseValue')->setReturnType($phpTypes);
        $parseValue->addComment(sprintf('@return %s', $generics));

        $throws = sprintf('@throws \%s', Exception::class);
        $parseValue->setPublic();
        $parseValue->addParameter('value')->setType('string');
        $parseValue->addComment($throws);

        $parseLiteral = $interface->addMethod('parseLiteral')->setReturnType($phpTypes);
        $parseLiteral->setPublic();
        $parseLiteral->addParameter('valueNode')->setType(Node::class);
        $parseLiteral->addParameter('variables', null)->setType('?array');
        $parseLiteral->addComment('@param array<string, mixed>|null $variables');
        $parseLiteral->addComment(sprintf('@return %s', $generics));
        $parseLiteral->addComment($throws);

        $this->typeDecorator?->handleScalarResolverInterface($this->documents, $module, $definitionNode, $interface);
        $this->typeRegistry->add($definitionNode, $interface, $module);
    }

    /**
     * @return array{0: string[], 1: string[]}
     * @throws Exception
     */
    private function getTypesFromGraphQLType(
        TypeNode $typeNode,
        ?Module $module = null,
        ?TypeNode $parentType = null
    ): array {
        [$types, $generics] = match ($typeNode::class) {
            ListTypeNode::class => $this->getIterableTypes($typeNode, $module),
            NonNullTypeNode::class => $this->getTypesFromGraphQLType($typeNode->type, $module, $typeNode),
            NamedTypeNode::class => $this->extractPhpTypesAndGenerics($this->getTypesFromNamedNode($typeNode, $module)),
        };

        if (!$typeNode instanceof NonNullTypeNode && !$parentType instanceof NonNullTypeNode) {
            $types[] = $generics[] = 'null';
        }

        foreach ($types as $type) {
            if ($type === self::MIXED) {
                return [[self::MIXED], [self::MIXED]];
            }
        }

        return [array_unique($types), array_unique($generics)];
    }

    /**
     * @return array{0: list<string>, 1: list<string>}
     * @throws Exception
     */
    private function getIterableTypes(ListTypeNode $typeNode, Module|null $module): array
    {
        [, $generics] = $this->getTypesFromGraphQLType($typeNode->type, $module, $typeNode);

        return [
            ['iterable'],
            [
                sprintf(
                    'iterable<int, %s>',
                    $this->generateUnion($generics)
                ),
            ],
        ];
    }

    /**
     * @param string[] $types
     */
    private function generateUnion(array $types): string
    {
        return implode('|', $types);
    }

    /**
     * @param list<string> $types
     * @return array{0: list<string>, 1: list<string>}
     */
    private function extractPhpTypesAndGenerics(array $types): array
    {
        $phpTypes = [];
        $generics = [];
        foreach ($types as $type) {
            $matches = [];
            if (preg_match('/(?<phpType>\w+)<.+>/', $type, $matches)) {
                $phpTypes[] = $this->mapPhpstanTypeToPhpType($matches['phpType']);
            } else {
                $phpTypes[] = $this->mapPhpstanTypeToPhpType($type);
            }
            $generics[] = $this->fixTypeForGenerics($type);
        }

        return [$phpTypes, $generics];
    }

    private function mapPhpstanTypeToPhpType(string $type): string
    {
        return match ($type) {
            'numeric-string' => 'string',
            default => $type
        };
    }

    private function fixTypeForGenerics(string $type): string
    {
        if (!$this->isNativeType($type)) {
            $type = '\\' . $type;
        }

        return $type;
    }

    private function isNativeType(string $type): bool
    {
        $pattern = sprintf('/^(%s).?/', implode('|', self::DO_NOT_SLASH_TYPES));

        return preg_match($pattern, $type) === 1;
    }

    /**
     * @return string[]
     */
    private function getTypesFromNamedNode(NamedTypeNode $type, ?Module $module = null): array
    {
        switch ($type->name->value) {
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
                if (!$module) {
                    if (!$this->baseTypeMappingRegistry[$type->name->value]) {
                        throw new LogicException(
                            sprintf('Global type %s not found', $type->name->value)
                        );
                    }

                    return $this->baseTypeMappingRegistry[$type->name->value];
                }

                foreach ($this->documents as $moduleInner => $document) {
                    foreach ($document->definitions as $definition) {
                        if ($definition instanceof TypeExtensionNode) {
                            continue;
                        }
                        if (!isset($definition->name) || !$definition->name instanceof NameNode || $definition->name->value !== $type->name->value) {
                            continue;
                        }

                        return $this->moduleTypeMappingRegistry[$moduleInner][$type->name->value];
                    }
                }

                throw new LogicException(sprintf('Type %s not found', $type->name->value));
            //                return $this->moduleTypeMappingRegistry[$module->getName()][$type->name->value] ?? throw new LogicException(
            //                        sprintf('Type %s not found', $type->name->value)
            //                    );
        }
    }

    private function handleEnum(
        Module $module,
        EnumTypeDefinitionNode|EnumTypeExtensionNode $definitionNode
    ): void {
        $cases = [];
        foreach ($definitionNode->values as $value) {
            $cases[] = $value->name->value;
        }
        foreach ($this->documents as $document) {
            Visitor::visit($document, [
                'enter' => [
                    NodeKind::ENUM_TYPE_EXTENSION => function (EnumTypeExtensionNode $extension) use (
                        &$cases,
                        $definitionNode
                    ) {
                        if ($extension->name->value !== $definitionNode->name->value) {
                            return;
                        }
                        foreach ($extension->values as $value) {
                            $cases[] = $value->name->value;
                        }
                    },
                ],
            ]);
        }

        $typeName = $module->getTypeMapping()[$definitionNode->name->value] ?? null;
        if (null !== $typeName) {
            $interface = new InterfaceType($this->namingStrategy->nameForEnumResolver($definitionNode));
            $resolve = $interface->addMethod('resolve');
            $resolve->setStatic()
                ->setPublic();

            $resolve->addParameter('value')->setType('string');

            $resolve->setReturnType($typeName);

            $resolve->addComment(
                sprintf(
                    '@param %s $value',
                    implode(' | ', array_map(static fn(string $type): string => sprintf("'%s'", $type), $cases))
                )
            );

            if ($this->typeDecorator) {
                $this->typeDecorator->handleEnumResolverInterface(
                    $this->documents,
                    $module,
                    $definitionNode,
                    $interface
                );
            }

            $this->typeRegistry->add($definitionNode, $interface, $module);

            return;
        }

        $enum = new EnumType($this->namingStrategy->nameForEnum($definitionNode));
        foreach ($cases as $value) {
            $enum->addCase($value, $value);
        }

        $this->typeDecorator?->handleEnum($this->documents, $module, $definitionNode, $enum);
        $this->typeRegistry->add($definitionNode, $enum, $module);
    }

    private function handleInputObjectType(
        Module $module,
        InputObjectTypeDefinitionNode|InputObjectTypeExtensionNode $definitionNode
    ): void {
        $mappedType = $module->getTypeMapping()[$definitionNode->name->value] ?? null;

        if ($mappedType) {
            $resolverInterface = new InterfaceType(
                $this->namingStrategy->nameForInputObjectResolverInterface($definitionNode)
            );
            $resolveMethod = $resolverInterface->addMethod('resolve');
            $resolveMethod->setPublic();
            $resolveMethod->setReturnType($mappedType);

            if (count($definitionNode->fields) > 0) {
                foreach ($definitionNode->fields as $field) {
                    $parameter = $resolveMethod->addParameter($field->name->value);

                    [$types, $generics] = $this->getTypesFromGraphQLType($field->type);
                    $types = $this->generateUnion($types);
                    $genericsTypes = $this->generateUnion($generics);

                    $parameter->setType($types);
                    $resolveMethod->addComment(sprintf('@param %s %s', $genericsTypes, '$' . $field->name->value));

                    if (!$field->type instanceof NonNullTypeNode) {
                        $parameter->setDefaultValue(null);
                    }
                }
            }

            $this->typeDecorator?->handleInputObjectResolverInterface(
                $this->documents,
                $module,
                $definitionNode,
                $resolverInterface
            );
            $this->typeRegistry->add($definitionNode, $resolverInterface, $module);

            return;
        }
        $inputObject = $this->getBaseInputObjectType($definitionNode);

        $interface = new InterfaceType($this->namingStrategy->nameForInputObjectInterface($definitionNode));

        if ($definitionNode instanceof InputObjectTypeExtensionNode) {
            foreach ($this->documents as $moduleName => $document) {
                foreach ($document->definitions as $definition) {
                    if ($definition instanceof InputObjectTypeDefinitionNode && $definition->name->value === $definitionNode->name->value) {
                        $originInterfaceName = $this->namingStrategy->nameForInputObjectInterface($definitionNode);
                        $originInterface = $this->modules[$moduleName]->getNamespace() . '\\' . $originInterfaceName;

                        $interface->addExtend($originInterface);
                    }
                }
            }
        }
        $inputObject->addImplement($module->getNamespace() . '\\' . $interface->getName());

        if (count($definitionNode->fields) > 0) {
            foreach ($definitionNode->fields as $field) {
                try {
                    $construct = $inputObject->getMethod('__construct');
                } catch (InvalidArgumentException $exception) {
                    $construct = $inputObject->addMethod('__construct');
                }

                [$types, $generics] = $this->getTypesFromGraphQLType($field->type);
                $types = $this->generateUnion($types);

                $genericsTypes = $this->generateUnion($generics);

                $method = $interface->addMethod(sprintf('get%s', ucfirst($field->name->value)));
                $method->setPublic();
                $method->setReturnType($types);
                $method->addComment(sprintf('@return %s', $genericsTypes));

                $parameter = $construct->addPromotedParameter($field->name->value)
                    ->setPrivate()
                    ->setReadOnly()
                    ->setType($types)
                    ->addComment(sprintf('@var %s', $genericsTypes));
                if (!$field->type instanceof NonNullTypeNode) {
                    $parameter->setDefaultValue(null);
                }

                $inputObject->addMethod(sprintf('get%s', ucfirst($field->name->value)))
                    ->setPublic()
                    ->setReturnType($types)
                    ->setBody(sprintf('return $this->%s;', $field->name->value));
//                    ->addComment(sprintf('@return %s', $genericsTypes));
            }
        }

        $this->typeDecorator?->handleInputObjectInterface($this->documents, $module, $definitionNode, $interface);
        $this->typeDecorator?->handleInputObject($this->documents, $module, $definitionNode, $inputObject);
        $this->typeRegistry->add($definitionNode, $interface, $module);

        $this->inputObjectsMapping[$definitionNode->name->value] = $this->baseModule->getNamespace(
            ) . '\\' . $inputObject->getName();
    }

    private function getBaseInputObjectType(
        InputObjectTypeDefinitionNode|InputObjectTypeExtensionNode $definitionNode
    ): ClassType {
        $name = $definitionNode->name->value;
        if (!isset($this->baseTypes['InputObject'][$name])) {
            if (!$definitionNode instanceof InputObjectTypeDefinitionNode) {
                $definitionNode = $this->findDefinitionBy(
                    static fn(
                        DefinitionNode $definitionNode
                    ): bool => $definitionNode instanceof InputObjectTypeDefinitionNode && $definitionNode->name->value === $name
                );
            }
            $inputObject = new ClassType($this->namingStrategy->nameForInputObject($definitionNode));
            $inputObject->setFinal();

            $this->baseTypes['InputObject'][$name] = $inputObject;
        }

        return $this->baseTypes['InputObject'][$name];
    }

    /**
     * @param Closure(DefinitionNode): bool $predicate
     * @return DefinitionNode
     */
    private function findDefinitionBy(Closure $predicate): DefinitionNode
    {
        foreach ($this->documents as $document) {
            foreach ($document->definitions as $definition) {
                if ($predicate($definition)) {
                    return $definition;
                }
            }
        }
        throw new LogicException('Definition not found');
    }

    /**
     * @throws Exception
     */
    private function handleObjectType(
        Module $module,
        ObjectTypeDefinitionNode|ObjectTypeExtensionNode $definitionNode
    ): void {
        $isRootType = $this->isRootType($definitionNode);

        if ($isRootType) {
            $this->generateResolverInterfaceForObject(
                $module,
                $definitionNode,
                [$this->resolverParameterTypes->rootValue]
            );

            return;
        }

        $type = $this->moduleTypeMapping[$definitionNode->name->value] ?? null;
        if ($type) {
            $this->generateResolverInterfaceForObject($module, $definitionNode, $type);

            return;
        }

        $interfaceName = $this->namingStrategy->nameForObjectInterface($definitionNode);
        $interface = new InterfaceType($interfaceName);
        if (count($definitionNode->fields) > 0) {
            foreach ($definitionNode->fields as $field) {
                [$types, $generics] = $this->getTypesFromGraphQLType($field->type, $module);
                $types[] = Promise::class;

                $generics = $this->generateUnion($generics);
                $interface->addMethod(sprintf('get%s', ucfirst($field->name->value)))
                    ->setPublic()
                    ->addComment(
                        sprintf('@return %s', $this->generateUnion([$generics, $this->wrapInPromise($generics)]))
                    )
                    ->setReturnType($this->generateUnion($types));
            }
        }

        $this->typeDecorator?->handleObjectInterface($this->documents, $module, $definitionNode, $interface);
        $this->typeRegistry->add($definitionNode, $interface, $module);

        $class = new ClassType($this->namingStrategy->nameForObject($definitionNode));
        $class->setFinal();
        $class->addImplement($module->getNamespace() . '\\' . $interface->getName());
        if (count($definitionNode->fields) > 0) {
            $method = $class->addMethod('__construct');
            foreach ($definitionNode->fields as $field) {
                $this->handleInputValue($module, $class, $method, $field);
            }
        }

        $this->typeDecorator?->handleObject($this->documents, $module, $definitionNode, $class);
        $this->typeRegistry->add($definitionNode, $class, $module);

        $interface = $this->generateResolverInterfaceForObject($module, $definitionNode, [
            $module->getNamespace() . '\\' . $interfaceName,
        ]);
        $this->generateResolverImplementation($module, $definitionNode, $interface);
    }

    private function isRootType(ObjectTypeDefinitionNode|ObjectTypeExtensionNode $definitionNode): bool
    {
        return in_array($definitionNode->name->value, $this->rootTypes);
    }

    /**
     * @param string[] $parentTypes
     * @throws Exception
     */
    private function generateResolverInterfaceForObject(
        Module $module,
        ObjectTypeDefinitionNode|ObjectTypeExtensionNode $definitionNode,
        array $parentTypes
    ): InterfaceType {
        $interface = new InterfaceType($this->namingStrategy->nameForObjectResolverInterface($definitionNode));

        foreach ($definitionNode->fields as $field) {
            try {
                $this->generateFieldArgsInterface($module, $definitionNode, $field);

                $method = $interface->addMethod($field->name->value);
                $method->setPublic();
                $method->addParameter('parent')->setType($this->generateUnion($parentTypes));
                $method->addParameter('args')->setType($this->getArgsType($definitionNode, $field, $module));
                $method->addParameter('context')->setType($this->resolverParameterTypes->contextType);
                $method->addParameter('info')->setType($this->resolverParameterTypes->info);
                [$types, $genericsTypes] = $this->getTypesFromGraphQLType($field->type, $module);
                if ($types[0] !== self::MIXED) {
                    $types[] = Promise::class;
                }
                $method->setReturnType($this->generateUnion($types));

                $genericsTypes = $this->generateUnion($genericsTypes);
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
            } catch (Exception $exception) {
                throw new Exception(
                    sprintf(
                        'Error during generating %s.%s in %s',
                        $definitionNode->name->value,
                        $field->name->value,
                        $module->getName()
                    ), 0, $exception
                );
            }
        }

        $this->typeDecorator?->handleObjectResolverInterface($this->documents, $module, $definitionNode, $interface);
        $this->typeRegistry->add($definitionNode, $interface, $module);

        return $interface;
    }

    private function generateFieldArgsInterface(
        Module $module,
        ObjectTypeDefinitionNode|ObjectTypeExtensionNode $objectType,
        FieldDefinitionNode $field
    ): void {
        $key = $objectType->name->value . '_' . $field->name->value;

        if (!isset($this->baseTypes['ObjectFieldArgs'][$key])) {
            $baseObjectFieldArgs = new ClassType(
                $this->namingStrategy->nameForObjectFieldArgumentsObject($objectType, $field)
            );
            $baseObjectFieldArgs->setFinal();
            $this->baseTypes['ObjectFieldArgs'][$key] = $baseObjectFieldArgs;
        } else {
            $baseObjectFieldArgs = $this->baseTypes['ObjectFieldArgs'][$key];
            assert($baseObjectFieldArgs instanceof ClassType);
        }

        $className = $this->namingStrategy->nameForObjectFieldArgumentsObjectInterface($objectType, $field);
        $interface = new InterfaceType($className);
        $baseObjectFieldArgs->addImplement($module->getNamespace() . '\\' . $className);

        if (count($field->arguments) > 0) {
            foreach ($field->arguments as $argument) {
                try {
                    $construct = $baseObjectFieldArgs->getMethod('__construct');
                } catch (InvalidArgumentException) {
                    $construct = $baseObjectFieldArgs->addMethod('__construct');
                }

                $method = $interface->addMethod(sprintf('get%s', ucfirst($argument->name->value)));
                $method->setPublic();

                [$phpTypes, $genericsTypes] = $this->getTypesFromGraphQLType($argument->type);
                $phpTypes = $this->generateUnion($phpTypes);
                $genericsTypes = $this->generateUnion($genericsTypes);

                $method->setReturnType($phpTypes);
                $method->addComment(sprintf('@return %s', $genericsTypes));

                ###
                $parameter = $construct->addPromotedParameter($argument->name->value)
                    ->setPrivate()
                    ->setReadOnly()
                    ->setType($phpTypes)
                    ->addComment(sprintf('@var %s', $genericsTypes));
                if (!$argument->type instanceof NonNullTypeNode) {
                    $parameter->setDefaultValue(null);
                }

                $baseObjectFieldArgs->addMethod(sprintf('get%s', ucfirst($argument->name->value)))
                    ->setPublic()
                    ->setReturnType($phpTypes)
                    ->setBody(sprintf('return $this->%s;', $argument->name->value));
            }
        }

        $this->typeDecorator?->handleObjectFieldArgsInterface(
            $this->documents,
            $module,
            $objectType,
            $field,
            $interface
        );
        $this->typeDecorator?->handleObjectFieldArgs(
            $this->documents,
            $module,
            $objectType,
            $field,
            $baseObjectFieldArgs
        );
        $this->typeRegistry->add($field, $interface, $module);
    }

    private function getArgsType(
        ObjectTypeDefinitionNode|ObjectTypeExtensionNode $objectType,
        FieldDefinitionNode $field,
        ?Module $module = null
    ): string {
        $mapping = $module ? $this->argumentsMappingModule[$module->getName()] : $this->argumentsMapping;

        return $mapping[$objectType->name->value][$field->name->value];
    }

    private function wrapInPromise(string $type): string
    {
        return sprintf('\%s', Promise::class);
        //https://github.com/webonyx/graphql-php/pull/1170
        //return sprintf('\%s<%s>', Promise::class, $type);
    }

    /**
     * @throws Exception
     */
    private function handleInputValue(
        Module $module,
        ClassType $class,
        Method $method,
        InputValueDefinitionNode|FieldDefinitionNode $definitionNode
    ): void {
        $nullable = !$definitionNode->type instanceof NonNullTypeNode;

        // TODO maybe handle default value?
        // $definitionNode instanceof InputValueDefinitionNode ? $definitionNode->defaultValue : null

        [$types, $generics] = $this->getTypesFromGraphQLType($definitionNode->type, $module);
        $types[] = Promise::class;
        $types = $this->generateUnion($types);
        $param = ($nullable ? $method->addPromotedParameter(
            $definitionNode->name->value,
        ) : $method->addPromotedParameter(
            $definitionNode->name->value
        ))
            ->setPrivate()
            ->setReadOnly()
            ->setType($types);
        //            ->setNullable($nullable);

        $generics = $this->generateUnion($generics);
        $param->addComment(sprintf('@var %s', $this->generateUnion([$generics, $this->wrapInPromise($generics)])));

        $class->addMethod(sprintf('get%s', ucfirst($definitionNode->name->value)))
            ->setPublic()
            ->setReturnType($types)
            ->setBody(sprintf('return $this->%s;', $definitionNode->name->value));
    }

    private function generateResolverImplementation(
        Module $module,
        ObjectTypeDefinitionNode|ObjectTypeExtensionNode $definitionNode,
        InterfaceType $interface
    ): void {
        $class = new ClassType($this->namingStrategy->nameForObjectResolverImplementation($definitionNode));
        $class->setFinal();

        $name = $interface->getName();
        assert($name !== null);
        $class->addImplement($module->getNamespace() . '\\' . $name);

        $class->setMethods(
            array_map(static function (Method $method) {
                $implementation = clone($method);
                $implementation->setAbstract(false);
                $implementation->setBody(sprintf('return $parent->get%s();', ucfirst($method->getName())));

                return $implementation;
            }, $interface->getMethods())
        );

        $this->typeDecorator?->handleObjectResolverImplementation($this->documents, $module, $definitionNode, $class);

        $this->typeRegistry->add($definitionNode, $class, $module);
    }

    private function handleUnionType(
        Module $module,
        UnionTypeDefinitionNode|UnionTypeExtensionNode $definitionNode
    ): void {
        $interface = new InterfaceType($this->namingStrategy->nameForUnionResolverInterface($definitionNode));
        $resolveType = $interface->addMethod('resolveType');
        $resolveType->setPublic();
        $resolveType->setReturnType('string');

        $returnTypes = [];
        $types = [];
        $mapped = 0;
        $typesInArray = [];
        foreach ($definitionNode->types as $type) {
            $mapped += isset($this->moduleTypeMapping[$type->name->value]) ? 1 : 0;

            [$newTypes] = $this->getTypesFromGraphQLType(new NonNullTypeNode(['type' => $type]), $module);
            $types = [...$types, ...$newTypes];

            $returnTypes[] = $type->name->value;

            $typesInArray[] = $type;
        }
        $returnTypes = array_unique($returnTypes);
        $types = array_unique($types);
        $resolveType->addParameter('value')->setType($this->generateUnion($types));
        $resolveType->addParameter('context')->setType($this->resolverParameterTypes->contextType);
        $resolveType->addParameter('info')->setType($this->resolverParameterTypes->info);
        $resolveType->addComment(
            sprintf(
                '@return %s',
                implode(' | ', array_map(static fn(string $type): string => sprintf("'%s'", $type), $returnTypes))
            )
        );

        $this->typeDecorator?->handleUnionResolverInterface($this->documents, $module, $definitionNode, $interface);
        $this->typeRegistry->add($definitionNode, $interface, $module);

        if ($mapped === 0) {
            $resolver = new ClassType($this->namingStrategy->nameForUnionResolver($definitionNode));
            $resolver->addImplement($module->getNamespace() . '\\' . $interface->getName());
            $resolver->setFinal();
            $resolveType = $resolver
                ->addMethod('resolveType')
                ->setPublic()
                ->setReturnType('string');

            $resolveType->addParameter('value')->setType($this->generateUnion($types));
            $resolveType->addParameter('context')->setType($this->resolverParameterTypes->contextType);
            $resolveType->addParameter('info')->setType($this->resolverParameterTypes->info);

            $generateBodyForType = function (NamedTypeNode $typeNode) use ($module, $typesInArray): string {
                $unionType = $typeNode->name->value;

                [$phpTypes] = $this->getTypesFromGraphQLType(new NonNullTypeNode(['type' => $typeNode]), $module);
                if (count($phpTypes) > 1) {
                    throw new LogicException('Cannot generate resolver for ' . $unionType);
                }
                $phpType = $phpTypes[0];

                if ($typeNode === $typesInArray[array_key_last($typesInArray)]) {
                    return <<<EOT
return '{$unionType}';
EOT;
                }

                return <<<EOT
if (\$value instanceof \\{$phpType}) {
    return '{$unionType}';
}
EOT;
            };

            if (count($typesInArray) === 1) {
                $resolveType->setBody(sprintf('return \'%s\';', $typesInArray[0]->name->value));
            } else {
                $resolveType->setBody(implode(PHP_EOL, array_map($generateBodyForType, $typesInArray)));
            }

            $this->typeRegistry->add($definitionNode, $resolver, $module);
        }
    }

    /**
     * @throws Exception
     */
    private function handleInterfaceType(
        Module $module,
        InterfaceTypeDefinitionNode|InterfaceTypeExtensionNode $definitionNode
    ): void {
        $interface = new InterfaceType(
            $this->namingStrategy->nameForInterfaceResolverInterface($definitionNode)
        );
        $resolveType = $interface->addMethod('resolveType');
        $resolveType->setPublic();
        $resolveType->setReturnType('string');

        $type = $module->getTypeMapping()[$definitionNode->name->value] ?? null;
        if ($type) {
            $types = [$type];
        } else {
            $types = [];

            foreach ($this->documents as $document) {
                foreach ($document->definitions as $definition) {
                    if (!$definition instanceof ObjectTypeDefinitionNode && !$definition instanceof ObjectTypeExtensionNode) {
                        continue;
                    }

                    foreach ($definition->interfaces as $definitionInterface) {
                        if ($definitionInterface->name->value === $definitionNode->name->value) {
                            [$newTypes] = $this->getTypesFromGraphQLType(
                                new NonNullTypeNode([
                                    'type' => new NamedTypeNode([
                                        'name' => $definition->name,
                                    ]),
                                ]),
                                $module,
                            );
                            $types = [
                                ...$types,
                                ...$newTypes,
                            ];
                        }
                    }
                }
            }
        }

        $returnTypes = [];
        foreach ($this->documents as $document) {
            foreach ($document->definitions as $definition) {
                if (!$definition instanceof ObjectTypeDefinitionNode && !$definition instanceof ObjectTypeExtensionNode) {
                    continue;
                }

                foreach ($definition->interfaces as $definitionInterface) {
                    if ($definitionInterface->name->value === $definitionNode->name->value) {
                        $returnTypes[] = $definition->name->value;
                    }
                }
            }
        }

        $resolveType->addParameter('value')->setType($this->generateUnion($types));
        $resolveType->addParameter('context')->setType($this->resolverParameterTypes->contextType);
        $resolveType->addParameter('info')->setType($this->resolverParameterTypes->info);
        $interface->addComment(
            sprintf(
                '@phpstan-type %s %s',
                $definitionNode->name->value,
                implode(' | ', array_map(static fn(string $type): string => sprintf("'%s'", $type), $returnTypes))
            )
        );
        $resolveType->addComment(
            sprintf(
                '@return %s',
                $definitionNode->name->value
            )
        );

        $this->typeDecorator?->handleInterfaceResolverInterface($this->documents, $module, $definitionNode, $interface);
        $this->typeRegistry->add($definitionNode, $interface, $module);
    }

    private function getModuleByName(string $name): Module
    {
        return $this->modules[$name];
    }

    private function write(string $namespace, ClassLike $type, string $directory): void
    {
        $file = new PhpFile();
        $file->setStrictTypes();
        $file->addNamespace((new PhpNamespace($namespace))->add($type));
        $file->addComment('Auto-Generated');

        $classes = $file->getClasses();
        assert(count($classes) !== 0);

        $class = reset($classes)->getName();

        assert($class !== null);

        $filename = sprintf('%s/%s.php', $directory, $class);
        file_put_contents($filename, $this->printer->printFile($file));
        $className = $type->getName();
        assert($className !== null);
        $this->logger->info(sprintf('Writing %s', $className));
    }
}
