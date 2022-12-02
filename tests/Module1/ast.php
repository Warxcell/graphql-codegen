<?php

declare(strict_types=1);

return array (
  'kind' => 'Document',
  'loc' => 
  array (
    'start' => 0,
    'end' => 1458,
  ),
  'definitions' => 
  array (
    0 => 
    array (
      'kind' => 'SchemaDefinition',
      'loc' => 
      array (
        'start' => 0,
        'end' => 50,
      ),
      'directives' => 
      array (
      ),
      'operationTypes' => 
      array (
        0 => 
        array (
          'kind' => 'OperationTypeDefinition',
          'loc' => 
          array (
            'start' => 13,
            'end' => 25,
          ),
          'operation' => 'query',
          'type' => 
          array (
            'kind' => 'NamedType',
            'loc' => 
            array (
              'start' => 20,
              'end' => 25,
            ),
            'name' => 
            array (
              'kind' => 'Name',
              'loc' => 
              array (
                'start' => 20,
                'end' => 25,
              ),
              'value' => 'Query',
            ),
          ),
        ),
        1 => 
        array (
          'kind' => 'OperationTypeDefinition',
          'loc' => 
          array (
            'start' => 30,
            'end' => 48,
          ),
          'operation' => 'mutation',
          'type' => 
          array (
            'kind' => 'NamedType',
            'loc' => 
            array (
              'start' => 40,
              'end' => 48,
            ),
            'name' => 
            array (
              'kind' => 'Name',
              'loc' => 
              array (
                'start' => 40,
                'end' => 48,
              ),
              'value' => 'Mutation',
            ),
          ),
        ),
      ),
    ),
    1 => 
    array (
      'kind' => 'ScalarTypeDefinition',
      'loc' => 
      array (
        'start' => 52,
        'end' => 67,
      ),
      'name' => 
      array (
        'kind' => 'Name',
        'loc' => 
        array (
          'start' => 59,
          'end' => 67,
        ),
        'value' => 'DateTime',
      ),
      'directives' => 
      array (
      ),
    ),
    2 => 
    array (
      'kind' => 'ScalarTypeDefinition',
      'loc' => 
      array (
        'start' => 69,
        'end' => 80,
      ),
      'name' => 
      array (
        'kind' => 'Name',
        'loc' => 
        array (
          'start' => 76,
          'end' => 80,
        ),
        'value' => 'JSON',
      ),
      'directives' => 
      array (
      ),
    ),
    3 => 
    array (
      'kind' => 'InterfaceTypeDefinition',
      'loc' => 
      array (
        'start' => 82,
        'end' => 112,
      ),
      'name' => 
      array (
        'kind' => 'Name',
        'loc' => 
        array (
          'start' => 92,
          'end' => 96,
        ),
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
          'kind' => 'FieldDefinition',
          'loc' => 
          array (
            'start' => 103,
            'end' => 110,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 103,
              'end' => 105,
            ),
            'value' => 'id',
          ),
          'arguments' => 
          array (
          ),
          'type' => 
          array (
            'kind' => 'NonNullType',
            'loc' => 
            array (
              'start' => 107,
              'end' => 110,
            ),
            'type' => 
            array (
              'kind' => 'NamedType',
              'loc' => 
              array (
                'start' => 107,
                'end' => 109,
              ),
              'name' => 
              array (
                'kind' => 'Name',
                'loc' => 
                array (
                  'start' => 107,
                  'end' => 109,
                ),
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
    4 => 
    array (
      'kind' => 'ObjectTypeDefinition',
      'loc' => 
      array (
        'start' => 114,
        'end' => 192,
      ),
      'name' => 
      array (
        'kind' => 'Name',
        'loc' => 
        array (
          'start' => 119,
          'end' => 124,
        ),
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
          'kind' => 'FieldDefinition',
          'loc' => 
          array (
            'start' => 131,
            'end' => 158,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 131,
              'end' => 135,
            ),
            'value' => 'ping',
          ),
          'arguments' => 
          array (
            0 => 
            array (
              'kind' => 'InputValueDefinition',
              'loc' => 
              array (
                'start' => 136,
                'end' => 148,
              ),
              'name' => 
              array (
                'kind' => 'Name',
                'loc' => 
                array (
                  'start' => 136,
                  'end' => 138,
                ),
                'value' => 'da',
              ),
              'type' => 
              array (
                'kind' => 'NonNullType',
                'loc' => 
                array (
                  'start' => 140,
                  'end' => 148,
                ),
                'type' => 
                array (
                  'kind' => 'NamedType',
                  'loc' => 
                  array (
                    'start' => 140,
                    'end' => 147,
                  ),
                  'name' => 
                  array (
                    'kind' => 'Name',
                    'loc' => 
                    array (
                      'start' => 140,
                      'end' => 147,
                    ),
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
            'kind' => 'NonNullType',
            'loc' => 
            array (
              'start' => 151,
              'end' => 158,
            ),
            'type' => 
            array (
              'kind' => 'NamedType',
              'loc' => 
              array (
                'start' => 151,
                'end' => 157,
              ),
              'name' => 
              array (
                'kind' => 'Name',
                'loc' => 
                array (
                  'start' => 151,
                  'end' => 157,
                ),
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
          'kind' => 'FieldDefinition',
          'loc' => 
          array (
            'start' => 163,
            'end' => 190,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 163,
              'end' => 175,
            ),
            'value' => 'testSameType',
          ),
          'arguments' => 
          array (
          ),
          'type' => 
          array (
            'kind' => 'NonNullType',
            'loc' => 
            array (
              'start' => 177,
              'end' => 190,
            ),
            'type' => 
            array (
              'kind' => 'NamedType',
              'loc' => 
              array (
                'start' => 177,
                'end' => 189,
              ),
              'name' => 
              array (
                'kind' => 'Name',
                'loc' => 
                array (
                  'start' => 177,
                  'end' => 189,
                ),
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
    5 => 
    array (
      'kind' => 'ObjectTypeDefinition',
      'loc' => 
      array (
        'start' => 194,
        'end' => 374,
      ),
      'name' => 
      array (
        'kind' => 'Name',
        'loc' => 
        array (
          'start' => 199,
          'end' => 207,
        ),
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
          'kind' => 'FieldDefinition',
          'loc' => 
          array (
            'start' => 214,
            'end' => 372,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 214,
              'end' => 224,
            ),
            'value' => 'createUser',
          ),
          'arguments' => 
          array (
            0 => 
            array (
              'kind' => 'InputValueDefinition',
              'loc' => 
              array (
                'start' => 225,
                'end' => 248,
              ),
              'name' => 
              array (
                'kind' => 'Name',
                'loc' => 
                array (
                  'start' => 225,
                  'end' => 230,
                ),
                'value' => 'input',
              ),
              'type' => 
              array (
                'kind' => 'NonNullType',
                'loc' => 
                array (
                  'start' => 232,
                  'end' => 248,
                ),
                'type' => 
                array (
                  'kind' => 'NamedType',
                  'loc' => 
                  array (
                    'start' => 232,
                    'end' => 247,
                  ),
                  'name' => 
                  array (
                    'kind' => 'Name',
                    'loc' => 
                    array (
                      'start' => 232,
                      'end' => 247,
                    ),
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
              'kind' => 'InputValueDefinition',
              'loc' => 
              array (
                'start' => 250,
                'end' => 258,
              ),
              'name' => 
              array (
                'kind' => 'Name',
                'loc' => 
                array (
                  'start' => 250,
                  'end' => 253,
                ),
                'value' => 'int',
              ),
              'type' => 
              array (
                'kind' => 'NamedType',
                'loc' => 
                array (
                  'start' => 255,
                  'end' => 258,
                ),
                'name' => 
                array (
                  'kind' => 'Name',
                  'loc' => 
                  array (
                    'start' => 255,
                    'end' => 258,
                  ),
                  'value' => 'Int',
                ),
              ),
              'directives' => 
              array (
              ),
            ),
            2 => 
            array (
              'kind' => 'InputValueDefinition',
              'loc' => 
              array (
                'start' => 260,
                'end' => 291,
              ),
              'name' => 
              array (
                'kind' => 'Name',
                'loc' => 
                array (
                  'start' => 260,
                  'end' => 283,
                ),
                'value' => 'nonNullArrayNonNullItem',
              ),
              'type' => 
              array (
                'kind' => 'NonNullType',
                'loc' => 
                array (
                  'start' => 285,
                  'end' => 291,
                ),
                'type' => 
                array (
                  'kind' => 'ListType',
                  'loc' => 
                  array (
                    'start' => 285,
                    'end' => 290,
                  ),
                  'type' => 
                  array (
                    'kind' => 'NonNullType',
                    'loc' => 
                    array (
                      'start' => 286,
                      'end' => 289,
                    ),
                    'type' => 
                    array (
                      'kind' => 'NamedType',
                      'loc' => 
                      array (
                        'start' => 286,
                        'end' => 288,
                      ),
                      'name' => 
                      array (
                        'kind' => 'Name',
                        'loc' => 
                        array (
                          'start' => 286,
                          'end' => 288,
                        ),
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
            3 => 
            array (
              'kind' => 'InputValueDefinition',
              'loc' => 
              array (
                'start' => 293,
                'end' => 312,
              ),
              'name' => 
              array (
                'kind' => 'Name',
                'loc' => 
                array (
                  'start' => 293,
                  'end' => 305,
                ),
                'value' => 'nonNullArray',
              ),
              'type' => 
              array (
                'kind' => 'NonNullType',
                'loc' => 
                array (
                  'start' => 307,
                  'end' => 312,
                ),
                'type' => 
                array (
                  'kind' => 'ListType',
                  'loc' => 
                  array (
                    'start' => 307,
                    'end' => 311,
                  ),
                  'type' => 
                  array (
                    'kind' => 'NamedType',
                    'loc' => 
                    array (
                      'start' => 308,
                      'end' => 310,
                    ),
                    'name' => 
                    array (
                      'kind' => 'Name',
                      'loc' => 
                      array (
                        'start' => 308,
                        'end' => 310,
                      ),
                      'value' => 'ID',
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
              'kind' => 'InputValueDefinition',
              'loc' => 
              array (
                'start' => 314,
                'end' => 337,
              ),
              'name' => 
              array (
                'kind' => 'Name',
                'loc' => 
                array (
                  'start' => 314,
                  'end' => 330,
                ),
                'value' => 'arrayNonNullItem',
              ),
              'type' => 
              array (
                'kind' => 'ListType',
                'loc' => 
                array (
                  'start' => 332,
                  'end' => 337,
                ),
                'type' => 
                array (
                  'kind' => 'NonNullType',
                  'loc' => 
                  array (
                    'start' => 333,
                    'end' => 336,
                  ),
                  'type' => 
                  array (
                    'kind' => 'NamedType',
                    'loc' => 
                    array (
                      'start' => 333,
                      'end' => 335,
                    ),
                    'name' => 
                    array (
                      'kind' => 'Name',
                      'loc' => 
                      array (
                        'start' => 333,
                        'end' => 335,
                      ),
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
              'kind' => 'InputValueDefinition',
              'loc' => 
              array (
                'start' => 339,
                'end' => 350,
              ),
              'name' => 
              array (
                'kind' => 'Name',
                'loc' => 
                array (
                  'start' => 339,
                  'end' => 344,
                ),
                'value' => 'array',
              ),
              'type' => 
              array (
                'kind' => 'ListType',
                'loc' => 
                array (
                  'start' => 346,
                  'end' => 350,
                ),
                'type' => 
                array (
                  'kind' => 'NamedType',
                  'loc' => 
                  array (
                    'start' => 347,
                    'end' => 349,
                  ),
                  'name' => 
                  array (
                    'kind' => 'Name',
                    'loc' => 
                    array (
                      'start' => 347,
                      'end' => 349,
                    ),
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
            'kind' => 'NonNullType',
            'loc' => 
            array (
              'start' => 353,
              'end' => 372,
            ),
            'type' => 
            array (
              'kind' => 'NamedType',
              'loc' => 
              array (
                'start' => 353,
                'end' => 371,
              ),
              'name' => 
              array (
                'kind' => 'Name',
                'loc' => 
                array (
                  'start' => 353,
                  'end' => 371,
                ),
                'value' => 'CreateUserResponse',
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
      'kind' => 'InputObjectTypeDefinition',
      'loc' => 
      array (
        'start' => 376,
        'end' => 420,
      ),
      'name' => 
      array (
        'kind' => 'Name',
        'loc' => 
        array (
          'start' => 382,
          'end' => 397,
        ),
        'value' => 'CreateUserInput',
      ),
      'directives' => 
      array (
      ),
      'fields' => 
      array (
        0 => 
        array (
          'kind' => 'InputValueDefinition',
          'loc' => 
          array (
            'start' => 404,
            'end' => 418,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 404,
              'end' => 409,
            ),
            'value' => 'email',
          ),
          'type' => 
          array (
            'kind' => 'NonNullType',
            'loc' => 
            array (
              'start' => 411,
              'end' => 418,
            ),
            'type' => 
            array (
              'kind' => 'NamedType',
              'loc' => 
              array (
                'start' => 411,
                'end' => 417,
              ),
              'name' => 
              array (
                'kind' => 'Name',
                'loc' => 
                array (
                  'start' => 411,
                  'end' => 417,
                ),
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
    7 => 
    array (
      'kind' => 'ObjectTypeDefinition',
      'loc' => 
      array (
        'start' => 422,
        'end' => 464,
      ),
      'name' => 
      array (
        'kind' => 'Name',
        'loc' => 
        array (
          'start' => 427,
          'end' => 444,
        ),
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
          'kind' => 'FieldDefinition',
          'loc' => 
          array (
            'start' => 451,
            'end' => 462,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 451,
              'end' => 455,
            ),
            'value' => 'user',
          ),
          'arguments' => 
          array (
          ),
          'type' => 
          array (
            'kind' => 'NonNullType',
            'loc' => 
            array (
              'start' => 457,
              'end' => 462,
            ),
            'type' => 
            array (
              'kind' => 'NamedType',
              'loc' => 
              array (
                'start' => 457,
                'end' => 461,
              ),
              'name' => 
              array (
                'kind' => 'Name',
                'loc' => 
                array (
                  'start' => 457,
                  'end' => 461,
                ),
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
    8 => 
    array (
      'kind' => 'ObjectTypeDefinition',
      'loc' => 
      array (
        'start' => 466,
        'end' => 511,
      ),
      'name' => 
      array (
        'kind' => 'Name',
        'loc' => 
        array (
          'start' => 471,
          'end' => 488,
        ),
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
          'kind' => 'FieldDefinition',
          'loc' => 
          array (
            'start' => 495,
            'end' => 509,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 495,
              'end' => 500,
            ),
            'value' => 'error',
          ),
          'arguments' => 
          array (
          ),
          'type' => 
          array (
            'kind' => 'NonNullType',
            'loc' => 
            array (
              'start' => 502,
              'end' => 509,
            ),
            'type' => 
            array (
              'kind' => 'NamedType',
              'loc' => 
              array (
                'start' => 502,
                'end' => 508,
              ),
              'name' => 
              array (
                'kind' => 'Name',
                'loc' => 
                array (
                  'start' => 502,
                  'end' => 508,
                ),
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
    9 => 
    array (
      'kind' => 'UnionTypeDefinition',
      'loc' => 
      array (
        'start' => 513,
        'end' => 577,
      ),
      'name' => 
      array (
        'kind' => 'Name',
        'loc' => 
        array (
          'start' => 519,
          'end' => 537,
        ),
        'value' => 'CreateUserResponse',
      ),
      'directives' => 
      array (
      ),
      'types' => 
      array (
        0 => 
        array (
          'kind' => 'NamedType',
          'loc' => 
          array (
            'start' => 540,
            'end' => 557,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 540,
              'end' => 557,
            ),
            'value' => 'CreateUserSuccess',
          ),
        ),
        1 => 
        array (
          'kind' => 'NamedType',
          'loc' => 
          array (
            'start' => 560,
            'end' => 577,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 560,
              'end' => 577,
            ),
            'value' => 'CreateUserFailure',
          ),
        ),
      ),
    ),
    10 => 
    array (
      'kind' => 'ObjectTypeDefinition',
      'loc' => 
      array (
        'start' => 579,
        'end' => 642,
      ),
      'name' => 
      array (
        'kind' => 'Name',
        'loc' => 
        array (
          'start' => 584,
          'end' => 588,
        ),
        'value' => 'User',
      ),
      'interfaces' => 
      array (
        0 => 
        array (
          'kind' => 'NamedType',
          'loc' => 
          array (
            'start' => 600,
            'end' => 604,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 600,
              'end' => 604,
            ),
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
          'kind' => 'FieldDefinition',
          'loc' => 
          array (
            'start' => 611,
            'end' => 618,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 611,
              'end' => 613,
            ),
            'value' => 'id',
          ),
          'arguments' => 
          array (
          ),
          'type' => 
          array (
            'kind' => 'NonNullType',
            'loc' => 
            array (
              'start' => 615,
              'end' => 618,
            ),
            'type' => 
            array (
              'kind' => 'NamedType',
              'loc' => 
              array (
                'start' => 615,
                'end' => 617,
              ),
              'name' => 
              array (
                'kind' => 'Name',
                'loc' => 
                array (
                  'start' => 615,
                  'end' => 617,
                ),
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
          'kind' => 'FieldDefinition',
          'loc' => 
          array (
            'start' => 623,
            'end' => 640,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 623,
              'end' => 631,
            ),
            'value' => 'username',
          ),
          'arguments' => 
          array (
          ),
          'type' => 
          array (
            'kind' => 'NonNullType',
            'loc' => 
            array (
              'start' => 633,
              'end' => 640,
            ),
            'type' => 
            array (
              'kind' => 'NamedType',
              'loc' => 
              array (
                'start' => 633,
                'end' => 639,
              ),
              'name' => 
              array (
                'kind' => 'Name',
                'loc' => 
                array (
                  'start' => 633,
                  'end' => 639,
                ),
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
      'kind' => 'UnionTypeDefinition',
      'loc' => 
      array (
        'start' => 644,
        'end' => 676,
      ),
      'name' => 
      array (
        'kind' => 'Name',
        'loc' => 
        array (
          'start' => 650,
          'end' => 656,
        ),
        'value' => 'Widget',
      ),
      'directives' => 
      array (
      ),
      'types' => 
      array (
        0 => 
        array (
          'kind' => 'NamedType',
          'loc' => 
          array (
            'start' => 659,
            'end' => 666,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 659,
              'end' => 666,
            ),
            'value' => 'Widget1',
          ),
        ),
        1 => 
        array (
          'kind' => 'NamedType',
          'loc' => 
          array (
            'start' => 669,
            'end' => 676,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 669,
              'end' => 676,
            ),
            'value' => 'Widget2',
          ),
        ),
      ),
    ),
    12 => 
    array (
      'kind' => 'ObjectTypeDefinition',
      'loc' => 
      array (
        'start' => 678,
        'end' => 712,
      ),
      'name' => 
      array (
        'kind' => 'Name',
        'loc' => 
        array (
          'start' => 683,
          'end' => 690,
        ),
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
          'kind' => 'FieldDefinition',
          'loc' => 
          array (
            'start' => 697,
            'end' => 710,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 697,
              'end' => 701,
            ),
            'value' => 'name',
          ),
          'arguments' => 
          array (
          ),
          'type' => 
          array (
            'kind' => 'NonNullType',
            'loc' => 
            array (
              'start' => 703,
              'end' => 710,
            ),
            'type' => 
            array (
              'kind' => 'NamedType',
              'loc' => 
              array (
                'start' => 703,
                'end' => 709,
              ),
              'name' => 
              array (
                'kind' => 'Name',
                'loc' => 
                array (
                  'start' => 703,
                  'end' => 709,
                ),
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
      'kind' => 'ObjectTypeDefinition',
      'loc' => 
      array (
        'start' => 714,
        'end' => 748,
      ),
      'name' => 
      array (
        'kind' => 'Name',
        'loc' => 
        array (
          'start' => 719,
          'end' => 726,
        ),
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
          'kind' => 'FieldDefinition',
          'loc' => 
          array (
            'start' => 733,
            'end' => 746,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 733,
              'end' => 737,
            ),
            'value' => 'name',
          ),
          'arguments' => 
          array (
          ),
          'type' => 
          array (
            'kind' => 'NonNullType',
            'loc' => 
            array (
              'start' => 739,
              'end' => 746,
            ),
            'type' => 
            array (
              'kind' => 'NamedType',
              'loc' => 
              array (
                'start' => 739,
                'end' => 745,
              ),
              'name' => 
              array (
                'kind' => 'Name',
                'loc' => 
                array (
                  'start' => 739,
                  'end' => 745,
                ),
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
    14 => 
    array (
      'kind' => 'EnumTypeDefinition',
      'loc' => 
      array (
        'start' => 750,
        'end' => 782,
      ),
      'name' => 
      array (
        'kind' => 'Name',
        'loc' => 
        array (
          'start' => 755,
          'end' => 760,
        ),
        'value' => 'Enum1',
      ),
      'directives' => 
      array (
      ),
      'values' => 
      array (
        0 => 
        array (
          'kind' => 'EnumValueDefinition',
          'loc' => 
          array (
            'start' => 767,
            'end' => 771,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 767,
              'end' => 771,
            ),
            'value' => 'VAL1',
          ),
          'directives' => 
          array (
          ),
        ),
        1 => 
        array (
          'kind' => 'EnumValueDefinition',
          'loc' => 
          array (
            'start' => 776,
            'end' => 780,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 776,
              'end' => 780,
            ),
            'value' => 'VAL2',
          ),
          'directives' => 
          array (
          ),
        ),
      ),
    ),
    15 => 
    array (
      'kind' => 'UnionTypeDefinition',
      'loc' => 
      array (
        'start' => 784,
        'end' => 846,
      ),
      'name' => 
      array (
        'kind' => 'Name',
        'loc' => 
        array (
          'start' => 790,
          'end' => 802,
        ),
        'value' => 'TestResponse',
      ),
      'directives' => 
      array (
      ),
      'types' => 
      array (
        0 => 
        array (
          'kind' => 'NamedType',
          'loc' => 
          array (
            'start' => 805,
            'end' => 824,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 805,
              'end' => 824,
            ),
            'value' => 'TestSuccessResponse',
          ),
        ),
        1 => 
        array (
          'kind' => 'NamedType',
          'loc' => 
          array (
            'start' => 827,
            'end' => 846,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 827,
              'end' => 846,
            ),
            'value' => 'TestFailureResponse',
          ),
        ),
      ),
    ),
    16 => 
    array (
      'kind' => 'ObjectTypeDefinition',
      'loc' => 
      array (
        'start' => 848,
        'end' => 902,
      ),
      'name' => 
      array (
        'kind' => 'Name',
        'loc' => 
        array (
          'start' => 853,
          'end' => 872,
        ),
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
          'kind' => 'FieldDefinition',
          'loc' => 
          array (
            'start' => 879,
            'end' => 900,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 879,
              'end' => 885,
            ),
            'value' => 'errors',
          ),
          'arguments' => 
          array (
          ),
          'type' => 
          array (
            'kind' => 'NonNullType',
            'loc' => 
            array (
              'start' => 887,
              'end' => 900,
            ),
            'type' => 
            array (
              'kind' => 'ListType',
              'loc' => 
              array (
                'start' => 887,
                'end' => 899,
              ),
              'type' => 
              array (
                'kind' => 'NonNullType',
                'loc' => 
                array (
                  'start' => 888,
                  'end' => 898,
                ),
                'type' => 
                array (
                  'kind' => 'NamedType',
                  'loc' => 
                  array (
                    'start' => 888,
                    'end' => 897,
                  ),
                  'name' => 
                  array (
                    'kind' => 'Name',
                    'loc' => 
                    array (
                      'start' => 888,
                      'end' => 897,
                    ),
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
    17 => 
    array (
      'kind' => 'UnionTypeDefinition',
      'loc' => 
      array (
        'start' => 904,
        'end' => 932,
      ),
      'name' => 
      array (
        'kind' => 'Name',
        'loc' => 
        array (
          'start' => 910,
          'end' => 919,
        ),
        'value' => 'TestError',
      ),
      'directives' => 
      array (
      ),
      'types' => 
      array (
        0 => 
        array (
          'kind' => 'NamedType',
          'loc' => 
          array (
            'start' => 922,
            'end' => 932,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 922,
              'end' => 932,
            ),
            'value' => 'TestError1',
          ),
        ),
      ),
    ),
    18 => 
    array (
      'kind' => 'ObjectTypeDefinition',
      'loc' => 
      array (
        'start' => 934,
        'end' => 981,
      ),
      'name' => 
      array (
        'kind' => 'Name',
        'loc' => 
        array (
          'start' => 939,
          'end' => 958,
        ),
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
          'kind' => 'FieldDefinition',
          'loc' => 
          array (
            'start' => 965,
            'end' => 979,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 965,
              'end' => 969,
            ),
            'value' => 'bool',
          ),
          'arguments' => 
          array (
          ),
          'type' => 
          array (
            'kind' => 'NonNullType',
            'loc' => 
            array (
              'start' => 971,
              'end' => 979,
            ),
            'type' => 
            array (
              'kind' => 'NamedType',
              'loc' => 
              array (
                'start' => 971,
                'end' => 978,
              ),
              'name' => 
              array (
                'kind' => 'Name',
                'loc' => 
                array (
                  'start' => 971,
                  'end' => 978,
                ),
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
    19 => 
    array (
      'kind' => 'UnionTypeDefinition',
      'loc' => 
      array (
        'start' => 983,
        'end' => 1033,
      ),
      'name' => 
      array (
        'kind' => 'Name',
        'loc' => 
        array (
          'start' => 989,
          'end' => 1001,
        ),
        'value' => 'TestSameType',
      ),
      'directives' => 
      array (
      ),
      'types' => 
      array (
        0 => 
        array (
          'kind' => 'NamedType',
          'loc' => 
          array (
            'start' => 1004,
            'end' => 1017,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 1004,
              'end' => 1017,
            ),
            'value' => 'TestSameType1',
          ),
        ),
        1 => 
        array (
          'kind' => 'NamedType',
          'loc' => 
          array (
            'start' => 1020,
            'end' => 1033,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 1020,
              'end' => 1033,
            ),
            'value' => 'TestSameType2',
          ),
        ),
      ),
    ),
    20 => 
    array (
      'kind' => 'ObjectTypeDefinition',
      'loc' => 
      array (
        'start' => 1035,
        'end' => 1078,
      ),
      'name' => 
      array (
        'kind' => 'Name',
        'loc' => 
        array (
          'start' => 1040,
          'end' => 1053,
        ),
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
          'kind' => 'FieldDefinition',
          'loc' => 
          array (
            'start' => 1060,
            'end' => 1076,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 1060,
              'end' => 1067,
            ),
            'value' => 'message',
          ),
          'arguments' => 
          array (
          ),
          'type' => 
          array (
            'kind' => 'NonNullType',
            'loc' => 
            array (
              'start' => 1069,
              'end' => 1076,
            ),
            'type' => 
            array (
              'kind' => 'NamedType',
              'loc' => 
              array (
                'start' => 1069,
                'end' => 1075,
              ),
              'name' => 
              array (
                'kind' => 'Name',
                'loc' => 
                array (
                  'start' => 1069,
                  'end' => 1075,
                ),
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
    21 => 
    array (
      'kind' => 'ObjectTypeDefinition',
      'loc' => 
      array (
        'start' => 1080,
        'end' => 1123,
      ),
      'name' => 
      array (
        'kind' => 'Name',
        'loc' => 
        array (
          'start' => 1085,
          'end' => 1098,
        ),
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
          'kind' => 'FieldDefinition',
          'loc' => 
          array (
            'start' => 1105,
            'end' => 1121,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 1105,
              'end' => 1112,
            ),
            'value' => 'message',
          ),
          'arguments' => 
          array (
          ),
          'type' => 
          array (
            'kind' => 'NonNullType',
            'loc' => 
            array (
              'start' => 1114,
              'end' => 1121,
            ),
            'type' => 
            array (
              'kind' => 'NamedType',
              'loc' => 
              array (
                'start' => 1114,
                'end' => 1120,
              ),
              'name' => 
              array (
                'kind' => 'Name',
                'loc' => 
                array (
                  'start' => 1114,
                  'end' => 1120,
                ),
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
    22 => 
    array (
      'kind' => 'ObjectTypeDefinition',
      'loc' => 
      array (
        'start' => 1125,
        'end' => 1155,
      ),
      'name' => 
      array (
        'kind' => 'Name',
        'loc' => 
        array (
          'start' => 1130,
          'end' => 1139,
        ),
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
          'kind' => 'FieldDefinition',
          'loc' => 
          array (
            'start' => 1146,
            'end' => 1153,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 1146,
              'end' => 1148,
            ),
            'value' => 'id',
          ),
          'arguments' => 
          array (
          ),
          'type' => 
          array (
            'kind' => 'NonNullType',
            'loc' => 
            array (
              'start' => 1150,
              'end' => 1153,
            ),
            'type' => 
            array (
              'kind' => 'NamedType',
              'loc' => 
              array (
                'start' => 1150,
                'end' => 1152,
              ),
              'name' => 
              array (
                'kind' => 'Name',
                'loc' => 
                array (
                  'start' => 1150,
                  'end' => 1152,
                ),
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
    23 => 
    array (
      'kind' => 'EnumTypeDefinition',
      'loc' => 
      array (
        'start' => 1176,
        'end' => 1211,
      ),
      'name' => 
      array (
        'kind' => 'Name',
        'loc' => 
        array (
          'start' => 1181,
          'end' => 1191,
        ),
        'value' => 'MappedEnum',
      ),
      'directives' => 
      array (
      ),
      'values' => 
      array (
        0 => 
        array (
          'kind' => 'EnumValueDefinition',
          'loc' => 
          array (
            'start' => 1198,
            'end' => 1201,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 1198,
              'end' => 1201,
            ),
            'value' => 'ONE',
          ),
          'directives' => 
          array (
          ),
        ),
        1 => 
        array (
          'kind' => 'EnumValueDefinition',
          'loc' => 
          array (
            'start' => 1206,
            'end' => 1209,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 1206,
              'end' => 1209,
            ),
            'value' => 'TWO',
          ),
          'directives' => 
          array (
          ),
        ),
      ),
    ),
    24 => 
    array (
      'kind' => 'InputObjectTypeDefinition',
      'loc' => 
      array (
        'start' => 1233,
        'end' => 1378,
      ),
      'name' => 
      array (
        'kind' => 'Name',
        'loc' => 
        array (
          'start' => 1239,
          'end' => 1254,
        ),
        'value' => 'TestMappedInput',
      ),
      'directives' => 
      array (
      ),
      'fields' => 
      array (
        0 => 
        array (
          'kind' => 'InputValueDefinition',
          'loc' => 
          array (
            'start' => 1261,
            'end' => 1276,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 1261,
              'end' => 1267,
            ),
            'value' => 'string',
          ),
          'type' => 
          array (
            'kind' => 'NonNullType',
            'loc' => 
            array (
              'start' => 1269,
              'end' => 1276,
            ),
            'type' => 
            array (
              'kind' => 'NamedType',
              'loc' => 
              array (
                'start' => 1269,
                'end' => 1275,
              ),
              'name' => 
              array (
                'kind' => 'Name',
                'loc' => 
                array (
                  'start' => 1269,
                  'end' => 1275,
                ),
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
          'kind' => 'InputValueDefinition',
          'loc' => 
          array (
            'start' => 1281,
            'end' => 1298,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 1281,
              'end' => 1288,
            ),
            'value' => 'boolean',
          ),
          'type' => 
          array (
            'kind' => 'NonNullType',
            'loc' => 
            array (
              'start' => 1290,
              'end' => 1298,
            ),
            'type' => 
            array (
              'kind' => 'NamedType',
              'loc' => 
              array (
                'start' => 1290,
                'end' => 1297,
              ),
              'name' => 
              array (
                'kind' => 'Name',
                'loc' => 
                array (
                  'start' => 1290,
                  'end' => 1297,
                ),
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
          'kind' => 'InputValueDefinition',
          'loc' => 
          array (
            'start' => 1303,
            'end' => 1342,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 1303,
              'end' => 1321,
            ),
            'value' => 'anotherMappedInput',
          ),
          'type' => 
          array (
            'kind' => 'NonNullType',
            'loc' => 
            array (
              'start' => 1323,
              'end' => 1342,
            ),
            'type' => 
            array (
              'kind' => 'NamedType',
              'loc' => 
              array (
                'start' => 1323,
                'end' => 1341,
              ),
              'name' => 
              array (
                'kind' => 'Name',
                'loc' => 
                array (
                  'start' => 1323,
                  'end' => 1341,
                ),
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
          'kind' => 'InputValueDefinition',
          'loc' => 
          array (
            'start' => 1347,
            'end' => 1376,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 1347,
              'end' => 1360,
            ),
            'value' => 'unmappedInput',
          ),
          'type' => 
          array (
            'kind' => 'NonNullType',
            'loc' => 
            array (
              'start' => 1362,
              'end' => 1376,
            ),
            'type' => 
            array (
              'kind' => 'NamedType',
              'loc' => 
              array (
                'start' => 1362,
                'end' => 1375,
              ),
              'name' => 
              array (
                'kind' => 'Name',
                'loc' => 
                array (
                  'start' => 1362,
                  'end' => 1375,
                ),
                'value' => 'UnmappedInput',
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
      'kind' => 'InputObjectTypeDefinition',
      'loc' => 
      array (
        'start' => 1380,
        'end' => 1420,
      ),
      'name' => 
      array (
        'kind' => 'Name',
        'loc' => 
        array (
          'start' => 1386,
          'end' => 1404,
        ),
        'value' => 'AnotherMappedInput',
      ),
      'directives' => 
      array (
      ),
      'fields' => 
      array (
        0 => 
        array (
          'kind' => 'InputValueDefinition',
          'loc' => 
          array (
            'start' => 1411,
            'end' => 1418,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 1411,
              'end' => 1413,
            ),
            'value' => 'id',
          ),
          'type' => 
          array (
            'kind' => 'NonNullType',
            'loc' => 
            array (
              'start' => 1415,
              'end' => 1418,
            ),
            'type' => 
            array (
              'kind' => 'NamedType',
              'loc' => 
              array (
                'start' => 1415,
                'end' => 1417,
              ),
              'name' => 
              array (
                'kind' => 'Name',
                'loc' => 
                array (
                  'start' => 1415,
                  'end' => 1417,
                ),
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
    26 => 
    array (
      'kind' => 'InputObjectTypeDefinition',
      'loc' => 
      array (
        'start' => 1422,
        'end' => 1457,
      ),
      'name' => 
      array (
        'kind' => 'Name',
        'loc' => 
        array (
          'start' => 1428,
          'end' => 1441,
        ),
        'value' => 'UnmappedInput',
      ),
      'directives' => 
      array (
      ),
      'fields' => 
      array (
        0 => 
        array (
          'kind' => 'InputValueDefinition',
          'loc' => 
          array (
            'start' => 1448,
            'end' => 1455,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 1448,
              'end' => 1450,
            ),
            'value' => 'id',
          ),
          'type' => 
          array (
            'kind' => 'NonNullType',
            'loc' => 
            array (
              'start' => 1452,
              'end' => 1455,
            ),
            'type' => 
            array (
              'kind' => 'NamedType',
              'loc' => 
              array (
                'start' => 1452,
                'end' => 1454,
              ),
              'name' => 
              array (
                'kind' => 'Name',
                'loc' => 
                array (
                  'start' => 1452,
                  'end' => 1454,
                ),
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
  ),
);
