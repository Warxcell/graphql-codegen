<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Expected;

class Node1DefaultResolver implements Node1Resolver
{
    /**
     * @return string|\GraphQL\Executor\Promise\Promise<string>
     */
    public function id(
        Node1 $parent,
        Node1IdArgs $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info
    ): string|\GraphQL\Executor\Promise\Promise {
        return $parent->id;
    }

    /**
     * @return string|\GraphQL\Executor\Promise\Promise<string>
     */
    public function additionalField(
        Node1 $parent,
        Node1AdditionalFieldArgs $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info
    ): string|\GraphQL\Executor\Promise\Promise {
        return $parent->additionalField;
    }
}
