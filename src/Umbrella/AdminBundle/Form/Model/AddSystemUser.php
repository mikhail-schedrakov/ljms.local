<?php

namespace Umbrella\AdminBundle\Form\Model;

use Symfony\Component\Validator\Constraints as Assert;
use Umbrella\AdminBundle\Entity\Profile;

class AddSystemUser
{
    /**
     * @Assert\Type(type="Umbrella\AdminBundle\Entity\Profile")
     * @Assert\Valid()
     */
     protected $profile;

     public function setProfile(Profile $profile)
     {
        $this->profile = $profile;   
     }

     public function getProfile()
     {
        return $this->profile;
     }
}