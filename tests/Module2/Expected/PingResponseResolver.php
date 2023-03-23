<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Module2\Expected;

final class PingResponseResolver implements PingResponseResolverInterface
{
    public function resolveType(
        PingResponseSuccessInterface|PingResponseFailureInterface $value,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info,
    ): string {
        if ($value instanceof \Arxy\GraphQLCodegen\Tests\Module2\Expected\PingResponseSuccessInterface) {
            return 'PingResponseSuccess';
        }
        return 'PingResponseFailure';
    }
}
