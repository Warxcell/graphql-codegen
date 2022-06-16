<?php

declare(strict_types=1);

namespace Arxy\GraphQLCodegen;

final class Module
{
    public function __construct(
        private readonly string $name,
        private readonly string $schema,
        private readonly string $namespace,
        private readonly string $directory,
        /**
         * @var array<string, class-string|string>
         */
        private readonly array $typeMapping = [],
        private readonly array $validationMapping = []
    ) {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSchema(): string
    {
        return $this->schema;
    }

    public function getNamespace(): string
    {
        return $this->namespace;
    }

    public function getDirectory(): string
    {
        return $this->directory;
    }

    /**
     * @return array<string, class-string|string>
     */
    public function getTypeMapping(): array
    {
        return $this->typeMapping;
    }

    /**
     * @return array<string, class-string>
     */
    public function getValidationMapping(): array
    {
        return $this->validationMapping;
    }
}

