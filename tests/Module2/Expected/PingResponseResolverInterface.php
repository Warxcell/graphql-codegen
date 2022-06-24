<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Module2\Expected;

interface PingResponseResolverInterface
{
    /**
     * @return 'PingResponseSuccess' | 'PingResponseFailure'
     */
    public function resolveType(
        PingResponseSuccessInterface|PingResponseFailureInterface $value,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info
    ): string;
}
