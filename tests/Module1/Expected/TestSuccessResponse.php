<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Module1\Expected;

final class TestSuccessResponse implements TestSuccessResponseInterface
{
    public function __construct(/** @var bool|\GraphQL\Executor\Promise\Promise<bool> */
    private readonly bool|\GraphQL\Executor\Promise\Promise $bool) {
    }

    public function getBool(): bool|\GraphQL\Executor\Promise\Promise
    {
        return $this->bool;
    }
}
