<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Module1\Expected;

interface UserResolverInterface
{
    /**
     * @return string|\GraphQL\Executor\Promise\Promise
     */
    public function id(
        UserInterface $parent,
        UserIdArgsInterface $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info
    ): string|\GraphQL\Executor\Promise\Promise;

    /**
     * @return string|\GraphQL\Executor\Promise\Promise
     */
    public function username(
        UserInterface $parent,
        UserUsernameArgsInterface $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info
    ): string|\GraphQL\Executor\Promise\Promise;
}
