<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Module1\Expected;

interface TestFailureResponseResolverInterface
{
    /**
     * @param \Arxy\GraphQLCodegen\Tests\Module1\Expected\TestFailureResponseInterface $parent
     * @return iterable<int, \Arxy\GraphQLCodegen\Tests\Module2\Expected\TestError1Interface>|\GraphQL\Executor\Promise\Promise
     */
    public function errors(
        TestFailureResponseInterface $parent,
        TestFailureResponseErrorsArgsInterface $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info,
    ): iterable|\GraphQL\Executor\Promise\Promise;
}
