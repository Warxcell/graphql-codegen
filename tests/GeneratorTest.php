<?php

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\Tests;

use Arxy\GraphQLCodegen\Generator;
use Arxy\GraphQLCodegen\Module;
use Arxy\GraphQLCodegen\Tests\Basic\MappedEnum;
use Doctrine\Common\Annotations\AnnotationException;
use Doctrine\Common\Annotations\DocParser;
use Doctrine\Common\Annotations\ImplicitlyIgnoredAnnotationNames;
use PhpParser\{Comment\Doc, Node, NodeTraverser, NodeVisitorAbstract, ParserFactory};
use PHPUnit\Framework\TestCase;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use ReflectionException;
use SplFileInfo;

use function array_map;
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
            new Module(__DIR__ . '/schema.graphql', 'Test', [
                'MappedEnum' => MappedEnum::class,
            ]),
        ], $writer);

        $generator->execute();

        $generated = $writer->getGenerated();
        $it = new RecursiveDirectoryIterator(__DIR__ . '/expected');
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
        $visitor = new class extends NodeVisitorAbstract {
            /**
             * @var array<Node>
             */
            private array $nodes = [];

            public function enterNode(Node $node)
            {
                $this->nodes[] = $node;
            }

            public function getNodes(): array
            {
                try {
                    return $this->nodes;
                } finally {
                    $this->nodes = [];
                }
            }
        };

        $traverser = new NodeTraverser();
        $traverser->addVisitor($visitor);

        $parser = (new ParserFactory())->create(ParserFactory::PREFER_PHP7);

        self::assertNotNull($actualPhp);

        $traverser->traverse($parser->parse($expectedPhp));
        $expectedNodes = $visitor->getNodes();

        $traverser->traverse($parser->parse($actualPhp));
        $actualNodes = $visitor->getNodes();

        foreach ($expectedNodes as $i => $expectedNode) {
            self::assertArrayHasKey($i, $actualNodes);

            $actualNode = $actualNodes[$i];

            //            try {
            //                self::compareNodes($expectedNode, $actualNode);
            //            } catch (Exception $exception) {
            self::assertEquals($expectedPhp, $actualPhp);
            //            }
        }
    }

    private static function compareNodes(Node $expected, Node $actual): void
    {
        self::assertInstanceOf($expected::class, $actual);

        $expectedAttrs = $expected->getAttributes();
        $actualAttrs = $actual->getAttributes();

        $expectedComments = $expectedAttrs['comments'] ?? [];
        $actualComments = $actualAttrs['comments'] ?? [];

        foreach (['endLine', 'startFilePos', 'endFilePos', 'startLine', 'comments'] as $attr) {
            unset($expectedAttrs[$attr], $actualAttrs[$attr]);
        }

        self::assertEquals($expectedAttrs, $actualAttrs);

        /**
         * @throws ReflectionException
         * @throws AnnotationException
         */
        $commentFn = static fn (Doc $doc) => self::$annotationParser->parse($doc->getText());
        self::assertEquals(
            array_map($commentFn, $expectedComments),
            array_map($commentFn, $actualComments),
        );
    }
}
