<?php

namespace udecBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
	var $alumnos = array(
    		array('matricula' => 1,"nombre" => "Edixon"),
    		array('matricula' => 2,"nombre" => "Diego")
    		);

    public function indexAction($name)
    {
        return $this->render('udecBundle:Default:index.html.twig', array('name' => $name));
    }

    public function alumnosAction(){
    	
    	return $this->render('udecBundle:Default:alumnos.html.twig', array('alumnos' => $this->alumnos ));	
    }

    public function alumnoAction($matricula){
    	
    	return $this->render('udecBundle:Default:alumno.html.twig', array("alumno" => $this->alumnos[$matricula-1]));	
    }

    public function ejemplosAction(){
    	
    	return $this->render('udecBundle:Default:ejemplos.html.twig');	
    }
}