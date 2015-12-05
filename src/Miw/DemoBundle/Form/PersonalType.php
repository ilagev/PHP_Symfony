<?php

namespace Miw\DemoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PersonalType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dni')
            ->add('nombre', 'text', array(
                'required' => true
            ))
            ->add('email', 'email', array(
                'label' => 'correo electronico'
            ));
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Miw\DemoBundle\Entity\Personal'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'miw_demobundle_personal';
    }
}
