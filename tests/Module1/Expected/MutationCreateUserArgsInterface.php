<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Module1\Expected;

interface MutationCreateUserArgsInterface
{
    /**
     * @return \Arxy\GraphQLCodegen\Tests\Expected\CreateUserInput
     */
    public function getInput(): \Arxy\GraphQLCodegen\Tests\Expected\CreateUserInput;

    /**
     * @return int|null
     */
    public function getInt(): int|null;

    /**
     * @return iterable<string>
     */
    public function getNonNullArrayNonNullItem(): iterable;

    /**
     * @return iterable<string>
     */
    public function getNonNullArray(): iterable;

    /**
     * @return iterable<string>|null
     */
    public function getArrayNonNullItem(): iterable|null;

    /**
     * @return iterable<string>|null
     */
    public function getArray(): iterable|null;
}
