<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Expected;

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
     * @return \Arxy\GraphQLCodegen\Tests\Expected\ObjectTest|null|\GraphQL\Executor\Promise\Promise<\Arxy\GraphQLCodegen\Tests\Expected\ObjectTest|null>
     */
    public function object(
        Query $parent,
        QueryObjectArgs $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info
    ): ObjectTest|\GraphQL\Executor\Promise\Promise|null;

    /**
     * @return list<\Arxy\GraphQLCodegen\Tests\Expected\ObjectTest>|\GraphQL\Executor\Promise\Promise<list<\Arxy\GraphQLCodegen\Tests\Expected\ObjectTest>>
     */
    public function objects(
        Query $parent,
        QueryObjectsArgs $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info
    ): iterable|\GraphQL\Executor\Promise\Promise;

    /**
     * @return list<\Arxy\GraphQLCodegen\Tests\Expected\ObjectTest>|null|\GraphQL\Executor\Promise\Promise<list<\Arxy\GraphQLCodegen\Tests\Expected\ObjectTest>|null>
     */
    public function objectNullable(
        Query $parent,
        QueryObjectNullableArgs $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info
    ): iterable|\GraphQL\Executor\Promise\Promise|null;

    /**
     * @return list<\Arxy\GraphQLCodegen\Tests\Expected\ObjectTest|null>|\GraphQL\Executor\Promise\Promise<list<\Arxy\GraphQLCodegen\Tests\Expected\ObjectTest|null>>
     */
    public function objectItemNullable(
        Query $parent,
        QueryObjectItemNullableArgs $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info
    ): iterable|\GraphQL\Executor\Promise\Promise;

    /**
     * @return list<\Arxy\GraphQLCodegen\Tests\Expected\ObjectTest|null>|null|\GraphQL\Executor\Promise\Promise<list<\Arxy\GraphQLCodegen\Tests\Expected\ObjectTest|null>|null>
     */
    public function objectItemAndFieldNullable(
        Query $parent,
        QueryObjectItemAndFieldNullableArgs $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info
    ): iterable|\GraphQL\Executor\Promise\Promise|null;

    /**
     * @return \Arxy\GraphQLCodegen\Tests\Expected\ObjectTest|null|\GraphQL\Executor\Promise\Promise<\Arxy\GraphQLCodegen\Tests\Expected\ObjectTest|null>
     */
    public function objectWithArgsAndInput(
        Query $parent,
        QueryObjectWithArgsAndInputArgs $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info
    ): ObjectTest|\GraphQL\Executor\Promise\Promise|null;

    /**
     * @return \Arxy\GraphQLCodegen\Tests\TestInterface|null|\GraphQL\Executor\Promise\Promise<\Arxy\GraphQLCodegen\Tests\TestInterface|null>
     */
    public function fieldReturnsInterface(
        Query $parent,
        QueryFieldReturnsInterfaceArgs $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info
    ): \Arxy\GraphQLCodegen\Tests\TestInterface|\GraphQL\Executor\Promise\Promise|null;

    /**
     * @return \Arxy\GraphQLCodegen\Tests\Expected\ObjectTest|\Arxy\GraphQLCodegen\Tests\Expected\ObjectTwo|null|\GraphQL\Executor\Promise\Promise<\Arxy\GraphQLCodegen\Tests\Expected\ObjectTest|\Arxy\GraphQLCodegen\Tests\Expected\ObjectTwo|null>
     */
    public function fieldReturnsUnion(
        Query $parent,
        QueryFieldReturnsUnionArgs $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info
    ): ObjectTest|ObjectTwo|\GraphQL\Executor\Promise\Promise|null;
}
