<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Module2\Expected;

interface PingResponseFailureResolverInterface
{
    /**
     * @return string|\GraphQL\Executor\Promise\Promise
     */
    public function message(
        PingResponseFailureInterface $parent,
        PingResponseFailureMessageArgsInterface $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info
    ): string|\GraphQL\Executor\Promise\Promise;
}
