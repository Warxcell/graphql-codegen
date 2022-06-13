<?php

namespace Arxy\GraphQLCodegen;

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

abstract class AbstractTypeDecorator implements TypeDecoratorInterface
{
    public function handleObject(
        ModuleInterface $module,
        ObjectTypeDefinitionNode|ObjectTypeExtensionNode $definitionNode,
        ClassType $classLike
    ): void {

    }

    public function handleObjectFieldArgs(
        ModuleInterface $module,
        ObjectTypeDefinitionNode|ObjectTypeExtensionNode $definitionNode,
        FieldDefinitionNode $fieldNode,
        ClassType $classLike
    ): void {

    }

    public function handleObjectResolverInterface(
        ModuleInterface $module,
        ObjectTypeDefinitionNode|ObjectTypeExtensionNode $definitionNode,
        InterfaceType $classLike
    ): void {

    }

    public function handleObjectResolverImplementation(
        ModuleInterface $module,
        ObjectTypeDefinitionNode|ObjectTypeExtensionNode $definitionNode,
        ClassType $classLike
    ): void {

    }

    public function handleInputObjectType(
        ModuleInterface $module,
        InputObjectTypeDefinitionNode|InputObjectTypeExtensionNode $definitionNode,
        ClassType $classLike
    ): void {

    }

    public function handleEnumType(
        ModuleInterface $module,
        EnumTypeDefinitionNode|EnumTypeExtensionNode $definitionNode,
        EnumType $classLike
    ): void {

    }

    public function handleScalarResolverInterface(
        ModuleInterface $module,
        ScalarTypeDefinitionNode|ScalarTypeExtensionNode $definitionNode,
        InterfaceType $classLike
    ): void {

    }

    public function handleInterfaceResolverInterface(
        ModuleInterface $module,
        InterfaceTypeDefinitionNode|InterfaceTypeExtensionNode $definitionNode,
        InterfaceType $classLike
    ): void {

    }

    public function handleUnionResolverInterface(
        ModuleInterface $module,
        UnionTypeDefinitionNode|UnionTypeExtensionNode $definitionNode,
        InterfaceType $classLike
    ): void {

    }
}

