<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Module2\Expected;

interface QueryResolverInterface
{
    /**
     * @return string|\GraphQL\Executor\Promise\Promise<string>
     */
    public function pingFromModule2(
        mixed $parent,
        QueryPingFromModule2ArgsInterface $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info
    ): string|\GraphQL\Executor\Promise\Promise;
}
