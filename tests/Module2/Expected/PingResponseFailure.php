<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Module2\Expected;

final class PingResponseFailure implements PingResponseFailureInterface
{
    public function __construct(/** @var string|\GraphQL\Executor\Promise\Promise */
    private readonly string|\GraphQL\Executor\Promise\Promise $message) {
    }

    public function getMessage(): string|\GraphQL\Executor\Promise\Promise
    {
        return $this->message;
    }
}
