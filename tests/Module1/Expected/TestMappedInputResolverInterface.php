<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Module1\Expected;

interface TestMappedInputResolverInterface
{
    /**
     * @var string $string
     * @var bool $boolean
     * @var \Arxy\GraphQLCodegen\Tests\Module1\AnotherMappedInput $anotherMappedInput
     * @var \Arxy\GraphQLCodegen\Tests\Expected\UnmappedInput $unmappedInput
     */
    public function resolve(
        string $string,
        bool $boolean,
        \Arxy\GraphQLCodegen\Tests\Module1\AnotherMappedInput $anotherMappedInput,
        \Arxy\GraphQLCodegen\Tests\Expected\UnmappedInput $unmappedInput
    ): \Arxy\GraphQLCodegen\Tests\Module1\MappedInput;
}
