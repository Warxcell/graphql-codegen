<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Module1\Expected;

interface TestErrorResolverInterface
{
    /**
     * @return 'TestError1'
     */
    public function resolveType(
        \Arxy\GraphQLCodegen\Tests\Module2\Expected\TestError1Interface $value,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info
    ): string;
}
