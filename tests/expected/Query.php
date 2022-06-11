<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Test;

final class Query
{
    public function __construct(
        public readonly string $ping,
        public readonly ?ObjectTest $object,
        public readonly iterable $objects,
        public readonly ?iterable $objectNullable,
        public readonly iterable $objectItemNullable,
        public readonly ?iterable $objectItemAndFieldNullable,
        public readonly ?ObjectTest $objectWithArgsAndInput,
    ) {
    }
}
