<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * @ORM\Column(name="matricula", type="string", length=20, unique=true)
     */
    private $matricula;

    /**
     * @var int
     *
     * @ORM\Column(name="capacidad", type="integer")
     */
    private $capacidad;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion_bus", type="string", length=80)
     */
    private $descripcionBus;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_chofer", type="string", length=30)
     */
    private $nomChofer;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_ayudante", type="string", length=30)
     */
    private $nomAyudante;

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
     * Set matricula
     *
     * @param string $matricula
     *
     * @return Bus
     */
    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;

        return $this;
    }

    /**
     * Get matricula
     *
     * @return string
     */
    public function getMatricula()
    {
        return $this->matricula;
    }

    /**
     * Set capacidad
     *
     * @param integer $capacidad
     *
     * @return Bus
     */
    public function setCapacidad($capacidad)
    {
        $this->capacidad = $capacidad;

        return $this;
    }

    /**
     * Get capacidad
     *
     * @return int
     */
    public function getCapacidad()
    {
        return $this->capacidad;
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
     * Set nomChofer
     *
     * @param string $nomChofer
     *
     * @return Bus
     */
    public function setNomChofer($nomChofer)
    {
        $this->nomChofer = $nomChofer;

        return $this;
    }

    /**
     * Get nomChofer
     *
     * @return string
     */
    public function getNomChofer()
    {
        return $this->nomChofer;
    }

    /**
     * Set nomAyudante
     *
     * @param string $nomAyudante
     *
     * @return Bus
     */
    public function setNomAyudante($nomAyudante)
    {
        $this->nomAyudante = $nomAyudante;

        return $this;
    }

    /**
     * Get nomAyudante
     *
     * @return string
     */
    public function getNomAyudante()
    {
        return $this->nomAyudante;
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
