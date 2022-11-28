<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Module1\Expected;

interface TestFailureResponseInterface
{
    /**
     * @return list<\Arxy\GraphQLCodegen\Tests\Module2\Expected\TestError1Interface>|\GraphQL\Executor\Promise\Promise
     */
    public function getErrors(): iterable|\GraphQL\Executor\Promise\Promise;
}
