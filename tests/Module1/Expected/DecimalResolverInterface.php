<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Module1\Expected;

interface DecimalResolverInterface
{
    /**
     * @param numeric-string $value
     */
    public function serialize(string $value): string;

    /**
     * @return numeric-string
     * @throws \Exception
     */
    public function parseValue(string $value): string;

    /**
     * @param array<string, mixed>|null $variables
     * @return numeric-string
     * @throws \Exception
     */
    public function parseLiteral(\GraphQL\Language\AST\Node $valueNode, ?array $variables = null): string;
}
