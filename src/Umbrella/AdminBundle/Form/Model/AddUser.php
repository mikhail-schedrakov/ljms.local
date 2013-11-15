<?php

namespace Umbrella\AdminBundle\Form\Model;

use Symfony\Component\Validator\Constraints as Assert;
use Umbrella\AdminBundle\Entity\Profile;
use Umbrella\AdminBundle\Entity\AltContact;

class AddUser
{
    /**
     * @Assert\Type(type="Umbrella\AdminBundle\Entity\Profile")
     * @Assert\Valid()
     */
     protected $profile;

     /**
      * @Assert\Type(type="Umbrella\AdminBundle\Entity\AltContact")
      * @Assert\Valid()
      */
     protected $altContact;

     public function setProfile(Profile $profile)
     {
        $this->profile = $profile;   
     }

     public function getProfile()
     {
        return $this->profile;
     }

     public function setAltContact(AltContact $altContact)
     {
        $this->altContact = $altContact;
     }

     public function getAltContact()
     {
        return $this->altContact;
     }
}