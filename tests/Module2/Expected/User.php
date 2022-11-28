<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Module2\Expected;

final class User implements UserInterface
{
    public function __construct(/** @var string|\GraphQL\Executor\Promise\Promise */
    private readonly string|\GraphQL\Executor\Promise\Promise $name) {
    }

    public function getName(): string|\GraphQL\Executor\Promise\Promise
    {
        return $this->name;
    }
}
