<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Module1\Expected;

interface DateTimeResolverInterface
{
    /**
     * @param \DateTimeInterface $value
     */
    public function serialize(\DateTimeInterface $value): string;

    /**
     * @return \DateTimeInterface
     * @throws \Exception
     */
    public function parseValue(string $value): \DateTimeInterface;

    /**
     * @param array<string, mixed>|null $variables
     * @return \DateTimeInterface
     * @throws \Exception
     */
    public function parseLiteral(\GraphQL\Language\AST\Node $valueNode, ?array $variables = null): \DateTimeInterface;
}
