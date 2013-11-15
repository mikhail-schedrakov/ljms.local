<?php

namespace Umbrella\AdminBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AddressType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('address', 'text')
            ->add('city', 'text')
            ->add('state', 'text')
            ->add('zip', 'text');
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Umbrella\AdminBundle\Entity\Address',
            'validation_groups' => array('addUser'),
        ));
    }

    public function getName()
    {
        return 'address';
    }
}