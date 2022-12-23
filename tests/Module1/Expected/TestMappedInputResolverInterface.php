<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Module1\Expected;

interface TestMappedInputResolverInterface
{
    /**
     * @var string
     * @var bool
     * @var \Arxy\GraphQLCodegen\Tests\Module1\AnotherMappedInput
     * @var \Arxy\GraphQLCodegen\Tests\Expected\UnmappedInput
     */
    public function resolve(
        string $string,
        bool $boolean,
        \Arxy\GraphQLCodegen\Tests\Module1\AnotherMappedInput $anotherMappedInput,
        \Arxy\GraphQLCodegen\Tests\Expected\UnmappedInput $unmappedInput
    ): \Arxy\GraphQLCodegen\Tests\Module1\MappedInput;
}
