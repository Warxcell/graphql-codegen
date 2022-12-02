<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Module1\Expected;

interface MutationResolverInterface
{
    /**
     * @return \Arxy\GraphQLCodegen\Tests\Module1\Expected\CreateUserSuccessInterface|\Arxy\GraphQLCodegen\Tests\Module1\Expected\CreateUserFailureInterface|\GraphQL\Executor\Promise\Promise
     */
    public function createUser(
        mixed $parent,
        MutationCreateUserArgsInterface $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info
    ): CreateUserSuccessInterface|CreateUserFailureInterface|\GraphQL\Executor\Promise\Promise;

    /**
     * @return array<string, mixed>|null|\GraphQL\Executor\Promise\Promise
     */
    public function testJson(
        mixed $parent,
        MutationTestJsonArgsInterface $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info
    ): array|null|\GraphQL\Executor\Promise\Promise;
}
