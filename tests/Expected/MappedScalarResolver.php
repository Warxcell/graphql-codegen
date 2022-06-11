<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Expected;

interface MappedScalarResolver
{
    public function serialize(mixed $value): string;

    /**
     * @throws \GraphQL\Error\Error
     */
    public function parseValue(string $value): mixed;

    /**
     * @throws \GraphQL\Error\Error
     */
    public function parseLiteral(\GraphQL\Language\AST\Node $valueNode, ?array $variables = null): mixed;
}
