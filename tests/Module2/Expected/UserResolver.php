<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Module2\Expected;

class UserResolver implements UserResolverInterface
{
    /**
     * @return string|\GraphQL\Executor\Promise\Promise<string>
     */
    public function name(
        UserInterface $parent,
        UserNameArgsInterface $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info
    ): string|\GraphQL\Executor\Promise\Promise {
        return $parent->getName();
    }
}
