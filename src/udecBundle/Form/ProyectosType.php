<?php

namespace udecBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProyectosType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('cod_proyecto')
            ->add('titulo')
            ->add('resumen')
            ->add('estado')
            ->add('fechaInicio')
            ->add('fechaAprovaccion')
            ->add("Guardar", 'submit')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'udecBundle\Entity\Proyectos'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'udecbundle_proyectos';
    }
}
