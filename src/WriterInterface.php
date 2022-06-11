<?php

declare(strict_types=1);

namespace Arxy\GraphQLCodegen;

use Nette\PhpGenerator\PhpFile;

interface WriterInterface
{
    public function init(ModuleInterface $module): void;

    public function write(ModuleInterface $module, PhpFile $file): void;
}

