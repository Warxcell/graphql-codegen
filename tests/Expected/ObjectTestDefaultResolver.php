<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Expected;

class ObjectTestDefaultResolver implements ObjectTestResolver
{
    /**
     * @return string|\GraphQL\Executor\Promise\Promise<string>
     */
    public function id(
        ObjectTest $parent,
        ObjectTestIdArgs $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info
    ): string|\GraphQL\Executor\Promise\Promise {
        return $parent->id;
    }

    /**
     * @return string|null|\GraphQL\Executor\Promise\Promise<string|null>
     */
    public function idNullable(
        ObjectTest $parent,
        ObjectTestIdNullableArgs $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info
    ): string|\GraphQL\Executor\Promise\Promise|null {
        return $parent->idNullable;
    }

    /**
     * @return string|\GraphQL\Executor\Promise\Promise<string>
     */
    public function string(
        ObjectTest $parent,
        ObjectTestStringArgs $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info
    ): string|\GraphQL\Executor\Promise\Promise {
        return $parent->string;
    }

    /**
     * @return string|null|\GraphQL\Executor\Promise\Promise<string|null>
     */
    public function stringNullable(
        ObjectTest $parent,
        ObjectTestStringNullableArgs $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info
    ): string|\GraphQL\Executor\Promise\Promise|null {
        return $parent->stringNullable;
    }

    /**
     * @return bool|\GraphQL\Executor\Promise\Promise<bool>
     */
    public function boolean(
        ObjectTest $parent,
        ObjectTestBooleanArgs $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info
    ): bool|\GraphQL\Executor\Promise\Promise {
        return $parent->boolean;
    }

    /**
     * @return bool|null|\GraphQL\Executor\Promise\Promise<bool|null>
     */
    public function booleanNullable(
        ObjectTest $parent,
        ObjectTestBooleanNullableArgs $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info
    ): bool|\GraphQL\Executor\Promise\Promise|null {
        return $parent->booleanNullable;
    }

    /**
     * @return float|\GraphQL\Executor\Promise\Promise<float>
     */
    public function float(
        ObjectTest $parent,
        ObjectTestFloatArgs $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info
    ): float|\GraphQL\Executor\Promise\Promise {
        return $parent->float;
    }

    /**
     * @return float|null|\GraphQL\Executor\Promise\Promise<float|null>
     */
    public function floatNullable(
        ObjectTest $parent,
        ObjectTestFloatNullableArgs $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info
    ): float|\GraphQL\Executor\Promise\Promise|null {
        return $parent->floatNullable;
    }

    /**
     * @return int|\GraphQL\Executor\Promise\Promise<int>
     */
    public function int(
        ObjectTest $parent,
        ObjectTestIntArgs $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info
    ): int|\GraphQL\Executor\Promise\Promise {
        return $parent->int;
    }

    /**
     * @return int|null|\GraphQL\Executor\Promise\Promise<int|null>
     */
    public function intNullable(
        ObjectTest $parent,
        ObjectTestIntNullableArgs $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info
    ): int|\GraphQL\Executor\Promise\Promise|null {
        return $parent->intNullable;
    }

    /**
     * @return \Arxy\GraphQLCodegen\Tests\Expected\EnumTest|\GraphQL\Executor\Promise\Promise<\Arxy\GraphQLCodegen\Tests\Expected\EnumTest>
     */
    public function enum(
        ObjectTest $parent,
        ObjectTestEnumArgs $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info
    ): EnumTest|\GraphQL\Executor\Promise\Promise {
        return $parent->enum;
    }

    /**
     * @return \Arxy\GraphQLCodegen\Tests\Expected\EnumTest|null|\GraphQL\Executor\Promise\Promise<\Arxy\GraphQLCodegen\Tests\Expected\EnumTest|null>
     */
    public function enumNullable(
        ObjectTest $parent,
        ObjectTestEnumNullableArgs $args,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info
    ): EnumTest|\GraphQL\Executor\Promise\Promise|null {
        return $parent->enumNullable;
    }
}
