<?php

namespace AML\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;

class UserType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username')
            ->add('firstName')
            ->add('lastName')
            ->add('email', 'email')
            ->add('password', 'password')
            ->add('role', 'choice', array('choices' => array('ROLE_ADMIN' => 'Administrator',
                'ROLE_USER' => 'User'), 'placeholder' => 'Select a role'))
            ->add('isActive', 'checkbox')
            ->add('save', ButtonType::class, array(
                'attr' => array('class' => 'save'),
              ))
            //->add('save', 'submit', array('label' => 'Save user'))
            ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AML\UserBundle\Entity\User'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'aml_userbundle_user';
    }


}
