<?php

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\TypeDecorator;

use Arxy\GraphQLCodegen\Module;
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
        array $documents,
        Module $module,
        ObjectTypeDefinitionNode|ObjectTypeExtensionNode $definitionNode,
        ClassType $classLike
    ): void {
        foreach ($this->decorators as $decorator) {
            $decorator->handleObject($documents, $module, $definitionNode, $classLike);
        }
    }

    public function handleObjectFieldArgs(
        array $documents,
        Module $module,
        ObjectTypeDefinitionNode|ObjectTypeExtensionNode $definitionNode,
        FieldDefinitionNode $fieldNode,
        ClassType $classLike
    ): void {
        foreach ($this->decorators as $decorator) {
            $decorator->handleObjectFieldArgs($documents, $module, $definitionNode, $fieldNode, $classLike);
        }
    }

    public function handleObjectResolverInterface(
        array $documents,
        Module $module,
        ObjectTypeDefinitionNode|ObjectTypeExtensionNode $definitionNode,
        InterfaceType $classLike
    ): void {
        foreach ($this->decorators as $decorator) {
            $decorator->handleObjectResolverInterface($documents, $module, $definitionNode, $classLike);
        }
    }

    public function handleObjectResolverImplementation(
        array $documents,
        Module $module,
        ObjectTypeDefinitionNode|ObjectTypeExtensionNode $definitionNode,
        ClassType $classLike
    ): void {
        foreach ($this->decorators as $decorator) {
            $decorator->handleObjectResolverImplementation($documents, $module, $definitionNode, $classLike);
        }
    }

    public function handleInputObject(
        array $documents,
        Module $module,
        InputObjectTypeExtensionNode|InputObjectTypeDefinitionNode $definitionNode,
        ClassType $classLike
    ): void {
        foreach ($this->decorators as $decorator) {
            $decorator->handleInputObject($documents, $module, $definitionNode, $classLike);
        }
    }

    public function handleEnum(
        array $documents,
        Module $module,
        EnumTypeDefinitionNode|EnumTypeExtensionNode $definitionNode,
        EnumType $classLike
    ): void {
        foreach ($this->decorators as $decorator) {
            $decorator->handleEnum($documents, $module, $definitionNode, $classLike);
        }
    }

    public function handleScalarResolverInterface(
        array $documents,
        Module $module,
        ScalarTypeExtensionNode|ScalarTypeDefinitionNode $definitionNode,
        InterfaceType $classLike
    ): void {
        foreach ($this->decorators as $decorator) {
            $decorator->handleScalarResolverInterface($documents, $module, $definitionNode, $classLike);
        }
    }

    public function handleInterfaceResolverInterface(
        array $documents,
        Module $module,
        InterfaceTypeDefinitionNode|InterfaceTypeExtensionNode $definitionNode,
        InterfaceType $classLike
    ): void {
        foreach ($this->decorators as $decorator) {
            $decorator->handleInterfaceResolverInterface($documents, $module, $definitionNode, $classLike);
        }
    }

    public function handleUnionResolverInterface(
        array $documents,
        Module $module,
        UnionTypeDefinitionNode|UnionTypeExtensionNode $definitionNode,
        InterfaceType $classLike
    ): void {
        foreach ($this->decorators as $decorator) {
            $decorator->handleUnionResolverInterface($documents, $module, $definitionNode, $classLike);
        }
    }

    public function handleObjectInterface(
        array $documents,
        Module $module,
        ObjectTypeDefinitionNode|ObjectTypeExtensionNode $definitionNode,
        InterfaceType $classLike
    ): void {
        foreach ($this->decorators as $decorator) {
            $decorator->handleObjectInterface($documents, $module, $definitionNode, $classLike);
        }
    }

    public function handleObjectFieldArgsInterface(
        array $documents,
        Module $module,
        ObjectTypeDefinitionNode|ObjectTypeExtensionNode $definitionNode,
        FieldDefinitionNode $fieldNode,
        InterfaceType $classLike
    ): void {
        foreach ($this->decorators as $decorator) {
            $decorator->handleObjectFieldArgsInterface($documents, $module, $definitionNode, $fieldNode, $classLike);
        }
    }

    public function handleInputObjectInterface(
        array $documents,
        Module $module,
        InputObjectTypeExtensionNode|InputObjectTypeDefinitionNode $definitionNode,
        InterfaceType $classLike
    ): void {
        foreach ($this->decorators as $decorator) {
            $decorator->handleInputObjectInterface($documents, $module, $definitionNode, $classLike);
        }
    }

    public function handleEnumResolverInterface(
        array $documents,
        Module $module,
        EnumTypeDefinitionNode|EnumTypeExtensionNode $definitionNode,
        InterfaceType $classLike
    ): void {
        foreach ($this->decorators as $decorator) {
            $decorator->handleEnumResolverInterface($documents, $module, $definitionNode, $classLike);
        }
    }

    public function handleInputObjectResolverInterface(
        array $documents,
        Module $module,
        InputObjectTypeExtensionNode|InputObjectTypeDefinitionNode $definitionNode,
        InterfaceType $classLike
    ): void {
        foreach ($this->decorators as $decorator) {
            $decorator->handleInputObjectResolverInterface($documents, $module, $definitionNode, $classLike);
        }
    }
}

