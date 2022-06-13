<?php

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\NamingStrategy;

use Arxy\GraphQLCodegen\ModuleInterface;
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
        ModuleInterface $module,
        ObjectTypeDefinitionNode|ObjectTypeExtensionNode $definitionNode
    ): string {
        return $definitionNode->name->value;
    }

    public function nameForObjectResolverInterface(
        ModuleInterface $module,
        ObjectTypeDefinitionNode|ObjectTypeExtensionNode $definitionNode
    ): string {
        return $definitionNode->name->value . 'Resolver';
    }

    public function nameForObjectResolverImplementation(
        ModuleInterface $module,
        ObjectTypeDefinitionNode|ObjectTypeExtensionNode $definitionNode
    ): string {
        return $definitionNode->name->value . 'DefaultResolver';
    }

    public function nameForScalarResolverInterface(
        ModuleInterface $module,
        ScalarTypeExtensionNode|ScalarTypeDefinitionNode $definitionNode
    ): string {
        return $definitionNode->name->value . 'Resolver';
    }

    public function nameForUnionResolverInterface(
        ModuleInterface $module,
        UnionTypeDefinitionNode|UnionTypeExtensionNode $definitionNode
    ): string {
        return $definitionNode->name->value . 'Resolver';
    }

    public function nameForInterfaceResolverInterface(
        ModuleInterface $module,
        InterfaceTypeDefinitionNode|InterfaceTypeExtensionNode $definitionNode
    ): string {
        return $definitionNode->name->value . 'Resolver';
    }

    public function nameForEnum(
        ModuleInterface $module,
        EnumTypeDefinitionNode|EnumTypeExtensionNode $definitionNode
    ): string {
        return $definitionNode->name->value;
    }

    public function nameForInputObject(
        ModuleInterface $module,
        InputObjectTypeExtensionNode|InputObjectTypeDefinitionNode $definitionNode
    ): string {
        return $definitionNode->name->value;
    }

    public function nameForArgumentsObject(
        ModuleInterface $module,
        ObjectTypeDefinitionNode|ObjectTypeExtensionNode $objectType,
        FieldDefinitionNode $definitionNode
    ): string {
        return sprintf('%s%sArgs', ucfirst($objectType->name->value), ucfirst($definitionNode->name->value));
    }
}

