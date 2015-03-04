<?php

namespace udecBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * telefonoEstudiante
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="udecBundle\Entity\telefonoEstudianteRepository")
 */
class telefonoEstudiante
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=12)
     */
    private $telefono;

    /**
     * @ORM\ManyToOne(targetEntity="Estudiante", inversedBy="telefonoEstudiante")
     * @ORM\JoinColumn(name="Cod_estudiante", referencedColumnName="codigo")
     */
    protected $estudiante;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return telefonoEstudiante
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set estudiante
     *
     * @param \udecBundle\Entity\Estudiante $estudiante
     * @return telefonoEstudiante
     */
    public function setEstudiante(\udecBundle\Entity\Estudiante $estudiante = null)
    {
        $this->estudiante = $estudiante;

        return $this;
    }

    /**
     * Get estudiante
     *
     * @return \udecBundle\Entity\Estudiante 
     */
    public function getEstudiante()
    {
        return $this->estudiante;
    }
}
