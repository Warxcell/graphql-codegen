<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Module1\Expected;

interface OneMappedResolverInterface
{
    /**
     * @return string|\GraphQL\Executor\Promise\Promise
     */
    public function id(
        \stdClass $parent,
        OneMappedIdArgsInterface $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info,
    ): string|\GraphQL\Executor\Promise\Promise;
}
