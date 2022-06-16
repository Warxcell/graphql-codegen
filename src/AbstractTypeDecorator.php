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
        array $documents,
        Module $module,
        ObjectTypeDefinitionNode|ObjectTypeExtensionNode $definitionNode,
        ClassType $classLike
    ): void {
    }

    public function handleObjectFieldArgs(
        array $documents,
        Module $module,
        ObjectTypeDefinitionNode|ObjectTypeExtensionNode $definitionNode,
        FieldDefinitionNode $fieldNode,
        ClassType $classLike
    ): void {
    }

    public function handleObjectResolverInterface(
        array $documents,
        Module $module,
        ObjectTypeDefinitionNode|ObjectTypeExtensionNode $definitionNode,
        InterfaceType $classLike
    ): void {
    }

    public function handleObjectResolverImplementation(
        array $documents,
        Module $module,
        ObjectTypeDefinitionNode|ObjectTypeExtensionNode $definitionNode,
        ClassType $classLike
    ): void {
    }

    public function handleInputObject(
        array $documents,
        Module $module,
        InputObjectTypeDefinitionNode|InputObjectTypeExtensionNode $definitionNode,
        ClassType $classLike
    ): void {
    }

    public function handleEnum(
        array $documents,
        Module $module,
        EnumTypeDefinitionNode|EnumTypeExtensionNode $definitionNode,
        EnumType $classLike
    ): void {
    }

    public function handleScalarResolverInterface(
        array $documents,
        Module $module,
        ScalarTypeDefinitionNode|ScalarTypeExtensionNode $definitionNode,
        InterfaceType $classLike
    ): void {
    }

    public function handleInterfaceResolverInterface(
        array $documents,
        Module $module,
        InterfaceTypeDefinitionNode|InterfaceTypeExtensionNode $definitionNode,
        InterfaceType $classLike
    ): void {
    }

    public function handleUnionResolverInterface(
        array $documents,
        Module $module,
        UnionTypeDefinitionNode|UnionTypeExtensionNode $definitionNode,
        InterfaceType $classLike
    ): void {
    }

    public function handleObjectInterface(
        array $documents,
        Module $module,
        ObjectTypeDefinitionNode|ObjectTypeExtensionNode $definitionNode,
        InterfaceType $classLike
    ): void {
    }

    public function handleObjectFieldArgsInterface(
        array $documents,
        Module $module,
        ObjectTypeDefinitionNode|ObjectTypeExtensionNode $definitionNode,
        FieldDefinitionNode $fieldNode,
        InterfaceType $classLike
    ): void {
    }

    public function handleInputObjectInterface(
        array $documents,
        Module $module,
        InputObjectTypeExtensionNode|InputObjectTypeDefinitionNode $definitionNode,
        InterfaceType $classLike
    ): void {
    }
}

