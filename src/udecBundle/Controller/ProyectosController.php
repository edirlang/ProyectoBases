<?php

namespace udecBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use udecBundle\Entity\Proyectos;
use udecBundle\Form\ProyectosType;

/**
 * Proyectos controller.
 *
 */
class ProyectosController extends Controller
{

    /**
     * Lists all Proyectos entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $proyectos = $em->getRepository('udecBundle:Proyectos')->findAll();
        $form = $this->createForm(new ProyectosType());

        return $this->render('udecBundle:Proyectos:index.html.twig', array(
            'proyectos' => $proyectos, 'form' => $form->createView()
        ));
    }


    public function ProyectoAction($cod_proyecto)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('udecBundle:Proyectos')->find($cod_proyecto);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Proyectos entity.');
        }

        return $this->render('udecBundle:Proyectos:proyecto.html.twig', array(
            'entity' => $entity,
        ));
    }

    public function GuardarAction()
    {
        $form = $this->createForm(new ProyectosType());

        $form->bind($this->getRequest());
        if ($form->isValid()) {
        // guardar la tarea en la base de datos
            //Insertar a BD
            $proyecto= $form->getData();
            
            $em=$this->getDoctrine()->getManager();
            $em->persist($proyecto);
            $em->flush();

            return $this->redirect($this->generateUrl('udec_proyectos'));
        }else{
            return $this->render('udecBundle:proyectos:index.html.twig', array('form' => $form->createView()));
        }
    }
}
