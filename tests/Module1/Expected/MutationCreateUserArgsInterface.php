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
     * @return int<1, 600>|null
     */
    public function getInt(): int|null;

    /**
     * @return true
     */
    public function getBool(): bool;

    /**
     * @return iterable<int, string>
     */
    public function getNonNullArrayNonNullItem(): iterable;

    /**
     * @return iterable<int, string>
     */
    public function getNonNullArray(): iterable;

    /**
     * @return iterable<int, string>|null
     */
    public function getArrayNonNullItem(): iterable|null;

    /**
     * @return iterable<int, string>|null
     */
    public function getArray(): iterable|null;
}
