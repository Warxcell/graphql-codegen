<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Expected;

final class CreateUserInput implements \Arxy\GraphQLCodegen\Tests\Module1\Expected\CreateUserInputInterface, \Arxy\GraphQLCodegen\Tests\Module2\Expected\CreateUserInputInterface
{
    public function __construct(
        /** @var string email */
        private readonly string $email,
        /** @var \Arxy\GraphQLCodegen\Tests\Expected\CustomerInput customer */
        private readonly CustomerInput $customer,
    ) {
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return \Arxy\GraphQLCodegen\Tests\Expected\CustomerInput
     */
    public function getCustomer(): CustomerInput
    {
        return $this->customer;
    }
}
