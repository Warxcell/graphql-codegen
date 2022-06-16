<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Expected;

final class MutationCreateUserArgs implements \Arxy\GraphQLCodegen\Tests\Module1\Expected\MutationCreateUserArgsInterface
{
    public function __construct(
        /** @var \Arxy\GraphQLCodegen\Tests\Expected\CreateUserInput $input */
        private readonly CreateUserInput $input,
        /** @var list<string> $nonNullArrayNonNullItem */
        private readonly iterable $nonNullArrayNonNullItem,
        /** @var list<string> $nonNullArray */
        private readonly iterable $nonNullArray,
        /** @var int|null $int */
        private readonly int|null $int,
        /** @var list<string>|null $arrayNonNullItem */
        private readonly iterable|null $arrayNonNullItem,
        /** @var list<string>|null $array */
        private readonly iterable|null $array,
    ) {
    }

    public function getInput(): CreateUserInput
    {
        return $this->input;
    }

    public function getNonNullArrayNonNullItem(): iterable
    {
        return $this->nonNullArrayNonNullItem;
    }

    public function getNonNullArray(): iterable
    {
        return $this->nonNullArray;
    }

    public function getInt(): int|null
    {
        return $this->int;
    }

    public function getArrayNonNullItem(): iterable|null
    {
        return $this->arrayNonNullItem;
    }

    public function getArray(): iterable|null
    {
        return $this->array;
    }
}
