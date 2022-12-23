<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Expected;

final class UnmappedInput implements \Arxy\GraphQLCodegen\Tests\Module1\Expected\UnmappedInputInterface
{
    public function __construct(/** @var string */
    private readonly string $id) {
    }

    public function getId(): string
    {
        return $this->id;
    }
}
