<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Module1\Expected;

final class CreateUserSuccessResolver implements CreateUserSuccessResolverInterface
{
    /**
     * @return \Arxy\GraphQLCodegen\Tests\Expected\UserInterface|\GraphQL\Executor\Promise\Promise<\Arxy\GraphQLCodegen\Tests\Expected\UserInterface>
     */
    public function user(
        CreateUserSuccessInterface $parent,
        CreateUserSuccessUserArgsInterface $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info
    ): UserInterface|\GraphQL\Executor\Promise\Promise {
        return $parent->getUser();
    }
}
