<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Module1\Expected;

final class Widget2Resolver implements Widget2ResolverInterface
{
    /**
     * @return string|\GraphQL\Executor\Promise\Promise
     */
    public function name(
        Widget2Interface $parent,
        Widget2NameArgsInterface $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info,
    ): string|\GraphQL\Executor\Promise\Promise {
        return $parent->getName();
    }
}
