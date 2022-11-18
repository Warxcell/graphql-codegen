<?php

declare(strict_types=1);

namespace Arxy\GraphQLCodegen;

use GraphQL\Language\AST\Node;
use Nette\PhpGenerator\ClassLike;

final class TypeRegistry
{
    /**
     * @var array<string, array<string, ClassLike>>
     */
    private array $generatedClasses = [];

    public function all(): array
    {
        return $this->generatedClasses;
    }

    public function add(
        Node $definitionNode,
        ClassLike $type,
        Module $module
    ): void {
        $this->generatedClasses[$module->getName()][] = $type;
    }
}

