<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Module1\Expected;

interface JSONResolverInterface
{
    /**
     * @param array<string, mixed> $value
     */
    public function serialize(array $value): string;

    /**
     * @return array<string, mixed>
     * @throws \Exception
     */
    public function parseValue(string $value): array;

    /**
     * @param array<string, mixed>|null $variables
     * @return array<string, mixed>
     * @throws \Exception
     */
    public function parseLiteral(\GraphQL\Language\AST\Node $valueNode, ?array $variables = null): array;
}
