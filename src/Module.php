<?php

declare(strict_types=1);

namespace Arxy\GraphQLCodegen;

final class Module implements ModuleInterface
{
    public function __construct(
        private readonly string $name,
        private readonly string $schema,
        private readonly string $namespace,
        /**
         * @var array<string, class-string|string>
         */
        private readonly array $typeMapping
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

    /**
     * @return array<string, class-string|string>
     */
    public function getTypeMapping(): array
    {
        return $this->typeMapping;
    }
}

