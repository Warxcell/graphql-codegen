<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Expected;

interface ObjectUnionResolver
{
    public function resolveType(
        ObjectTest|ObjectTwo $value,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info
    ): string;
}
