<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Module1\Expected;

final class TestFailureResponse implements TestFailureResponseInterface
{
    public function __construct(/** @var list<\Arxy\GraphQLCodegen\Tests\Module2\Expected\TestError1Interface>|\GraphQL\Executor\Promise\Promise<list<\Arxy\GraphQLCodegen\Tests\Module2\Expected\TestError1Interface>> */
    private readonly iterable|\GraphQL\Executor\Promise\Promise $errors) {
    }

    public function getErrors(): iterable|\GraphQL\Executor\Promise\Promise
    {
        return $this->errors;
    }
}
