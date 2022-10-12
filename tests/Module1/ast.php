<?php

declare(strict_types=1);

return array (
  'kind' => 'Document',
  'loc' => 
  array (
    'start' => 0,
    'end' => 767,
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
      'kind' => 'InterfaceTypeDefinition',
      'loc' => 
      array (
        'start' => 70,
        'end' => 100,
      ),
      'name' => 
      array (
        'kind' => 'Name',
        'loc' => 
        array (
          'start' => 80,
          'end' => 84,
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
            'start' => 91,
            'end' => 98,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 91,
              'end' => 93,
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
              'start' => 95,
              'end' => 98,
            ),
            'type' => 
            array (
              'kind' => 'NamedType',
              'loc' => 
              array (
                'start' => 95,
                'end' => 97,
              ),
              'name' => 
              array (
                'kind' => 'Name',
                'loc' => 
                array (
                  'start' => 95,
                  'end' => 97,
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
    3 => 
    array (
      'kind' => 'ObjectTypeDefinition',
      'loc' => 
      array (
        'start' => 102,
        'end' => 148,
      ),
      'name' => 
      array (
        'kind' => 'Name',
        'loc' => 
        array (
          'start' => 107,
          'end' => 112,
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
            'start' => 119,
            'end' => 146,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 119,
              'end' => 123,
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
                'start' => 124,
                'end' => 136,
              ),
              'name' => 
              array (
                'kind' => 'Name',
                'loc' => 
                array (
                  'start' => 124,
                  'end' => 126,
                ),
                'value' => 'da',
              ),
              'type' => 
              array (
                'kind' => 'NonNullType',
                'loc' => 
                array (
                  'start' => 128,
                  'end' => 136,
                ),
                'type' => 
                array (
                  'kind' => 'NamedType',
                  'loc' => 
                  array (
                    'start' => 128,
                    'end' => 135,
                  ),
                  'name' => 
                  array (
                    'kind' => 'Name',
                    'loc' => 
                    array (
                      'start' => 128,
                      'end' => 135,
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
              'start' => 139,
              'end' => 146,
            ),
            'type' => 
            array (
              'kind' => 'NamedType',
              'loc' => 
              array (
                'start' => 139,
                'end' => 145,
              ),
              'name' => 
              array (
                'kind' => 'Name',
                'loc' => 
                array (
                  'start' => 139,
                  'end' => 145,
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
    4 => 
    array (
      'kind' => 'ObjectTypeDefinition',
      'loc' => 
      array (
        'start' => 150,
        'end' => 316,
      ),
      'name' => 
      array (
        'kind' => 'Name',
        'loc' => 
        array (
          'start' => 155,
          'end' => 163,
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
            'start' => 170,
            'end' => 314,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 170,
              'end' => 180,
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
                'start' => 181,
                'end' => 204,
              ),
              'name' => 
              array (
                'kind' => 'Name',
                'loc' => 
                array (
                  'start' => 181,
                  'end' => 186,
                ),
                'value' => 'input',
              ),
              'type' => 
              array (
                'kind' => 'NonNullType',
                'loc' => 
                array (
                  'start' => 188,
                  'end' => 204,
                ),
                'type' => 
                array (
                  'kind' => 'NamedType',
                  'loc' => 
                  array (
                    'start' => 188,
                    'end' => 203,
                  ),
                  'name' => 
                  array (
                    'kind' => 'Name',
                    'loc' => 
                    array (
                      'start' => 188,
                      'end' => 203,
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
                'start' => 206,
                'end' => 214,
              ),
              'name' => 
              array (
                'kind' => 'Name',
                'loc' => 
                array (
                  'start' => 206,
                  'end' => 209,
                ),
                'value' => 'int',
              ),
              'type' => 
              array (
                'kind' => 'NamedType',
                'loc' => 
                array (
                  'start' => 211,
                  'end' => 214,
                ),
                'name' => 
                array (
                  'kind' => 'Name',
                  'loc' => 
                  array (
                    'start' => 211,
                    'end' => 214,
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
                'start' => 216,
                'end' => 247,
              ),
              'name' => 
              array (
                'kind' => 'Name',
                'loc' => 
                array (
                  'start' => 216,
                  'end' => 239,
                ),
                'value' => 'nonNullArrayNonNullItem',
              ),
              'type' => 
              array (
                'kind' => 'NonNullType',
                'loc' => 
                array (
                  'start' => 241,
                  'end' => 247,
                ),
                'type' => 
                array (
                  'kind' => 'ListType',
                  'loc' => 
                  array (
                    'start' => 241,
                    'end' => 246,
                  ),
                  'type' => 
                  array (
                    'kind' => 'NonNullType',
                    'loc' => 
                    array (
                      'start' => 242,
                      'end' => 245,
                    ),
                    'type' => 
                    array (
                      'kind' => 'NamedType',
                      'loc' => 
                      array (
                        'start' => 242,
                        'end' => 244,
                      ),
                      'name' => 
                      array (
                        'kind' => 'Name',
                        'loc' => 
                        array (
                          'start' => 242,
                          'end' => 244,
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
                'start' => 249,
                'end' => 268,
              ),
              'name' => 
              array (
                'kind' => 'Name',
                'loc' => 
                array (
                  'start' => 249,
                  'end' => 261,
                ),
                'value' => 'nonNullArray',
              ),
              'type' => 
              array (
                'kind' => 'NonNullType',
                'loc' => 
                array (
                  'start' => 263,
                  'end' => 268,
                ),
                'type' => 
                array (
                  'kind' => 'ListType',
                  'loc' => 
                  array (
                    'start' => 263,
                    'end' => 267,
                  ),
                  'type' => 
                  array (
                    'kind' => 'NamedType',
                    'loc' => 
                    array (
                      'start' => 264,
                      'end' => 266,
                    ),
                    'name' => 
                    array (
                      'kind' => 'Name',
                      'loc' => 
                      array (
                        'start' => 264,
                        'end' => 266,
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
                'start' => 270,
                'end' => 293,
              ),
              'name' => 
              array (
                'kind' => 'Name',
                'loc' => 
                array (
                  'start' => 270,
                  'end' => 286,
                ),
                'value' => 'arrayNonNullItem',
              ),
              'type' => 
              array (
                'kind' => 'ListType',
                'loc' => 
                array (
                  'start' => 288,
                  'end' => 293,
                ),
                'type' => 
                array (
                  'kind' => 'NonNullType',
                  'loc' => 
                  array (
                    'start' => 289,
                    'end' => 292,
                  ),
                  'type' => 
                  array (
                    'kind' => 'NamedType',
                    'loc' => 
                    array (
                      'start' => 289,
                      'end' => 291,
                    ),
                    'name' => 
                    array (
                      'kind' => 'Name',
                      'loc' => 
                      array (
                        'start' => 289,
                        'end' => 291,
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
                'start' => 295,
                'end' => 306,
              ),
              'name' => 
              array (
                'kind' => 'Name',
                'loc' => 
                array (
                  'start' => 295,
                  'end' => 300,
                ),
                'value' => 'array',
              ),
              'type' => 
              array (
                'kind' => 'ListType',
                'loc' => 
                array (
                  'start' => 302,
                  'end' => 306,
                ),
                'type' => 
                array (
                  'kind' => 'NamedType',
                  'loc' => 
                  array (
                    'start' => 303,
                    'end' => 305,
                  ),
                  'name' => 
                  array (
                    'kind' => 'Name',
                    'loc' => 
                    array (
                      'start' => 303,
                      'end' => 305,
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
              'start' => 309,
              'end' => 314,
            ),
            'type' => 
            array (
              'kind' => 'NamedType',
              'loc' => 
              array (
                'start' => 309,
                'end' => 313,
              ),
              'name' => 
              array (
                'kind' => 'Name',
                'loc' => 
                array (
                  'start' => 309,
                  'end' => 313,
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
    5 => 
    array (
      'kind' => 'InputObjectTypeDefinition',
      'loc' => 
      array (
        'start' => 318,
        'end' => 362,
      ),
      'name' => 
      array (
        'kind' => 'Name',
        'loc' => 
        array (
          'start' => 324,
          'end' => 339,
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
            'start' => 346,
            'end' => 360,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 346,
              'end' => 351,
            ),
            'value' => 'email',
          ),
          'type' => 
          array (
            'kind' => 'NonNullType',
            'loc' => 
            array (
              'start' => 353,
              'end' => 360,
            ),
            'type' => 
            array (
              'kind' => 'NamedType',
              'loc' => 
              array (
                'start' => 353,
                'end' => 359,
              ),
              'name' => 
              array (
                'kind' => 'Name',
                'loc' => 
                array (
                  'start' => 353,
                  'end' => 359,
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
    6 => 
    array (
      'kind' => 'ObjectTypeDefinition',
      'loc' => 
      array (
        'start' => 364,
        'end' => 427,
      ),
      'name' => 
      array (
        'kind' => 'Name',
        'loc' => 
        array (
          'start' => 369,
          'end' => 373,
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
            'start' => 385,
            'end' => 389,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 385,
              'end' => 389,
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
            'start' => 396,
            'end' => 403,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 396,
              'end' => 398,
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
              'start' => 400,
              'end' => 403,
            ),
            'type' => 
            array (
              'kind' => 'NamedType',
              'loc' => 
              array (
                'start' => 400,
                'end' => 402,
              ),
              'name' => 
              array (
                'kind' => 'Name',
                'loc' => 
                array (
                  'start' => 400,
                  'end' => 402,
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
            'start' => 408,
            'end' => 425,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 408,
              'end' => 416,
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
              'start' => 418,
              'end' => 425,
            ),
            'type' => 
            array (
              'kind' => 'NamedType',
              'loc' => 
              array (
                'start' => 418,
                'end' => 424,
              ),
              'name' => 
              array (
                'kind' => 'Name',
                'loc' => 
                array (
                  'start' => 418,
                  'end' => 424,
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
      'kind' => 'UnionTypeDefinition',
      'loc' => 
      array (
        'start' => 429,
        'end' => 461,
      ),
      'name' => 
      array (
        'kind' => 'Name',
        'loc' => 
        array (
          'start' => 435,
          'end' => 441,
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
            'start' => 444,
            'end' => 451,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 444,
              'end' => 451,
            ),
            'value' => 'Widget1',
          ),
        ),
        1 => 
        array (
          'kind' => 'NamedType',
          'loc' => 
          array (
            'start' => 454,
            'end' => 461,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 454,
              'end' => 461,
            ),
            'value' => 'Widget2',
          ),
        ),
      ),
    ),
    8 => 
    array (
      'kind' => 'ObjectTypeDefinition',
      'loc' => 
      array (
        'start' => 463,
        'end' => 497,
      ),
      'name' => 
      array (
        'kind' => 'Name',
        'loc' => 
        array (
          'start' => 468,
          'end' => 475,
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
            'start' => 482,
            'end' => 495,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 482,
              'end' => 486,
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
              'start' => 488,
              'end' => 495,
            ),
            'type' => 
            array (
              'kind' => 'NamedType',
              'loc' => 
              array (
                'start' => 488,
                'end' => 494,
              ),
              'name' => 
              array (
                'kind' => 'Name',
                'loc' => 
                array (
                  'start' => 488,
                  'end' => 494,
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
      'kind' => 'ObjectTypeDefinition',
      'loc' => 
      array (
        'start' => 499,
        'end' => 533,
      ),
      'name' => 
      array (
        'kind' => 'Name',
        'loc' => 
        array (
          'start' => 504,
          'end' => 511,
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
            'start' => 518,
            'end' => 531,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 518,
              'end' => 522,
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
              'start' => 524,
              'end' => 531,
            ),
            'type' => 
            array (
              'kind' => 'NamedType',
              'loc' => 
              array (
                'start' => 524,
                'end' => 530,
              ),
              'name' => 
              array (
                'kind' => 'Name',
                'loc' => 
                array (
                  'start' => 524,
                  'end' => 530,
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
      'kind' => 'EnumTypeDefinition',
      'loc' => 
      array (
        'start' => 535,
        'end' => 567,
      ),
      'name' => 
      array (
        'kind' => 'Name',
        'loc' => 
        array (
          'start' => 540,
          'end' => 545,
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
            'start' => 552,
            'end' => 556,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 552,
              'end' => 556,
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
            'start' => 561,
            'end' => 565,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 561,
              'end' => 565,
            ),
            'value' => 'VAL2',
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
        'start' => 569,
        'end' => 631,
      ),
      'name' => 
      array (
        'kind' => 'Name',
        'loc' => 
        array (
          'start' => 575,
          'end' => 587,
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
            'start' => 590,
            'end' => 609,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 590,
              'end' => 609,
            ),
            'value' => 'TestSuccessResponse',
          ),
        ),
        1 => 
        array (
          'kind' => 'NamedType',
          'loc' => 
          array (
            'start' => 612,
            'end' => 631,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 612,
              'end' => 631,
            ),
            'value' => 'TestFailureResponse',
          ),
        ),
      ),
    ),
    12 => 
    array (
      'kind' => 'ObjectTypeDefinition',
      'loc' => 
      array (
        'start' => 633,
        'end' => 687,
      ),
      'name' => 
      array (
        'kind' => 'Name',
        'loc' => 
        array (
          'start' => 638,
          'end' => 657,
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
            'start' => 664,
            'end' => 685,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 664,
              'end' => 670,
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
              'start' => 672,
              'end' => 685,
            ),
            'type' => 
            array (
              'kind' => 'ListType',
              'loc' => 
              array (
                'start' => 672,
                'end' => 684,
              ),
              'type' => 
              array (
                'kind' => 'NonNullType',
                'loc' => 
                array (
                  'start' => 673,
                  'end' => 683,
                ),
                'type' => 
                array (
                  'kind' => 'NamedType',
                  'loc' => 
                  array (
                    'start' => 673,
                    'end' => 682,
                  ),
                  'name' => 
                  array (
                    'kind' => 'Name',
                    'loc' => 
                    array (
                      'start' => 673,
                      'end' => 682,
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
    13 => 
    array (
      'kind' => 'UnionTypeDefinition',
      'loc' => 
      array (
        'start' => 689,
        'end' => 717,
      ),
      'name' => 
      array (
        'kind' => 'Name',
        'loc' => 
        array (
          'start' => 695,
          'end' => 704,
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
            'start' => 707,
            'end' => 717,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 707,
              'end' => 717,
            ),
            'value' => 'TestError1',
          ),
        ),
      ),
    ),
    14 => 
    array (
      'kind' => 'ObjectTypeDefinition',
      'loc' => 
      array (
        'start' => 719,
        'end' => 766,
      ),
      'name' => 
      array (
        'kind' => 'Name',
        'loc' => 
        array (
          'start' => 724,
          'end' => 743,
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
            'start' => 750,
            'end' => 764,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 750,
              'end' => 754,
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
              'start' => 756,
              'end' => 764,
            ),
            'type' => 
            array (
              'kind' => 'NamedType',
              'loc' => 
              array (
                'start' => 756,
                'end' => 763,
              ),
              'name' => 
              array (
                'kind' => 'Name',
                'loc' => 
                array (
                  'start' => 756,
                  'end' => 763,
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
  ),
);
