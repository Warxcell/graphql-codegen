<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Expected;

final class QueryObjectWithArgsAndInputArgs
{
    /**
     * @param string $id
     * @param string $string
     * @param bool $boolean
     * @param float $float
     * @param int $int
     * @param \Arxy\GraphQLCodegen\Tests\Expected\ObjectInput $input
     * @param \Arxy\GraphQLCodegen\Tests\Expected\EnumTest $enum
     * @param \Arxy\GraphQLCodegen\Tests\MappedEnum $mappedEnum
     * @param string|null $idNullable
     * @param string|null $stringNullable
     * @param bool|null $booleanNullable
     * @param float|null $floatNullable
     * @param int|null $intNullable
     * @param \Arxy\GraphQLCodegen\Tests\Expected\ObjectInput|null $inputNullable
     * @param \Arxy\GraphQLCodegen\Tests\Expected\EnumTest|null $enumNullable
     * @param \Arxy\GraphQLCodegen\Tests\MappedEnum|null $mappedEnumNullable
     */
    public function __construct(
        public readonly string $id,
        public readonly string $string,
        public readonly bool $boolean,
        public readonly float $float,
        public readonly int $int,
        public readonly ObjectInput $input,
        public readonly EnumTest $enum,
        public readonly \Arxy\GraphQLCodegen\Tests\MappedEnum $mappedEnum,
        public readonly ?string $idNullable = null,
        public readonly ?string $stringNullable = null,
        public readonly ?bool $booleanNullable = null,
        public readonly ?float $floatNullable = null,
        public readonly ?int $intNullable = null,
        public readonly ?ObjectInput $inputNullable = null,
        public readonly ?EnumTest $enumNullable = null,
        public readonly ?\Arxy\GraphQLCodegen\Tests\MappedEnum $mappedEnumNullable = null,
    ) {
    }
}
