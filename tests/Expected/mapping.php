<?php

declare(strict_types=1);

return array (
  'argumentsMapping' => 
  array (
    'Query' => 
    array (
      'ping' => 'Arxy\\GraphQLCodegen\\Tests\\Expected\\QueryPingArgs',
      'pingFromModule2' => 'Arxy\\GraphQLCodegen\\Tests\\Expected\\QueryPingFromModule2Args',
    ),
    'Mutation' => 
    array (
      'createUser' => 'Arxy\\GraphQLCodegen\\Tests\\Expected\\MutationCreateUserArgs',
    ),
    'User' => 
    array (
      'id' => 'Arxy\\GraphQLCodegen\\Tests\\Expected\\UserIdArgs',
      'username' => 'Arxy\\GraphQLCodegen\\Tests\\Expected\\UserUsernameArgs',
      'name' => 'Arxy\\GraphQLCodegen\\Tests\\Expected\\UserNameArgs',
    ),
    'Widget1' => 
    array (
      'name' => 'Arxy\\GraphQLCodegen\\Tests\\Expected\\Widget1NameArgs',
    ),
    'Widget2' => 
    array (
      'name' => 'Arxy\\GraphQLCodegen\\Tests\\Expected\\Widget2NameArgs',
    ),
    'PingResponseSuccess' => 
    array (
      'success' => 'Arxy\\GraphQLCodegen\\Tests\\Expected\\PingResponseSuccessSuccessArgs',
    ),
    'PingResponseFailure' => 
    array (
      'message' => 'Arxy\\GraphQLCodegen\\Tests\\Expected\\PingResponseFailureMessageArgs',
    ),
  ),
  'inputObjectsMapping' => 
  array (
    'CreateUserInput' => 'Arxy\\GraphQLCodegen\\Tests\\Expected\\CreateUserInput',
    'CustomerInput' => 'Arxy\\GraphQLCodegen\\Tests\\Expected\\CustomerInput',
  ),
  'enumsMapping' => 
  array (
  ),
);
