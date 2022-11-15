<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Module2\Expected;

final class ObjectThatHaveOneMappedOneNotMappedResolver implements ObjectThatHaveOneMappedOneNotMappedResolverInterface
{
    /**
     * @return \stdClass|\Arxy\GraphQLCodegen\Tests\Expected\OneNotMappedInterface|\GraphQL\Executor\Promise\Promise<\stdClass|\Arxy\GraphQLCodegen\Tests\Expected\OneNotMappedInterface>
     */
    public function item(
        ObjectThatHaveOneMappedOneNotMappedInterface $parent,
        ObjectThatHaveOneMappedOneNotMappedItemArgsInterface $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info
    ): \stdClass|OneNotMappedInterface|\GraphQL\Executor\Promise\Promise {
        return $parent->getItem();
    }
}
