<?php

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests;

use Arxy\GraphQLCodegen\ModuleInterface;
use Arxy\GraphQLCodegen\WriterInterface;
use Nette\PhpGenerator\PhpFile;

final class Writer implements WriterInterface
{
    /**
     * @var array<string>
     */
    private array $generated = [];

    public function init(ModuleInterface $module): void
    {
    }

    public function write(ModuleInterface $module, PhpFile $file): void
    {
        foreach ($file->getClasses() as $name => $class) {
            $this->generated[$class->getName()] = (string)$file;
        }
    }

    public function getGenerated(): array
    {
        return $this->generated;
    }
}

