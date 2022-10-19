<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Module1\Expected;

final class UserResolver implements UserResolverInterface
{
    /**
     * @return string|\GraphQL\Executor\Promise\Promise<string>
     */
    public function id(
        UserInterface $parent,
        UserIdArgsInterface $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info
    ): string|\GraphQL\Executor\Promise\Promise {
        return $parent->getId();
    }

    /**
     * @return string|\GraphQL\Executor\Promise\Promise<string>
     */
    public function username(
        UserInterface $parent,
        UserUsernameArgsInterface $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info
    ): string|\GraphQL\Executor\Promise\Promise {
        return $parent->getUsername();
    }
}
