<?php

namespace DashboardBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class WidgetType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
        ->add('name', TextType::class, array(
        'label' => 'Title'))
        ->add('type')
                ->add('query')
                ->add('position')
                ->add('dashboard', 'entity', array(
                    'class' => 'DashboardBundle:Dashboard',
                    'property' => 'name',))
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'DashboardBundle\Entity\Widget'
        ));
    }

}
