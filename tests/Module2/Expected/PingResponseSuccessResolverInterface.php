<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Module2\Expected;

interface PingResponseSuccessResolverInterface
{
    /**
     * @return bool|\GraphQL\Executor\Promise\Promise
     */
    public function success(
        PingResponseSuccessInterface $parent,
        PingResponseSuccessSuccessArgsInterface $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info
    ): bool|\GraphQL\Executor\Promise\Promise;
}
