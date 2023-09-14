<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Module1\Expected;

/**
 * @phpstan-type MultipleTypesMappedToSameInnerType 'MultipleTypesMappedToSameInnerType1' | 'MultipleTypesMappedToSameInnerType2'
 */
interface MultipleTypesMappedToSameInnerTypeResolverInterface
{
    /**
     * @return MultipleTypesMappedToSameInnerType
     */
    public function resolveType(\stdClass $value, mixed $context, \GraphQL\Type\Definition\ResolveInfo $info): string;
}
