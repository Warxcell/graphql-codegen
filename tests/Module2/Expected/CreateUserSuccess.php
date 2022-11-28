<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Module2\Expected;

final class CreateUserSuccess implements CreateUserSuccessInterface
{
    public function __construct(/** @var string|null|\GraphQL\Executor\Promise\Promise */
    private readonly string|null|\GraphQL\Executor\Promise\Promise $fieldFromModule2) {
    }

    public function getFieldFromModule2(): string|null|\GraphQL\Executor\Promise\Promise
    {
        return $this->fieldFromModule2;
    }
}
