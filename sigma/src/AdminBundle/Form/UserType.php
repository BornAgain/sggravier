<?php

namespace AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
class UserType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('username')
                ->add('password', PasswordType::class)
                ->add('firstname')
                ->add('lastname')
                ->add('mail', EmailType::class)
                ->add('enabled')
                ->add('roles', 'entity', array(
                    'class' => 'AdminBundle:Roles',
                    'property' => 'description',
                    'multiple' => true))
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'AdminBundle\Entity\User'
        ));
    }

}
