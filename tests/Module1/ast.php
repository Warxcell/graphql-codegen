<?php

declare(strict_types=1);

return array (
  'loc' => 
  array (
    'start' => 0,
    'end' => 2363,
  ),
  'kind' => 'Document',
  'definitions' => 
  array (
    0 => 
    array (
      'loc' => 
      array (
        'start' => 0,
        'end' => 50,
      ),
      'kind' => 'SchemaDefinition',
      'directives' => 
      array (
      ),
      'operationTypes' => 
      array (
        0 => 
        array (
          'loc' => 
          array (
            'start' => 13,
            'end' => 25,
          ),
          'kind' => 'OperationTypeDefinition',
          'operation' => 'query',
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 20,
              'end' => 25,
            ),
            'kind' => 'NamedType',
            'name' => 
            array (
              'loc' => 
              array (
                'start' => 20,
                'end' => 25,
              ),
              'kind' => 'Name',
              'value' => 'Query',
            ),
          ),
        ),
        1 => 
        array (
          'loc' => 
          array (
            'start' => 30,
            'end' => 48,
          ),
          'kind' => 'OperationTypeDefinition',
          'operation' => 'mutation',
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 40,
              'end' => 48,
            ),
            'kind' => 'NamedType',
            'name' => 
            array (
              'loc' => 
              array (
                'start' => 40,
                'end' => 48,
              ),
              'kind' => 'Name',
              'value' => 'Mutation',
            ),
          ),
        ),
      ),
    ),
    1 => 
    array (
      'loc' => 
      array (
        'start' => 52,
        'end' => 67,
      ),
      'kind' => 'ScalarTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 59,
          'end' => 67,
        ),
        'kind' => 'Name',
        'value' => 'DateTime',
      ),
      'directives' => 
      array (
      ),
    ),
    2 => 
    array (
      'loc' => 
      array (
        'start' => 69,
        'end' => 80,
      ),
      'kind' => 'ScalarTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 76,
          'end' => 80,
        ),
        'kind' => 'Name',
        'value' => 'JSON',
      ),
      'directives' => 
      array (
      ),
    ),
    3 => 
    array (
      'loc' => 
      array (
        'start' => 81,
        'end' => 100,
      ),
      'kind' => 'ScalarTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 88,
          'end' => 100,
        ),
        'kind' => 'Name',
        'value' => 'JSONSpecific',
      ),
      'directives' => 
      array (
      ),
    ),
    4 => 
    array (
      'loc' => 
      array (
        'start' => 102,
        'end' => 116,
      ),
      'kind' => 'ScalarTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 109,
          'end' => 116,
        ),
        'kind' => 'Name',
        'value' => 'Decimal',
      ),
      'directives' => 
      array (
      ),
    ),
    5 => 
    array (
      'loc' => 
      array (
        'start' => 118,
        'end' => 148,
      ),
      'kind' => 'InterfaceTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 128,
          'end' => 132,
        ),
        'kind' => 'Name',
        'value' => 'Node',
      ),
      'directives' => 
      array (
      ),
      'interfaces' => 
      array (
      ),
      'fields' => 
      array (
        0 => 
        array (
          'loc' => 
          array (
            'start' => 139,
            'end' => 146,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 139,
              'end' => 141,
            ),
            'kind' => 'Name',
            'value' => 'id',
          ),
          'arguments' => 
          array (
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 143,
              'end' => 146,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 143,
                'end' => 145,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 143,
                  'end' => 145,
                ),
                'kind' => 'Name',
                'value' => 'ID',
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
      ),
    ),
    6 => 
    array (
      'loc' => 
      array (
        'start' => 150,
        'end' => 424,
      ),
      'kind' => 'ObjectTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 155,
          'end' => 160,
        ),
        'kind' => 'Name',
        'value' => 'Query',
      ),
      'interfaces' => 
      array (
      ),
      'directives' => 
      array (
      ),
      'fields' => 
      array (
        0 => 
        array (
          'loc' => 
          array (
            'start' => 167,
            'end' => 207,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 167,
              'end' => 197,
            ),
            'kind' => 'Name',
            'value' => 'nullableArrayWithNullableItems',
          ),
          'arguments' => 
          array (
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 199,
              'end' => 207,
            ),
            'kind' => 'ListType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 200,
                'end' => 206,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 200,
                  'end' => 206,
                ),
                'kind' => 'Name',
                'value' => 'String',
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
        1 => 
        array (
          'loc' => 
          array (
            'start' => 212,
            'end' => 256,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 212,
              'end' => 245,
            ),
            'kind' => 'Name',
            'value' => 'nullableArrayWithNonNullableItems',
          ),
          'arguments' => 
          array (
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 247,
              'end' => 256,
            ),
            'kind' => 'ListType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 248,
                'end' => 255,
              ),
              'kind' => 'NonNullType',
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 248,
                  'end' => 254,
                ),
                'kind' => 'NamedType',
                'name' => 
                array (
                  'loc' => 
                  array (
                    'start' => 248,
                    'end' => 254,
                  ),
                  'kind' => 'Name',
                  'value' => 'String',
                ),
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
        2 => 
        array (
          'loc' => 
          array (
            'start' => 261,
            'end' => 309,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 261,
              'end' => 297,
            ),
            'kind' => 'Name',
            'value' => 'nonNullableArrayWithNonNullableItems',
          ),
          'arguments' => 
          array (
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 299,
              'end' => 309,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 299,
                'end' => 308,
              ),
              'kind' => 'ListType',
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 300,
                  'end' => 307,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 300,
                    'end' => 306,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 300,
                      'end' => 306,
                    ),
                    'kind' => 'Name',
                    'value' => 'String',
                  ),
                ),
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
        3 => 
        array (
          'loc' => 
          array (
            'start' => 314,
            'end' => 358,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 314,
              'end' => 347,
            ),
            'kind' => 'Name',
            'value' => 'nonNullableArrayWithNullableItems',
          ),
          'arguments' => 
          array (
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 349,
              'end' => 358,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 349,
                'end' => 357,
              ),
              'kind' => 'ListType',
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 350,
                  'end' => 356,
                ),
                'kind' => 'NamedType',
                'name' => 
                array (
                  'loc' => 
                  array (
                    'start' => 350,
                    'end' => 356,
                  ),
                  'kind' => 'Name',
                  'value' => 'String',
                ),
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
        4 => 
        array (
          'loc' => 
          array (
            'start' => 363,
            'end' => 390,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 363,
              'end' => 367,
            ),
            'kind' => 'Name',
            'value' => 'ping',
          ),
          'arguments' => 
          array (
            0 => 
            array (
              'loc' => 
              array (
                'start' => 368,
                'end' => 380,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 368,
                  'end' => 370,
                ),
                'kind' => 'Name',
                'value' => 'da',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 372,
                  'end' => 380,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 372,
                    'end' => 379,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 372,
                      'end' => 379,
                    ),
                    'kind' => 'Name',
                    'value' => 'Boolean',
                  ),
                ),
              ),
              'directives' => 
              array (
              ),
            ),
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 383,
              'end' => 390,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 383,
                'end' => 389,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 383,
                  'end' => 389,
                ),
                'kind' => 'Name',
                'value' => 'String',
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
        5 => 
        array (
          'loc' => 
          array (
            'start' => 395,
            'end' => 422,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 395,
              'end' => 407,
            ),
            'kind' => 'Name',
            'value' => 'testSameType',
          ),
          'arguments' => 
          array (
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 409,
              'end' => 422,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 409,
                'end' => 421,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 409,
                  'end' => 421,
                ),
                'kind' => 'Name',
                'value' => 'TestSameType',
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
      ),
    ),
    7 => 
    array (
      'loc' => 
      array (
        'start' => 426,
        'end' => 641,
      ),
      'kind' => 'ObjectTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 431,
          'end' => 439,
        ),
        'kind' => 'Name',
        'value' => 'Mutation',
      ),
      'interfaces' => 
      array (
      ),
      'directives' => 
      array (
      ),
      'fields' => 
      array (
        0 => 
        array (
          'loc' => 
          array (
            'start' => 446,
            'end' => 620,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 446,
              'end' => 456,
            ),
            'kind' => 'Name',
            'value' => 'createUser',
          ),
          'arguments' => 
          array (
            0 => 
            array (
              'loc' => 
              array (
                'start' => 457,
                'end' => 480,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 457,
                  'end' => 462,
                ),
                'kind' => 'Name',
                'value' => 'input',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 464,
                  'end' => 480,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 464,
                    'end' => 479,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 464,
                      'end' => 479,
                    ),
                    'kind' => 'Name',
                    'value' => 'CreateUserInput',
                  ),
                ),
              ),
              'directives' => 
              array (
              ),
            ),
            1 => 
            array (
              'loc' => 
              array (
                'start' => 482,
                'end' => 490,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 482,
                  'end' => 485,
                ),
                'kind' => 'Name',
                'value' => 'int',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 487,
                  'end' => 490,
                ),
                'kind' => 'NamedType',
                'name' => 
                array (
                  'loc' => 
                  array (
                    'start' => 487,
                    'end' => 490,
                  ),
                  'kind' => 'Name',
                  'value' => 'Int',
                ),
              ),
              'directives' => 
              array (
              ),
            ),
            2 => 
            array (
              'loc' => 
              array (
                'start' => 492,
                'end' => 506,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 492,
                  'end' => 496,
                ),
                'kind' => 'Name',
                'value' => 'bool',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 498,
                  'end' => 506,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 498,
                    'end' => 505,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 498,
                      'end' => 505,
                    ),
                    'kind' => 'Name',
                    'value' => 'Boolean',
                  ),
                ),
              ),
              'directives' => 
              array (
              ),
            ),
            3 => 
            array (
              'loc' => 
              array (
                'start' => 508,
                'end' => 539,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 508,
                  'end' => 531,
                ),
                'kind' => 'Name',
                'value' => 'nonNullArrayNonNullItem',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 533,
                  'end' => 539,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 533,
                    'end' => 538,
                  ),
                  'kind' => 'ListType',
                  'type' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 534,
                      'end' => 537,
                    ),
                    'kind' => 'NonNullType',
                    'type' => 
                    array (
                      'loc' => 
                      array (
                        'start' => 534,
                        'end' => 536,
                      ),
                      'kind' => 'NamedType',
                      'name' => 
                      array (
                        'loc' => 
                        array (
                          'start' => 534,
                          'end' => 536,
                        ),
                        'kind' => 'Name',
                        'value' => 'ID',
                      ),
                    ),
                  ),
                ),
              ),
              'directives' => 
              array (
              ),
            ),
            4 => 
            array (
              'loc' => 
              array (
                'start' => 541,
                'end' => 560,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 541,
                  'end' => 553,
                ),
                'kind' => 'Name',
                'value' => 'nonNullArray',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 555,
                  'end' => 560,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 555,
                    'end' => 559,
                  ),
                  'kind' => 'ListType',
                  'type' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 556,
                      'end' => 558,
                    ),
                    'kind' => 'NamedType',
                    'name' => 
                    array (
                      'loc' => 
                      array (
                        'start' => 556,
                        'end' => 558,
                      ),
                      'kind' => 'Name',
                      'value' => 'ID',
                    ),
                  ),
                ),
              ),
              'directives' => 
              array (
              ),
            ),
            5 => 
            array (
              'loc' => 
              array (
                'start' => 562,
                'end' => 585,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 562,
                  'end' => 578,
                ),
                'kind' => 'Name',
                'value' => 'arrayNonNullItem',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 580,
                  'end' => 585,
                ),
                'kind' => 'ListType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 581,
                    'end' => 584,
                  ),
                  'kind' => 'NonNullType',
                  'type' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 581,
                      'end' => 583,
                    ),
                    'kind' => 'NamedType',
                    'name' => 
                    array (
                      'loc' => 
                      array (
                        'start' => 581,
                        'end' => 583,
                      ),
                      'kind' => 'Name',
                      'value' => 'ID',
                    ),
                  ),
                ),
              ),
              'directives' => 
              array (
              ),
            ),
            6 => 
            array (
              'loc' => 
              array (
                'start' => 587,
                'end' => 598,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 587,
                  'end' => 592,
                ),
                'kind' => 'Name',
                'value' => 'array',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 594,
                  'end' => 598,
                ),
                'kind' => 'ListType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 595,
                    'end' => 597,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 595,
                      'end' => 597,
                    ),
                    'kind' => 'Name',
                    'value' => 'ID',
                  ),
                ),
              ),
              'directives' => 
              array (
              ),
            ),
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 601,
              'end' => 620,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 601,
                'end' => 619,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 601,
                  'end' => 619,
                ),
                'kind' => 'Name',
                'value' => 'CreateUserResponse',
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
        1 => 
        array (
          'loc' => 
          array (
            'start' => 625,
            'end' => 639,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 625,
              'end' => 633,
            ),
            'kind' => 'Name',
            'value' => 'testJson',
          ),
          'arguments' => 
          array (
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 635,
              'end' => 639,
            ),
            'kind' => 'NamedType',
            'name' => 
            array (
              'loc' => 
              array (
                'start' => 635,
                'end' => 639,
              ),
              'kind' => 'Name',
              'value' => 'JSON',
            ),
          ),
          'directives' => 
          array (
          ),
        ),
      ),
    ),
    8 => 
    array (
      'loc' => 
      array (
        'start' => 643,
        'end' => 720,
      ),
      'kind' => 'InputObjectTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 649,
          'end' => 664,
        ),
        'kind' => 'Name',
        'value' => 'CreateUserInput',
      ),
      'directives' => 
      array (
      ),
      'fields' => 
      array (
        0 => 
        array (
          'loc' => 
          array (
            'start' => 671,
            'end' => 685,
          ),
          'kind' => 'InputValueDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 671,
              'end' => 676,
            ),
            'kind' => 'Name',
            'value' => 'email',
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 678,
              'end' => 685,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 678,
                'end' => 684,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 678,
                  'end' => 684,
                ),
                'kind' => 'Name',
                'value' => 'String',
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
        1 => 
        array (
          'loc' => 
          array (
            'start' => 690,
            'end' => 699,
          ),
          'kind' => 'InputValueDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 690,
              'end' => 693,
            ),
            'kind' => 'Name',
            'value' => 'int',
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 695,
              'end' => 699,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 695,
                'end' => 698,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 695,
                  'end' => 698,
                ),
                'kind' => 'Name',
                'value' => 'Int',
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
        2 => 
        array (
          'loc' => 
          array (
            'start' => 704,
            'end' => 718,
          ),
          'kind' => 'InputValueDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 704,
              'end' => 708,
            ),
            'kind' => 'Name',
            'value' => 'bool',
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 710,
              'end' => 718,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 710,
                'end' => 717,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 710,
                  'end' => 717,
                ),
                'kind' => 'Name',
                'value' => 'Boolean',
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
      ),
    ),
    9 => 
    array (
      'loc' => 
      array (
        'start' => 722,
        'end' => 764,
      ),
      'kind' => 'ObjectTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 727,
          'end' => 744,
        ),
        'kind' => 'Name',
        'value' => 'CreateUserSuccess',
      ),
      'interfaces' => 
      array (
      ),
      'directives' => 
      array (
      ),
      'fields' => 
      array (
        0 => 
        array (
          'loc' => 
          array (
            'start' => 751,
            'end' => 762,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 751,
              'end' => 755,
            ),
            'kind' => 'Name',
            'value' => 'user',
          ),
          'arguments' => 
          array (
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 757,
              'end' => 762,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 757,
                'end' => 761,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 757,
                  'end' => 761,
                ),
                'kind' => 'Name',
                'value' => 'User',
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
      ),
    ),
    10 => 
    array (
      'loc' => 
      array (
        'start' => 766,
        'end' => 811,
      ),
      'kind' => 'ObjectTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 771,
          'end' => 788,
        ),
        'kind' => 'Name',
        'value' => 'CreateUserFailure',
      ),
      'interfaces' => 
      array (
      ),
      'directives' => 
      array (
      ),
      'fields' => 
      array (
        0 => 
        array (
          'loc' => 
          array (
            'start' => 795,
            'end' => 809,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 795,
              'end' => 800,
            ),
            'kind' => 'Name',
            'value' => 'error',
          ),
          'arguments' => 
          array (
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 802,
              'end' => 809,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 802,
                'end' => 808,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 802,
                  'end' => 808,
                ),
                'kind' => 'Name',
                'value' => 'String',
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
      ),
    ),
    11 => 
    array (
      'loc' => 
      array (
        'start' => 813,
        'end' => 877,
      ),
      'kind' => 'UnionTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 819,
          'end' => 837,
        ),
        'kind' => 'Name',
        'value' => 'CreateUserResponse',
      ),
      'directives' => 
      array (
      ),
      'types' => 
      array (
        0 => 
        array (
          'loc' => 
          array (
            'start' => 840,
            'end' => 857,
          ),
          'kind' => 'NamedType',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 840,
              'end' => 857,
            ),
            'kind' => 'Name',
            'value' => 'CreateUserSuccess',
          ),
        ),
        1 => 
        array (
          'loc' => 
          array (
            'start' => 860,
            'end' => 877,
          ),
          'kind' => 'NamedType',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 860,
              'end' => 877,
            ),
            'kind' => 'Name',
            'value' => 'CreateUserFailure',
          ),
        ),
      ),
    ),
    12 => 
    array (
      'loc' => 
      array (
        'start' => 879,
        'end' => 942,
      ),
      'kind' => 'ObjectTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 884,
          'end' => 888,
        ),
        'kind' => 'Name',
        'value' => 'User',
      ),
      'interfaces' => 
      array (
        0 => 
        array (
          'loc' => 
          array (
            'start' => 900,
            'end' => 904,
          ),
          'kind' => 'NamedType',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 900,
              'end' => 904,
            ),
            'kind' => 'Name',
            'value' => 'Node',
          ),
        ),
      ),
      'directives' => 
      array (
      ),
      'fields' => 
      array (
        0 => 
        array (
          'loc' => 
          array (
            'start' => 911,
            'end' => 918,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 911,
              'end' => 913,
            ),
            'kind' => 'Name',
            'value' => 'id',
          ),
          'arguments' => 
          array (
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 915,
              'end' => 918,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 915,
                'end' => 917,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 915,
                  'end' => 917,
                ),
                'kind' => 'Name',
                'value' => 'ID',
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
        1 => 
        array (
          'loc' => 
          array (
            'start' => 923,
            'end' => 940,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 923,
              'end' => 931,
            ),
            'kind' => 'Name',
            'value' => 'username',
          ),
          'arguments' => 
          array (
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 933,
              'end' => 940,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 933,
                'end' => 939,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 933,
                  'end' => 939,
                ),
                'kind' => 'Name',
                'value' => 'String',
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
      ),
    ),
    13 => 
    array (
      'loc' => 
      array (
        'start' => 944,
        'end' => 976,
      ),
      'kind' => 'UnionTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 950,
          'end' => 956,
        ),
        'kind' => 'Name',
        'value' => 'Widget',
      ),
      'directives' => 
      array (
      ),
      'types' => 
      array (
        0 => 
        array (
          'loc' => 
          array (
            'start' => 959,
            'end' => 966,
          ),
          'kind' => 'NamedType',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 959,
              'end' => 966,
            ),
            'kind' => 'Name',
            'value' => 'Widget1',
          ),
        ),
        1 => 
        array (
          'loc' => 
          array (
            'start' => 969,
            'end' => 976,
          ),
          'kind' => 'NamedType',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 969,
              'end' => 976,
            ),
            'kind' => 'Name',
            'value' => 'Widget2',
          ),
        ),
      ),
    ),
    14 => 
    array (
      'loc' => 
      array (
        'start' => 978,
        'end' => 1012,
      ),
      'kind' => 'ObjectTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 983,
          'end' => 990,
        ),
        'kind' => 'Name',
        'value' => 'Widget1',
      ),
      'interfaces' => 
      array (
      ),
      'directives' => 
      array (
      ),
      'fields' => 
      array (
        0 => 
        array (
          'loc' => 
          array (
            'start' => 997,
            'end' => 1010,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 997,
              'end' => 1001,
            ),
            'kind' => 'Name',
            'value' => 'name',
          ),
          'arguments' => 
          array (
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 1003,
              'end' => 1010,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 1003,
                'end' => 1009,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1003,
                  'end' => 1009,
                ),
                'kind' => 'Name',
                'value' => 'String',
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
      ),
    ),
    15 => 
    array (
      'loc' => 
      array (
        'start' => 1014,
        'end' => 1048,
      ),
      'kind' => 'ObjectTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 1019,
          'end' => 1026,
        ),
        'kind' => 'Name',
        'value' => 'Widget2',
      ),
      'interfaces' => 
      array (
      ),
      'directives' => 
      array (
      ),
      'fields' => 
      array (
        0 => 
        array (
          'loc' => 
          array (
            'start' => 1033,
            'end' => 1046,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1033,
              'end' => 1037,
            ),
            'kind' => 'Name',
            'value' => 'name',
          ),
          'arguments' => 
          array (
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 1039,
              'end' => 1046,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 1039,
                'end' => 1045,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1039,
                  'end' => 1045,
                ),
                'kind' => 'Name',
                'value' => 'String',
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
      ),
    ),
    16 => 
    array (
      'loc' => 
      array (
        'start' => 1050,
        'end' => 1082,
      ),
      'kind' => 'EnumTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 1055,
          'end' => 1060,
        ),
        'kind' => 'Name',
        'value' => 'Enum1',
      ),
      'directives' => 
      array (
      ),
      'values' => 
      array (
        0 => 
        array (
          'loc' => 
          array (
            'start' => 1067,
            'end' => 1071,
          ),
          'kind' => 'EnumValueDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1067,
              'end' => 1071,
            ),
            'kind' => 'Name',
            'value' => 'VAL1',
          ),
          'directives' => 
          array (
          ),
        ),
        1 => 
        array (
          'loc' => 
          array (
            'start' => 1076,
            'end' => 1080,
          ),
          'kind' => 'EnumValueDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1076,
              'end' => 1080,
            ),
            'kind' => 'Name',
            'value' => 'VAL2',
          ),
          'directives' => 
          array (
          ),
        ),
      ),
    ),
    17 => 
    array (
      'loc' => 
      array (
        'start' => 1084,
        'end' => 1146,
      ),
      'kind' => 'UnionTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 1090,
          'end' => 1102,
        ),
        'kind' => 'Name',
        'value' => 'TestResponse',
      ),
      'directives' => 
      array (
      ),
      'types' => 
      array (
        0 => 
        array (
          'loc' => 
          array (
            'start' => 1105,
            'end' => 1124,
          ),
          'kind' => 'NamedType',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1105,
              'end' => 1124,
            ),
            'kind' => 'Name',
            'value' => 'TestSuccessResponse',
          ),
        ),
        1 => 
        array (
          'loc' => 
          array (
            'start' => 1127,
            'end' => 1146,
          ),
          'kind' => 'NamedType',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1127,
              'end' => 1146,
            ),
            'kind' => 'Name',
            'value' => 'TestFailureResponse',
          ),
        ),
      ),
    ),
    18 => 
    array (
      'loc' => 
      array (
        'start' => 1148,
        'end' => 1202,
      ),
      'kind' => 'ObjectTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 1153,
          'end' => 1172,
        ),
        'kind' => 'Name',
        'value' => 'TestFailureResponse',
      ),
      'interfaces' => 
      array (
      ),
      'directives' => 
      array (
      ),
      'fields' => 
      array (
        0 => 
        array (
          'loc' => 
          array (
            'start' => 1179,
            'end' => 1200,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1179,
              'end' => 1185,
            ),
            'kind' => 'Name',
            'value' => 'errors',
          ),
          'arguments' => 
          array (
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 1187,
              'end' => 1200,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 1187,
                'end' => 1199,
              ),
              'kind' => 'ListType',
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 1188,
                  'end' => 1198,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 1188,
                    'end' => 1197,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 1188,
                      'end' => 1197,
                    ),
                    'kind' => 'Name',
                    'value' => 'TestError',
                  ),
                ),
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
      ),
    ),
    19 => 
    array (
      'loc' => 
      array (
        'start' => 1204,
        'end' => 1232,
      ),
      'kind' => 'UnionTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 1210,
          'end' => 1219,
        ),
        'kind' => 'Name',
        'value' => 'TestError',
      ),
      'directives' => 
      array (
      ),
      'types' => 
      array (
        0 => 
        array (
          'loc' => 
          array (
            'start' => 1222,
            'end' => 1232,
          ),
          'kind' => 'NamedType',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1222,
              'end' => 1232,
            ),
            'kind' => 'Name',
            'value' => 'TestError1',
          ),
        ),
      ),
    ),
    20 => 
    array (
      'loc' => 
      array (
        'start' => 1234,
        'end' => 1281,
      ),
      'kind' => 'ObjectTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 1239,
          'end' => 1258,
        ),
        'kind' => 'Name',
        'value' => 'TestSuccessResponse',
      ),
      'interfaces' => 
      array (
      ),
      'directives' => 
      array (
      ),
      'fields' => 
      array (
        0 => 
        array (
          'loc' => 
          array (
            'start' => 1265,
            'end' => 1279,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1265,
              'end' => 1269,
            ),
            'kind' => 'Name',
            'value' => 'bool',
          ),
          'arguments' => 
          array (
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 1271,
              'end' => 1279,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 1271,
                'end' => 1278,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1271,
                  'end' => 1278,
                ),
                'kind' => 'Name',
                'value' => 'Boolean',
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
      ),
    ),
    21 => 
    array (
      'loc' => 
      array (
        'start' => 1283,
        'end' => 1333,
      ),
      'kind' => 'UnionTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 1289,
          'end' => 1301,
        ),
        'kind' => 'Name',
        'value' => 'TestSameType',
      ),
      'directives' => 
      array (
      ),
      'types' => 
      array (
        0 => 
        array (
          'loc' => 
          array (
            'start' => 1304,
            'end' => 1317,
          ),
          'kind' => 'NamedType',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1304,
              'end' => 1317,
            ),
            'kind' => 'Name',
            'value' => 'TestSameType1',
          ),
        ),
        1 => 
        array (
          'loc' => 
          array (
            'start' => 1320,
            'end' => 1333,
          ),
          'kind' => 'NamedType',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1320,
              'end' => 1333,
            ),
            'kind' => 'Name',
            'value' => 'TestSameType2',
          ),
        ),
      ),
    ),
    22 => 
    array (
      'loc' => 
      array (
        'start' => 1335,
        'end' => 1378,
      ),
      'kind' => 'ObjectTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 1340,
          'end' => 1353,
        ),
        'kind' => 'Name',
        'value' => 'TestSameType1',
      ),
      'interfaces' => 
      array (
      ),
      'directives' => 
      array (
      ),
      'fields' => 
      array (
        0 => 
        array (
          'loc' => 
          array (
            'start' => 1360,
            'end' => 1376,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1360,
              'end' => 1367,
            ),
            'kind' => 'Name',
            'value' => 'message',
          ),
          'arguments' => 
          array (
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 1369,
              'end' => 1376,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 1369,
                'end' => 1375,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1369,
                  'end' => 1375,
                ),
                'kind' => 'Name',
                'value' => 'String',
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
      ),
    ),
    23 => 
    array (
      'loc' => 
      array (
        'start' => 1380,
        'end' => 1423,
      ),
      'kind' => 'ObjectTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 1385,
          'end' => 1398,
        ),
        'kind' => 'Name',
        'value' => 'TestSameType2',
      ),
      'interfaces' => 
      array (
      ),
      'directives' => 
      array (
      ),
      'fields' => 
      array (
        0 => 
        array (
          'loc' => 
          array (
            'start' => 1405,
            'end' => 1421,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1405,
              'end' => 1412,
            ),
            'kind' => 'Name',
            'value' => 'message',
          ),
          'arguments' => 
          array (
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 1414,
              'end' => 1421,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 1414,
                'end' => 1420,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1414,
                  'end' => 1420,
                ),
                'kind' => 'Name',
                'value' => 'String',
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
      ),
    ),
    24 => 
    array (
      'loc' => 
      array (
        'start' => 1425,
        'end' => 1455,
      ),
      'kind' => 'ObjectTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 1430,
          'end' => 1439,
        ),
        'kind' => 'Name',
        'value' => 'OneMapped',
      ),
      'interfaces' => 
      array (
      ),
      'directives' => 
      array (
      ),
      'fields' => 
      array (
        0 => 
        array (
          'loc' => 
          array (
            'start' => 1446,
            'end' => 1453,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1446,
              'end' => 1448,
            ),
            'kind' => 'Name',
            'value' => 'id',
          ),
          'arguments' => 
          array (
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 1450,
              'end' => 1453,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 1450,
                'end' => 1452,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1450,
                  'end' => 1452,
                ),
                'kind' => 'Name',
                'value' => 'ID',
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
      ),
    ),
    25 => 
    array (
      'loc' => 
      array (
        'start' => 1476,
        'end' => 1511,
      ),
      'kind' => 'EnumTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 1481,
          'end' => 1491,
        ),
        'kind' => 'Name',
        'value' => 'MappedEnum',
      ),
      'directives' => 
      array (
      ),
      'values' => 
      array (
        0 => 
        array (
          'loc' => 
          array (
            'start' => 1498,
            'end' => 1501,
          ),
          'kind' => 'EnumValueDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1498,
              'end' => 1501,
            ),
            'kind' => 'Name',
            'value' => 'ONE',
          ),
          'directives' => 
          array (
          ),
        ),
        1 => 
        array (
          'loc' => 
          array (
            'start' => 1506,
            'end' => 1509,
          ),
          'kind' => 'EnumValueDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1506,
              'end' => 1509,
            ),
            'kind' => 'Name',
            'value' => 'TWO',
          ),
          'directives' => 
          array (
          ),
        ),
      ),
    ),
    26 => 
    array (
      'loc' => 
      array (
        'start' => 1533,
        'end' => 1699,
      ),
      'kind' => 'InputObjectTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 1539,
          'end' => 1554,
        ),
        'kind' => 'Name',
        'value' => 'TestMappedInput',
      ),
      'directives' => 
      array (
      ),
      'fields' => 
      array (
        0 => 
        array (
          'loc' => 
          array (
            'start' => 1561,
            'end' => 1576,
          ),
          'kind' => 'InputValueDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1561,
              'end' => 1567,
            ),
            'kind' => 'Name',
            'value' => 'string',
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 1569,
              'end' => 1576,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 1569,
                'end' => 1575,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1569,
                  'end' => 1575,
                ),
                'kind' => 'Name',
                'value' => 'String',
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
        1 => 
        array (
          'loc' => 
          array (
            'start' => 1581,
            'end' => 1598,
          ),
          'kind' => 'InputValueDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1581,
              'end' => 1588,
            ),
            'kind' => 'Name',
            'value' => 'boolean',
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 1590,
              'end' => 1598,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 1590,
                'end' => 1597,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1590,
                  'end' => 1597,
                ),
                'kind' => 'Name',
                'value' => 'Boolean',
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
        2 => 
        array (
          'loc' => 
          array (
            'start' => 1603,
            'end' => 1642,
          ),
          'kind' => 'InputValueDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1603,
              'end' => 1621,
            ),
            'kind' => 'Name',
            'value' => 'anotherMappedInput',
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 1623,
              'end' => 1642,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 1623,
                'end' => 1641,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1623,
                  'end' => 1641,
                ),
                'kind' => 'Name',
                'value' => 'AnotherMappedInput',
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
        3 => 
        array (
          'loc' => 
          array (
            'start' => 1647,
            'end' => 1676,
          ),
          'kind' => 'InputValueDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1647,
              'end' => 1660,
            ),
            'kind' => 'Name',
            'value' => 'unmappedInput',
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 1662,
              'end' => 1676,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 1662,
                'end' => 1675,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1662,
                  'end' => 1675,
                ),
                'kind' => 'Name',
                'value' => 'UnmappedInput',
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
        4 => 
        array (
          'loc' => 
          array (
            'start' => 1681,
            'end' => 1697,
          ),
          'kind' => 'InputValueDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1681,
              'end' => 1689,
            ),
            'kind' => 'Name',
            'value' => 'optional',
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 1691,
              'end' => 1697,
            ),
            'kind' => 'NamedType',
            'name' => 
            array (
              'loc' => 
              array (
                'start' => 1691,
                'end' => 1697,
              ),
              'kind' => 'Name',
              'value' => 'String',
            ),
          ),
          'directives' => 
          array (
          ),
        ),
      ),
    ),
    27 => 
    array (
      'loc' => 
      array (
        'start' => 1701,
        'end' => 1741,
      ),
      'kind' => 'InputObjectTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 1707,
          'end' => 1725,
        ),
        'kind' => 'Name',
        'value' => 'AnotherMappedInput',
      ),
      'directives' => 
      array (
      ),
      'fields' => 
      array (
        0 => 
        array (
          'loc' => 
          array (
            'start' => 1732,
            'end' => 1739,
          ),
          'kind' => 'InputValueDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1732,
              'end' => 1734,
            ),
            'kind' => 'Name',
            'value' => 'id',
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 1736,
              'end' => 1739,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 1736,
                'end' => 1738,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1736,
                  'end' => 1738,
                ),
                'kind' => 'Name',
                'value' => 'ID',
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
      ),
    ),
    28 => 
    array (
      'loc' => 
      array (
        'start' => 1743,
        'end' => 1778,
      ),
      'kind' => 'InputObjectTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 1749,
          'end' => 1762,
        ),
        'kind' => 'Name',
        'value' => 'UnmappedInput',
      ),
      'directives' => 
      array (
      ),
      'fields' => 
      array (
        0 => 
        array (
          'loc' => 
          array (
            'start' => 1769,
            'end' => 1776,
          ),
          'kind' => 'InputValueDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1769,
              'end' => 1771,
            ),
            'kind' => 'Name',
            'value' => 'id',
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 1773,
              'end' => 1776,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 1773,
                'end' => 1775,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1773,
                  'end' => 1775,
                ),
                'kind' => 'Name',
                'value' => 'ID',
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
      ),
    ),
    29 => 
    array (
      'loc' => 
      array (
        'start' => 1781,
        'end' => 1841,
      ),
      'kind' => 'InterfaceTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 1791,
          'end' => 1825,
        ),
        'kind' => 'Name',
        'value' => 'MultipleTypesMappedToSameInnerType',
      ),
      'directives' => 
      array (
      ),
      'interfaces' => 
      array (
      ),
      'fields' => 
      array (
        0 => 
        array (
          'loc' => 
          array (
            'start' => 1832,
            'end' => 1839,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1832,
              'end' => 1834,
            ),
            'kind' => 'Name',
            'value' => 'id',
          ),
          'arguments' => 
          array (
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 1836,
              'end' => 1839,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 1836,
                'end' => 1838,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1836,
                  'end' => 1838,
                ),
                'kind' => 'Name',
                'value' => 'ID',
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
      ),
    ),
    30 => 
    array (
      'loc' => 
      array (
        'start' => 1843,
        'end' => 1945,
      ),
      'kind' => 'ObjectTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 1848,
          'end' => 1883,
        ),
        'kind' => 'Name',
        'value' => 'MultipleTypesMappedToSameInnerType1',
      ),
      'interfaces' => 
      array (
        0 => 
        array (
          'loc' => 
          array (
            'start' => 1895,
            'end' => 1929,
          ),
          'kind' => 'NamedType',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1895,
              'end' => 1929,
            ),
            'kind' => 'Name',
            'value' => 'MultipleTypesMappedToSameInnerType',
          ),
        ),
      ),
      'directives' => 
      array (
      ),
      'fields' => 
      array (
        0 => 
        array (
          'loc' => 
          array (
            'start' => 1936,
            'end' => 1943,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1936,
              'end' => 1938,
            ),
            'kind' => 'Name',
            'value' => 'id',
          ),
          'arguments' => 
          array (
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 1940,
              'end' => 1943,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 1940,
                'end' => 1942,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1940,
                  'end' => 1942,
                ),
                'kind' => 'Name',
                'value' => 'ID',
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
      ),
    ),
    31 => 
    array (
      'loc' => 
      array (
        'start' => 1947,
        'end' => 2049,
      ),
      'kind' => 'ObjectTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 1952,
          'end' => 1987,
        ),
        'kind' => 'Name',
        'value' => 'MultipleTypesMappedToSameInnerType2',
      ),
      'interfaces' => 
      array (
        0 => 
        array (
          'loc' => 
          array (
            'start' => 1999,
            'end' => 2033,
          ),
          'kind' => 'NamedType',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1999,
              'end' => 2033,
            ),
            'kind' => 'Name',
            'value' => 'MultipleTypesMappedToSameInnerType',
          ),
        ),
      ),
      'directives' => 
      array (
      ),
      'fields' => 
      array (
        0 => 
        array (
          'loc' => 
          array (
            'start' => 2040,
            'end' => 2047,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 2040,
              'end' => 2042,
            ),
            'kind' => 'Name',
            'value' => 'id',
          ),
          'arguments' => 
          array (
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 2044,
              'end' => 2047,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 2044,
                'end' => 2046,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2044,
                  'end' => 2046,
                ),
                'kind' => 'Name',
                'value' => 'ID',
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
      ),
    ),
    32 => 
    array (
      'loc' => 
      array (
        'start' => 2051,
        'end' => 2137,
      ),
      'kind' => 'InputObjectTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 2057,
          'end' => 2076,
        ),
        'kind' => 'Name',
        'value' => 'TestDeprecatedInput',
      ),
      'directives' => 
      array (
      ),
      'fields' => 
      array (
        0 => 
        array (
          'loc' => 
          array (
            'start' => 2083,
            'end' => 2135,
          ),
          'kind' => 'InputValueDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 2083,
              'end' => 2098,
            ),
            'kind' => 'Name',
            'value' => 'deprecatedField',
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 2100,
              'end' => 2107,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 2100,
                'end' => 2106,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2100,
                  'end' => 2106,
                ),
                'kind' => 'Name',
                'value' => 'String',
              ),
            ),
          ),
          'directives' => 
          array (
            0 => 
            array (
              'loc' => 
              array (
                'start' => 2108,
                'end' => 2135,
              ),
              'kind' => 'Directive',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2109,
                  'end' => 2119,
                ),
                'kind' => 'Name',
                'value' => 'deprecated',
              ),
              'arguments' => 
              array (
                0 => 
                array (
                  'loc' => 
                  array (
                    'start' => 2120,
                    'end' => 2134,
                  ),
                  'kind' => 'Argument',
                  'value' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 2128,
                      'end' => 2134,
                    ),
                    'kind' => 'StringValue',
                    'value' => 'test',
                    'block' => false,
                  ),
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 2120,
                      'end' => 2126,
                    ),
                    'kind' => 'Name',
                    'value' => 'reason',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
    ),
    33 => 
    array (
      'loc' => 
      array (
        'start' => 2139,
        'end' => 2228,
      ),
      'kind' => 'EnumTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 2144,
          'end' => 2162,
        ),
        'kind' => 'Name',
        'value' => 'TestDeprecatedEnum',
      ),
      'directives' => 
      array (
      ),
      'values' => 
      array (
        0 => 
        array (
          'loc' => 
          array (
            'start' => 2169,
            'end' => 2207,
          ),
          'kind' => 'EnumValueDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 2169,
              'end' => 2179,
            ),
            'kind' => 'Name',
            'value' => 'DEPRECATED',
          ),
          'directives' => 
          array (
            0 => 
            array (
              'loc' => 
              array (
                'start' => 2180,
                'end' => 2207,
              ),
              'kind' => 'Directive',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2181,
                  'end' => 2191,
                ),
                'kind' => 'Name',
                'value' => 'deprecated',
              ),
              'arguments' => 
              array (
                0 => 
                array (
                  'loc' => 
                  array (
                    'start' => 2192,
                    'end' => 2206,
                  ),
                  'kind' => 'Argument',
                  'value' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 2200,
                      'end' => 2206,
                    ),
                    'kind' => 'StringValue',
                    'value' => 'test',
                    'block' => false,
                  ),
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 2192,
                      'end' => 2198,
                    ),
                    'kind' => 'Name',
                    'value' => 'reason',
                  ),
                ),
              ),
            ),
          ),
        ),
        1 => 
        array (
          'loc' => 
          array (
            'start' => 2212,
            'end' => 2226,
          ),
          'kind' => 'EnumValueDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 2212,
              'end' => 2226,
            ),
            'kind' => 'Name',
            'value' => 'NON_DEPRECATED',
          ),
          'directives' => 
          array (
          ),
        ),
      ),
    ),
    34 => 
    array (
      'loc' => 
      array (
        'start' => 2230,
        'end' => 2362,
      ),
      'kind' => 'ObjectTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 2235,
          'end' => 2254,
        ),
        'kind' => 'Name',
        'value' => 'TestDeprecatedField',
      ),
      'interfaces' => 
      array (
      ),
      'directives' => 
      array (
      ),
      'fields' => 
      array (
        0 => 
        array (
          'loc' => 
          array (
            'start' => 2261,
            'end' => 2360,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 2261,
              'end' => 2280,
            ),
            'kind' => 'Name',
            'value' => 'testDeprecatedField',
          ),
          'arguments' => 
          array (
            0 => 
            array (
              'loc' => 
              array (
                'start' => 2281,
                'end' => 2322,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2281,
                  'end' => 2285,
                ),
                'kind' => 'Name',
                'value' => 'test',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 2287,
                  'end' => 2294,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 2287,
                    'end' => 2293,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 2287,
                      'end' => 2293,
                    ),
                    'kind' => 'Name',
                    'value' => 'String',
                  ),
                ),
              ),
              'directives' => 
              array (
                0 => 
                array (
                  'loc' => 
                  array (
                    'start' => 2295,
                    'end' => 2322,
                  ),
                  'kind' => 'Directive',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 2296,
                      'end' => 2306,
                    ),
                    'kind' => 'Name',
                    'value' => 'deprecated',
                  ),
                  'arguments' => 
                  array (
                    0 => 
                    array (
                      'loc' => 
                      array (
                        'start' => 2307,
                        'end' => 2321,
                      ),
                      'kind' => 'Argument',
                      'value' => 
                      array (
                        'loc' => 
                        array (
                          'start' => 2315,
                          'end' => 2321,
                        ),
                        'kind' => 'StringValue',
                        'value' => 'test',
                        'block' => false,
                      ),
                      'name' => 
                      array (
                        'loc' => 
                        array (
                          'start' => 2307,
                          'end' => 2313,
                        ),
                        'kind' => 'Name',
                        'value' => 'reason',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 2325,
              'end' => 2332,
            ),
            'kind' => 'NamedType',
            'name' => 
            array (
              'loc' => 
              array (
                'start' => 2325,
                'end' => 2332,
              ),
              'kind' => 'Name',
              'value' => 'Boolean',
            ),
          ),
          'directives' => 
          array (
            0 => 
            array (
              'loc' => 
              array (
                'start' => 2333,
                'end' => 2360,
              ),
              'kind' => 'Directive',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 2334,
                  'end' => 2344,
                ),
                'kind' => 'Name',
                'value' => 'deprecated',
              ),
              'arguments' => 
              array (
                0 => 
                array (
                  'loc' => 
                  array (
                    'start' => 2345,
                    'end' => 2359,
                  ),
                  'kind' => 'Argument',
                  'value' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 2353,
                      'end' => 2359,
                    ),
                    'kind' => 'StringValue',
                    'value' => 'test',
                    'block' => false,
                  ),
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 2345,
                      'end' => 2351,
                    ),
                    'kind' => 'Name',
                    'value' => 'reason',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);
