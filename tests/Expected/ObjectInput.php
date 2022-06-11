<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Expected;

final class ObjectInput
{
    /**
     * @param string $id
     * @param string $string
     * @param bool $boolean
     * @param float $float
     * @param int $int
     * @param string|null $idNullable
     * @param string|null $stringNullable
     * @param bool|null $booleanNullable
     * @param float|null $floatNullable
     * @param int|null $intNullable
     */
    public function __construct(
        public readonly string $id,
        public readonly string $string,
        public readonly bool $boolean,
        public readonly float $float,
        public readonly int $int,
        public readonly ?string $idNullable = null,
        public readonly ?string $stringNullable = null,
        public readonly ?bool $booleanNullable = null,
        public readonly ?float $floatNullable = null,
        public readonly ?int $intNullable = null,
    ) {
    }
}
