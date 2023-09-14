<?php

declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

ini_set('display_errors', '1');
error_reporting(E_ALL);

use Arxy\GraphQL\Codegen\TypeDecorator;
use Arxy\GraphQLCodegen\BaseModule;
use Arxy\GraphQLCodegen\Generator;
use Arxy\GraphQLCodegen\Module;
use Arxy\GraphQLCodegen\Tests\Module1\AnotherMappedInput;
use Arxy\GraphQLCodegen\Tests\Module1\MappedEnum;
use Arxy\GraphQLCodegen\Tests\Module1\MappedInput;
use Arxy\GraphQLCodegen\TypeDecorator\ChainDecorator;
use Arxy\GraphQLCodegen\TypeDecorator\SymfonyValidatorTypeDecorator;
use GraphQL\Language\Parser;
use GraphQL\Utils\AST;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Range;

$modules = [
    new Module(
        name: 'module1',
        schema: __DIR__ . '/tests/Module1/schema.graphql',
        namespace: 'Arxy\GraphQLCodegen\Tests\Module1\Expected',
        directory: __DIR__ . '/tests/Module1/Expected',
        typeMapping: [
            'DateTime' => DateTimeInterface::class,
            'TestSameType1' => DateTimeInterface::class,
            'TestSameType2' => DateTimeInterface::class,
            'OneMapped' => stdClass::class,
            'MappedEnum' => MappedEnum::class,
            'TestMappedInput' => MappedInput::class,
            'AnotherMappedInput' => AnotherMappedInput::class,
            'JSON' => 'array<string, mixed>',
            'Decimal' => 'numeric-string',
            'MultipleTypesMappedToSameInnerType1' => stdClass::class,
            'MultipleTypesMappedToSameInnerType2' => stdClass::class,
        ],
        validationMapping: [
            'Mutation' => [
                'createUser' => [
                    'int' => [
                        Range::class => [
                            'min' => 1,
                            'max' => 600,
                        ],
                    ],
                    'bool' => [
                        IsTrue::class
                    ]
                ]
            ],
            'CreateUserInput' => [
                'int' => [
                    Range::class => [
                        'min' => 1,
                        'max' => 600,
                    ],
                ],
                'bool' => [
                    IsTrue::class
                ]
            ]
        ]
    ),
    new Module(
        name: 'module2',
        schema: __DIR__ . '/tests/Module2/schema.graphql',
        namespace: 'Arxy\GraphQLCodegen\Tests\Module2\Expected',
        directory: __DIR__ . '/tests/Module2/Expected',
        typeMapping: []
    ),
];

foreach ($modules as $module) {
    file_put_contents(
        dirname($module->getSchema()) . '/ast.php',
        "<?php\n\ndeclare(strict_types=1);\n\nreturn " . var_export(
            AST::toArray(
                Parser::parse(
                    file_get_contents(
                        $module->getSchema()
                    )
                )
            ),
            true
        ) . ";\n"
    );
}

$typeDecorator = new ChainDecorator([
    new SymfonyValidatorTypeDecorator(),
]);
$generator = new Generator(
    new BaseModule('Arxy\GraphQLCodegen\Tests\Expected', __DIR__ . '/tests/Expected'),
    $modules,
    typeDecorator: $typeDecorator
);
$generator->execute();

