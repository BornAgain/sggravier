<?php

namespace DataSourceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DatasourceDetailsType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('createdDate', 'datetime')
            ->add('upatedDate', 'datetime')
            ->add('type')
            ->add('rank')
            ->add('enabled')
            ->add('datasource')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'DataSourceBundle\Entity\DatasourceDetails'
        ));
    }
}
