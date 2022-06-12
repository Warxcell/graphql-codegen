<?php

declare(strict_types=1);

namespace Arxy\GraphQLCodegen;

interface ModuleInterface
{
    public function getName(): string;

    public function getSchema(): string;

    public function getNamespace(): string;

    /**
     * @return array<string, class-string|string>
     */
    public function getTypeMapping(): array;
}

