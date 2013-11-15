<?php

namespace Umbrella\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity
 */
class AltContact
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */   
    protected $altContactID;

    /**
     * @ORM\OneToOne(targetEntity="Profile")
     * @ORM\JoinColumn(name="profileID", referencedColumnName="profileID", onDelete="cascade")
     */  
    protected $profileID;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\NotBlank()
     */
    protected $firstName;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\NotBlank()
     */
    protected $lastName;

    /**
     * @ORM\Column(type="string", length=255, nullable=true )
     * @Assert\NotBlank()
     * @Assert\Email()
     */
    protected $email;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     * @Assert\Regex("/^([0-9-_() +*])+$/i")
     */
    protected $phone;

    /**
     * Get altContactID
     *
     * @return integer 
     */
    public function getAltContactID()
    {
        return $this->altContactID;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     * @return AltContact
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    
        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return AltContact
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    
        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return AltContact
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return AltContact
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    
        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set profileID
     *
     * @param \Umbrella\AdminBundle\Entity\Profile $profileID
     * @return AltContact
     */
    public function setProfileID(\Umbrella\AdminBundle\Entity\Profile $profileID = null)
    {
        $this->profileID = $profileID;
    
        return $this;
    }

    /**
     * Get profileID
     *
     * @return \Umbrella\AdminBundle\Entity\Profile 
     */
    public function getProfileID()
    {
        return $this->profileID;
    }
}