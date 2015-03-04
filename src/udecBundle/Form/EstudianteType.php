<?php

namespace udecBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EstudianteType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('codigo', 'number')
            ->add('cedula')
            ->add('nombre')
            ->add('apellido')
            ->add('proyecto','entity', array('class' => 'udecBundle:Proyectos', 'label' => 'Proyectos',))
            ->add("Guardar", 'submit');
        $builder->add('telefonos', 'collection', array(
                'type'           => new telefonoEstudianteType(),
                'label'          => 'Telefono',
                'by_reference'   => false,
                'allow_delete'   => true,
                'allow_add'      => true,
                'attr'           => array(
                    'class' => 'from-control'
                )
            ));
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'udecBundle\Entity\Estudiante'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'udecbundle_estudiante';
    }
}
