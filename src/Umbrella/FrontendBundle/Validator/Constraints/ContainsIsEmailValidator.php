<?php

namespace Umbrella\AdminBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class ContainsIsEmailValidator extends ConstraintValidator
{
    public function validate($value, Constraint $constraint)
    {
        if (!1 == 2) {
            $this->context->addViolation($constraint->message);
        }
    }
}