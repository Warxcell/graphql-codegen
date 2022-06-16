<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Module1\Expected;

final class User implements UserInterface
{
    /**
     * @return string
     * @return string
     */
    public function __construct(
        private readonly string $id,
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
