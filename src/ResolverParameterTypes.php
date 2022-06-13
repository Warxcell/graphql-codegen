<?php

declare(strict_types=1);

namespace Arxy\GraphQLCodegen;

use GraphQL\Type\Definition\ResolveInfo;

final class ResolverParameterTypes
{
    /**
     * @param class-string|string $contextType
     * @param class-string|string $info
     * @param class-string|string $rootValue
     */
    public function __construct(
        public readonly string $contextType = 'mixed',
        public readonly string $info = ResolveInfo::class,
        public readonly string $rootValue = 'mixed'
    ) {
    }
}

