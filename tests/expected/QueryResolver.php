<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Test;

interface QueryResolver
{
    /**
     * @return string|\GraphQL\Executor\Promise\Promise<string>
     */
    public function ping(
        Query $parent,
        QueryPingArgs $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info
    ): string|\GraphQL\Executor\Promise\Promise;

    /**
     * @return \Test\ObjectTest|null|\GraphQL\Executor\Promise\Promise<\Test\ObjectTest|null>
     */
    public function object(
        Query $parent,
        QueryObjectArgs $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info
    ): ObjectTest|\GraphQL\Executor\Promise\Promise|null;

    /**
     * @return iterable<\Test\ObjectTest>|\GraphQL\Executor\Promise\Promise<iterable<\Test\ObjectTest>>
     */
    public function objects(
        Query $parent,
        QueryObjectsArgs $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info
    ): iterable|\GraphQL\Executor\Promise\Promise;

    /**
     * @return iterable<\Test\ObjectTest>|\GraphQL\Executor\Promise\Promise<iterable<\Test\ObjectTest>>
     */
    public function objectNullable(
        Query $parent,
        QueryObjectNullableArgs $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info
    ): iterable|\GraphQL\Executor\Promise\Promise|null;

    /**
     * @return iterable<\Test\ObjectTest>|\GraphQL\Executor\Promise\Promise<iterable<\Test\ObjectTest>>
     */
    public function objectItemNullable(
        Query $parent,
        QueryObjectItemNullableArgs $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info
    ): iterable|\GraphQL\Executor\Promise\Promise;

    /**
     * @return iterable<\Test\ObjectTest>|\GraphQL\Executor\Promise\Promise<iterable<\Test\ObjectTest>>
     */
    public function objectItemAndFieldNullable(
        Query $parent,
        QueryObjectItemAndFieldNullableArgs $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info
    ): iterable|\GraphQL\Executor\Promise\Promise|null;

    /**
     * @return \Test\ObjectTest|null|\GraphQL\Executor\Promise\Promise<\Test\ObjectTest|null>
     */
    public function objectWithArgsAndInput(
        Query $parent,
        QueryObjectWithArgsAndInputArgs $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info
    ): ObjectTest|\GraphQL\Executor\Promise\Promise|null;
}
