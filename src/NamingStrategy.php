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
    public function nameForObject(
        ModuleInterface $module,
        ObjectTypeDefinitionNode|ObjectTypeExtensionNode $definitionNode
    ): string;

    public function nameForObjectResolverInterface(
        ModuleInterface $module,
        ObjectTypeDefinitionNode|ObjectTypeExtensionNode $definitionNode
    ): string;

    public function nameForObjectResolverImplementation(
        ModuleInterface $module,
        ObjectTypeDefinitionNode|ObjectTypeExtensionNode $definitionNode
    ): string;

    public function nameForScalarResolverInterface(
        ModuleInterface $module,
        ScalarTypeDefinitionNode|ScalarTypeExtensionNode $definitionNode
    ): string;

    public function nameForUnionResolverInterface(
        ModuleInterface $module,
        UnionTypeDefinitionNode|UnionTypeExtensionNode $definitionNode
    ): string;

    public function nameForInterfaceResolverInterface(
        ModuleInterface $module,
        InterfaceTypeDefinitionNode|InterfaceTypeExtensionNode $definitionNode
    ): string;

    public function nameForEnum(
        ModuleInterface $module,
        EnumTypeDefinitionNode|EnumTypeExtensionNode $definitionNode
    ): string;

    public function nameForInputObject(
        ModuleInterface $module,
        InputObjectTypeDefinitionNode|InputObjectTypeExtensionNode $definitionNode
    ): string;

    public function nameForArgumentsObject(
        ModuleInterface $module,
        ObjectTypeDefinitionNode|ObjectTypeExtensionNode $objectType,
        FieldDefinitionNode $definitionNode
    ): string;
}

