<?php

namespace Arxy\GraphQLCodegen;

final class BaseModule
{
    public function __construct(
        private readonly string $namespace,
        private readonly string $directory
    ) {
    }

    public function getNamespace(): string
    {
        return $this->namespace;
    }

    public function getDirectory(): string
    {
        return $this->directory;
    }
}
