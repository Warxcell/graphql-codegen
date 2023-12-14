<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Module1\Expected;

final class TestDeprecatedField implements TestDeprecatedFieldInterface
{
    public function __construct(/** @var bool|null|\GraphQL\Executor\Promise\Promise */
    private readonly bool|null|\GraphQL\Executor\Promise\Promise $testDeprecatedField) {
    }

    public function getTestDeprecatedField(): bool|null|\GraphQL\Executor\Promise\Promise
    {
        return $this->testDeprecatedField;
    }
}
