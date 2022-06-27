<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Module2\Expected;

final class PingResponseFailure implements PingResponseFailureInterface
{
    public function __construct(/** @var string */
    private readonly string $message) {
    }

    public function getMessage(): string
    {
        return $this->message;
    }
}
