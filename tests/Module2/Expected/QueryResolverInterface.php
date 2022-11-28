<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Module2\Expected;

interface QueryResolverInterface
{
    /**
     * @return \Arxy\GraphQLCodegen\Tests\Module2\Expected\PingResponseSuccessInterface|\Arxy\GraphQLCodegen\Tests\Module2\Expected\PingResponseFailureInterface|\GraphQL\Executor\Promise\Promise
     */
    public function pingFromModule2(
        mixed $parent,
        QueryPingFromModule2ArgsInterface $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info
    ): PingResponseSuccessInterface|PingResponseFailureInterface|\GraphQL\Executor\Promise\Promise;
}
