<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Test;

interface Node1Resolver
{
    /**
     * @return string|\GraphQL\Executor\Promise\Promise<string>
     */
    public function id(
        Node1 $parent,
        Node1IdArgs $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info
    ): string|\GraphQL\Executor\Promise\Promise;

    /**
     * @return string|\GraphQL\Executor\Promise\Promise<string>
     */
    public function additionalField(
        Node1 $parent,
        Node1AdditionalFieldArgs $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info
    ): string|\GraphQL\Executor\Promise\Promise;
}
