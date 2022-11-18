<?php

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\NamingStrategy;

use Arxy\GraphQLCodegen\NamingStrategy;
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

use function sprintf;
use function ucfirst;

final class DefaultStrategy implements NamingStrategy
{
    public function nameForObject(
        ObjectTypeDefinitionNode|ObjectTypeExtensionNode $definitionNode
    ): string {
        return $definitionNode->name->value;
    }

    public function nameForObjectResolverInterface(
        ObjectTypeDefinitionNode|ObjectTypeExtensionNode $definitionNode
    ): string {
        return $definitionNode->name->value . 'ResolverInterface';
    }

    public function nameForObjectResolverImplementation(
        ObjectTypeDefinitionNode|ObjectTypeExtensionNode $definitionNode
    ): string {
        return $definitionNode->name->value . 'Resolver';
    }

    public function nameForScalarResolverInterface(
        ScalarTypeExtensionNode|ScalarTypeDefinitionNode $definitionNode
    ): string {
        return $definitionNode->name->value . 'ResolverInterface';
    }

    public function nameForUnionResolverInterface(
        UnionTypeDefinitionNode|UnionTypeExtensionNode $definitionNode
    ): string {
        return $definitionNode->name->value . 'ResolverInterface';
    }

    public function nameForUnionResolver(
        UnionTypeDefinitionNode|UnionTypeExtensionNode $definitionNode
    ): string {
        return $definitionNode->name->value . 'Resolver';
    }

    public function nameForInterfaceResolverInterface(
        InterfaceTypeDefinitionNode|InterfaceTypeExtensionNode $definitionNode
    ): string {
        return $definitionNode->name->value . 'ResolverInterface';
    }

    public function nameForEnum(
        EnumTypeDefinitionNode|EnumTypeExtensionNode $definitionNode
    ): string {
        return $definitionNode->name->value;
    }

    public function nameForInputObject(
        InputObjectTypeExtensionNode|InputObjectTypeDefinitionNode $definitionNode
    ): string {
        return $definitionNode->name->value;
    }

    public function nameForObjectFieldArgumentsObject(
        ObjectTypeDefinitionNode|ObjectTypeExtensionNode $objectType,
        FieldDefinitionNode $definitionNode
    ): string {
        return sprintf('%s%sArgs', ucfirst($objectType->name->value), ucfirst($definitionNode->name->value));
    }

    public function nameForObjectInterface(
        ObjectTypeDefinitionNode|ObjectTypeExtensionNode $definitionNode
    ): string {
        return $this->nameForObject($definitionNode) . 'Interface';
    }

    public function nameForInputObjectInterface(
        InputObjectTypeExtensionNode|InputObjectTypeDefinitionNode $definitionNode
    ): string {
        return $this->nameForInputObject($definitionNode) . 'Interface';
    }

    public function nameForObjectFieldArgumentsObjectInterface(
        ObjectTypeDefinitionNode|ObjectTypeExtensionNode $objectType,
        FieldDefinitionNode $definitionNode
    ): string {
        return $this->nameForObjectFieldArgumentsObject($objectType, $definitionNode) . 'Interface';
    }

    public function nameForEnumResolver(EnumTypeDefinitionNode|EnumTypeExtensionNode $definitionNode): string
    {
        return $definitionNode->name->value . 'ResolverInterface';
    }
}

