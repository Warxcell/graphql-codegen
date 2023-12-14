<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Module1\Expected;

interface MultipleTypesMappedToSameInnerType2ResolverInterface
{
    /**
     * @param \stdClass $parent
     * @return string|\GraphQL\Executor\Promise\Promise
     */
    public function id(
        \stdClass $parent,
        MultipleTypesMappedToSameInnerType2IdArgsInterface $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info,
    ): string|\GraphQL\Executor\Promise\Promise;
}
