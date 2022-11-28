<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Module1\Expected;

interface CreateUserFailureResolverInterface
{
    /**
     * @return string|\GraphQL\Executor\Promise\Promise
     */
    public function error(
        CreateUserFailureInterface $parent,
        CreateUserFailureErrorArgsInterface $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info
    ): string|\GraphQL\Executor\Promise\Promise;
}
