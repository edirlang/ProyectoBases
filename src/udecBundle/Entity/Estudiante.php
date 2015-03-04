<?php

namespace udecBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Estudiante
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="udecBundle\Entity\EstudianteRepository")
 */
class Estudiante
{
    /**
     * @var string $codigo
     *
     * @ORM\Column(name="codigo", type="string" , length=10)
     * @ORM\Id
     * 
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="cedula", type="string", length=12)
     */
    private $cedula;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=20)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido", type="string", length=20)
     */
    private $apellido;


    /**
     * Get codigo
     *
     * @return string 
     */


    /**
     * @ORM\ManyToOne(targetEntity="Proyectos", inversedBy="Estudiante")
     * @ORM\JoinColumn(name="cod_proyecto", referencedColumnName="cod_proyecto")
     */
    protected $proyecto;

    /**
     * @ORM\OneToMany(targetEntity="Estudiante", mappedBy="telefono_estudiante")
     */
    protected $telefonos;

    public function __construct()
    {
        $this->telefonos = new ArrayCollection();
    }

    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set cedula
     *
     * @param string $cedula
     * @return Estudiante
     */
    public function setCedula($cedula)
    {
        $this->cedula = $cedula;

        return $this;
    }

    /**
     * Get cedula
     *
     * @return string 
     */
    public function getCedula()
    {
        return $this->cedula;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Estudiante
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set apellido
     *
     * @param string $apellido
     * @return Estudiante
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get apellido
     *
     * @return string 
     */
    public function getApellido()
    {
        return $this->apellido;
    }


    /**
     * Add telefonos
     *
     * @param \udecBundle\Entity\telefonoEstudiante $telefonos
     * @return $telefonos
     */
    public function addTelefono(\udecBundle\Entity\telefonoEstudiante $telefonos)
    {
        $this->telefonos[] = $telefonos;

        return $this;
    }

    /**
     * Remove telefonos
     *
     * @param \udecBundle\Entity\telefonoEstudiante $telefonos
     */
    public function removeTelefono(\udecBundle\Entity\telefonoEstudiante $telefonos)
    {
        $this->telefonos->removeElement($telefonos);
    }

    /**
     * Get telefonos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTelefonos()
    {
        return $this->telefonos;
    }

    /**
     * Set proyecto
     *
     * @param \udecBundle\Entity\Proyectos $proyecto
     * @return Estudiante
     */
    public function setProyecto(\udecBundle\Entity\Proyectos $proyecto = null)
    {
        $this->proyecto = $proyecto;

        return $this;
    }

    /**
     * Get proyecto
     *
     * @return \udecBundle\Entity\Proyectos 
     */
    public function getProyecto()
    {
        return $this->proyecto;
    }

    public function __toString()
    {
        return $this->getTitulo();
    }
}
