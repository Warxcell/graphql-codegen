<?php

declare(strict_types=1);

return array (
  'loc' => 
  array (
    'start' => 0,
    'end' => 1738,
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
        'start' => 82,
        'end' => 96,
      ),
      'kind' => 'ScalarTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 89,
          'end' => 96,
        ),
        'kind' => 'Name',
        'value' => 'Decimal',
      ),
      'directives' => 
      array (
      ),
    ),
    4 => 
    array (
      'loc' => 
      array (
        'start' => 98,
        'end' => 128,
      ),
      'kind' => 'InterfaceTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 108,
          'end' => 112,
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
            'start' => 119,
            'end' => 126,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 119,
              'end' => 121,
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
              'start' => 123,
              'end' => 126,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 123,
                'end' => 125,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 123,
                  'end' => 125,
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
    5 => 
    array (
      'loc' => 
      array (
        'start' => 130,
        'end' => 404,
      ),
      'kind' => 'ObjectTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 135,
          'end' => 140,
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
            'start' => 147,
            'end' => 187,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 147,
              'end' => 177,
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
              'start' => 179,
              'end' => 187,
            ),
            'kind' => 'ListType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 180,
                'end' => 186,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 180,
                  'end' => 186,
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
            'start' => 192,
            'end' => 236,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 192,
              'end' => 225,
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
              'start' => 227,
              'end' => 236,
            ),
            'kind' => 'ListType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 228,
                'end' => 235,
              ),
              'kind' => 'NonNullType',
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 228,
                  'end' => 234,
                ),
                'kind' => 'NamedType',
                'name' => 
                array (
                  'loc' => 
                  array (
                    'start' => 228,
                    'end' => 234,
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
            'start' => 241,
            'end' => 289,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 241,
              'end' => 277,
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
              'start' => 279,
              'end' => 289,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 279,
                'end' => 288,
              ),
              'kind' => 'ListType',
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 280,
                  'end' => 287,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 280,
                    'end' => 286,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 280,
                      'end' => 286,
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
            'start' => 294,
            'end' => 338,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 294,
              'end' => 327,
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
              'start' => 329,
              'end' => 338,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 329,
                'end' => 337,
              ),
              'kind' => 'ListType',
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 330,
                  'end' => 336,
                ),
                'kind' => 'NamedType',
                'name' => 
                array (
                  'loc' => 
                  array (
                    'start' => 330,
                    'end' => 336,
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
            'start' => 343,
            'end' => 370,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 343,
              'end' => 347,
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
                'start' => 348,
                'end' => 360,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 348,
                  'end' => 350,
                ),
                'kind' => 'Name',
                'value' => 'da',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 352,
                  'end' => 360,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 352,
                    'end' => 359,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 352,
                      'end' => 359,
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
              'start' => 363,
              'end' => 370,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 363,
                'end' => 369,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 363,
                  'end' => 369,
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
            'start' => 375,
            'end' => 402,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 375,
              'end' => 387,
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
              'start' => 389,
              'end' => 402,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 389,
                'end' => 401,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 389,
                  'end' => 401,
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
    6 => 
    array (
      'loc' => 
      array (
        'start' => 406,
        'end' => 621,
      ),
      'kind' => 'ObjectTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 411,
          'end' => 419,
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
            'start' => 426,
            'end' => 600,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 426,
              'end' => 436,
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
                'start' => 437,
                'end' => 460,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 437,
                  'end' => 442,
                ),
                'kind' => 'Name',
                'value' => 'input',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 444,
                  'end' => 460,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 444,
                    'end' => 459,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 444,
                      'end' => 459,
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
                'start' => 462,
                'end' => 470,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 462,
                  'end' => 465,
                ),
                'kind' => 'Name',
                'value' => 'int',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 467,
                  'end' => 470,
                ),
                'kind' => 'NamedType',
                'name' => 
                array (
                  'loc' => 
                  array (
                    'start' => 467,
                    'end' => 470,
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
                'start' => 472,
                'end' => 486,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 472,
                  'end' => 476,
                ),
                'kind' => 'Name',
                'value' => 'bool',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 478,
                  'end' => 486,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 478,
                    'end' => 485,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 478,
                      'end' => 485,
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
                'start' => 488,
                'end' => 519,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 488,
                  'end' => 511,
                ),
                'kind' => 'Name',
                'value' => 'nonNullArrayNonNullItem',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 513,
                  'end' => 519,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 513,
                    'end' => 518,
                  ),
                  'kind' => 'ListType',
                  'type' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 514,
                      'end' => 517,
                    ),
                    'kind' => 'NonNullType',
                    'type' => 
                    array (
                      'loc' => 
                      array (
                        'start' => 514,
                        'end' => 516,
                      ),
                      'kind' => 'NamedType',
                      'name' => 
                      array (
                        'loc' => 
                        array (
                          'start' => 514,
                          'end' => 516,
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
                'start' => 521,
                'end' => 540,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 521,
                  'end' => 533,
                ),
                'kind' => 'Name',
                'value' => 'nonNullArray',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 535,
                  'end' => 540,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 535,
                    'end' => 539,
                  ),
                  'kind' => 'ListType',
                  'type' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 536,
                      'end' => 538,
                    ),
                    'kind' => 'NamedType',
                    'name' => 
                    array (
                      'loc' => 
                      array (
                        'start' => 536,
                        'end' => 538,
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
                'start' => 542,
                'end' => 565,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 542,
                  'end' => 558,
                ),
                'kind' => 'Name',
                'value' => 'arrayNonNullItem',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 560,
                  'end' => 565,
                ),
                'kind' => 'ListType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 561,
                    'end' => 564,
                  ),
                  'kind' => 'NonNullType',
                  'type' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 561,
                      'end' => 563,
                    ),
                    'kind' => 'NamedType',
                    'name' => 
                    array (
                      'loc' => 
                      array (
                        'start' => 561,
                        'end' => 563,
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
                'start' => 567,
                'end' => 578,
              ),
              'kind' => 'InputValueDefinition',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 567,
                  'end' => 572,
                ),
                'kind' => 'Name',
                'value' => 'array',
              ),
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 574,
                  'end' => 578,
                ),
                'kind' => 'ListType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 575,
                    'end' => 577,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 575,
                      'end' => 577,
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
              'start' => 581,
              'end' => 600,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 581,
                'end' => 599,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 581,
                  'end' => 599,
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
            'start' => 605,
            'end' => 619,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 605,
              'end' => 613,
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
              'start' => 615,
              'end' => 619,
            ),
            'kind' => 'NamedType',
            'name' => 
            array (
              'loc' => 
              array (
                'start' => 615,
                'end' => 619,
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
    7 => 
    array (
      'loc' => 
      array (
        'start' => 623,
        'end' => 700,
      ),
      'kind' => 'InputObjectTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 629,
          'end' => 644,
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
            'start' => 651,
            'end' => 665,
          ),
          'kind' => 'InputValueDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 651,
              'end' => 656,
            ),
            'kind' => 'Name',
            'value' => 'email',
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 658,
              'end' => 665,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 658,
                'end' => 664,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 658,
                  'end' => 664,
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
            'start' => 670,
            'end' => 679,
          ),
          'kind' => 'InputValueDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 670,
              'end' => 673,
            ),
            'kind' => 'Name',
            'value' => 'int',
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 675,
              'end' => 679,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 675,
                'end' => 678,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 675,
                  'end' => 678,
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
            'start' => 684,
            'end' => 698,
          ),
          'kind' => 'InputValueDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 684,
              'end' => 688,
            ),
            'kind' => 'Name',
            'value' => 'bool',
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 690,
              'end' => 698,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 690,
                'end' => 697,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 690,
                  'end' => 697,
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
    8 => 
    array (
      'loc' => 
      array (
        'start' => 702,
        'end' => 744,
      ),
      'kind' => 'ObjectTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 707,
          'end' => 724,
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
            'start' => 731,
            'end' => 742,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 731,
              'end' => 735,
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
              'start' => 737,
              'end' => 742,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 737,
                'end' => 741,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 737,
                  'end' => 741,
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
    9 => 
    array (
      'loc' => 
      array (
        'start' => 746,
        'end' => 791,
      ),
      'kind' => 'ObjectTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 751,
          'end' => 768,
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
            'start' => 775,
            'end' => 789,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 775,
              'end' => 780,
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
              'start' => 782,
              'end' => 789,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 782,
                'end' => 788,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 782,
                  'end' => 788,
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
    10 => 
    array (
      'loc' => 
      array (
        'start' => 793,
        'end' => 857,
      ),
      'kind' => 'UnionTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 799,
          'end' => 817,
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
            'start' => 820,
            'end' => 837,
          ),
          'kind' => 'NamedType',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 820,
              'end' => 837,
            ),
            'kind' => 'Name',
            'value' => 'CreateUserSuccess',
          ),
        ),
        1 => 
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
            'value' => 'CreateUserFailure',
          ),
        ),
      ),
    ),
    11 => 
    array (
      'loc' => 
      array (
        'start' => 859,
        'end' => 922,
      ),
      'kind' => 'ObjectTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 864,
          'end' => 868,
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
            'start' => 880,
            'end' => 884,
          ),
          'kind' => 'NamedType',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 880,
              'end' => 884,
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
            'start' => 891,
            'end' => 898,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 891,
              'end' => 893,
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
              'start' => 895,
              'end' => 898,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 895,
                'end' => 897,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 895,
                  'end' => 897,
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
            'start' => 903,
            'end' => 920,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 903,
              'end' => 911,
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
              'start' => 913,
              'end' => 920,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 913,
                'end' => 919,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 913,
                  'end' => 919,
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
    12 => 
    array (
      'loc' => 
      array (
        'start' => 924,
        'end' => 956,
      ),
      'kind' => 'UnionTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 930,
          'end' => 936,
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
            'start' => 939,
            'end' => 946,
          ),
          'kind' => 'NamedType',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 939,
              'end' => 946,
            ),
            'kind' => 'Name',
            'value' => 'Widget1',
          ),
        ),
        1 => 
        array (
          'loc' => 
          array (
            'start' => 949,
            'end' => 956,
          ),
          'kind' => 'NamedType',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 949,
              'end' => 956,
            ),
            'kind' => 'Name',
            'value' => 'Widget2',
          ),
        ),
      ),
    ),
    13 => 
    array (
      'loc' => 
      array (
        'start' => 958,
        'end' => 992,
      ),
      'kind' => 'ObjectTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 963,
          'end' => 970,
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
            'start' => 977,
            'end' => 990,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 977,
              'end' => 981,
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
              'start' => 983,
              'end' => 990,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 983,
                'end' => 989,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 983,
                  'end' => 989,
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
    14 => 
    array (
      'loc' => 
      array (
        'start' => 994,
        'end' => 1028,
      ),
      'kind' => 'ObjectTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 999,
          'end' => 1006,
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
            'start' => 1013,
            'end' => 1026,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1013,
              'end' => 1017,
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
              'start' => 1019,
              'end' => 1026,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 1019,
                'end' => 1025,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1019,
                  'end' => 1025,
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
        'start' => 1030,
        'end' => 1062,
      ),
      'kind' => 'EnumTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 1035,
          'end' => 1040,
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
            'start' => 1047,
            'end' => 1051,
          ),
          'kind' => 'EnumValueDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1047,
              'end' => 1051,
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
            'start' => 1056,
            'end' => 1060,
          ),
          'kind' => 'EnumValueDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1056,
              'end' => 1060,
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
    16 => 
    array (
      'loc' => 
      array (
        'start' => 1064,
        'end' => 1126,
      ),
      'kind' => 'UnionTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 1070,
          'end' => 1082,
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
            'start' => 1085,
            'end' => 1104,
          ),
          'kind' => 'NamedType',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1085,
              'end' => 1104,
            ),
            'kind' => 'Name',
            'value' => 'TestSuccessResponse',
          ),
        ),
        1 => 
        array (
          'loc' => 
          array (
            'start' => 1107,
            'end' => 1126,
          ),
          'kind' => 'NamedType',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1107,
              'end' => 1126,
            ),
            'kind' => 'Name',
            'value' => 'TestFailureResponse',
          ),
        ),
      ),
    ),
    17 => 
    array (
      'loc' => 
      array (
        'start' => 1128,
        'end' => 1182,
      ),
      'kind' => 'ObjectTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 1133,
          'end' => 1152,
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
            'start' => 1159,
            'end' => 1180,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1159,
              'end' => 1165,
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
              'start' => 1167,
              'end' => 1180,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 1167,
                'end' => 1179,
              ),
              'kind' => 'ListType',
              'type' => 
              array (
                'loc' => 
                array (
                  'start' => 1168,
                  'end' => 1178,
                ),
                'kind' => 'NonNullType',
                'type' => 
                array (
                  'loc' => 
                  array (
                    'start' => 1168,
                    'end' => 1177,
                  ),
                  'kind' => 'NamedType',
                  'name' => 
                  array (
                    'loc' => 
                    array (
                      'start' => 1168,
                      'end' => 1177,
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
    18 => 
    array (
      'loc' => 
      array (
        'start' => 1184,
        'end' => 1212,
      ),
      'kind' => 'UnionTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 1190,
          'end' => 1199,
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
            'start' => 1202,
            'end' => 1212,
          ),
          'kind' => 'NamedType',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1202,
              'end' => 1212,
            ),
            'kind' => 'Name',
            'value' => 'TestError1',
          ),
        ),
      ),
    ),
    19 => 
    array (
      'loc' => 
      array (
        'start' => 1214,
        'end' => 1261,
      ),
      'kind' => 'ObjectTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 1219,
          'end' => 1238,
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
            'start' => 1245,
            'end' => 1259,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1245,
              'end' => 1249,
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
              'start' => 1251,
              'end' => 1259,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 1251,
                'end' => 1258,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1251,
                  'end' => 1258,
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
    20 => 
    array (
      'loc' => 
      array (
        'start' => 1263,
        'end' => 1313,
      ),
      'kind' => 'UnionTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 1269,
          'end' => 1281,
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
            'start' => 1284,
            'end' => 1297,
          ),
          'kind' => 'NamedType',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1284,
              'end' => 1297,
            ),
            'kind' => 'Name',
            'value' => 'TestSameType1',
          ),
        ),
        1 => 
        array (
          'loc' => 
          array (
            'start' => 1300,
            'end' => 1313,
          ),
          'kind' => 'NamedType',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1300,
              'end' => 1313,
            ),
            'kind' => 'Name',
            'value' => 'TestSameType2',
          ),
        ),
      ),
    ),
    21 => 
    array (
      'loc' => 
      array (
        'start' => 1315,
        'end' => 1358,
      ),
      'kind' => 'ObjectTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 1320,
          'end' => 1333,
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
            'start' => 1340,
            'end' => 1356,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1340,
              'end' => 1347,
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
              'start' => 1349,
              'end' => 1356,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 1349,
                'end' => 1355,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1349,
                  'end' => 1355,
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
    22 => 
    array (
      'loc' => 
      array (
        'start' => 1360,
        'end' => 1403,
      ),
      'kind' => 'ObjectTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 1365,
          'end' => 1378,
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
            'start' => 1385,
            'end' => 1401,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1385,
              'end' => 1392,
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
              'start' => 1394,
              'end' => 1401,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 1394,
                'end' => 1400,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1394,
                  'end' => 1400,
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
        'start' => 1405,
        'end' => 1435,
      ),
      'kind' => 'ObjectTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 1410,
          'end' => 1419,
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
            'start' => 1426,
            'end' => 1433,
          ),
          'kind' => 'FieldDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1426,
              'end' => 1428,
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
              'start' => 1430,
              'end' => 1433,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 1430,
                'end' => 1432,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1430,
                  'end' => 1432,
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
    24 => 
    array (
      'loc' => 
      array (
        'start' => 1456,
        'end' => 1491,
      ),
      'kind' => 'EnumTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 1461,
          'end' => 1471,
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
            'start' => 1478,
            'end' => 1481,
          ),
          'kind' => 'EnumValueDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1478,
              'end' => 1481,
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
            'start' => 1486,
            'end' => 1489,
          ),
          'kind' => 'EnumValueDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1486,
              'end' => 1489,
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
    25 => 
    array (
      'loc' => 
      array (
        'start' => 1513,
        'end' => 1658,
      ),
      'kind' => 'InputObjectTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 1519,
          'end' => 1534,
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
            'start' => 1541,
            'end' => 1556,
          ),
          'kind' => 'InputValueDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1541,
              'end' => 1547,
            ),
            'kind' => 'Name',
            'value' => 'string',
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 1549,
              'end' => 1556,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 1549,
                'end' => 1555,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1549,
                  'end' => 1555,
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
            'start' => 1561,
            'end' => 1578,
          ),
          'kind' => 'InputValueDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1561,
              'end' => 1568,
            ),
            'kind' => 'Name',
            'value' => 'boolean',
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 1570,
              'end' => 1578,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 1570,
                'end' => 1577,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1570,
                  'end' => 1577,
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
            'start' => 1583,
            'end' => 1622,
          ),
          'kind' => 'InputValueDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1583,
              'end' => 1601,
            ),
            'kind' => 'Name',
            'value' => 'anotherMappedInput',
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 1603,
              'end' => 1622,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 1603,
                'end' => 1621,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1603,
                  'end' => 1621,
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
            'start' => 1627,
            'end' => 1656,
          ),
          'kind' => 'InputValueDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1627,
              'end' => 1640,
            ),
            'kind' => 'Name',
            'value' => 'unmappedInput',
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 1642,
              'end' => 1656,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 1642,
                'end' => 1655,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1642,
                  'end' => 1655,
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
      ),
    ),
    26 => 
    array (
      'loc' => 
      array (
        'start' => 1660,
        'end' => 1700,
      ),
      'kind' => 'InputObjectTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 1666,
          'end' => 1684,
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
            'start' => 1691,
            'end' => 1698,
          ),
          'kind' => 'InputValueDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1691,
              'end' => 1693,
            ),
            'kind' => 'Name',
            'value' => 'id',
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 1695,
              'end' => 1698,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 1695,
                'end' => 1697,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1695,
                  'end' => 1697,
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
    27 => 
    array (
      'loc' => 
      array (
        'start' => 1702,
        'end' => 1737,
      ),
      'kind' => 'InputObjectTypeDefinition',
      'name' => 
      array (
        'loc' => 
        array (
          'start' => 1708,
          'end' => 1721,
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
            'start' => 1728,
            'end' => 1735,
          ),
          'kind' => 'InputValueDefinition',
          'name' => 
          array (
            'loc' => 
            array (
              'start' => 1728,
              'end' => 1730,
            ),
            'kind' => 'Name',
            'value' => 'id',
          ),
          'type' => 
          array (
            'loc' => 
            array (
              'start' => 1732,
              'end' => 1735,
            ),
            'kind' => 'NonNullType',
            'type' => 
            array (
              'loc' => 
              array (
                'start' => 1732,
                'end' => 1734,
              ),
              'kind' => 'NamedType',
              'name' => 
              array (
                'loc' => 
                array (
                  'start' => 1732,
                  'end' => 1734,
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
  ),
);
