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

interface NamingStrategy
{
    public function nameForObjectFieldArgumentsObject(
        ObjectTypeDefinitionNode|ObjectTypeExtensionNode $objectType,
        FieldDefinitionNode $definitionNode
    ): string;

    public function nameForObjectFieldArgumentsObjectInterface(
        ObjectTypeDefinitionNode|ObjectTypeExtensionNode $objectType,
        FieldDefinitionNode $definitionNode
    ): string;

    public function nameForObject(
        ObjectTypeDefinitionNode|ObjectTypeExtensionNode $definitionNode
    ): string;

    public function nameForObjectInterface(
        ObjectTypeDefinitionNode|ObjectTypeExtensionNode $definitionNode
    ): string;

    public function nameForObjectResolverInterface(
        ObjectTypeDefinitionNode|ObjectTypeExtensionNode $definitionNode
    ): string;

    public function nameForObjectResolverImplementation(
        ObjectTypeDefinitionNode|ObjectTypeExtensionNode $definitionNode
    ): string;

    public function nameForScalarResolverInterface(
        ScalarTypeDefinitionNode|ScalarTypeExtensionNode $definitionNode
    ): string;

    public function nameForUnionResolverInterface(
        UnionTypeDefinitionNode|UnionTypeExtensionNode $definitionNode
    ): string;

    public function nameForUnionResolver(
        UnionTypeDefinitionNode|UnionTypeExtensionNode $definitionNode
    ): string;

    public function nameForInterfaceResolverInterface(
        InterfaceTypeDefinitionNode|InterfaceTypeExtensionNode $definitionNode
    ): string;

    public function nameForEnum(
        EnumTypeDefinitionNode|EnumTypeExtensionNode $definitionNode
    ): string;

    public function nameForEnumResolver(
        EnumTypeDefinitionNode|EnumTypeExtensionNode $definitionNode
    ): string;

    public function nameForInputObject(
        InputObjectTypeDefinitionNode|InputObjectTypeExtensionNode $definitionNode
    ): string;

    public function nameForInputObjectInterface(
        InputObjectTypeDefinitionNode|InputObjectTypeExtensionNode $definitionNode
    ): string;

    public function nameForInputObjectResolverInterface(
        InputObjectTypeDefinitionNode|InputObjectTypeExtensionNode $definitionNode
    ): string;
}

