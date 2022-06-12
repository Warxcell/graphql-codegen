<?php

namespace Arxy\GraphQLCodegen\Generator;

use Arxy\GraphQLCodegen\ModuleInterface;
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
use Nette\PhpGenerator\ClassLike;

interface TypeDecoratorInterface
{
    public function handleObject(
        ModuleInterface $module,
        ObjectTypeDefinitionNode|ObjectTypeExtensionNode $objectNode,
        ClassLike $classLike
    ): void;

    public function handleObjectFieldArgs(
        ModuleInterface $module,
        ObjectTypeDefinitionNode|ObjectTypeExtensionNode $objectNode,
        FieldDefinitionNode $fieldNode,
        ClassLike $classLike
    ): void;

    public function handleObjectResolver(
        ModuleInterface $module,
        ObjectTypeDefinitionNode|ObjectTypeExtensionNode $objectNode,
        ClassLike $classLike
    ): void;

    public function handleInputObjectType(
        ModuleInterface $module,
        InputObjectTypeDefinitionNode|InputObjectTypeExtensionNode $definitionNode,
        ClassLike $classLike
    ): void;

    public function handleEnumType(
        ModuleInterface $module,
        EnumTypeDefinitionNode|EnumTypeExtensionNode $enumNode,
        ClassLike $classLike
    ): void;

    public function handleScalarResolver(
        ModuleInterface $module,
        ScalarTypeDefinitionNode|ScalarTypeExtensionNode $scalarNode,
        ClassLike $classLike
    ): void;

    public function handleInterfaceResolver(
        ModuleInterface $module,
        InterfaceTypeDefinitionNode|InterfaceTypeExtensionNode $interfaceNode,
        ClassLike $classLike
    ): void;

    public function handleUnionResolver(
        ModuleInterface $module,
        UnionTypeDefinitionNode|UnionTypeExtensionNode $unionNode,
        ClassLike $classLike
    ): void;
}

