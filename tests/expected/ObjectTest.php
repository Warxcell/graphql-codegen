<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Test;

final class ObjectTest
{
    /**
     * @param string $id
     * @param string $string
     * @param bool $boolean
     * @param float $float
     * @param int $int
     * @param EnumTest $enum
     * @param string|null $idNullable
     * @param string|null $stringNullable
     * @param bool|null $booleanNullable
     * @param float|null $floatNullable
     * @param int|null $intNullable
     * @param EnumTest|null $enumNullable
     */
    public function __construct(
        public readonly string $id,
        public readonly string $string,
        public readonly bool $boolean,
        public readonly float $float,
        public readonly int $int,
        public readonly EnumTest $enum,
        public readonly ?string $idNullable = null,
        public readonly ?string $stringNullable = null,
        public readonly ?bool $booleanNullable = null,
        public readonly ?float $floatNullable = null,
        public readonly ?int $intNullable = null,
        public readonly ?EnumTest $enumNullable = null,
    ) {
    }
}
