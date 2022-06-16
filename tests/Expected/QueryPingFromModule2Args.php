<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Expected;

final class QueryPingFromModule2Args implements \Arxy\GraphQLCodegen\Tests\Module2\Expected\QueryPingFromModule2ArgsInterface
{
    public function __construct(/** @var bool $da */
    private readonly bool $da) {
    }

    public function getDa(): bool
    {
        return $this->da;
    }
}
