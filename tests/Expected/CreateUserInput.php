<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Expected;

final class CreateUserInput implements \Arxy\GraphQLCodegen\Tests\Module1\Expected\CreateUserInputInterface, \Arxy\GraphQLCodegen\Tests\Module2\Expected\CreateUserInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $email,
        /** @var int<1, 600> */
        #[\Symfony\Component\Validator\Constraints\Range(min: 1, max: 600)] private readonly int $int,
        /** @var true */
        #[\Symfony\Component\Validator\Constraints\IsTrue] private readonly bool $bool,
        /** @var \Arxy\GraphQLCodegen\Tests\Expected\CustomerInput */
        #[\Symfony\Component\Validator\Constraints\Valid] private readonly CustomerInput $customer,
    ) {
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getInt(): int
    {
        return $this->int;
    }

    public function getBool(): bool
    {
        return $this->bool;
    }

    public function getCustomer(): CustomerInput
    {
        return $this->customer;
    }
}
