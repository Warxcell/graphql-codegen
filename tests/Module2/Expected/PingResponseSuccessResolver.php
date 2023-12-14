<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Module2\Expected;

final class PingResponseSuccessResolver implements PingResponseSuccessResolverInterface
{
    /**
     * @param \Arxy\GraphQLCodegen\Tests\Module2\Expected\PingResponseSuccessInterface $parent
     * @return bool|\GraphQL\Executor\Promise\Promise
     */
    public function success(
        PingResponseSuccessInterface $parent,
        PingResponseSuccessSuccessArgsInterface $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info,
    ): bool|\GraphQL\Executor\Promise\Promise {
        return $parent->getSuccess();
    }
}
