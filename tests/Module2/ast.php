<?php

declare(strict_types=1);

return array (
  'kind' => 'Document',
  'loc' => 
  array (
    'start' => 0,
    'end' => 470,
  ),
  'definitions' => 
  array (
    0 => 
    array (
      'kind' => 'InputObjectTypeDefinition',
      'loc' => 
      array (
        'start' => 0,
        'end' => 41,
      ),
      'name' => 
      array (
        'kind' => 'Name',
        'loc' => 
        array (
          'start' => 6,
          'end' => 19,
        ),
        'value' => 'CustomerInput',
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
            'start' => 26,
            'end' => 39,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 26,
              'end' => 30,
            ),
            'value' => 'name',
          ),
          'type' => 
          array (
            'kind' => 'NonNullType',
            'loc' => 
            array (
              'start' => 32,
              'end' => 39,
            ),
            'type' => 
            array (
              'kind' => 'NamedType',
              'loc' => 
              array (
                'start' => 32,
                'end' => 38,
              ),
              'name' => 
              array (
                'kind' => 'Name',
                'loc' => 
                array (
                  'start' => 32,
                  'end' => 38,
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
    1 => 
    array (
      'kind' => 'InputObjectTypeExtension',
      'loc' => 
      array (
        'start' => 43,
        'end' => 104,
      ),
      'name' => 
      array (
        'kind' => 'Name',
        'loc' => 
        array (
          'start' => 56,
          'end' => 71,
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
            'start' => 78,
            'end' => 102,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 78,
              'end' => 86,
            ),
            'value' => 'customer',
          ),
          'type' => 
          array (
            'kind' => 'NonNullType',
            'loc' => 
            array (
              'start' => 88,
              'end' => 102,
            ),
            'type' => 
            array (
              'kind' => 'NamedType',
              'loc' => 
              array (
                'start' => 88,
                'end' => 101,
              ),
              'name' => 
              array (
                'kind' => 'Name',
                'loc' => 
                array (
                  'start' => 88,
                  'end' => 101,
                ),
                'value' => 'CustomerInput',
              ),
            ),
          ),
          'directives' => 
          array (
          ),
        ),
      ),
    ),
    2 => 
    array (
      'kind' => 'ObjectTypeExtension',
      'loc' => 
      array (
        'start' => 106,
        'end' => 144,
      ),
      'name' => 
      array (
        'kind' => 'Name',
        'loc' => 
        array (
          'start' => 118,
          'end' => 122,
        ),
        'value' => 'User',
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
            'start' => 129,
            'end' => 142,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 129,
              'end' => 133,
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
              'start' => 135,
              'end' => 142,
            ),
            'type' => 
            array (
              'kind' => 'NamedType',
              'loc' => 
              array (
                'start' => 135,
                'end' => 141,
              ),
              'name' => 
              array (
                'kind' => 'Name',
                'loc' => 
                array (
                  'start' => 135,
                  'end' => 141,
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
    3 => 
    array (
      'kind' => 'ObjectTypeExtension',
      'loc' => 
      array (
        'start' => 146,
        'end' => 216,
      ),
      'name' => 
      array (
        'kind' => 'Name',
        'loc' => 
        array (
          'start' => 158,
          'end' => 163,
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
            'start' => 170,
            'end' => 214,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 170,
              'end' => 185,
            ),
            'value' => 'pingFromModule2',
          ),
          'arguments' => 
          array (
            0 => 
            array (
              'kind' => 'InputValueDefinition',
              'loc' => 
              array (
                'start' => 186,
                'end' => 198,
              ),
              'name' => 
              array (
                'kind' => 'Name',
                'loc' => 
                array (
                  'start' => 186,
                  'end' => 188,
                ),
                'value' => 'da',
              ),
              'type' => 
              array (
                'kind' => 'NonNullType',
                'loc' => 
                array (
                  'start' => 190,
                  'end' => 198,
                ),
                'type' => 
                array (
                  'kind' => 'NamedType',
                  'loc' => 
                  array (
                    'start' => 190,
                    'end' => 197,
                  ),
                  'name' => 
                  array (
                    'kind' => 'Name',
                    'loc' => 
                    array (
                      'start' => 190,
                      'end' => 197,
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
              'start' => 201,
              'end' => 214,
            ),
            'type' => 
            array (
              'kind' => 'NamedType',
              'loc' => 
              array (
                'start' => 201,
                'end' => 213,
              ),
              'name' => 
              array (
                'kind' => 'Name',
                'loc' => 
                array (
                  'start' => 201,
                  'end' => 213,
                ),
                'value' => 'PingResponse',
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
        'start' => 218,
        'end' => 268,
      ),
      'name' => 
      array (
        'kind' => 'Name',
        'loc' => 
        array (
          'start' => 223,
          'end' => 242,
        ),
        'value' => 'PingResponseSuccess',
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
            'start' => 249,
            'end' => 266,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 249,
              'end' => 256,
            ),
            'value' => 'success',
          ),
          'arguments' => 
          array (
          ),
          'type' => 
          array (
            'kind' => 'NonNullType',
            'loc' => 
            array (
              'start' => 258,
              'end' => 266,
            ),
            'type' => 
            array (
              'kind' => 'NamedType',
              'loc' => 
              array (
                'start' => 258,
                'end' => 265,
              ),
              'name' => 
              array (
                'kind' => 'Name',
                'loc' => 
                array (
                  'start' => 258,
                  'end' => 265,
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
    5 => 
    array (
      'kind' => 'ObjectTypeDefinition',
      'loc' => 
      array (
        'start' => 270,
        'end' => 319,
      ),
      'name' => 
      array (
        'kind' => 'Name',
        'loc' => 
        array (
          'start' => 275,
          'end' => 294,
        ),
        'value' => 'PingResponseFailure',
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
            'start' => 301,
            'end' => 317,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 301,
              'end' => 308,
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
              'start' => 310,
              'end' => 317,
            ),
            'type' => 
            array (
              'kind' => 'NamedType',
              'loc' => 
              array (
                'start' => 310,
                'end' => 316,
              ),
              'name' => 
              array (
                'kind' => 'Name',
                'loc' => 
                array (
                  'start' => 310,
                  'end' => 316,
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
      'kind' => 'UnionTypeDefinition',
      'loc' => 
      array (
        'start' => 321,
        'end' => 383,
      ),
      'name' => 
      array (
        'kind' => 'Name',
        'loc' => 
        array (
          'start' => 327,
          'end' => 339,
        ),
        'value' => 'PingResponse',
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
            'start' => 342,
            'end' => 361,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 342,
              'end' => 361,
            ),
            'value' => 'PingResponseSuccess',
          ),
        ),
        1 => 
        array (
          'kind' => 'NamedType',
          'loc' => 
          array (
            'start' => 364,
            'end' => 383,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 364,
              'end' => 383,
            ),
            'value' => 'PingResponseFailure',
          ),
        ),
      ),
    ),
    7 => 
    array (
      'kind' => 'EnumTypeExtension',
      'loc' => 
      array (
        'start' => 385,
        'end' => 424,
      ),
      'name' => 
      array (
        'kind' => 'Name',
        'loc' => 
        array (
          'start' => 397,
          'end' => 402,
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
            'start' => 409,
            'end' => 413,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 409,
              'end' => 413,
            ),
            'value' => 'VAL3',
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
            'start' => 418,
            'end' => 422,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 418,
              'end' => 422,
            ),
            'value' => 'VAL4',
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
        'start' => 426,
        'end' => 466,
      ),
      'name' => 
      array (
        'kind' => 'Name',
        'loc' => 
        array (
          'start' => 431,
          'end' => 441,
        ),
        'value' => 'TestError1',
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
            'start' => 448,
            'end' => 464,
          ),
          'name' => 
          array (
            'kind' => 'Name',
            'loc' => 
            array (
              'start' => 448,
              'end' => 455,
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
              'start' => 457,
              'end' => 464,
            ),
            'type' => 
            array (
              'kind' => 'NamedType',
              'loc' => 
              array (
                'start' => 457,
                'end' => 463,
              ),
              'name' => 
              array (
                'kind' => 'Name',
                'loc' => 
                array (
                  'start' => 457,
                  'end' => 463,
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
  ),
);
