<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Test;

final class QueryObjectWithArgsAndInputArgs
{
    /**
     * @param string $id
     * @param string $string
     * @param bool $boolean
     * @param float $float
     * @param int $int
     * @param \Test\ObjectInput $input
     * @param \Test\EnumTest $enum
     * @param \Arxy\GraphQLCodegen\Tests\Basic\MappedEnum $mappedEnum
     * @param string|null $idNullable
     * @param string|null $stringNullable
     * @param bool|null $booleanNullable
     * @param float|null $floatNullable
     * @param int|null $intNullable
     * @param \Test\ObjectInput|null $inputNullable
     * @param \Test\EnumTest|null $enumNullable
     * @param \Arxy\GraphQLCodegen\Tests\Basic\MappedEnum|null $mappedEnumNullable
     */
    public function __construct(
        public readonly string $id,
        public readonly string $string,
        public readonly bool $boolean,
        public readonly float $float,
        public readonly int $int,
        public readonly ObjectInput $input,
        public readonly EnumTest $enum,
        public readonly \Arxy\GraphQLCodegen\Tests\Basic\MappedEnum $mappedEnum,
        public readonly ?string $idNullable = null,
        public readonly ?string $stringNullable = null,
        public readonly ?bool $booleanNullable = null,
        public readonly ?float $floatNullable = null,
        public readonly ?int $intNullable = null,
        public readonly ?ObjectInput $inputNullable = null,
        public readonly ?EnumTest $enumNullable = null,
        public readonly ?\Arxy\GraphQLCodegen\Tests\Basic\MappedEnum $mappedEnumNullable = null,
    ) {
    }
}
