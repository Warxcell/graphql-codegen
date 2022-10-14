<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Module1\Expected;

interface TestSuccessResponseResolverInterface
{
    /**
     * @return bool|\GraphQL\Executor\Promise\Promise<bool>
     */
    public function bool(
        TestSuccessResponseInterface $parent,
        TestSuccessResponseBoolArgsInterface $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info
    ): bool|\GraphQL\Executor\Promise\Promise;
}
