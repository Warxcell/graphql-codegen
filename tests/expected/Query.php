<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Test;

final class Query
{
    /**
     * @param string $ping
     * @param iterable<\Test\ObjectTest> $objects
     * @param iterable<\Test\ObjectTest|null> $objectItemNullable
     * @param \Test\ObjectTest|null $object
     * @param iterable<\Test\ObjectTest>|null $objectNullable
     * @param iterable<\Test\ObjectTest|null>|null $objectItemAndFieldNullable
     * @param \Test\ObjectTest|null $objectWithArgsAndInput
     */
    public function __construct(
        public readonly string $ping,
        public readonly iterable $objects,
        public readonly iterable $objectItemNullable,
        public readonly ?ObjectTest $object = null,
        public readonly ?iterable $objectNullable = null,
        public readonly ?iterable $objectItemAndFieldNullable = null,
        public readonly ?ObjectTest $objectWithArgsAndInput = null,
    ) {
    }
}
