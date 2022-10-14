<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Module2\Expected;

final class TestError1 implements TestError1Interface
{
    public function __construct(/** @var string|\GraphQL\Executor\Promise\Promise<string> */
    private readonly string|\GraphQL\Executor\Promise\Promise $message) {
    }

    public function getMessage(): string|\GraphQL\Executor\Promise\Promise
    {
        return $this->message;
    }
}
