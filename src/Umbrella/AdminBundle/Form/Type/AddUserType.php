<?php

namespace Umbrella\AdminBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AddUserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        // $builder->add('profile', new ProfileAddUserType());
        // $builder->add('address', new AddressType());
        // $builder->add('altContact', new AltContactType());
        // $builder->add('save', 'submit');

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
            ->add('save', 'submit');
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            // 'validation_groups' => array('addUser'),
        ));
    }

    public function getName()
    {
        return 'addUser';
    }
}