<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Test;

final class ObjectTest
{
    public function __construct(
        public readonly string $id,
        public readonly ?string $idNullable,
        public readonly string $string,
        public readonly ?string $stringNullable,
        public readonly bool $boolean,
        public readonly ?bool $booleanNullable,
        public readonly float $float,
        public readonly ?float $floatNullable,
        public readonly int $int,
        public readonly ?int $intNullable,
        public readonly ?EnumTest $enum,
        public readonly EnumTest $enumNullable,
    ) {
    }
}
