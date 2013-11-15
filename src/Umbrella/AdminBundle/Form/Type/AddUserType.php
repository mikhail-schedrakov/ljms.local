<?php

namespace Umbrella\AdminBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AddUserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('profile', new ProfileAddUserType());
        $builder->add('save', 'submit');
        // $builder->add('address', new AddressType());
        // $builder->add('altContact', new AltContactType());
        // $builder->add('save', 'submit');
    }

    public function getName()
    {
        return 'addUser';
    }
}