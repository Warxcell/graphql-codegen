<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Module1\Expected;

interface TestSuccessResponseResolverInterface
{
    /**
     * @param \Arxy\GraphQLCodegen\Tests\Module1\Expected\TestSuccessResponseInterface $parent
     * @return bool|\GraphQL\Executor\Promise\Promise
     */
    public function bool(
        TestSuccessResponseInterface $parent,
        TestSuccessResponseBoolArgsInterface $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info,
    ): bool|\GraphQL\Executor\Promise\Promise;
}
