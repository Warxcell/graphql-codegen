<?php

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests;

use Arxy\GraphQLCodegen\CodegenException;
use Arxy\GraphQLCodegen\Generator;
use Arxy\GraphQLCodegen\Module;
use Arxy\GraphQLCodegen\WriterInterface;
use PHPUnit\Framework\TestCase;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use SplFileInfo;
use stdClass;

use function assert;
use function file_get_contents;

class GeneratorTest extends TestCase
{
    public function testGenerate(): void
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

            self::assertArrayHasKey($name, $generated);
            $actualPhp = file_get_contents($file->getRealPath());

            $expectedPhp = $generated[$name];

            self::assertNotNull($actualPhp);
            self::assertEquals($expectedPhp, $actualPhp);
        }
    }

    public function testEnumToNonExistingClass()
    {
        $generator = new Generator([
            new Module(
                __DIR__ . '/schema.graphql', __NAMESPACE__ . '\\Expected',
                [
                    'MappedEnum' => 'NonExistingClass',
                ]
            ),
        ], $this->createMock(WriterInterface::class));

        $this->expectException(CodegenException::class);
        $this->expectExceptionMessage(
            'MappedEnum maps to NonExistingClass which is non-enum (defined in Arxy\GraphQLCodegen\Module)'
        );
        $generator->execute();
    }

    public function testEnumIsNotEnum()
    {
        $generator = new Generator([
            new Module(
                __DIR__ . '/schema.graphql', __NAMESPACE__ . '\\Expected',
                [
                    'MappedEnum' => stdClass::class,
                ]
            ),
        ], $this->createMock(WriterInterface::class));

        $this->expectException(CodegenException::class);
        $this->expectExceptionMessage(
            'MappedEnum maps to stdClass which is non-enum (defined in Arxy\GraphQLCodegen\Module)'
        );
        $generator->execute();
    }

    public function testEnumNotBacked()
    {
        $generator = new Generator([
            new Module(
                __DIR__ . '/schema.graphql', __NAMESPACE__ . '\\Expected',
                [
                    'MappedEnum' => NotBackedEnum::class,
                ]
            ),
        ], $this->createMock(WriterInterface::class));

        $this->expectException(CodegenException::class);
        $this->expectExceptionMessage(
            'MappedEnum maps to Arxy\GraphQLCodegen\Tests\NotBackedEnum which is non-backed enum (defined in Arxy\GraphQLCodegen\Module)'
        );
        $generator->execute();
    }
}