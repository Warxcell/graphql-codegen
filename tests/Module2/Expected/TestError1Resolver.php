<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Module2\Expected;

final class TestError1Resolver implements TestError1ResolverInterface
{
    /**
     * @return string|\GraphQL\Executor\Promise\Promise
     */
    public function message(
        TestError1Interface $parent,
        TestError1MessageArgsInterface $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info
    ): string|\GraphQL\Executor\Promise\Promise {
        return $parent->getMessage();
    }
}
