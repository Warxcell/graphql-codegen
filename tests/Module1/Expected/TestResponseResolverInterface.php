<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Module1\Expected;

interface TestResponseResolverInterface
{
    /**
     * @return 'TestSuccessResponse' | 'TestFailureResponse'
     */
    public function resolveType(
        TestSuccessResponseInterface|TestFailureResponseInterface $value,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info,
    ): string;
}
