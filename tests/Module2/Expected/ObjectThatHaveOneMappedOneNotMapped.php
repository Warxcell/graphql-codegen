<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Module2\Expected;

final class ObjectThatHaveOneMappedOneNotMapped implements ObjectThatHaveOneMappedOneNotMappedInterface
{
    public function __construct(/** @var \stdClass|\Arxy\GraphQLCodegen\Tests\Module2\Expected\OneNotMappedInterface|\GraphQL\Executor\Promise\Promise */
    private readonly \stdClass|OneNotMappedInterface|\GraphQL\Executor\Promise\Promise $item) {
    }

    public function getItem(): \stdClass|OneNotMappedInterface|\GraphQL\Executor\Promise\Promise
    {
        return $this->item;
    }
}
