<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Module1\Expected;

interface CreateUserSuccessResolverInterface
{
    /**
     * @param \Arxy\GraphQLCodegen\Tests\Module1\Expected\CreateUserSuccessInterface $parent
     * @return \Arxy\GraphQLCodegen\Tests\Module1\Expected\UserInterface|\GraphQL\Executor\Promise\Promise
     */
    public function user(
        CreateUserSuccessInterface $parent,
        CreateUserSuccessUserArgsInterface $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info,
    ): UserInterface|\GraphQL\Executor\Promise\Promise;
}
