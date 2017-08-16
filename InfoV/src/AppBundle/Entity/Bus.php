<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Bus
 *
 * @ORM\Table(name="bus")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BusRepository")
 */
class Bus
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @Assert\Length(
     *      min = 7,
     *      max = 8,
     *      minMessage = "La matricula debe tener al menos {{ limit }} caracteres",
     *      maxMessage = "La matricula no puede ser mayor a {{ limit }} caracteres"
     * )
     * @ORM\Column(name="matricula_bus", type="string", length=10, unique=true)
     */
    private $matriculaBus;

    /**
     * @var int
     * 
     * @Assert\Range(
     *      min = 30,
     *      max = 70,
     *      minMessage = "No puede tener una capacidad menos de {{ limit }} personas",
     *      maxMessage = "No puede tener una capacidad mas de  {{ limit }} personas"
     * )
     * @ORM\Column(name="capacidad_bus", type="integer")
     */
    private $capacidadBus;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion_bus", type="string", length=255)
     */
    private $descripcionBus;

    /**
     * @var string
     * 
     * @Assert\Regex(
     *     pattern="/\d/",
     *     match=false,
     *     message="No se acepta numeros"
     * )
     * @ORM\Column(name="chofer_bus", type="string", length=70)
     */
    private $choferBus;

    /**
     * @var string
     *
     * @Assert\Regex(
     *     pattern="/\d/",
     *     match=false,
     *     message="No se aceptan numeros"
     * )
     * @ORM\Column(name="ayudante_bus", type="string", length=70)
     */
    private $ayudanteBus;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_active", type="boolean")
     */
    private $isActive;


    /**
     * @ORM\OneToMany(targetEntity="Horario", mappedBy="bus")
     */
    private $horario;

    /**
     * @ORM\ManyToOne(targetEntity="Cooperativa", inversedBy="bus")
     * @ORM\JoinColumn(name="cooperativa_id", referencedColumnName="id")
     */
    private $cooperativa;
    
    
    
    
    
    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set matriculaBus
     *
     * @param string $matriculaBus
     *
     * @return Bus
     */
    public function setMatriculaBus($matriculaBus)
    {
        $this->matriculaBus = $matriculaBus;

        return $this;
    }

    /**
     * Get matriculaBus
     *
     * @return string
     */
    public function getMatriculaBus()
    {
        return $this->matriculaBus;
    }

    /**
     * Set capacidadBus
     *
     * @param integer $capacidadBus
     *
     * @return Bus
     */
    public function setCapacidadBus($capacidadBus)
    {
        $this->capacidadBus = $capacidadBus;

        return $this;
    }

    /**
     * Get capacidadBus
     *
     * @return int
     */
    public function getCapacidadBus()
    {
        return $this->capacidadBus;
    }

    /**
     * Set descripcionBus
     *
     * @param string $descripcionBus
     *
     * @return Bus
     */
    public function setDescripcionBus($descripcionBus)
    {
        $this->descripcionBus = $descripcionBus;

        return $this;
    }

    /**
     * Get descripcionBus
     *
     * @return string
     */
    public function getDescripcionBus()
    {
        return $this->descripcionBus;
    }

    /**
     * Set choferBus
     *
     * @param string $choferBus
     *
     * @return Bus
     */
    public function setChoferBus($choferBus)
    {
        $this->choferBus = $choferBus;

        return $this;
    }

    /**
     * Get choferBus
     *
     * @return string
     */
    public function getChoferBus()
    {
        return $this->choferBus;
    }

    /**
     * Set ayudanteBus
     *
     * @param string $ayudanteBus
     *
     * @return Bus
     */
    public function setAyudanteBus($ayudanteBus)
    {
        $this->ayudanteBus = $ayudanteBus;

        return $this;
    }

    /**
     * Get ayudanteBus
     *
     * @return string
     */
    public function getAyudanteBus()
    {
        return $this->ayudanteBus;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     *
     * @return Bus
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->isActive;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->horario = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add horario
     *
     * @param \AppBundle\Entity\Horario $horario
     *
     * @return Bus
     */
    public function addHorario(\AppBundle\Entity\Horario $horario)
    {
        $this->horario[] = $horario;

        return $this;
    }

    /**
     * Remove horario
     *
     * @param \AppBundle\Entity\Horario $horario
     */
    public function removeHorario(\AppBundle\Entity\Horario $horario)
    {
        $this->horario->removeElement($horario);
    }

    /**
     * Get horario
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getHorario()
    {
        return $this->horario;
    }

    /**
     * Set cooperativa
     *
     * @param \AppBundle\Entity\Cooperativa $cooperativa
     *
     * @return Bus
     */
    public function setCooperativa(\AppBundle\Entity\Cooperativa $cooperativa = null)
    {
        $this->cooperativa = $cooperativa;

        return $this;
    }

    /**
     * Get cooperativa
     *
     * @return \AppBundle\Entity\Cooperativa
     */
    public function getCooperativa()
    {
        return $this->cooperativa;
    }
}
