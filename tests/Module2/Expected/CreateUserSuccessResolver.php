<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Module2\Expected;

final class CreateUserSuccessResolver implements CreateUserSuccessResolverInterface
{
    /**
     * @return string|null|\GraphQL\Executor\Promise\Promise
     */
    public function fieldFromModule2(
        CreateUserSuccessInterface $parent,
        CreateUserSuccessFieldFromModule2ArgsInterface $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info
    ): string|null|\GraphQL\Executor\Promise\Promise {
        return $parent->getFieldFromModule2();
    }
}
