<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Expected;

final class Query
{
    /**
     * @param string $ping
     * @param list<\Arxy\GraphQLCodegen\Tests\Expected\ObjectTest> $objects
     * @param list<\Arxy\GraphQLCodegen\Tests\Expected\ObjectTest|null> $objectItemNullable
     * @param \Arxy\GraphQLCodegen\Tests\Expected\ObjectTest|null $object
     * @param list<\Arxy\GraphQLCodegen\Tests\Expected\ObjectTest>|null $objectNullable
     * @param list<\Arxy\GraphQLCodegen\Tests\Expected\ObjectTest|null>|null $objectItemAndFieldNullable
     * @param \Arxy\GraphQLCodegen\Tests\Expected\ObjectTest|null $objectWithArgsAndInput
     * @param \Arxy\GraphQLCodegen\Tests\TestInterface|null $fieldReturnsInterface
     * @param \Arxy\GraphQLCodegen\Tests\Expected\ObjectTest|\Arxy\GraphQLCodegen\Tests\Expected\ObjectTwo|null $fieldReturnsUnion
     */
    public function __construct(
        public readonly string $ping,
        public readonly iterable $objects,
        public readonly iterable $objectItemNullable,
        public readonly ?ObjectTest $object = null,
        public readonly ?iterable $objectNullable = null,
        public readonly ?iterable $objectItemAndFieldNullable = null,
        public readonly ?ObjectTest $objectWithArgsAndInput = null,
        public readonly ?\Arxy\GraphQLCodegen\Tests\TestInterface $fieldReturnsInterface = null,
        public readonly ObjectTest|ObjectTwo|null $fieldReturnsUnion = null,
    ) {
    }
}
