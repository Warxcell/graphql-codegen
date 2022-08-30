<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Module1\Expected;

final class User implements UserInterface
{
    public function __construct(
        /** @var string|\GraphQL\Executor\Promise\Promise<string> */
        private readonly string|\GraphQL\Executor\Promise\Promise $id,
        /** @var string|\GraphQL\Executor\Promise\Promise<string> */
        private readonly string|\GraphQL\Executor\Promise\Promise $username,
    ) {
    }

    public function getId(): string|\GraphQL\Executor\Promise\Promise
    {
        return $this->id;
    }

    public function getUsername(): string|\GraphQL\Executor\Promise\Promise
    {
        return $this->username;
    }
}
