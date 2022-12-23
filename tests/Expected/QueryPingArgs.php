<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Expected;

final class QueryPingArgs implements \Arxy\GraphQLCodegen\Tests\Module1\Expected\QueryPingArgsInterface
{
    public function __construct(/** @var bool */
    private readonly bool $da) {
    }

    public function getDa(): bool
    {
        return $this->da;
    }
}
