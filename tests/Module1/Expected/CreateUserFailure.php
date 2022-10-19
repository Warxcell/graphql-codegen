<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Module1\Expected;

final class CreateUserFailure implements CreateUserFailureInterface
{
    public function __construct(/** @var string|\GraphQL\Executor\Promise\Promise<string> */
    private readonly string|\GraphQL\Executor\Promise\Promise $error) {
    }

    public function getError(): string|\GraphQL\Executor\Promise\Promise
    {
        return $this->error;
    }
}
