<?php

declare(strict_types=1);

namespace Arxy\GraphQLCodegen;

final class DirectoryAwareModule extends Module
{
    public function __construct(
        string $name,
        string $schema,
        string $namespace,
        array $typeMapping,
        public readonly string $directory
    ) {
        parent::__construct($name, $schema, $namespace, $typeMapping);
    }
}

