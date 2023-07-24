<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Module1\Expected;

interface TestMappedInputResolverInterface
{
    /**
     * @param string $string
     * @param bool $boolean
     * @param \Arxy\GraphQLCodegen\Tests\Module1\AnotherMappedInput $anotherMappedInput
     * @param \Arxy\GraphQLCodegen\Tests\Expected\UnmappedInput $unmappedInput
     * @param string|null $optional
     */
    public function resolve(
        string $string,
        bool $boolean,
        \Arxy\GraphQLCodegen\Tests\Module1\AnotherMappedInput $anotherMappedInput,
        \Arxy\GraphQLCodegen\Tests\Expected\UnmappedInput $unmappedInput,
        string|null $optional = null,
    ): \Arxy\GraphQLCodegen\Tests\Module1\MappedInput;
}
