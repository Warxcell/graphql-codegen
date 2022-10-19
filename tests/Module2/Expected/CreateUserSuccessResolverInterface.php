<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Module2\Expected;

interface CreateUserSuccessResolverInterface
{
    /**
     * @return string|null|\GraphQL\Executor\Promise\Promise<string|null>
     */
    public function fieldFromModule2(
        CreateUserSuccessInterface $parent,
        CreateUserSuccessFieldFromModule2ArgsInterface $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info
    ): string|null|\GraphQL\Executor\Promise\Promise;
}
