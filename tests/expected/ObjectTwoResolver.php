<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Test;

interface ObjectTwoResolver
{
    /**
     * @return string|\GraphQL\Executor\Promise\Promise<string>
     */
    public function hello(
        ObjectTwo $parent,
        ObjectTwoHelloArgs $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info
    ): string|\GraphQL\Executor\Promise\Promise;
}
