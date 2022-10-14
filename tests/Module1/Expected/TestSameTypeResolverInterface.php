<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Module1\Expected;

interface TestSameTypeResolverInterface
{
    /**
     * @return 'TestSameType1' | 'TestSameType2'
     */
    public function resolveType(
        string|string $value,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info
    ): string;
}
