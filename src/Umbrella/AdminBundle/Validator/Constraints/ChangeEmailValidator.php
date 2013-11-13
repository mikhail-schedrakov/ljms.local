<?php

namespace Umbrella\AdminBundle\Validator\Constraints;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Umbrella\AdminBundle\Entity\Profile;

class ChangeEmailValidator extends ConstraintValidator
{
    public function validate($value, Constraint $constraint)
    {


        // $profile = $c->getDoctrine();
        $a = 'a';
        $b = 'b';

        if ($a != $b) {
            $this->context->addViolation($constraint->message, array('%string%' => $value));
        }
    }
}