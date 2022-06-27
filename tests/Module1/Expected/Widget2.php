<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Module1\Expected;

final class Widget2 implements Widget2Interface
{
    public function __construct(/** @var string */
    private readonly string $name) {
    }

    public function getName(): string
    {
        return $this->name;
    }
}
