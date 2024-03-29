<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Module2\Expected;

final class UserResolver implements UserResolverInterface
{
    /**
     * @param \Arxy\GraphQLCodegen\Tests\Module2\Expected\UserInterface $parent
     * @return string|\GraphQL\Executor\Promise\Promise
     */
    public function name(
        UserInterface $parent,
        UserNameArgsInterface $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info,
    ): string|\GraphQL\Executor\Promise\Promise {
        return $parent->getName();
    }
}
