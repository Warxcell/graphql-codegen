<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Module2\Expected;

interface OneNotMappedResolverInterface
{
    /**
     * @param \Arxy\GraphQLCodegen\Tests\Module2\Expected\OneNotMappedInterface $parent
     * @return string|\GraphQL\Executor\Promise\Promise
     */
    public function id(
        OneNotMappedInterface $parent,
        OneNotMappedIdArgsInterface $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info,
    ): string|\GraphQL\Executor\Promise\Promise;
}
