<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Module1\Expected;

final class Widget1Resolver implements Widget1ResolverInterface
{
    /**
     * @return string|\GraphQL\Executor\Promise\Promise
     */
    public function name(
        Widget1Interface $parent,
        Widget1NameArgsInterface $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info
    ): string|\GraphQL\Executor\Promise\Promise {
        return $parent->getName();
    }
}
