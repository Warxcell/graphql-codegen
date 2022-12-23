<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Expected;

final class CustomerInput implements \Arxy\GraphQLCodegen\Tests\Module2\Expected\CustomerInputInterface
{
    public function __construct(/** @var string */
    private readonly string $name) {
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}
