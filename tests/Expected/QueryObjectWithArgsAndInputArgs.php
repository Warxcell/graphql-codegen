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
     * @param string|null $stringDefault
     * @param bool|null $booleanNullable
     * @param bool|null $booleanDefault
     * @param float|null $floatNullable
     * @param float|null $floatDefault
     * @param int|null $intNullable
     * @param int|null $intDefault
     * @param \Arxy\GraphQLCodegen\Tests\Expected\ObjectInput|null $inputNullable
     * @param \Arxy\GraphQLCodegen\Tests\Expected\EnumTest|null $enumNullable
     * @param \Arxy\GraphQLCodegen\Tests\Expected\EnumTest|null $enumDefault
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
        public readonly ?string $idNullable,
        public readonly ?string $stringNullable,
        public readonly ?string $stringDefault,
        public readonly ?bool $booleanNullable,
        public readonly ?bool $booleanDefault,
        public readonly ?float $floatNullable,
        public readonly ?float $floatDefault,
        public readonly ?int $intNullable,
        public readonly ?int $intDefault,
        public readonly ?ObjectInput $inputNullable,
        public readonly ?EnumTest $enumNullable,
        public readonly ?EnumTest $enumDefault,
        public readonly ?\Arxy\GraphQLCodegen\Tests\MappedEnum $mappedEnumNullable,
    ) {
    }
}
