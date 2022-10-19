<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Module1\Expected;

interface CreateUserResponseResolverInterface
{
    /**
     * @return 'CreateUserSuccess' | 'CreateUserFailure'
     */
    public function resolveType(
        CreateUserSuccessInterface|CreateUserFailureInterface $value,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info
    ): string;
}
