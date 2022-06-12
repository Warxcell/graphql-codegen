<?php

declare(strict_types=1);

namespace Arxy\GraphQLCodegen;

use GraphQL\Type\Definition\ResolveInfo;

final class ResolverParameterTypes
{
    /**
     * @param class-string|string $contextType
     * @param class-string|string $info
     */
    public function __construct(
        public readonly string $contextType,
        public readonly string $info = ResolveInfo::class
    ) {
    }
}

