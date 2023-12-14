<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Expected;

final class TestDeprecatedFieldTestDeprecatedFieldArgs implements \Arxy\GraphQLCodegen\Tests\Module1\Expected\TestDeprecatedFieldTestDeprecatedFieldArgsInterface
{
    public function __construct(/** @var string */
    private readonly string $test) {
    }

    public function getTest(): string
    {
        return $this->test;
    }
}
