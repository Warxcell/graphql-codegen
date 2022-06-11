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
     * @param iterable<ObjectTest> $objects
     * @param iterable<ObjectTest>|null $objectItemNullable
     * @param ObjectTest|null $object
     * @param iterable<ObjectTest>|null $objectNullable
     * @param iterable<ObjectTest|null>|null $objectItemAndFieldNullable
     * @param ObjectTest|null $objectWithArgsAndInput
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
