<?php

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\TypeDecorator;

use Arxy\GraphQLCodegen\ModuleInterface;
use Arxy\GraphQLCodegen\TypeDecoratorInterface;
use GraphQL\Language\AST\EnumTypeDefinitionNode;
use GraphQL\Language\AST\EnumTypeExtensionNode;
use GraphQL\Language\AST\FieldDefinitionNode;
use GraphQL\Language\AST\InputObjectTypeDefinitionNode;
use GraphQL\Language\AST\InputObjectTypeExtensionNode;
use GraphQL\Language\AST\InterfaceTypeDefinitionNode;
use GraphQL\Language\AST\InterfaceTypeExtensionNode;
use GraphQL\Language\AST\ObjectTypeDefinitionNode;
use GraphQL\Language\AST\ObjectTypeExtensionNode;
use GraphQL\Language\AST\ScalarTypeDefinitionNode;
use GraphQL\Language\AST\ScalarTypeExtensionNode;
use GraphQL\Language\AST\UnionTypeDefinitionNode;
use GraphQL\Language\AST\UnionTypeExtensionNode;
use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\EnumType;
use Nette\PhpGenerator\InterfaceType;

final class ChainDecorator implements TypeDecoratorInterface
{
    public function __construct(
        /**
         * @var list<TypeDecoratorInterface>
         */
        private readonly array $decorators
    ) {
    }

    public function handleObject(
        ModuleInterface $module,
        ObjectTypeDefinitionNode|ObjectTypeExtensionNode $definitionNode,
        ClassType $classLike
    ): void {
        foreach ($this->decorators as $decorator) {
            $decorator->handleObject($module, $definitionNode, $classLike);
        }
    }

    public function handleObjectFieldArgs(
        ModuleInterface $module,
        ObjectTypeDefinitionNode|ObjectTypeExtensionNode $definitionNode,
        FieldDefinitionNode $fieldNode,
        ClassType $classLike
    ): void {
        foreach ($this->decorators as $decorator) {
            $decorator->handleObjectFieldArgs($module, $definitionNode, $fieldNode, $classLike);
        }
    }

    public function handleObjectResolverInterface(
        ModuleInterface $module,
        ObjectTypeDefinitionNode|ObjectTypeExtensionNode $definitionNode,
        InterfaceType $classLike
    ): void {
        foreach ($this->decorators as $decorator) {
            $decorator->handleObjectResolverInterface($module, $definitionNode, $classLike);
        }
    }

    public function handleObjectResolverImplementation(
        ModuleInterface $module,
        ObjectTypeDefinitionNode|ObjectTypeExtensionNode $definitionNode,
        ClassType $classLike
    ): void {
        foreach ($this->decorators as $decorator) {
            $decorator->handleObjectResolverImplementation($module, $definitionNode, $classLike);
        }
    }

    public function handleInputObjectType(
        ModuleInterface $module,
        InputObjectTypeExtensionNode|InputObjectTypeDefinitionNode $definitionNode,
        ClassType $classLike
    ): void {
        foreach ($this->decorators as $decorator) {
            $decorator->handleInputObjectType($module, $definitionNode, $classLike);
        }
    }

    public function handleEnumType(
        ModuleInterface $module,
        EnumTypeDefinitionNode|EnumTypeExtensionNode $definitionNode,
        EnumType $classLike
    ): void {
        foreach ($this->decorators as $decorator) {
            $decorator->handleEnumType($module, $definitionNode, $classLike);
        }
    }

    public function handleScalarResolverInterface(
        ModuleInterface $module,
        ScalarTypeExtensionNode|ScalarTypeDefinitionNode $definitionNode,
        InterfaceType $classLike
    ): void {
        foreach ($this->decorators as $decorator) {
            $decorator->handleScalarResolverInterface($module, $definitionNode, $classLike);
        }
    }

    public function handleInterfaceResolverInterface(
        ModuleInterface $module,
        InterfaceTypeDefinitionNode|InterfaceTypeExtensionNode $definitionNode,
        InterfaceType $classLike
    ): void {
        foreach ($this->decorators as $decorator) {
            $decorator->handleInterfaceResolverInterface($module, $definitionNode, $classLike);
        }
    }

    public function handleUnionResolverInterface(
        ModuleInterface $module,
        UnionTypeDefinitionNode|UnionTypeExtensionNode $definitionNode,
        InterfaceType $classLike
    ): void {
        foreach ($this->decorators as $decorator) {
            $decorator->handleUnionResolverInterface($module, $definitionNode, $classLike);
        }
    }
}

