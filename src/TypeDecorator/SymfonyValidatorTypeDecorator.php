<?php

declare(strict_types=1);

namespace Arxy\GraphQLCodegen\TypeDecorator;

use Arxy\GraphQLCodegen\AbstractTypeDecorator;
use Arxy\GraphQLCodegen\Generator;
use Arxy\GraphQLCodegen\ModuleInterface;
use Exception;
use GraphQL\Language\AST\EnumTypeDefinitionNode;
use GraphQL\Language\AST\EnumTypeExtensionNode;
use GraphQL\Language\AST\FieldDefinitionNode;
use GraphQL\Language\AST\InputObjectTypeDefinitionNode;
use GraphQL\Language\AST\InputObjectTypeExtensionNode;
use GraphQL\Language\AST\ObjectTypeDefinitionNode;
use GraphQL\Language\AST\ObjectTypeExtensionNode;
use GraphQL\Language\AST\ScalarTypeDefinitionNode;
use GraphQL\Language\AST\ScalarTypeExtensionNode;
use LogicException;
use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\EnumType;
use Nette\PhpGenerator\InterfaceType;
use Nette\PhpGenerator\PromotedParameter;
use ReflectionClass;
use ReflectionException;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\Constraints\Valid;

use function assert;
use function in_array;
use function is_array;
use function is_subclass_of;
use function sprintf;

class SymfonyValidatorTypeDecorator extends AbstractTypeDecorator
{
    private array $scalars = [];
    private array $enums = [];

    public function __construct(
        private readonly array $validationMapping
    ) {
    }

    public function handleScalarResolverInterface(
        ModuleInterface $module,
        ScalarTypeExtensionNode|ScalarTypeDefinitionNode $definitionNode,
        InterfaceType $classLike
    ): void {
        if (isset($module->getTypeMapping()[$definitionNode->name->value])) {
            $this->scalars[$module->getTypeMapping()[$definitionNode->name->value]] = true;
        }
    }

    public function handleEnumType(
        ModuleInterface $module,
        EnumTypeDefinitionNode|EnumTypeExtensionNode $definitionNode,
        EnumType $classLike
    ): void {
        if (isset($module->getTypeMapping()[$definitionNode->name->value])) {
            $this->enums[$module->getTypeMapping()[$definitionNode->name->value]] = true;
        }
    }

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
        foreach ($validationMapping as $parameterName => $parameterValidationMapping) {
            $parameter = $classType->getMethod('__construct')->getParameters()[$parameterName];
            assert($parameter instanceof PromotedParameter);
            foreach ($parameterValidationMapping as $maybeName => $maybeConstraint) {
                if (is_array($maybeConstraint)) {
                    $this->addConstraint($parameter, $maybeName, $maybeConstraint);
                } else {
                    $this->addConstraint($parameter, $maybeConstraint);
                }
            }
        }
    }

    private function addValidIfNeeded(ClassType $classType): void
    {
        if (!$classType->hasMethod('__construct')) {
            return;
        }
        foreach ($classType->getMethod('__construct')->getParameters() as $parameter) {
            $param = $parameter->getType(true);
            if (!$param->isSingle()) {
                continue;
            }

            $type = $param->getNames()[0];

            if (in_array(
                    $type,
                    Generator::PHP_NATIVE_TYPES
                )
                || isset($this->enums[$type])
                || isset($this->scalars[$type])) {
                continue;
            }

            try {
                $reflection = new ReflectionClass($parameter->getType());

                if ($reflection->isEnum()) {
                    continue;
                }
            } catch (ReflectionException $exception) {
                // type not found, probably generated atm, so add constraint.
            }

            $parameter->addAttribute(Valid::class);
        }
    }

    public function handleObjectFieldArgs(
        ModuleInterface $module,
        ObjectTypeDefinitionNode|ObjectTypeExtensionNode $definitionNode,
        FieldDefinitionNode $fieldNode,
        ClassType $classLike
    ): void {
        $this->addValidIfNeeded($classLike);

        $validationMapping = $this->validationMapping[$definitionNode->name->value][$fieldNode->name->value] ?? null;
        if (!$validationMapping) {
            return;
        }
        $this->addConstraints($classLike, $validationMapping);
    }

    public function handleInputObjectType(
        ModuleInterface $module,
        InputObjectTypeExtensionNode|InputObjectTypeDefinitionNode $definitionNode,
        ClassType $classLike
    ): void {
        $this->addValidIfNeeded($classLike);

        $validationMapping = $this->validationMapping[$definitionNode->name->value] ?? null;
        if (!$validationMapping) {
            return;
        }
        $this->addConstraints($classLike, $validationMapping);
    }
}
