<?php

namespace udecBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Proyectos
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="udecBundle\Entity\ProyectosRepository")
 */
class Proyectos 
{
    /**
     * @var string $cod_proyecto
     *
     * @ORM\Column(name="cod_proyecto", type="string", length=10)
     * @ORM\Id
     * 
     */
    private $cod_proyecto;

    /**
     * @var string
     *
     * @ORM\Column(name="titulo", type="string", length=50)
     */
    private $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="resumen", type="text")
     */
    private $resumen;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=10)
     */
    private $estado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_inicio", type="date")
     */
    private $fechaInicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_aprovaccion", type="date")
     */
    private $fechaAprovaccion;

    /**
     * @ORM\OneToMany(targetEntity="Estudiante", mappedBy="Proyectos")
     */
    protected $estudiantes;

    public function __construct()
    {
        $this->estudiantes = new ArrayCollection();
    }

    
    /**
     * Get cod_proyecto
     *
     * @return string 
     */
    public function getcod_proyecto()
    {
        return $this->cod_proyecto;
    }

    public function setcod_proyecto($cod_proyecto)
    {
        $this->cod_proyecto=$cod_proyecto;
        return $this;
    }

    /**
     * Set titulo
     *
     * @param string $titulo
     * @return Proyectos
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string 
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set resumen
     *
     * @param string $resumen
     * @return Proyectos
     */
    public function setResumen($resumen)
    {
        $this->resumen = $resumen;

        return $this;
    }

    /**
     * Get resumen
     *
     * @return string 
     */
    public function getResumen()
    {
        return $this->resumen;
    }

    /**
     * Set estado
     *
     * @param string $estado
     * @return Proyectos
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set fechaInicio
     *
     * @param \DateTime $fechaInicio
     * @return Proyectos
     */
    public function setFechaInicio($fechaInicio)
    {
        $this->fechaInicio = $fechaInicio;

        return $this;
    }

    /**
     * Get fechaInicio
     *
     * @return \DateTime 
     */
    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }

    /**
     * Set fechaAprovaccion
     *
     * @param \DateTime $fechaAprovaccion
     * @return Proyectos
     */
    public function setFechaAprovaccion($fechaAprovaccion)
    {
        $this->fechaAprovaccion = $fechaAprovaccion;

        return $this;
    }

    /**
     * Get fechaAprovaccion
     *
     * @return \DateTime 
     */
    public function getFechaAprovaccion()
    {
        return $this->fechaAprovaccion;
    }

    /**
     * Set cod_proyecto
     *
     * @param string $codProyecto
     * @return Proyectos
     */
    public function setCodProyecto($codProyecto)
    {
        $this->cod_proyecto = $codProyecto;

        return $this;
    }

    /**
     * Get cod_proyecto
     *
     * @return string 
     */
    public function getCodProyecto()
    {
        return $this->cod_proyecto;
    }

    /**
     * Add estudiantes
     *
     * @param \udecBundle\Entity\Estudiante $estudiantes
     * @return Proyectos
     */
    public function addEstudiante(\udecBundle\Entity\Estudiante $estudiantes)
    {
        $this->estudiantes[] = $estudiantes;

        return $this;
    }

    /**
     * Remove estudiantes
     *
     * @param \udecBundle\Entity\Estudiante $estudiantes
     */
    public function removeEstudiante(\udecBundle\Entity\Estudiante $estudiantes)
    {
        $this->estudiantes->removeElement($estudiantes);
    }

    /**
     * Get estudiantes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEstudiantes()
    {
        return $this->estudiantes;
    }

    public function __toString()
    {
        return $this->getTitulo();
    }
}
