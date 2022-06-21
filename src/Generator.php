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
use GraphQL\Language\AST\Node;
use GraphQL\Language\AST\NodeKind;
use GraphQL\Language\AST\NodeList;
use GraphQL\Language\AST\NonNullTypeNode;
use GraphQL\Language\AST\ObjectTypeDefinitionNode;
use GraphQL\Language\AST\ObjectTypeExtensionNode;
use GraphQL\Language\AST\ScalarTypeDefinitionNode;
use GraphQL\Language\AST\ScalarTypeExtensionNode;
use GraphQL\Language\AST\SchemaDefinitionNode;
use GraphQL\Language\AST\SchemaTypeExtensionNode;
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
use ReflectionEnum;
use ReflectionException;
use ReflectionFunction;
use ReflectionUnionType;

use function array_map;
use function array_merge;
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
use function reset;
use function sprintf;
use function ucfirst;
use function unlink;
use function var_export;

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
     * @var list<string>
     */
    private array $rootTypes = ['Query', 'Mutation', 'Subscription'];

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
     * @var array<string, ClassType>
     */
    private array $baseTypes = [];

    private array $argumentsMapping = [];
    private array $argumentsMappingModule = [];
    private array $enumsMapping = [];
    private array $inputObjectsMapping = [];
    private array $inputObjectsInterfaceMapping = [];

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

    private function isRootType(ObjectTypeDefinitionNode|ObjectTypeExtensionNode $definitionNode): bool
    {
        return in_array($definitionNode->name->value, $this->rootTypes);
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
     * @throws SyntaxError
     */
    public function execute(): void
    {
        foreach ($this->modules as $module) {
            $document = Parser::parse(file_get_contents($module->getSchema()));
            $this->documents[$module->getName()] = $document;

            $currentNode = null;

            $schemaVisitor = function (SchemaDefinitionNode|SchemaTypeExtensionNode $definitionNode) {
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

                        $this->baseTypeMappingRegistry[$definitionNode->name->value] = [$this->baseModule->getNamespace() . '\\' . $className];
                        $this->moduleTypeMappingRegistry[$module->getName()][$definitionNode->name->value] = [$module->getNamespace() . '\\' . $className];
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
                        $this->moduleTypeMappingRegistry[$module->getName()][$definitionNode->name->value] = [$module->getNamespace() . '\\' . $className];
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
                        $this->argumentsMappingModule[$module->getName()][$currentNode->name->value][$definitionNode->name->value] = $name;

                        $className = $this->baseModule->getNamespace() . '\\' . $this->namingStrategy->nameForObjectFieldArgumentsObject(
                                $currentNode,
                                $definitionNode
                            );
                        $this->argumentsMapping[$currentNode->name->value][$definitionNode->name->value] = $className;
                    },
                    NodeKind::INPUT_OBJECT_TYPE_DEFINITION => function (InputObjectTypeDefinitionNode $definitionNode
                    ) use (
                        $module
                    ) {
                        $interfaceName = $this->namingStrategy->nameForInputObjectInterface($definitionNode);
                        $this->inputObjectsInterfaceMapping[$module->getName()][$definitionNode->name->value] = $module->getNamespace() . '\\' . $interfaceName;

                        $className = $this->namingStrategy->nameForInputObject($definitionNode);
                        $this->baseTypeMappingRegistry[$definitionNode->name->value] = [$this->baseModule->getNamespace() . '\\' . $className];

                        $this->moduleTypeMappingRegistry[$module->getName()][$definitionNode->name->value] = [$module->getNamespace() . '\\' . $className];

                        $this->inputObjectsMapping[$definitionNode->name->value] = $this->baseModule->getNamespace() . '\\' . $className;
                    },
                    NodeKind::INPUT_OBJECT_TYPE_EXTENSION => function (InputObjectTypeExtensionNode $definitionNode) use (
                        $module
                    ) {
                        $className = $this->namingStrategy->nameForInputObjectInterface($definitionNode);
                        $this->moduleTypeMappingRegistry[$module->getName()][$definitionNode->name->value] = [$module->getNamespace() . '\\' . $className];
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
                    NodeKind::SCALAR_TYPE_EXTENSION => function (ScalarTypeDefinitionNode $definitionNode) use (
                        $module
                    ) {
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
                    NodeKind::ENUM_TYPE_EXTENSION => function (EnumTypeDefinitionNode $definitionNode) use (
                        $module
                    ) {
                        throw new LogicException('Not supported');
                    },
                ],
                'leave' => function ($node) use (&$currentNode) {
                    unset($currentNode);
                },
            ]);

            Visitor::visit($document, [
                NodeKind::UNION_TYPE_DEFINITION => function (UnionTypeDefinitionNode $definitionNode) {
                    foreach ($definitionNode->types as $type) {
                        $this->baseTypeMappingRegistry[$definitionNode->name->value] = [
                            ...($this->baseTypeMappingRegistry[$definitionNode->name->value] ?? []),
                            ...$this->baseTypeMappingRegistry[$type->name->value],
                        ];

                        foreach ($this->modules as $module) {
                            if (isset($this->moduleTypeMappingRegistry[$module->getName()][$type->name->value])) {
                                $this->moduleTypeMappingRegistry[$module->getName()][$definitionNode->name->value] = [
                                    ...($this->moduleTypeMappingRegistry[$module->getName()][$definitionNode->name->value] ?? []),
                                    ...$this->moduleTypeMappingRegistry[$module->getName()][$type->name->value],
                                ];
                            }
                        }
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
                function (ScalarTypeExtensionNode $definitionNode) use ($module) {
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
                function (EnumTypeExtensionNode $definitionNode) use ($module) {
                    throw new LogicException('Not supported');
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
                function (UnionTypeExtensionNode $definitionNode) use ($module) {
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

        $initDir = function (string $directory) {
            if (!is_dir($directory)) {
                mkdir($directory);
            } else {
                $files = glob(sprintf('%s/*', $directory));
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

    private function getModuleByName(string $name): Module
    {
        return $this->modules[$name];
    }

    /**
     * @template T of DefinitionNode
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

    private function getBaseInputObjectType(InputObjectTypeDefinitionNode|InputObjectTypeExtensionNode $definitionNode
    ): ClassType {
        $name = $definitionNode->name->value;
        if (!isset($this->baseTypes['InputObject'][$name])) {
            if (!$definitionNode instanceof InputObjectTypeDefinitionNode) {
                $definitionNode = $this->findDefinitionBy(
                    static fn (DefinitionNode $definitionNode
                    ): bool => $definitionNode instanceof InputObjectTypeDefinitionNode && $definitionNode->name->value === $name
                );
            }
            $inputObject = new ClassType($this->namingStrategy->nameForInputObject($definitionNode));
            $inputObject->setFinal();

            $this->baseTypes['InputObject'][$name] = $inputObject;
        }

        return $this->baseTypes['InputObject'][$name];
    }

    private function handleInputObjectType(
        Module $module,
        InputObjectTypeDefinitionNode|InputObjectTypeExtensionNode $definitionNode
    ): void {
        $inputObject = $this->getBaseInputObjectType($definitionNode);

        $interface = new InterfaceType($this->namingStrategy->nameForInputObjectInterface($definitionNode));

        if ($definitionNode instanceof InputObjectTypeExtensionNode) {
            foreach ($this->documents as $moduleName => $document) {
                foreach ($document->definitions as $definition) {
                    if ($definition instanceof InputObjectTypeDefinitionNode && $definition->name->value === $definitionNode->name->value) {
                        $originInterface = $this->inputObjectsInterfaceMapping[$moduleName][$definition->name->value];
                        $interface->addExtend($originInterface);
                    }
                }
            }
        }
        $inputObject->addImplement($module->getNamespace() . '\\' . $interface->getName());

        if (count($definitionNode->fields) > 0) {
            foreach ($this->reorderParameters($definitionNode->fields) as $field) {
                try {
                    $construct = $inputObject->getMethod('__construct');
                } catch (InvalidArgumentException $exception) {
                    $construct = $inputObject->addMethod('__construct');
                }

                $types = $this->getPhpTypesFromGraphQLType($field->type);
                $types = $this->generateUnion($types);

                $genericsTypes = $this->generateUnion($this->getGenericsTypes($field->type));

                $method = $interface->addMethod(sprintf('get%s', ucfirst($field->name->value)));
                $method->setPublic();
                $method->setReturnType($types);
                $method->addComment(sprintf('@return %s', $genericsTypes));

                $parameter = $construct->addPromotedParameter($field->name->value)
                    ->setPrivate()
                    ->setReadOnly()
                    ->setType($types)
                    ->addComment(sprintf('@var %s %s', $genericsTypes, $field->name->value));
                if (!$field->type instanceof NonNullTypeNode) {
                    $parameter->setDefaultValue(null);
                }

                $inputObject->addMethod(sprintf('get%s', ucfirst($field->name->value)))
                    ->setPublic()
                    ->setReturnType($types)
                    ->setBody(sprintf('return $this->%s;', $field->name->value))
                    ->addComment(sprintf('@return %s', $genericsTypes));
            }
        }

        if ($this->typeDecorator) {
            $this->typeDecorator->handleInputObjectInterface($this->documents, $module, $definitionNode, $interface);
            $this->typeDecorator->handleInputObject($this->documents, $module, $definitionNode, $inputObject);
        }

        $this->typeRegistry->addInputObjectInterface($definitionNode, $interface, $module);
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
            foreach ($this->reorderParameters($definitionNode->fields) as $field) {
                $interface->addMethod(sprintf('get%s', ucfirst($field->name->value)))
                    ->setPublic()
                    ->setReturnType($this->generateUnion($this->getPhpTypesFromGraphQLType($field->type, $module)));
            }
        }

        if ($this->typeDecorator) {
            $this->typeDecorator->handleObjectInterface($this->documents, $module, $definitionNode, $interface);
        }

        $this->typeRegistry->addObjectInterface($definitionNode, $interface, $module);

        $class = new ClassType($this->namingStrategy->nameForObject($definitionNode));
        $class->setFinal();
        $class->addImplement($module->getNamespace() . '\\' . $interface->getName());
        if (count($definitionNode->fields) > 0) {
            $method = $class->addMethod('__construct');
            foreach ($this->reorderParameters($definitionNode->fields) as $field) {
                $this->handleInputValue($module, $class, $method, $field);
            }
        }

        if ($this->typeDecorator) {
            $this->typeDecorator->handleObject($this->documents, $module, $definitionNode, $class);
        }

        $this->typeRegistry->addObject($definitionNode, $class, $module);

        $interface = $this->generateResolverInterfaceForObject($module, $definitionNode, [
            $module->getNamespace() . '\\' . $interfaceName,
        ]);
        $this->generateResolverImplementation($module, $definitionNode, $interface);
    }

    private function handleInputValue(
        Module $module,
        ClassType $class,
        Method $method,
        InputValueDefinitionNode|FieldDefinitionNode $definitionNode
    ): void {
        $nullable = !$definitionNode->type instanceof NonNullTypeNode;

        // TODO maybe handle default value?
        // $definitionNode instanceof InputValueDefinitionNode ? $definitionNode->defaultValue : null

        $types = $this->generateUnion($this->getPhpTypesFromGraphQLType($definitionNode->type, $module));
        ($nullable ? $method->addPromotedParameter(
            $definitionNode->name->value,
        ) : $method->addPromotedParameter(
            $definitionNode->name->value
        ))
            ->setPrivate()
            ->setReadOnly()
            ->setType($types);
        //            ->setNullable($nullable);

        $method->addComment(sprintf('@return %s', $this->generateUnion($this->getPhpTypesFromGraphQLType($definitionNode->type, $module))));

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

        if ($this->typeDecorator) {
            $this->typeDecorator->handleObjectResolverImplementation($this->documents, $module, $definitionNode, $class);
        }

        $this->typeRegistry->addObjectResolverImplementation($definitionNode, $class, $module);
    }

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
                $types = $this->getPhpTypesFromGraphQLType($field->type, $module);
                if ($types[0] !== self::MIXED) {
                    $types[] = Promise::class;
                }
                $method->setReturnType($this->generateUnion($types));

                $genericsTypes = $this->generateUnion($this->getGenericsTypes($field->type));
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

        if ($this->typeDecorator) {
            $this->typeDecorator->handleObjectResolverInterface($this->documents, $module, $definitionNode, $interface);
        }
        $this->typeRegistry->addObjectResolverInterface($definitionNode, $interface, $module);

        return $interface;
    }

    private function getArgsType(
        ObjectTypeDefinitionNode|ObjectTypeExtensionNode $objectType,
        FieldDefinitionNode $field,
        ?Module $module = null
    ): string {
        $mapping = $module ? $this->argumentsMappingModule[$module->getName()] : $this->argumentsMapping;

        return $mapping[$objectType->name->value][$field->name->value];
    }

    /**
     * @throws Exception
     */
    private function getPhpTypesFromGraphQLType(
        TypeNode $typeNode,
        ?Module $module = null,
        ?TypeNode $parentType = null
    ): array {
        $types = match ($typeNode::class) {
            ListTypeNode::class => ['iterable'],
            NonNullTypeNode::class => $this->getPhpTypesFromGraphQLType($typeNode->type, $module, $typeNode),
            NamedTypeNode::class => $this->getPhpTypesFromNamedNode($typeNode, $module),
        };

        if (!$parentType && !$typeNode instanceof NonNullTypeNode) {
            $types[] = 'null';
        }

        foreach ($types as $type) {
            if ($type === self::MIXED) {
                return [self::MIXED];
            }
        }

        return $types;
    }

    private function isNativeType(string $type): bool
    {
        return in_array($type, self::PHP_NATIVE_TYPES);
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

    private function getGenericsTypes(TypeNode $typeNode, ?Module $module = null, ?TypeNode $parentType = null): array
    {
        $types = match ($typeNode::class) {
            ListTypeNode::class => [
                sprintf(
                    'list<%s>',
                    $this->generateUnion($this->getGenericsTypes($typeNode->type, $module, $typeNode))
                ),
            ],
            NonNullTypeNode::class => $this->getGenericsTypes($typeNode->type, $module, $typeNode),
            NamedTypeNode::class => $this->fixTypeForGenerics($this->getPhpTypesFromNamedNode($typeNode, $module))
        };
        if (!$parentType && !$typeNode instanceof NonNullTypeNode) {
            $types[] = 'null';
        }

        return $types;
    }

    private function getPhpTypesFromNamedNode(NamedTypeNode $type, ?Module $module = null): array
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
                    return $this->baseTypeMappingRegistry[$type->name->value] ?? throw new LogicException(
                            sprintf('Global type %s not found', $type->name->value)
                        );
                }

                foreach ($this->moduleTypeMappingRegistry as $moduleName => $typeMapping) {
                    if (isset($typeMapping[$type->name->value])) {
                        return $typeMapping[$type->name->value];
                    }
                }
                throw new LogicException(sprintf('Type %s not found', $type->name->value));
            //                return $this->moduleTypeMappingRegistry[$module->getName()][$type->name->value] ?? throw new LogicException(
            //                        sprintf('Type %s not found', $type->name->value)
            //                    );
        }
    }

    private function wrapInPromise(string $type): string
    {
        return sprintf('\%s<%s>', Promise::class, $type);
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
            foreach ($this->reorderParameters($field->arguments) as $argument) {
                try {
                    $construct = $baseObjectFieldArgs->getMethod('__construct');
                } catch (InvalidArgumentException $exception) {
                    $construct = $baseObjectFieldArgs->addMethod('__construct');
                }

                $method = $interface->addMethod(sprintf('get%s', ucfirst($argument->name->value)));
                $method->setPublic();

                $phpTypes = $this->generateUnion($this->getPhpTypesFromGraphQLType($argument->type));
                $method->setReturnType($phpTypes);

                $genericsTypes = $this->generateUnion($this->getGenericsTypes($argument->type));
                $method->addComment(sprintf('@return %s', $genericsTypes));

                ###
                $parameter = $construct->addPromotedParameter($argument->name->value)
                    ->setPrivate()
                    ->setReadOnly()
                    ->setType($phpTypes)
                    ->addComment(sprintf('@var %s $%s', $genericsTypes, $argument->name->value));
                if (!$argument->type instanceof NonNullTypeNode) {
                    $parameter->setDefaultValue(null);
                }

                $baseObjectFieldArgs->addMethod(sprintf('get%s', ucfirst($argument->name->value)))
                    ->setPublic()
                    ->setReturnType($phpTypes)
                    ->setBody(sprintf('return $this->%s;', $argument->name->value));
            }
        }

        if ($this->typeDecorator) {
            $this->typeDecorator->handleObjectFieldArgsInterface($this->documents, $module, $objectType, $field, $interface);
            $this->typeDecorator->handleObjectFieldArgs($this->documents, $module, $objectType, $field, $baseObjectFieldArgs);
        }

        $this->typeRegistry->addObjectFieldArgsInterface($field, $interface, $module);
    }

    /**
     * @param string[] $types
     */
    private function generateUnion(array $types): string
    {
        return implode('|', $types);
    }

    private function handleUnionType(
        Module $module,
        UnionTypeDefinitionNode|UnionTypeExtensionNode $definitionNode
    ): void {
        $interface = new InterfaceType($this->namingStrategy->nameForUnionResolverInterface($definitionNode));
        $resolveType = $interface->addMethod('resolveType');
        $resolveType->setPublic();
        $resolveType->setReturnType('string');

        $types = [];
        foreach ($definitionNode->types as $type) {
            $types = [...$types, ...$this->getPhpTypesFromGraphQLType(new NonNullTypeNode(['type' => $type]), $module)];
        }
        $resolveType->addParameter('value')->setType($this->generateUnion($types));
        $resolveType->addParameter('context')->setType($this->resolverParameterTypes->contextType);
        $resolveType->addParameter('info')->setType($this->resolverParameterTypes->info);

        if ($this->typeDecorator) {
            $this->typeDecorator->handleUnionResolverInterface($this->documents, $module, $definitionNode, $interface);
        }

        $this->typeRegistry->addUnionResolverInterface($definitionNode, $interface, $module);
    }

    private function handleScalarType(
        Module $module,
        ScalarTypeDefinitionNode|ScalarTypeExtensionNode $definitionNode
    ): void {
        $types = $this->moduleTypeMappingRegistry[$module->getName()][$definitionNode->name->value] ?? [self::MIXED];
        $unions = $this->generateUnion($types);
        $interface = new InterfaceType($this->namingStrategy->nameForScalarResolverInterface($definitionNode));
        $serialize = $interface->addMethod('serialize')->setReturnType($this->generateUnion(['string', 'null']));
        $serialize->setPublic();
        $serialize->addParameter('value')->setType($unions);

        $parseValue = $interface->addMethod('parseValue')->setReturnType($unions);

        $throws = sprintf('@throws \%s', Exception::class);
        $parseValue->setPublic();
        $parseValue->addParameter('value')->setType('string');
        $parseValue->addComment($throws);

        $parseLiteral = $interface->addMethod('parseLiteral')->setReturnType($unions);
        $parseLiteral->setPublic();
        $parseLiteral->addParameter('valueNode')->setType(Node::class);
        $parseLiteral->addParameter('variables', null)->setType('?array');
        $parseLiteral->addComment($throws);

        if ($this->typeDecorator) {
            $this->typeDecorator->handleScalarResolverInterface($this->documents, $module, $definitionNode, $interface);
        }
        $this->typeRegistry->addScalarResolverInterface($definitionNode, $interface, $module);
    }

    private function handleEnum(
        Module $module,
        EnumTypeDefinitionNode|EnumTypeExtensionNode $definitionNode
    ): void {
        $typeName = $module->getTypeMapping()[$definitionNode->name->value] ?? null;
        if (null !== $typeName) {
            try {
                $reflection = new ReflectionEnum($typeName);
            } catch (ReflectionException $exception) {
                throw CodegenException::notEnum($module, $definitionNode, $typeName, $exception);
            }

            if (!$reflection->isBacked()) {
                throw CodegenException::notBackedEnum($module, $definitionNode, $typeName);
            }

            return;
        }

        $enum = new EnumType($this->namingStrategy->nameForEnum($definitionNode));
        foreach ($definitionNode->values as $value) {
            $enum->addCase($value->name->value, $value->name->value);
        }

        if ($this->typeDecorator) {
            $this->typeDecorator->handleEnum($this->documents, $module, $definitionNode, $enum);
        }

        $this->typeRegistry->addEnum($definitionNode, $enum, $module);
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
                            $types = [
                                ...$types,
                                ...$this->getPhpTypesFromGraphQLType(
                                    new NonNullTypeNode([
                                        'type' => new NamedTypeNode([
                                            'name' => $definition->name,
                                        ]),
                                    ]),
                                    $module,

                                ),
                            ];
                        }
                    }
                }
            }
        }

        $resolveType->addParameter('value')->setType($this->generateUnion($types));
        $resolveType->addParameter('context')->setType($this->resolverParameterTypes->contextType);
        $resolveType->addParameter('info')->setType($this->resolverParameterTypes->info);

        if ($this->typeDecorator) {
            $this->typeDecorator->handleInterfaceResolverInterface($this->documents, $module, $definitionNode, $interface);
        }

        $this->typeRegistry->addInterfaceResolverInterface($definitionNode, $interface, $module);
    }
}
