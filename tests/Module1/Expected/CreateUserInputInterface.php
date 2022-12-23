<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Module1\Expected;

interface CreateUserInputInterface
{
    /**
     * @return string
     */
    public function getEmail(): string;

    /**
     * @return int<1, 600>
     */
    public function getInt(): int;

    /**
     * @return true
     */
    public function getBool(): bool;
}
