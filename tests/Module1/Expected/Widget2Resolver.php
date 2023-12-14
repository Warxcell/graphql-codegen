<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Module1\Expected;

final class Widget2Resolver implements Widget2ResolverInterface
{
    /**
     * @param \Arxy\GraphQLCodegen\Tests\Module1\Expected\Widget2Interface $parent
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
