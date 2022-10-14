<?php

declare(strict_types=1);

return array (
  'argumentsMapping' => 
  array (
    'Query' => 
    array (
      'ping' => 'Arxy\\GraphQLCodegen\\Tests\\Expected\\QueryPingArgs',
      'testSameType' => 'Arxy\\GraphQLCodegen\\Tests\\Expected\\QueryTestSameTypeArgs',
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
    'TestFailureResponse' => 
    array (
      'errors' => 'Arxy\\GraphQLCodegen\\Tests\\Expected\\TestFailureResponseErrorsArgs',
    ),
    'TestSuccessResponse' => 
    array (
      'bool' => 'Arxy\\GraphQLCodegen\\Tests\\Expected\\TestSuccessResponseBoolArgs',
    ),
    'TestSameType1' => 
    array (
      'message' => 'Arxy\\GraphQLCodegen\\Tests\\Expected\\TestSameType1MessageArgs',
    ),
    'TestSameType2' => 
    array (
      'message' => 'Arxy\\GraphQLCodegen\\Tests\\Expected\\TestSameType2MessageArgs',
    ),
    'PingResponseSuccess' => 
    array (
      'success' => 'Arxy\\GraphQLCodegen\\Tests\\Expected\\PingResponseSuccessSuccessArgs',
    ),
    'PingResponseFailure' => 
    array (
      'message' => 'Arxy\\GraphQLCodegen\\Tests\\Expected\\PingResponseFailureMessageArgs',
    ),
    'TestError1' => 
    array (
      'message' => 'Arxy\\GraphQLCodegen\\Tests\\Expected\\TestError1MessageArgs',
    ),
  ),
  'inputObjectsMapping' => 
  array (
    'CreateUserInput' => 'Arxy\\GraphQLCodegen\\Tests\\Expected\\CreateUserInput',
    'CustomerInput' => 'Arxy\\GraphQLCodegen\\Tests\\Expected\\CustomerInput',
  ),
  'enumsMapping' => 
  array (
    'Enum1' => 'Arxy\\GraphQLCodegen\\Tests\\Module1\\Expected\\Enum1',
  ),
);
