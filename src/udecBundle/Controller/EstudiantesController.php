<?php

namespace udecBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use udecBundle\Entity\Estudiante;
use udecBundle\Form\EstudianteType;

class EstudiantesController extends Controller
{
    public function indexAction()
    {
        $repository = $this->getDoctrine()->getRepository("udecBundle:Estudiante");
        $estudiantes=$repository->findAll();

        $estudiante = new Estudiante();

        $form = $this->createForm(new EstudianteType(),$estudiante);
        
        return $this->render('udecBundle:estudiantes:index.html.twig', array('estudiantes' => $estudiantes, 'form' => $form->createView()));
    }

    public function EstudianteAction($codigo)
    {
        $repository = $this->getDoctrine()->getRepository("udecBundle:Estudiante");
        $estudiante=$repository->find($codigo);
        return $this->render('udecBundle:estudiantes:estudiante.html.twig',array('estudiante' => $estudiante));
    }

    public function NuevoAction()
    {
        $estudiante = new Estudiante();
        $form = $this->createFormBuilder($estudiante)
            ->add('Codigo', 'number')
            ->add('Cedula', 'number')
            ->add('Nombre', 'text')
            ->add('Apellido', 'text')
            ->add('telefonos','collection',array('type' => 'number','by_reference' => '?','allow_add'=>'true','options'  => array(
        'required'  => false,
        'attr'      => array('class' => 'form-control')
    )))
            ->add('crear', 'submit')
            ->getForm();


        return $this->render('udecBundle:estudiantes:nuevo.html.twig', array('form' => $form->createView()));
    }

    public function GuardarAction()
    {
        $form = $this->createForm(new EstudianteType());

        $form->bind($this->getRequest());
        if ($form->isValid()) {
        // guardar la tarea en la base de datos
            //Insertar a BD
            $estudiante = new Estudiante();

            $estudiante = $form->getData();
            
            $em=$this->getDoctrine()->getManager();
            $em->persist($estudiante);
            $em->flush();

            return $this->redirect($this->generateUrl('udec_estudiantes'));
        }else{
            return $this->render('udecBundle:estudiantes:index.html.twig', array('form' => $form->createView()));
        }
    }
}
