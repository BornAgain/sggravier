<?php

namespace DataSourceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\FileType as FILE;


class FileType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            // ->add('file' , FileType::class, array('label' => 'Brochure (PDF file)'))
                ->add('file', 'file', array('label' => 'Datasource'))
                // ->add("Submit", "submit")
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'DataSourceBundle\Entity\File'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'adminbundle_file';
    }
}
