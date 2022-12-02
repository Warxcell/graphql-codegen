<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Module1\Expected;

interface DateTimeResolverInterface
{
    public function serialize(\DateTimeInterface $value): string|null;

    /**
     * @throws \Exception
     */
    public function parseValue(string $value): \DateTimeInterface;

    /**
     * @param array<string, mixed>|null $variables
     * @throws \Exception
     */
    public function parseLiteral(\GraphQL\Language\AST\Node $valueNode, ?array $variables = null): \DateTimeInterface;
}
