<?php

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests;

use Arxy\GraphQLCodegen\Generator;
use Arxy\GraphQLCodegen\Module;
use Doctrine\Common\Annotations\DocParser;
use Doctrine\Common\Annotations\ImplicitlyIgnoredAnnotationNames;
use PHPUnit\Framework\TestCase;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use SplFileInfo;

use function assert;
use function file_get_contents;

class GeneratorTest extends TestCase
{
    private static DocParser $annotationParser;

    public static function setUpBeforeClass(): void
    {
        self::$annotationParser = new DocParser();
        self::$annotationParser->setIgnoreNotImportedAnnotations(true);
        self::$annotationParser->setIgnoredAnnotationNames(ImplicitlyIgnoredAnnotationNames::LIST);
    }

    public function generateDataset(): iterable
    {
        $writer = new Writer();
        $generator = new Generator([
            new Module(__DIR__ . '/schema.graphql', __NAMESPACE__ . '\\Expected', [
                'MappedEnum' => MappedEnum::class,
            ]),
        ], $writer);

        $generator->execute();

        $generated = $writer->getGenerated();
        $it = new RecursiveDirectoryIterator(__DIR__ . '/Expected');
        foreach (new RecursiveIteratorIterator($it) as $file) {
            assert($file instanceof SplFileInfo);
            if ($file->getType() !== 'file') {
                continue;
            }
            $name = $file->getBasename('.' . $file->getExtension());

            yield $name => [
                file_get_contents($file->getRealPath()),
                $generated[$name] ?? null,
            ];
        }

    }

    /**
     * @dataProvider generateDataset
     */
    public function testGenerate(string $expectedPhp, ?string $actualPhp): void
    {
        self::assertNotNull($actualPhp);
        self::assertEquals($expectedPhp, $actualPhp);

    }
}
