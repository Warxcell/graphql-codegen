<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Module1\Expected;

final class Widget1 implements Widget1Interface
{
    public function __construct(/** @var string|\GraphQL\Executor\Promise\Promise<string> */
    private readonly string|\GraphQL\Executor\Promise\Promise $name) {
    }

    public function getName(): string|\GraphQL\Executor\Promise\Promise
    {
        return $this->name;
    }
}
