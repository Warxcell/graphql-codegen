<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Module1\Expected;

interface QueryResolverInterface
{
    /**
     * @return string|\GraphQL\Executor\Promise\Promise<string>
     */
    public function ping(
        mixed $parent,
        QueryPingArgsInterface $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info
    ): string|\GraphQL\Executor\Promise\Promise;

    /**
     * @return \DateTimeInterface|\GraphQL\Executor\Promise\Promise<\DateTimeInterface>
     */
    public function testSameType(
        mixed $parent,
        QueryTestSameTypeArgsInterface $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info
    ): \DateTimeInterface|\GraphQL\Executor\Promise\Promise;
}
