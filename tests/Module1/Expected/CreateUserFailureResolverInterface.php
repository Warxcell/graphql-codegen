<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Module1\Expected;

interface CreateUserFailureResolverInterface
{
    /**
     * @param \Arxy\GraphQLCodegen\Tests\Module1\Expected\CreateUserFailureInterface $parent
     * @return string|\GraphQL\Executor\Promise\Promise
     */
    public function error(
        CreateUserFailureInterface $parent,
        CreateUserFailureErrorArgsInterface $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info,
    ): string|\GraphQL\Executor\Promise\Promise;
}
