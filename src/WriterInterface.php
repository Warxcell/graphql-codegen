<?php

declare(strict_types=1);

namespace Arxy\GraphQLCodegen;

use Nette\PhpGenerator\PhpFile;

/**
 * @template T of ModuleInterface
 */
interface WriterInterface
{
    /**
     * @param T $module
     */
    public function init(ModuleInterface $module): void;

    /**
     * @param T $module
     */
    public function write(ModuleInterface $module, PhpFile $file): void;
}

