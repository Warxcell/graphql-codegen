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
     * @param \Arxy\GraphQLCodegen\Tests\Expected\EmbeddedInput $embeddedInput
     * @param string|null $idNullable
     * @param string|null $stringNullable
     * @param bool|null $booleanNullable
     * @param float|null $floatNullable
     * @param int|null $intNullable
     * @param \Arxy\GraphQLCodegen\Tests\Expected\EmbeddedInput|null $embeddedInputNullable
     */
    public function __construct(
        public readonly string $id,
        public readonly string $string,
        public readonly bool $boolean,
        public readonly float $float,
        public readonly int $int,
        public readonly EmbeddedInput $embeddedInput,
        public readonly ?string $idNullable,
        public readonly ?string $stringNullable,
        public readonly ?bool $booleanNullable,
        public readonly ?float $floatNullable,
        public readonly ?int $intNullable,
        public readonly ?EmbeddedInput $embeddedInputNullable,
    ) {
    }
}
