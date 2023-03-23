<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Module1\Expected;

final class TestResponseResolver implements TestResponseResolverInterface
{
    public function resolveType(
        TestSuccessResponseInterface|TestFailureResponseInterface $value,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info,
    ): string {
        if ($value instanceof \Arxy\GraphQLCodegen\Tests\Module1\Expected\TestSuccessResponseInterface) {
            return 'TestSuccessResponse';
        }
        return 'TestFailureResponse';
    }
}
