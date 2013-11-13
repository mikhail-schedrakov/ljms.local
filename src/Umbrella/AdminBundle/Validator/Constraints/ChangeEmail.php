<?php

namespace Umbrella\AdminBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

class ChangeEmail extends Constraint
{
    public $message = 'This email already used.';
}