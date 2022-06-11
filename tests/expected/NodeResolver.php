<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Test;

interface NodeResolver
{
    public function resolveType(
        ObjectTest|Node1 $value,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info
    ): string;
}
