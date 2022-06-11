<?php

declare(strict_types=1);

namespace Arxy\GraphQLCodegen;

interface ModuleInterface
{
    public function getSchema(): string;

    public function getNamespace(): string;

    public function getTypeMapping(): array;
}

