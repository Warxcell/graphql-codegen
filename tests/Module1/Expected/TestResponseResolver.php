<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Module1\Expected;

class TestResponseResolver implements TestResponseResolverInterface
{
    public function resolveType(
        TestSuccessResponseInterface|TestFailureResponseInterface $value,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info
    ): string {
        if ($value instanceof \Arxy\GraphQLCodegen\Tests\Module1\Expected\TestSuccessResponseInterface) {
            return 'TestSuccessResponse';
        }
        if ($value instanceof \Arxy\GraphQLCodegen\Tests\Module1\Expected\TestFailureResponseInterface) {
            return 'TestFailureResponse';
        }
    }
}
