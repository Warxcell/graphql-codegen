<?php

declare(strict_types=1);

namespace Arxy\GraphQLCodegen;

use Exception;
use GraphQL\Language\AST\EnumTypeDefinitionNode;
use GraphQL\Language\AST\EnumTypeExtensionNode;
use Throwable;

final class CodegenException extends Exception
{
    /**
     * @param class-string $typeName
     */
    public static function notEnum(
        Module $module,
        EnumTypeDefinitionNode|EnumTypeExtensionNode $definitionNode,
        string $typeName,
        Throwable $previous = null
    ): self {
        return new self(
            sprintf(
                '%s maps to %s which is non-enum (defined in %s)',
                $definitionNode->name->value,
                $typeName,
                $module->getName(),
            ), 0, $previous
        );
    }

    /**
     * @param class-string $typeName
     */
    public static function notBackedEnum(
        Module $module,
        EnumTypeDefinitionNode|EnumTypeExtensionNode $definitionNode,
        string $typeName
    ): self {
        return new self(
            sprintf(
                '%s maps to %s which is non-backed enum (defined in %s)',
                $definitionNode->name->value,
                $typeName,
                $module->getName()
            )
        );
    }
}

