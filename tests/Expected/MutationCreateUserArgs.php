<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Expected;

final class MutationCreateUserArgs implements \Arxy\GraphQLCodegen\Tests\Module1\Expected\MutationCreateUserArgsInterface
{
    public function __construct(
        /** @var \Arxy\GraphQLCodegen\Tests\Expected\CreateUserInput */
        #[\Symfony\Component\Validator\Constraints\Valid] private readonly CreateUserInput $input,
        /** @var true */
        #[\Symfony\Component\Validator\Constraints\IsTrue] private readonly bool $bool,
        /** @var iterable<string> */
        private readonly iterable $nonNullArrayNonNullItem,
        /** @var iterable<string> */
        private readonly iterable $nonNullArray,
        /** @var int<1, 600>|null */
        #[\Symfony\Component\Validator\Constraints\Range(min: 1, max: 600)] private readonly int|null $int = null,
        /** @var iterable<string>|null */
        private readonly iterable|null $arrayNonNullItem = null,
        /** @var iterable<string>|null */
        private readonly iterable|null $array = null,
    ) {
    }

    public function getInput(): CreateUserInput
    {
        return $this->input;
    }

    public function getInt(): int|null
    {
        return $this->int;
    }

    public function getBool(): bool
    {
        return $this->bool;
    }

    public function getNonNullArrayNonNullItem(): iterable
    {
        return $this->nonNullArrayNonNullItem;
    }

    public function getNonNullArray(): iterable
    {
        return $this->nonNullArray;
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
