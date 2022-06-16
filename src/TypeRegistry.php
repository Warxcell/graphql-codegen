<?php

declare(strict_types=1);

namespace Arxy\GraphQLCodegen;

use GraphQL\Language\AST\EnumTypeDefinitionNode;
use GraphQL\Language\AST\EnumTypeExtensionNode;
use GraphQL\Language\AST\FieldDefinitionNode;
use GraphQL\Language\AST\InputObjectTypeDefinitionNode;
use GraphQL\Language\AST\InputObjectTypeExtensionNode;
use GraphQL\Language\AST\InterfaceTypeDefinitionNode;
use GraphQL\Language\AST\InterfaceTypeExtensionNode;
use GraphQL\Language\AST\NamedTypeNode;
use GraphQL\Language\AST\Node;
use GraphQL\Language\AST\ObjectTypeDefinitionNode;
use GraphQL\Language\AST\ObjectTypeExtensionNode;
use GraphQL\Language\AST\ScalarTypeDefinitionNode;
use GraphQL\Language\AST\ScalarTypeExtensionNode;
use GraphQL\Language\AST\UnionTypeDefinitionNode;
use GraphQL\Language\AST\UnionTypeExtensionNode;
use Nette\PhpGenerator\ClassLike;
use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\EnumType;
use Nette\PhpGenerator\InterfaceType;

final class TypeRegistry
{
    /**
     * @var array<string, array<string, ClassLike>>
     */
    private array $generatedClasses = [];

    private array $types = [];

    private array $objects = [];
    private array $objectInterfaces = [];
    private array $objectResolverInterfaces = [];
    private array $objectResolverImplementations = [];
    private array $inputObjectInterfaces = [];
    private array $objectFieldArgsInterfaces = [];
    private array $enums = [];
    private array $scalarResolverInterfaces = [];
    private array $interfaceResolverInterfaces = [];
    private array $unionResolverInterfaces = [];

    public function all(): array
    {
        return $this->generatedClasses;
    }

    private function add(
        Node $definitionNode,
        ClassLike $type,
        Module $module
    ): void {
        //        if (!isset($definitionNode->name) || !$definitionNode->name instanceof NameNode) {
        //            throw new LogicException();
        //        }

        $this->generatedClasses[$module->getName()][] = $type;
    }

    public function addObjectFieldArgsInterface(
        FieldDefinitionNode $definitionNode,
        InterfaceType $interface,
        ?Module $module = null,
    ): void {
        $this->objectFieldArgsInterfaces[$module->getName()][$definitionNode->name->value] = $interface;
        $this->types[$module->getName()][$definitionNode->name->value] = $interface;
        $this->add($definitionNode, $interface, $module);
    }

    public function getObjectFieldArgsInterface(NamedTypeNode $type, Module $module): InterfaceType
    {
        return $this->objectFieldArgsInterfaces[$module->getName()][$type->name->value];
    }

    public function addInputObject(
        InputObjectTypeDefinitionNode|InputObjectTypeExtensionNode $definitionNode,
        InterfaceType $interface,
        ?Module $module = null,
    ): void {
        $this->inputObjectInterfaces[$module->getName()][$definitionNode->name->value] = $interface;
        $this->add($definitionNode, $interface, $module);
    }

    public function addInputObjectInterface(
        InputObjectTypeDefinitionNode|InputObjectTypeExtensionNode $definitionNode,
        InterfaceType $interface,
        ?Module $module = null,
    ): void {
        $this->inputObjectInterfaces[$module->getName()][$definitionNode->name->value] = $interface;
        $this->types[$module->getName()][$definitionNode->name->value] = $interface;
        $this->add($definitionNode, $interface, $module);
    }

    public function addObjectInterface(
        ObjectTypeDefinitionNode|ObjectTypeExtensionNode $definitionNode,
        InterfaceType $interface,
        ?Module $module = null,
    ): void {
        $this->objectInterfaces[$module->getName()][$definitionNode->name->value] = $interface;
        $this->types[$module->getName()][$definitionNode->name->value] = $interface;
        $this->add($definitionNode, $interface, $module);
    }

    public function addObject(
        ObjectTypeDefinitionNode|ObjectTypeExtensionNode $definitionNode,
        ClassType $class,
        ?Module $module = null,
    ): void {
        $this->objects[$module->getName()][$definitionNode->name->value] = $class;
        $this->add($definitionNode, $class, $module);
    }

    public function addObjectResolverInterface(
        ObjectTypeDefinitionNode|ObjectTypeExtensionNode $definitionNode,
        InterfaceType $interface,
        ?Module $module = null,
    ): void {
        $this->objectResolverInterfaces[$module->getName()][$definitionNode->name->value] = $interface;
        $this->add($definitionNode, $interface, $module);
    }

    public function addObjectResolverImplementation(
        ObjectTypeDefinitionNode|ObjectTypeExtensionNode $definitionNode,
        ClassType $class,
        ?Module $module = null,
    ): void {
        $this->objectResolverImplementations[$module->getName()][$definitionNode->name->value] = $class;
        $this->add($definitionNode, $class, $module);
    }

    public function addEnum(
        EnumTypeDefinitionNode|EnumTypeExtensionNode $definitionNode,
        EnumType $enum,
        ?Module $module = null,
    ): void {
        $this->enums[$module->getName()][$definitionNode->name->value] = $enum;
        $this->types[$module->getName()][$definitionNode->name->value] = $enum;
        $this->add($definitionNode, $enum, $module);
    }

    public function addScalarResolverInterface(
        ScalarTypeDefinitionNode|ScalarTypeExtensionNode $definitionNode,
        InterfaceType $interface,
        ?Module $module = null,
    ): void {
        $this->scalarResolverInterfaces[$module->getName()][$definitionNode->name->value] = $interface;
        $this->add($definitionNode, $interface, $module);
    }

    public function addInterfaceResolverInterface(
        InterfaceTypeDefinitionNode|InterfaceTypeExtensionNode $definitionNode,
        InterfaceType $interface,
        ?Module $module = null,
    ): void {
        $this->interfaceResolverInterfaces[$module->getName()][$definitionNode->name->value] = $interface;
        $this->add($definitionNode, $interface, $module);
    }

    public function addUnionResolverInterface(
        UnionTypeDefinitionNode|UnionTypeExtensionNode $definitionNode,
        InterfaceType $interface,
        ?Module $module = null,
    ): void {
        $this->unionResolverInterfaces[$module->getName()][$definitionNode->name->value] = $interface;
        $this->add($definitionNode, $interface, $module);
    }
}

