<?php

declare(strict_types=1);

return array (
  'kind' => 'Document',
  'loc' => 
  array (
    'start' => 0,
    'end' => 211,
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
        'end' => 210,
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
            'end' => 208,
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
              'end' => 208,
            ),
            'type' => 
            array (
              'kind' => 'NamedType',
              'loc' => 
              array (
                'start' => 201,
                'end' => 207,
              ),
              'name' => 
              array (
                'kind' => 'Name',
                'loc' => 
                array (
                  'start' => 201,
                  'end' => 207,
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
