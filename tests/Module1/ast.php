<?php

declare(strict_types=1);

return array (
  'kind' => 'Document',
  'loc' => 
  array (
    'start' => 0,
    'end' => 1542,
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
      'kind' => 'ScalarTypeDefinition',
      'loc' => 
      array (
        'start' => 82,
        'end' => 96,
      ),
      'name' => 
      array (
        'kind' => 'Name',
        'loc' => 
        array (
          'start' => 89,
          'end' => 96,
        ),
        'value' => 'Decimal',
      ),
      'directives' => 
      array (
      ),
    ),
    4 => 
    array (
      'kind' => 'InterfaceTypeDefinition',
      'loc' => 
      array (
        'start' => 98,
        'end' => 128,
      ),
      'name' => 
      array (
        'kind' => 'Name',
        'loc' => 
        array (
          'start' => 108,
          'end' => 112,
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
            'start' => 119,
            'end' => 126,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 119,
              'end' => 121,
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
              'start' => 123,
              'end' => 126,
            ),
            'type' => 
            array (
              'kind' => 'NamedType',
              'loc' => 
              array (
                'start' => 123,
                'end' => 125,
              ),
              'name' => 
              array (
                'kind' => 'Name',
                'loc' => 
                array (
                  'start' => 123,
                  'end' => 125,
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
    5 => 
    array (
      'kind' => 'ObjectTypeDefinition',
      'loc' => 
      array (
        'start' => 130,
        'end' => 208,
      ),
      'name' => 
      array (
        'kind' => 'Name',
        'loc' => 
        array (
          'start' => 135,
          'end' => 140,
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
            'start' => 147,
            'end' => 174,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 147,
              'end' => 151,
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
                'start' => 152,
                'end' => 164,
              ),
              'name' => 
              array (
                'kind' => 'Name',
                'loc' => 
                array (
                  'start' => 152,
                  'end' => 154,
                ),
                'value' => 'da',
              ),
              'type' => 
              array (
                'kind' => 'NonNullType',
                'loc' => 
                array (
                  'start' => 156,
                  'end' => 164,
                ),
                'type' => 
                array (
                  'kind' => 'NamedType',
                  'loc' => 
                  array (
                    'start' => 156,
                    'end' => 163,
                  ),
                  'name' => 
                  array (
                    'kind' => 'Name',
                    'loc' => 
                    array (
                      'start' => 156,
                      'end' => 163,
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
              'start' => 167,
              'end' => 174,
            ),
            'type' => 
            array (
              'kind' => 'NamedType',
              'loc' => 
              array (
                'start' => 167,
                'end' => 173,
              ),
              'name' => 
              array (
                'kind' => 'Name',
                'loc' => 
                array (
                  'start' => 167,
                  'end' => 173,
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
            'start' => 179,
            'end' => 206,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 179,
              'end' => 191,
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
              'start' => 193,
              'end' => 206,
            ),
            'type' => 
            array (
              'kind' => 'NamedType',
              'loc' => 
              array (
                'start' => 193,
                'end' => 205,
              ),
              'name' => 
              array (
                'kind' => 'Name',
                'loc' => 
                array (
                  'start' => 193,
                  'end' => 205,
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
    6 => 
    array (
      'kind' => 'ObjectTypeDefinition',
      'loc' => 
      array (
        'start' => 210,
        'end' => 425,
      ),
      'name' => 
      array (
        'kind' => 'Name',
        'loc' => 
        array (
          'start' => 215,
          'end' => 223,
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
            'start' => 230,
            'end' => 404,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 230,
              'end' => 240,
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
                'start' => 241,
                'end' => 264,
              ),
              'name' => 
              array (
                'kind' => 'Name',
                'loc' => 
                array (
                  'start' => 241,
                  'end' => 246,
                ),
                'value' => 'input',
              ),
              'type' => 
              array (
                'kind' => 'NonNullType',
                'loc' => 
                array (
                  'start' => 248,
                  'end' => 264,
                ),
                'type' => 
                array (
                  'kind' => 'NamedType',
                  'loc' => 
                  array (
                    'start' => 248,
                    'end' => 263,
                  ),
                  'name' => 
                  array (
                    'kind' => 'Name',
                    'loc' => 
                    array (
                      'start' => 248,
                      'end' => 263,
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
                'start' => 266,
                'end' => 274,
              ),
              'name' => 
              array (
                'kind' => 'Name',
                'loc' => 
                array (
                  'start' => 266,
                  'end' => 269,
                ),
                'value' => 'int',
              ),
              'type' => 
              array (
                'kind' => 'NamedType',
                'loc' => 
                array (
                  'start' => 271,
                  'end' => 274,
                ),
                'name' => 
                array (
                  'kind' => 'Name',
                  'loc' => 
                  array (
                    'start' => 271,
                    'end' => 274,
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
                'start' => 276,
                'end' => 290,
              ),
              'name' => 
              array (
                'kind' => 'Name',
                'loc' => 
                array (
                  'start' => 276,
                  'end' => 280,
                ),
                'value' => 'bool',
              ),
              'type' => 
              array (
                'kind' => 'NonNullType',
                'loc' => 
                array (
                  'start' => 282,
                  'end' => 290,
                ),
                'type' => 
                array (
                  'kind' => 'NamedType',
                  'loc' => 
                  array (
                    'start' => 282,
                    'end' => 289,
                  ),
                  'name' => 
                  array (
                    'kind' => 'Name',
                    'loc' => 
                    array (
                      'start' => 282,
                      'end' => 289,
                    ),
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
              'kind' => 'InputValueDefinition',
              'loc' => 
              array (
                'start' => 292,
                'end' => 323,
              ),
              'name' => 
              array (
                'kind' => 'Name',
                'loc' => 
                array (
                  'start' => 292,
                  'end' => 315,
                ),
                'value' => 'nonNullArrayNonNullItem',
              ),
              'type' => 
              array (
                'kind' => 'NonNullType',
                'loc' => 
                array (
                  'start' => 317,
                  'end' => 323,
                ),
                'type' => 
                array (
                  'kind' => 'ListType',
                  'loc' => 
                  array (
                    'start' => 317,
                    'end' => 322,
                  ),
                  'type' => 
                  array (
                    'kind' => 'NonNullType',
                    'loc' => 
                    array (
                      'start' => 318,
                      'end' => 321,
                    ),
                    'type' => 
                    array (
                      'kind' => 'NamedType',
                      'loc' => 
                      array (
                        'start' => 318,
                        'end' => 320,
                      ),
                      'name' => 
                      array (
                        'kind' => 'Name',
                        'loc' => 
                        array (
                          'start' => 318,
                          'end' => 320,
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
            4 => 
            array (
              'kind' => 'InputValueDefinition',
              'loc' => 
              array (
                'start' => 325,
                'end' => 344,
              ),
              'name' => 
              array (
                'kind' => 'Name',
                'loc' => 
                array (
                  'start' => 325,
                  'end' => 337,
                ),
                'value' => 'nonNullArray',
              ),
              'type' => 
              array (
                'kind' => 'NonNullType',
                'loc' => 
                array (
                  'start' => 339,
                  'end' => 344,
                ),
                'type' => 
                array (
                  'kind' => 'ListType',
                  'loc' => 
                  array (
                    'start' => 339,
                    'end' => 343,
                  ),
                  'type' => 
                  array (
                    'kind' => 'NamedType',
                    'loc' => 
                    array (
                      'start' => 340,
                      'end' => 342,
                    ),
                    'name' => 
                    array (
                      'kind' => 'Name',
                      'loc' => 
                      array (
                        'start' => 340,
                        'end' => 342,
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
                'start' => 346,
                'end' => 369,
              ),
              'name' => 
              array (
                'kind' => 'Name',
                'loc' => 
                array (
                  'start' => 346,
                  'end' => 362,
                ),
                'value' => 'arrayNonNullItem',
              ),
              'type' => 
              array (
                'kind' => 'ListType',
                'loc' => 
                array (
                  'start' => 364,
                  'end' => 369,
                ),
                'type' => 
                array (
                  'kind' => 'NonNullType',
                  'loc' => 
                  array (
                    'start' => 365,
                    'end' => 368,
                  ),
                  'type' => 
                  array (
                    'kind' => 'NamedType',
                    'loc' => 
                    array (
                      'start' => 365,
                      'end' => 367,
                    ),
                    'name' => 
                    array (
                      'kind' => 'Name',
                      'loc' => 
                      array (
                        'start' => 365,
                        'end' => 367,
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
            6 => 
            array (
              'kind' => 'InputValueDefinition',
              'loc' => 
              array (
                'start' => 371,
                'end' => 382,
              ),
              'name' => 
              array (
                'kind' => 'Name',
                'loc' => 
                array (
                  'start' => 371,
                  'end' => 376,
                ),
                'value' => 'array',
              ),
              'type' => 
              array (
                'kind' => 'ListType',
                'loc' => 
                array (
                  'start' => 378,
                  'end' => 382,
                ),
                'type' => 
                array (
                  'kind' => 'NamedType',
                  'loc' => 
                  array (
                    'start' => 379,
                    'end' => 381,
                  ),
                  'name' => 
                  array (
                    'kind' => 'Name',
                    'loc' => 
                    array (
                      'start' => 379,
                      'end' => 381,
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
              'start' => 385,
              'end' => 404,
            ),
            'type' => 
            array (
              'kind' => 'NamedType',
              'loc' => 
              array (
                'start' => 385,
                'end' => 403,
              ),
              'name' => 
              array (
                'kind' => 'Name',
                'loc' => 
                array (
                  'start' => 385,
                  'end' => 403,
                ),
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
          'kind' => 'FieldDefinition',
          'loc' => 
          array (
            'start' => 409,
            'end' => 423,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 409,
              'end' => 417,
            ),
            'value' => 'testJson',
          ),
          'arguments' => 
          array (
          ),
          'type' => 
          array (
            'kind' => 'NamedType',
            'loc' => 
            array (
              'start' => 419,
              'end' => 423,
            ),
            'name' => 
            array (
              'kind' => 'Name',
              'loc' => 
              array (
                'start' => 419,
                'end' => 423,
              ),
              'value' => 'JSON',
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
      'kind' => 'InputObjectTypeDefinition',
      'loc' => 
      array (
        'start' => 427,
        'end' => 504,
      ),
      'name' => 
      array (
        'kind' => 'Name',
        'loc' => 
        array (
          'start' => 433,
          'end' => 448,
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
            'start' => 455,
            'end' => 469,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 455,
              'end' => 460,
            ),
            'value' => 'email',
          ),
          'type' => 
          array (
            'kind' => 'NonNullType',
            'loc' => 
            array (
              'start' => 462,
              'end' => 469,
            ),
            'type' => 
            array (
              'kind' => 'NamedType',
              'loc' => 
              array (
                'start' => 462,
                'end' => 468,
              ),
              'name' => 
              array (
                'kind' => 'Name',
                'loc' => 
                array (
                  'start' => 462,
                  'end' => 468,
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
            'start' => 474,
            'end' => 483,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 474,
              'end' => 477,
            ),
            'value' => 'int',
          ),
          'type' => 
          array (
            'kind' => 'NonNullType',
            'loc' => 
            array (
              'start' => 479,
              'end' => 483,
            ),
            'type' => 
            array (
              'kind' => 'NamedType',
              'loc' => 
              array (
                'start' => 479,
                'end' => 482,
              ),
              'name' => 
              array (
                'kind' => 'Name',
                'loc' => 
                array (
                  'start' => 479,
                  'end' => 482,
                ),
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
          'kind' => 'InputValueDefinition',
          'loc' => 
          array (
            'start' => 488,
            'end' => 502,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 488,
              'end' => 492,
            ),
            'value' => 'bool',
          ),
          'type' => 
          array (
            'kind' => 'NonNullType',
            'loc' => 
            array (
              'start' => 494,
              'end' => 502,
            ),
            'type' => 
            array (
              'kind' => 'NamedType',
              'loc' => 
              array (
                'start' => 494,
                'end' => 501,
              ),
              'name' => 
              array (
                'kind' => 'Name',
                'loc' => 
                array (
                  'start' => 494,
                  'end' => 501,
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
    8 => 
    array (
      'kind' => 'ObjectTypeDefinition',
      'loc' => 
      array (
        'start' => 506,
        'end' => 548,
      ),
      'name' => 
      array (
        'kind' => 'Name',
        'loc' => 
        array (
          'start' => 511,
          'end' => 528,
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
            'start' => 535,
            'end' => 546,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 535,
              'end' => 539,
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
              'start' => 541,
              'end' => 546,
            ),
            'type' => 
            array (
              'kind' => 'NamedType',
              'loc' => 
              array (
                'start' => 541,
                'end' => 545,
              ),
              'name' => 
              array (
                'kind' => 'Name',
                'loc' => 
                array (
                  'start' => 541,
                  'end' => 545,
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
    9 => 
    array (
      'kind' => 'ObjectTypeDefinition',
      'loc' => 
      array (
        'start' => 550,
        'end' => 595,
      ),
      'name' => 
      array (
        'kind' => 'Name',
        'loc' => 
        array (
          'start' => 555,
          'end' => 572,
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
            'start' => 579,
            'end' => 593,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 579,
              'end' => 584,
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
              'start' => 586,
              'end' => 593,
            ),
            'type' => 
            array (
              'kind' => 'NamedType',
              'loc' => 
              array (
                'start' => 586,
                'end' => 592,
              ),
              'name' => 
              array (
                'kind' => 'Name',
                'loc' => 
                array (
                  'start' => 586,
                  'end' => 592,
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
    10 => 
    array (
      'kind' => 'UnionTypeDefinition',
      'loc' => 
      array (
        'start' => 597,
        'end' => 661,
      ),
      'name' => 
      array (
        'kind' => 'Name',
        'loc' => 
        array (
          'start' => 603,
          'end' => 621,
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
            'start' => 624,
            'end' => 641,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 624,
              'end' => 641,
            ),
            'value' => 'CreateUserSuccess',
          ),
        ),
        1 => 
        array (
          'kind' => 'NamedType',
          'loc' => 
          array (
            'start' => 644,
            'end' => 661,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 644,
              'end' => 661,
            ),
            'value' => 'CreateUserFailure',
          ),
        ),
      ),
    ),
    11 => 
    array (
      'kind' => 'ObjectTypeDefinition',
      'loc' => 
      array (
        'start' => 663,
        'end' => 726,
      ),
      'name' => 
      array (
        'kind' => 'Name',
        'loc' => 
        array (
          'start' => 668,
          'end' => 672,
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
            'start' => 684,
            'end' => 688,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 684,
              'end' => 688,
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
            'start' => 695,
            'end' => 702,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 695,
              'end' => 697,
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
              'start' => 699,
              'end' => 702,
            ),
            'type' => 
            array (
              'kind' => 'NamedType',
              'loc' => 
              array (
                'start' => 699,
                'end' => 701,
              ),
              'name' => 
              array (
                'kind' => 'Name',
                'loc' => 
                array (
                  'start' => 699,
                  'end' => 701,
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
            'start' => 707,
            'end' => 724,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 707,
              'end' => 715,
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
              'start' => 717,
              'end' => 724,
            ),
            'type' => 
            array (
              'kind' => 'NamedType',
              'loc' => 
              array (
                'start' => 717,
                'end' => 723,
              ),
              'name' => 
              array (
                'kind' => 'Name',
                'loc' => 
                array (
                  'start' => 717,
                  'end' => 723,
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
    12 => 
    array (
      'kind' => 'UnionTypeDefinition',
      'loc' => 
      array (
        'start' => 728,
        'end' => 760,
      ),
      'name' => 
      array (
        'kind' => 'Name',
        'loc' => 
        array (
          'start' => 734,
          'end' => 740,
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
            'start' => 743,
            'end' => 750,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 743,
              'end' => 750,
            ),
            'value' => 'Widget1',
          ),
        ),
        1 => 
        array (
          'kind' => 'NamedType',
          'loc' => 
          array (
            'start' => 753,
            'end' => 760,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 753,
              'end' => 760,
            ),
            'value' => 'Widget2',
          ),
        ),
      ),
    ),
    13 => 
    array (
      'kind' => 'ObjectTypeDefinition',
      'loc' => 
      array (
        'start' => 762,
        'end' => 796,
      ),
      'name' => 
      array (
        'kind' => 'Name',
        'loc' => 
        array (
          'start' => 767,
          'end' => 774,
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
            'start' => 781,
            'end' => 794,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 781,
              'end' => 785,
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
              'start' => 787,
              'end' => 794,
            ),
            'type' => 
            array (
              'kind' => 'NamedType',
              'loc' => 
              array (
                'start' => 787,
                'end' => 793,
              ),
              'name' => 
              array (
                'kind' => 'Name',
                'loc' => 
                array (
                  'start' => 787,
                  'end' => 793,
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
      'kind' => 'ObjectTypeDefinition',
      'loc' => 
      array (
        'start' => 798,
        'end' => 832,
      ),
      'name' => 
      array (
        'kind' => 'Name',
        'loc' => 
        array (
          'start' => 803,
          'end' => 810,
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
            'start' => 817,
            'end' => 830,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 817,
              'end' => 821,
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
              'start' => 823,
              'end' => 830,
            ),
            'type' => 
            array (
              'kind' => 'NamedType',
              'loc' => 
              array (
                'start' => 823,
                'end' => 829,
              ),
              'name' => 
              array (
                'kind' => 'Name',
                'loc' => 
                array (
                  'start' => 823,
                  'end' => 829,
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
    15 => 
    array (
      'kind' => 'EnumTypeDefinition',
      'loc' => 
      array (
        'start' => 834,
        'end' => 866,
      ),
      'name' => 
      array (
        'kind' => 'Name',
        'loc' => 
        array (
          'start' => 839,
          'end' => 844,
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
            'start' => 851,
            'end' => 855,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 851,
              'end' => 855,
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
            'start' => 860,
            'end' => 864,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 860,
              'end' => 864,
            ),
            'value' => 'VAL2',
          ),
          'directives' => 
          array (
          ),
        ),
      ),
    ),
    16 => 
    array (
      'kind' => 'UnionTypeDefinition',
      'loc' => 
      array (
        'start' => 868,
        'end' => 930,
      ),
      'name' => 
      array (
        'kind' => 'Name',
        'loc' => 
        array (
          'start' => 874,
          'end' => 886,
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
            'start' => 889,
            'end' => 908,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 889,
              'end' => 908,
            ),
            'value' => 'TestSuccessResponse',
          ),
        ),
        1 => 
        array (
          'kind' => 'NamedType',
          'loc' => 
          array (
            'start' => 911,
            'end' => 930,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 911,
              'end' => 930,
            ),
            'value' => 'TestFailureResponse',
          ),
        ),
      ),
    ),
    17 => 
    array (
      'kind' => 'ObjectTypeDefinition',
      'loc' => 
      array (
        'start' => 932,
        'end' => 986,
      ),
      'name' => 
      array (
        'kind' => 'Name',
        'loc' => 
        array (
          'start' => 937,
          'end' => 956,
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
            'start' => 963,
            'end' => 984,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 963,
              'end' => 969,
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
              'start' => 971,
              'end' => 984,
            ),
            'type' => 
            array (
              'kind' => 'ListType',
              'loc' => 
              array (
                'start' => 971,
                'end' => 983,
              ),
              'type' => 
              array (
                'kind' => 'NonNullType',
                'loc' => 
                array (
                  'start' => 972,
                  'end' => 982,
                ),
                'type' => 
                array (
                  'kind' => 'NamedType',
                  'loc' => 
                  array (
                    'start' => 972,
                    'end' => 981,
                  ),
                  'name' => 
                  array (
                    'kind' => 'Name',
                    'loc' => 
                    array (
                      'start' => 972,
                      'end' => 981,
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
    18 => 
    array (
      'kind' => 'UnionTypeDefinition',
      'loc' => 
      array (
        'start' => 988,
        'end' => 1016,
      ),
      'name' => 
      array (
        'kind' => 'Name',
        'loc' => 
        array (
          'start' => 994,
          'end' => 1003,
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
            'start' => 1006,
            'end' => 1016,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 1006,
              'end' => 1016,
            ),
            'value' => 'TestError1',
          ),
        ),
      ),
    ),
    19 => 
    array (
      'kind' => 'ObjectTypeDefinition',
      'loc' => 
      array (
        'start' => 1018,
        'end' => 1065,
      ),
      'name' => 
      array (
        'kind' => 'Name',
        'loc' => 
        array (
          'start' => 1023,
          'end' => 1042,
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
            'start' => 1049,
            'end' => 1063,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 1049,
              'end' => 1053,
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
              'start' => 1055,
              'end' => 1063,
            ),
            'type' => 
            array (
              'kind' => 'NamedType',
              'loc' => 
              array (
                'start' => 1055,
                'end' => 1062,
              ),
              'name' => 
              array (
                'kind' => 'Name',
                'loc' => 
                array (
                  'start' => 1055,
                  'end' => 1062,
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
    20 => 
    array (
      'kind' => 'UnionTypeDefinition',
      'loc' => 
      array (
        'start' => 1067,
        'end' => 1117,
      ),
      'name' => 
      array (
        'kind' => 'Name',
        'loc' => 
        array (
          'start' => 1073,
          'end' => 1085,
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
            'start' => 1088,
            'end' => 1101,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 1088,
              'end' => 1101,
            ),
            'value' => 'TestSameType1',
          ),
        ),
        1 => 
        array (
          'kind' => 'NamedType',
          'loc' => 
          array (
            'start' => 1104,
            'end' => 1117,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 1104,
              'end' => 1117,
            ),
            'value' => 'TestSameType2',
          ),
        ),
      ),
    ),
    21 => 
    array (
      'kind' => 'ObjectTypeDefinition',
      'loc' => 
      array (
        'start' => 1119,
        'end' => 1162,
      ),
      'name' => 
      array (
        'kind' => 'Name',
        'loc' => 
        array (
          'start' => 1124,
          'end' => 1137,
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
            'start' => 1144,
            'end' => 1160,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 1144,
              'end' => 1151,
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
              'start' => 1153,
              'end' => 1160,
            ),
            'type' => 
            array (
              'kind' => 'NamedType',
              'loc' => 
              array (
                'start' => 1153,
                'end' => 1159,
              ),
              'name' => 
              array (
                'kind' => 'Name',
                'loc' => 
                array (
                  'start' => 1153,
                  'end' => 1159,
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
        'start' => 1164,
        'end' => 1207,
      ),
      'name' => 
      array (
        'kind' => 'Name',
        'loc' => 
        array (
          'start' => 1169,
          'end' => 1182,
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
            'start' => 1189,
            'end' => 1205,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 1189,
              'end' => 1196,
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
              'start' => 1198,
              'end' => 1205,
            ),
            'type' => 
            array (
              'kind' => 'NamedType',
              'loc' => 
              array (
                'start' => 1198,
                'end' => 1204,
              ),
              'name' => 
              array (
                'kind' => 'Name',
                'loc' => 
                array (
                  'start' => 1198,
                  'end' => 1204,
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
    23 => 
    array (
      'kind' => 'ObjectTypeDefinition',
      'loc' => 
      array (
        'start' => 1209,
        'end' => 1239,
      ),
      'name' => 
      array (
        'kind' => 'Name',
        'loc' => 
        array (
          'start' => 1214,
          'end' => 1223,
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
            'start' => 1230,
            'end' => 1237,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 1230,
              'end' => 1232,
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
              'start' => 1234,
              'end' => 1237,
            ),
            'type' => 
            array (
              'kind' => 'NamedType',
              'loc' => 
              array (
                'start' => 1234,
                'end' => 1236,
              ),
              'name' => 
              array (
                'kind' => 'Name',
                'loc' => 
                array (
                  'start' => 1234,
                  'end' => 1236,
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
    24 => 
    array (
      'kind' => 'EnumTypeDefinition',
      'loc' => 
      array (
        'start' => 1260,
        'end' => 1295,
      ),
      'name' => 
      array (
        'kind' => 'Name',
        'loc' => 
        array (
          'start' => 1265,
          'end' => 1275,
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
            'start' => 1282,
            'end' => 1285,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 1282,
              'end' => 1285,
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
            'start' => 1290,
            'end' => 1293,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 1290,
              'end' => 1293,
            ),
            'value' => 'TWO',
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
        'start' => 1317,
        'end' => 1462,
      ),
      'name' => 
      array (
        'kind' => 'Name',
        'loc' => 
        array (
          'start' => 1323,
          'end' => 1338,
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
            'start' => 1345,
            'end' => 1360,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 1345,
              'end' => 1351,
            ),
            'value' => 'string',
          ),
          'type' => 
          array (
            'kind' => 'NonNullType',
            'loc' => 
            array (
              'start' => 1353,
              'end' => 1360,
            ),
            'type' => 
            array (
              'kind' => 'NamedType',
              'loc' => 
              array (
                'start' => 1353,
                'end' => 1359,
              ),
              'name' => 
              array (
                'kind' => 'Name',
                'loc' => 
                array (
                  'start' => 1353,
                  'end' => 1359,
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
            'start' => 1365,
            'end' => 1382,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 1365,
              'end' => 1372,
            ),
            'value' => 'boolean',
          ),
          'type' => 
          array (
            'kind' => 'NonNullType',
            'loc' => 
            array (
              'start' => 1374,
              'end' => 1382,
            ),
            'type' => 
            array (
              'kind' => 'NamedType',
              'loc' => 
              array (
                'start' => 1374,
                'end' => 1381,
              ),
              'name' => 
              array (
                'kind' => 'Name',
                'loc' => 
                array (
                  'start' => 1374,
                  'end' => 1381,
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
            'start' => 1387,
            'end' => 1426,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 1387,
              'end' => 1405,
            ),
            'value' => 'anotherMappedInput',
          ),
          'type' => 
          array (
            'kind' => 'NonNullType',
            'loc' => 
            array (
              'start' => 1407,
              'end' => 1426,
            ),
            'type' => 
            array (
              'kind' => 'NamedType',
              'loc' => 
              array (
                'start' => 1407,
                'end' => 1425,
              ),
              'name' => 
              array (
                'kind' => 'Name',
                'loc' => 
                array (
                  'start' => 1407,
                  'end' => 1425,
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
            'start' => 1431,
            'end' => 1460,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 1431,
              'end' => 1444,
            ),
            'value' => 'unmappedInput',
          ),
          'type' => 
          array (
            'kind' => 'NonNullType',
            'loc' => 
            array (
              'start' => 1446,
              'end' => 1460,
            ),
            'type' => 
            array (
              'kind' => 'NamedType',
              'loc' => 
              array (
                'start' => 1446,
                'end' => 1459,
              ),
              'name' => 
              array (
                'kind' => 'Name',
                'loc' => 
                array (
                  'start' => 1446,
                  'end' => 1459,
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
    26 => 
    array (
      'kind' => 'InputObjectTypeDefinition',
      'loc' => 
      array (
        'start' => 1464,
        'end' => 1504,
      ),
      'name' => 
      array (
        'kind' => 'Name',
        'loc' => 
        array (
          'start' => 1470,
          'end' => 1488,
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
            'start' => 1495,
            'end' => 1502,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 1495,
              'end' => 1497,
            ),
            'value' => 'id',
          ),
          'type' => 
          array (
            'kind' => 'NonNullType',
            'loc' => 
            array (
              'start' => 1499,
              'end' => 1502,
            ),
            'type' => 
            array (
              'kind' => 'NamedType',
              'loc' => 
              array (
                'start' => 1499,
                'end' => 1501,
              ),
              'name' => 
              array (
                'kind' => 'Name',
                'loc' => 
                array (
                  'start' => 1499,
                  'end' => 1501,
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
    27 => 
    array (
      'kind' => 'InputObjectTypeDefinition',
      'loc' => 
      array (
        'start' => 1506,
        'end' => 1541,
      ),
      'name' => 
      array (
        'kind' => 'Name',
        'loc' => 
        array (
          'start' => 1512,
          'end' => 1525,
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
            'start' => 1532,
            'end' => 1539,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 1532,
              'end' => 1534,
            ),
            'value' => 'id',
          ),
          'type' => 
          array (
            'kind' => 'NonNullType',
            'loc' => 
            array (
              'start' => 1536,
              'end' => 1539,
            ),
            'type' => 
            array (
              'kind' => 'NamedType',
              'loc' => 
              array (
                'start' => 1536,
                'end' => 1538,
              ),
              'name' => 
              array (
                'kind' => 'Name',
                'loc' => 
                array (
                  'start' => 1536,
                  'end' => 1538,
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
