<?php

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\TypeDecorator;

use Arxy\GraphQLCodegen\AbstractTypeDecorator;
use Arxy\GraphQLCodegen\Module;
use Exception;
use GraphQL\Language\AST\DocumentNode;
use GraphQL\Language\AST\FieldDefinitionNode;
use GraphQL\Language\AST\InputObjectTypeDefinitionNode;
use GraphQL\Language\AST\InputObjectTypeExtensionNode;
use GraphQL\Language\AST\InputValueDefinitionNode;
use GraphQL\Language\AST\NamedTypeNode;
use GraphQL\Language\AST\NameNode;
use GraphQL\Language\AST\NodeList;
use GraphQL\Language\AST\ObjectTypeDefinitionNode;
use GraphQL\Language\AST\ObjectTypeExtensionNode;
use LogicException;
use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\PromotedParameter;
use ReflectionClass;
use ReflectionException;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\Constraints\Valid;

use function assert;
use function is_array;
use function is_subclass_of;
use function sprintf;

class SymfonyValidatorTypeDecorator extends AbstractTypeDecorator
{
    private function addConstraint(PromotedParameter $parameter, string $constraint, array $attributes = []): void
    {
        try {
            $reflection = new ReflectionClass($constraint);

            if (!is_subclass_of($constraint, Constraint::class, true)) {
                throw new LogicException('Not extending ' . Constraint::class);
            }

            foreach ($attributes as $attribute => $value) {
                try {
                    $property = $reflection->getProperty($attribute);
                } catch (ReflectionException $exception) {
                    throw new LogicException(sprintf('Invalid option passed %s', $attribute), 0, $exception);
                }
            }
        } catch (Exception $exception) {
            throw new LogicException(sprintf('Constraint %s is not valid', $constraint), 0, $exception);
        }

        $parameter->addAttribute($constraint, $attributes);
    }

    private function addConstraints(ClassType $classType, array $validationMapping): void
    {
        foreach ($validationMapping as $parameterName => $maybeParameterMapping) {
            if (is_array($maybeParameterMapping)) {
                $parameter = $classType->getMethod('__construct')->getParameters()[$parameterName];
                assert($parameter instanceof PromotedParameter);
                foreach ($maybeParameterMapping as $maybeName => $maybeConstraint) {
                    if (is_array($maybeConstraint)) {
                        $this->addConstraint($parameter, $maybeName, $maybeConstraint);
                    } else {
                        $this->addConstraint($parameter, $maybeConstraint);
                    }
                }
            } else {
                $classType->addAttribute($maybeParameterMapping);
            }
        }
    }

    /**
     * @var array<string, DocumentNode> $documents ,
     * @var NodeList<InputValueDefinitionNode> $inputValueDefinitionNodes
     */
    private function addValidIfNeeded(
        array $documents,
        NodeList $inputValueDefinitionNodes,
        ClassType $classType
    ): void {
        if (!$classType->hasMethod('__construct')) {
            return;
        }
        $construct = $classType->getMethod('__construct');

        foreach ($inputValueDefinitionNodes as $inputValueDefinitionNode) {
            assert($inputValueDefinitionNode instanceof InputValueDefinitionNode);

            $type = $inputValueDefinitionNode->type;

            while (!$type instanceof NamedTypeNode) {
                $type = $type->type;
            }

            foreach ($documents as $document) {
                assert($document instanceof DocumentNode);
                foreach ($document->definitions as $definition) {
                    if (isset($definition->name)
                        && $definition->name instanceof NameNode
                        && $definition->name->value === $type->name->value
                        && ($definition instanceof InputObjectTypeDefinitionNode
                            || $definition instanceof InputObjectTypeExtensionNode)
                    ) {
                        $parameter = $construct->getParameters()[$inputValueDefinitionNode->name->value];
                        $parameter->addAttribute(Valid::class);
                        break 2;
                    }
                }
            }
        }
    }

    public function handleObjectFieldArgs(
        array $documents,
        Module $module,
        ObjectTypeDefinitionNode|ObjectTypeExtensionNode $definitionNode,
        FieldDefinitionNode $fieldNode,
        ClassType $classLike
    ): void {
        $this->addValidIfNeeded($documents, $fieldNode->arguments, $classLike);

        $validationMapping = $module->getValidationMapping()[$definitionNode->name->value][$fieldNode->name->value] ?? null;
        if (!$validationMapping) {
            return;
        }
        $this->addConstraints($classLike, $validationMapping);
    }

    public function handleInputObject(
        array $documents,
        Module $module,
        InputObjectTypeExtensionNode|InputObjectTypeDefinitionNode $definitionNode,
        ClassType $classLike
    ): void {
        $this->addValidIfNeeded($documents, $definitionNode->fields, $classLike);

        $validationMapping = $module->getValidationMapping()[$definitionNode->name->value] ?? null;
        if (!$validationMapping) {
            return;
        }
        $this->addConstraints($classLike, $validationMapping);
    }
}
