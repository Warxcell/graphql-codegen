<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Module1\Expected;

interface TestSameType2ResolverInterface
{
    /**
     * @return string|\GraphQL\Executor\Promise\Promise
     */
    public function message(
        \DateTimeInterface $parent,
        TestSameType2MessageArgsInterface $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info
    ): string|\GraphQL\Executor\Promise\Promise;
}
