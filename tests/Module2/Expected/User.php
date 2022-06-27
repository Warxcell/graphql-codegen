<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Module2\Expected;

final class User implements UserInterface
{
    public function __construct(/** @var string */
    private readonly string $name) {
    }

    public function getName(): string
    {
        return $this->name;
    }
}
