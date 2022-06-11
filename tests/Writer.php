<?php

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests;

use Arxy\GraphQLCodegen\ModuleInterface;
use Arxy\GraphQLCodegen\WriterInterface;
use Nette\PhpGenerator\PhpFile;
use Nette\PhpGenerator\Printer;
use Nette\PhpGenerator\PsrPrinter;

final class Writer implements WriterInterface
{
    /**
     * @var array<string>
     */
    private array $generated = [];
    private readonly Printer $psrPrinter;

    public function __construct()
    {
        $this->psrPrinter = new PsrPrinter();
    }

    public function init(ModuleInterface $module): void
    {
    }

    public function write(ModuleInterface $module, PhpFile $file): void
    {
        foreach ($file->getClasses() as $name => $class) {
            $this->generated[$class->getName()] = $this->psrPrinter->printFile($file);
        }
    }

    public function getGenerated(): array
    {
        return $this->generated;
    }
}

