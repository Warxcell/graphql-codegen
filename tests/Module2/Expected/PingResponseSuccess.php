<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Module2\Expected;

final class PingResponseSuccess implements PingResponseSuccessInterface
{
    public function __construct(/** @var bool|\GraphQL\Executor\Promise\Promise */
    private readonly bool|\GraphQL\Executor\Promise\Promise $success) {
    }

    public function getSuccess(): bool|\GraphQL\Executor\Promise\Promise
    {
        return $this->success;
    }
}
