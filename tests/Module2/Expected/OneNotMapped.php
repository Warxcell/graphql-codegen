<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Module2\Expected;

final class OneNotMapped implements OneNotMappedInterface
{
    public function __construct(/** @var string|\GraphQL\Executor\Promise\Promise<string> */
    private readonly string|\GraphQL\Executor\Promise\Promise $id) {
    }

    public function getId(): string|\GraphQL\Executor\Promise\Promise
    {
        return $this->id;
    }
}
