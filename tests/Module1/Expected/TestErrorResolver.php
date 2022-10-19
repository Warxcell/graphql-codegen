<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Module1\Expected;

final class TestErrorResolver implements TestErrorResolverInterface
{
    public function resolveType(
        \Arxy\GraphQLCodegen\Tests\Module2\Expected\TestError1Interface $value,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info
    ): string {
        return 'TestError1';
    }
}
