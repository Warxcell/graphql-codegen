<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Module1\Expected;

interface WidgetResolverInterface
{
    public function resolveType(
        Widget1Interface|Widget2Interface $value,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info
    ): string;
}
