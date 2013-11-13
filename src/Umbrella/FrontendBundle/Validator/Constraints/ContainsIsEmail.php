<?php

namespace Umbrella\AdminBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * Uniq email in DB
 */
class ContainsIsEmail extends Constraint
{
    public $message = 'Such email "%string%" already exists.';
}