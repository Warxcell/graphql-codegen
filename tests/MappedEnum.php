<?php

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests\Basic;

enum MappedEnum: string
{
    case ONE = 'ONE';
    case TWO = 'TWO';
    case THREE = 'THREE';
}
