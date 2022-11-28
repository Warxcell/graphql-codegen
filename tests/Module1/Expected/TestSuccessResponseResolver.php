<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Module1\Expected;

final class TestSuccessResponseResolver implements TestSuccessResponseResolverInterface
{
    /**
     * @return bool|\GraphQL\Executor\Promise\Promise
     */
    public function bool(
        TestSuccessResponseInterface $parent,
        TestSuccessResponseBoolArgsInterface $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info
    ): bool|\GraphQL\Executor\Promise\Promise {
        return $parent->getBool();
    }
}
