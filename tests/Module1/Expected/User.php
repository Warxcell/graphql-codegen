<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Module1\Expected;

final class User implements UserInterface
{
    public function __construct(
        /** @var string */
        private readonly string $id,
        /** @var string */
        private readonly string $username,
    ) {
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getUsername(): string
    {
        return $this->username;
    }
}
