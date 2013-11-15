<?php

namespace Umbrella\AdminBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProfileAddUserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', 'repeated', array(
                'first_name'        => 'first',
                'second_name'       => 'second',
                'type'              => 'email',
                'invalid_message'   => 'Email values ​​are not match.',
            ))
            ->add('password', 'repeated', array(
               'first_name'      => 'first',
               'second_name'     => 'second',
               'type'            => 'password',
               'invalid_message' => 'Password values ​​are not match.',
            ))
            ->add('firstName', 'text')
            ->add('lastName', 'text')
            ->add('homePhone', 'text')
            ->add('cellPhone', 'text')
            ->add('altPhone', 'text');    
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Umbrella\AdminBundle\Entity\Profile',
        ));
    }

    public function getName()
    {
        return 'profile';
    }
}