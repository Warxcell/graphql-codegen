<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Module2\Expected;

interface QueryResolverInterface
{
    /**
     * @return \Arxy\GraphQLCodegen\Tests\Expected\PingResponseSuccessInterface|\Arxy\GraphQLCodegen\Tests\Expected\PingResponseFailureInterface|\GraphQL\Executor\Promise\Promise<\Arxy\GraphQLCodegen\Tests\Expected\PingResponseSuccessInterface|\Arxy\GraphQLCodegen\Tests\Expected\PingResponseFailureInterface>
     */
    public function pingFromModule2(
        mixed $parent,
        QueryPingFromModule2ArgsInterface $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info
    ): PingResponseSuccessInterface|PingResponseFailureInterface|\GraphQL\Executor\Promise\Promise;
}
