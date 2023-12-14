<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Module1\Expected;

interface QueryResolverInterface
{
    /**
     * @param mixed $parent
     * @return iterable<int, string|null>|null|\GraphQL\Executor\Promise\Promise
     */
    public function nullableArrayWithNullableItems(
        mixed $parent,
        QueryNullableArrayWithNullableItemsArgsInterface $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info,
    ): iterable|null|\GraphQL\Executor\Promise\Promise;

    /**
     * @param mixed $parent
     * @return iterable<int, string>|null|\GraphQL\Executor\Promise\Promise
     */
    public function nullableArrayWithNonNullableItems(
        mixed $parent,
        QueryNullableArrayWithNonNullableItemsArgsInterface $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info,
    ): iterable|null|\GraphQL\Executor\Promise\Promise;

    /**
     * @param mixed $parent
     * @return iterable<int, string>|\GraphQL\Executor\Promise\Promise
     */
    public function nonNullableArrayWithNonNullableItems(
        mixed $parent,
        QueryNonNullableArrayWithNonNullableItemsArgsInterface $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info,
    ): iterable|\GraphQL\Executor\Promise\Promise;

    /**
     * @param mixed $parent
     * @return iterable<int, string|null>|\GraphQL\Executor\Promise\Promise
     */
    public function nonNullableArrayWithNullableItems(
        mixed $parent,
        QueryNonNullableArrayWithNullableItemsArgsInterface $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info,
    ): iterable|\GraphQL\Executor\Promise\Promise;

    /**
     * @param mixed $parent
     * @return string|\GraphQL\Executor\Promise\Promise
     */
    public function ping(
        mixed $parent,
        QueryPingArgsInterface $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info,
    ): string|\GraphQL\Executor\Promise\Promise;

    /**
     * @param mixed $parent
     * @return \DateTimeInterface|\GraphQL\Executor\Promise\Promise
     */
    public function testSameType(
        mixed $parent,
        QueryTestSameTypeArgsInterface $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info,
    ): \DateTimeInterface|\GraphQL\Executor\Promise\Promise;
}
