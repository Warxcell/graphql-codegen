<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Module1\Expected;

final class TestDeprecatedFieldResolver implements TestDeprecatedFieldResolverInterface
{
    /**
     * @deprecated test
     * @param \Arxy\GraphQLCodegen\Tests\Module1\Expected\TestDeprecatedFieldInterface $parent
     * @return bool|null|\GraphQL\Executor\Promise\Promise
     */
    public function testDeprecatedField(
        TestDeprecatedFieldInterface $parent,
        TestDeprecatedFieldTestDeprecatedFieldArgsInterface $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info,
    ): bool|null|\GraphQL\Executor\Promise\Promise {
        return $parent->getTestDeprecatedField();
    }
}
