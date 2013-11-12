<?php

namespace Umbrella\AdminBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProfileType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', 'email')
            ->add('firstName', 'text')
            ->add('lastName', 'text')
            ->add('homePhone', 'text')
            ->add('cellPhone', 'text')
            ->add('password', 'repeated', array(
               'first_name'  => 'first',
               'second_name' => 'second',
               'type'        => 'password',
               'invalid_message' => 'Password values ​​are not match.'
            ))
            ->add('save', 'submit');
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Umbrella\AdminBundle\Entity\Profile'
        ));
    }

    public function getName()
    {
        return 'profile';
    }
}