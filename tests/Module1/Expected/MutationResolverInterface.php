<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Module1\Expected;

interface MutationResolverInterface
{
    /**
     * @return \A|\GraphQL\Executor\Promise\Promise<\A>
     */
    public function createUser(
        mixed $parent,
        MutationCreateUserArgsInterface $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info
    ): UserInterface|\GraphQL\Executor\Promise\Promise;
}
