<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Module1\Expected;

class WidgetResolver implements WidgetResolverInterface
{
    public function resolveType(
        Widget1Interface|Widget2Interface $value,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info
    ): string {
        if ($value instanceof \Arxy\GraphQLCodegen\Tests\Module1\Expected\Widget1Interface) {
            return 'Widget1';
        }
        if ($value instanceof \Arxy\GraphQLCodegen\Tests\Module1\Expected\Widget2Interface) {
            return 'Widget2';
        }
    }
}
