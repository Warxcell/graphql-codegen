<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Expected;

interface ObjectThatReturnItselfResolver
{
    /**
     * @return \Arxy\GraphQLCodegen\Tests\Expected\ObjectThatReturnItself|null|\GraphQL\Executor\Promise\Promise<\Arxy\GraphQLCodegen\Tests\Expected\ObjectThatReturnItself|null>
     */
    public function innerObject(
        ObjectThatReturnItself $parent,
        ObjectThatReturnItselfInnerObjectArgs $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info
    ): ObjectThatReturnItself|\GraphQL\Executor\Promise\Promise|null;
}
