<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Module1\Expected;

final class Widget2 implements Widget2Interface
{
    public function __construct(/** @var string|\GraphQL\Executor\Promise\Promise */
    private readonly string|\GraphQL\Executor\Promise\Promise $name) {
    }

    public function getName(): string|\GraphQL\Executor\Promise\Promise
    {
        return $this->name;
    }
}
