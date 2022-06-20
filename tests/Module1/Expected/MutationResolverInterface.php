<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Module1\Expected;

interface MutationResolverInterface
{
    /**
     * @return \Arxy\GraphQLCodegen\Tests\Expected\UserInterface|\GraphQL\Executor\Promise\Promise<\Arxy\GraphQLCodegen\Tests\Expected\UserInterface>
     */
    public function createUser(
        mixed $parent,
        MutationCreateUserArgsInterface $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info
    ): UserInterface|\GraphQL\Executor\Promise\Promise;
}
