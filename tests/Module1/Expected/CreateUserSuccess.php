<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Module1\Expected;

final class CreateUserSuccess implements CreateUserSuccessInterface
{
    public function __construct(/** @var \Arxy\GraphQLCodegen\Tests\Module1\Expected\UserInterface|\GraphQL\Executor\Promise\Promise<\Arxy\GraphQLCodegen\Tests\Module1\Expected\UserInterface> */
    private readonly UserInterface|\GraphQL\Executor\Promise\Promise $user) {
    }

    public function getUser(): UserInterface|\GraphQL\Executor\Promise\Promise
    {
        return $this->user;
    }
}
