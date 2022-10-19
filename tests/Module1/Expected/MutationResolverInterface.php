<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Module1\Expected;

interface MutationResolverInterface
{
    /**
     * @return \Arxy\GraphQLCodegen\Tests\Expected\CreateUserSuccessInterface|\Arxy\GraphQLCodegen\Tests\Expected\CreateUserFailureInterface|\GraphQL\Executor\Promise\Promise<\Arxy\GraphQLCodegen\Tests\Expected\CreateUserSuccessInterface|\Arxy\GraphQLCodegen\Tests\Expected\CreateUserFailureInterface>
     */
    public function createUser(
        mixed $parent,
        MutationCreateUserArgsInterface $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info
    ): CreateUserSuccessInterface|CreateUserFailureInterface|\GraphQL\Executor\Promise\Promise;
}
