<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Module2\Expected;

final class PingResponseSuccess implements PingResponseSuccessInterface
{
    public function __construct(/** @var bool */
    private readonly bool $success) {
    }

    public function getSuccess(): bool
    {
        return $this->success;
    }
}
