<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Module2\Expected;

interface OneMappedOneNotMappedResolverInterface
{
    /**
     * @return 'OneMapped' | 'OneNotMapped'
     */
    public function resolveType(
        \stdClass|OneNotMappedInterface $value,
        mixed $context,
        \GraphQL\Type\Definition\ResolveInfo $info,
    ): string;
}
