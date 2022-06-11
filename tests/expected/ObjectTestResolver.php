<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Test;

interface ObjectTestResolver
{
    /**
     * @return string|\GraphQL\Executor\Promise\Promise<string>
     */
    public function id(
        ObjectTest $parent,
        ObjectTestIdArgs $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info
    ): string|\GraphQL\Executor\Promise\Promise;

    /**
     * @return string|null|\GraphQL\Executor\Promise\Promise<string|null>
     */
    public function idNullable(
        ObjectTest $parent,
        ObjectTestIdNullableArgs $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info
    ): string|\GraphQL\Executor\Promise\Promise|null;

    /**
     * @return string|\GraphQL\Executor\Promise\Promise<string>
     */
    public function string(
        ObjectTest $parent,
        ObjectTestStringArgs $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info
    ): string|\GraphQL\Executor\Promise\Promise;

    /**
     * @return string|null|\GraphQL\Executor\Promise\Promise<string|null>
     */
    public function stringNullable(
        ObjectTest $parent,
        ObjectTestStringNullableArgs $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info
    ): string|\GraphQL\Executor\Promise\Promise|null;

    /**
     * @return bool|\GraphQL\Executor\Promise\Promise<bool>
     */
    public function boolean(
        ObjectTest $parent,
        ObjectTestBooleanArgs $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info
    ): bool|\GraphQL\Executor\Promise\Promise;

    /**
     * @return bool|null|\GraphQL\Executor\Promise\Promise<bool|null>
     */
    public function booleanNullable(
        ObjectTest $parent,
        ObjectTestBooleanNullableArgs $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info
    ): bool|\GraphQL\Executor\Promise\Promise|null;

    /**
     * @return float|\GraphQL\Executor\Promise\Promise<float>
     */
    public function float(
        ObjectTest $parent,
        ObjectTestFloatArgs $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info
    ): float|\GraphQL\Executor\Promise\Promise;

    /**
     * @return float|null|\GraphQL\Executor\Promise\Promise<float|null>
     */
    public function floatNullable(
        ObjectTest $parent,
        ObjectTestFloatNullableArgs $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info
    ): float|\GraphQL\Executor\Promise\Promise|null;

    /**
     * @return int|\GraphQL\Executor\Promise\Promise<int>
     */
    public function int(
        ObjectTest $parent,
        ObjectTestIntArgs $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info
    ): int|\GraphQL\Executor\Promise\Promise;

    /**
     * @return int|null|\GraphQL\Executor\Promise\Promise<int|null>
     */
    public function intNullable(
        ObjectTest $parent,
        ObjectTestIntNullableArgs $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info
    ): int|\GraphQL\Executor\Promise\Promise|null;

    /**
     * @return \Test\EnumTest|null|\GraphQL\Executor\Promise\Promise<\Test\EnumTest|null>
     */
    public function enum(
        ObjectTest $parent,
        ObjectTestEnumArgs $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info
    ): EnumTest|\GraphQL\Executor\Promise\Promise|null;

    /**
     * @return \Test\EnumTest|\GraphQL\Executor\Promise\Promise<\Test\EnumTest>
     */
    public function enumNullable(
        ObjectTest $parent,
        ObjectTestEnumNullableArgs $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info
    ): EnumTest|\GraphQL\Executor\Promise\Promise;
}
