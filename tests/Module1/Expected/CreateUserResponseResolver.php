<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Module1\Expected;

final class CreateUserResponseResolver implements CreateUserResponseResolverInterface
{
    public function resolveType(
        CreateUserSuccessInterface|CreateUserFailureInterface $value,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info,
    ): string {
        if ($value instanceof \Arxy\GraphQLCodegen\Tests\Module1\Expected\CreateUserSuccessInterface) {
            return 'CreateUserSuccess';
        }
        return 'CreateUserFailure';
    }
}
