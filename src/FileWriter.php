<?php

declare(strict_types=1);

namespace Arxy\GraphQLCodegen;

use Nette\PhpGenerator\PhpFile;
use Nette\PhpGenerator\Printer;
use Nette\PhpGenerator\PsrPrinter;

use function file_put_contents;
use function glob;
use function is_dir;
use function is_file;
use function mkdir;
use function sprintf;
use function unlink;

final class FileWriter implements WriterInterface
{
    public function __construct(
        private readonly string $directory,
        private readonly Printer $printer = new PsrPrinter()
    ) {
    }

    public function init(ModuleInterface $module): void
    {
        if (!is_dir($this->directory)) {
            mkdir($this->directory);
        } else {
            $files = glob(sprintf('%s/*', $this->directory));
            foreach ($files as $file) {
                if (is_file($file)) {
                    unlink($file);
                }
            }
        }
    }

    public function write(ModuleInterface $module, PhpFile $file): void
    {
        $classes = $file->getClasses();
        assert(count($classes) === 0);

        $filename = sprintf('%s/%s.php', $this->directory, reset($classes)->getName());
        file_put_contents($filename, $this->printer->printFile($file));
    }
}

