<?php

declare(strict_types=1);

namespace Arxy\GraphQLCodegen;

use Nette\PhpGenerator\PhpFile;
use Nette\PhpGenerator\Printer;
use Nette\PhpGenerator\PsrPrinter;

use function assert;
use function file_put_contents;
use function glob;
use function is_dir;
use function is_file;
use function mkdir;
use function reset;
use function sprintf;
use function unlink;

/**
 * @implements WriterInterface<DirectoryAwareModule>
 */
final class DirectoryAwareFileWriter implements WriterInterface
{
    public function __construct(
        private readonly Printer $printer = new PsrPrinter()
    ) {
    }

    public function init(ModuleInterface $module): void
    {
        assert($module instanceof DirectoryAwareModule);

        if (!is_dir($module->directory)) {
            mkdir($module->directory);
        } else {
            $files = glob(sprintf('%s/*', $module->directory));
            foreach ($files as $file) {
                if (is_file($file)) {
                    unlink($file);
                }
            }
        }
    }

    public function write(ModuleInterface $module, PhpFile $file): void
    {
        assert($module instanceof DirectoryAwareModule);

        $classes = $file->getClasses();
        assert(count($classes) !== 0);

        $class = reset($classes)->getName();

        assert($class !== null);

        $filename = sprintf('%s/%s.php', $module->directory, $class);
        file_put_contents($filename, $this->printer->printFile($file));
    }
}

