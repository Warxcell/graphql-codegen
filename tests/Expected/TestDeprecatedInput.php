<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Expected;

final class TestDeprecatedInput implements \Arxy\GraphQLCodegen\Tests\Module1\Expected\TestDeprecatedInputInterface
{
    public function __construct(/** @var string */
    private readonly string $deprecatedField) {
    }

    public function getDeprecatedField(): string
    {
        return $this->deprecatedField;
    }
}
