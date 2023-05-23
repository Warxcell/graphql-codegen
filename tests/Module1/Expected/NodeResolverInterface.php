<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Module1\Expected;

/**
 * @phpstan-type Node 'User'
 */
interface NodeResolverInterface
{
    /**
     * @return Node
     */
    public function resolveType(
        UserInterface $value,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info,
    ): string;
}
