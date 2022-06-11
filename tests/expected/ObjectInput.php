<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Test;

final class ObjectInput
{
    /**
     * @param string $id
     * @param string|null $idNullable
     * @param string $string
     * @param string|null $stringNullable
     * @param bool $boolean
     * @param bool|null $booleanNullable
     * @param float $float
     * @param float|null $floatNullable
     * @param int $int
     * @param int|null $intNullable
     */
    public function __construct(
        public readonly string $id,
        public readonly ?string $idNullable = null,
        public readonly string $string,
        public readonly ?string $stringNullable = null,
        public readonly bool $boolean,
        public readonly ?bool $booleanNullable = null,
        public readonly float $float,
        public readonly ?float $floatNullable = null,
        public readonly int $int,
        public readonly ?int $intNullable = null,
    ) {
    }
}
