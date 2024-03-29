<?php

declare(strict_types=1);

return array (
  'argumentsMapping' => 
  array (
    'Query' => 
    array (
      'nullableArrayWithNullableItems' => 'Arxy\\GraphQLCodegen\\Tests\\Expected\\QueryNullableArrayWithNullableItemsArgs',
      'nullableArrayWithNonNullableItems' => 'Arxy\\GraphQLCodegen\\Tests\\Expected\\QueryNullableArrayWithNonNullableItemsArgs',
      'nonNullableArrayWithNonNullableItems' => 'Arxy\\GraphQLCodegen\\Tests\\Expected\\QueryNonNullableArrayWithNonNullableItemsArgs',
      'nonNullableArrayWithNullableItems' => 'Arxy\\GraphQLCodegen\\Tests\\Expected\\QueryNonNullableArrayWithNullableItemsArgs',
      'ping' => 'Arxy\\GraphQLCodegen\\Tests\\Expected\\QueryPingArgs',
      'testSameType' => 'Arxy\\GraphQLCodegen\\Tests\\Expected\\QueryTestSameTypeArgs',
      'pingFromModule2' => 'Arxy\\GraphQLCodegen\\Tests\\Expected\\QueryPingFromModule2Args',
    ),
    'Mutation' => 
    array (
      'createUser' => 'Arxy\\GraphQLCodegen\\Tests\\Expected\\MutationCreateUserArgs',
      'testJson' => 'Arxy\\GraphQLCodegen\\Tests\\Expected\\MutationTestJsonArgs',
    ),
    'CreateUserSuccess' => 
    array (
      'user' => 'Arxy\\GraphQLCodegen\\Tests\\Expected\\CreateUserSuccessUserArgs',
      'fieldFromModule2' => 'Arxy\\GraphQLCodegen\\Tests\\Expected\\CreateUserSuccessFieldFromModule2Args',
    ),
    'CreateUserFailure' => 
    array (
      'error' => 'Arxy\\GraphQLCodegen\\Tests\\Expected\\CreateUserFailureErrorArgs',
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
    'OneMapped' => 
    array (
      'id' => 'Arxy\\GraphQLCodegen\\Tests\\Expected\\OneMappedIdArgs',
    ),
    'MultipleTypesMappedToSameInnerType1' => 
    array (
      'id' => 'Arxy\\GraphQLCodegen\\Tests\\Expected\\MultipleTypesMappedToSameInnerType1IdArgs',
    ),
    'MultipleTypesMappedToSameInnerType2' => 
    array (
      'id' => 'Arxy\\GraphQLCodegen\\Tests\\Expected\\MultipleTypesMappedToSameInnerType2IdArgs',
    ),
    'TestDeprecatedField' => 
    array (
      'testDeprecatedField' => 'Arxy\\GraphQLCodegen\\Tests\\Expected\\TestDeprecatedFieldTestDeprecatedFieldArgs',
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
    'OneNotMapped' => 
    array (
      'id' => 'Arxy\\GraphQLCodegen\\Tests\\Expected\\OneNotMappedIdArgs',
    ),
    'ObjectThatHaveOneMappedOneNotMapped' => 
    array (
      'item' => 'Arxy\\GraphQLCodegen\\Tests\\Expected\\ObjectThatHaveOneMappedOneNotMappedItemArgs',
    ),
  ),
  'inputObjectsMapping' => 
  array (
    'CreateUserInput' => 'Arxy\\GraphQLCodegen\\Tests\\Expected\\CreateUserInput',
    'UnmappedInput' => 'Arxy\\GraphQLCodegen\\Tests\\Expected\\UnmappedInput',
    'TestDeprecatedInput' => 'Arxy\\GraphQLCodegen\\Tests\\Expected\\TestDeprecatedInput',
    'CustomerInput' => 'Arxy\\GraphQLCodegen\\Tests\\Expected\\CustomerInput',
  ),
  'enumsMapping' => 
  array (
    'Enum1' => 'Arxy\\GraphQLCodegen\\Tests\\Module1\\Expected\\Enum1',
    'MappedEnum' => 'Arxy\\GraphQLCodegen\\Tests\\Module1\\MappedEnum',
    'TestDeprecatedEnum' => 'Arxy\\GraphQLCodegen\\Tests\\Module1\\Expected\\TestDeprecatedEnum',
  ),
);
