<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Module1\Expected;

interface TestSameType2ResolverInterface
{
    /**
     * @return string|\GraphQL\Executor\Promise\Promise<string>
     */
    public function message(
        string $parent,
        TestSameType2MessageArgsInterface $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info
    ): string|\GraphQL\Executor\Promise\Promise;
}
