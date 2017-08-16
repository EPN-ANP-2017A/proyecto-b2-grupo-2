<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Horario
 *
 * @ORM\Table(name="horario")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\HorarioRepository")
 */
class Horario
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
     * @var \DateTime
     *
     * @ORM\Column(name="hora_salida", type="time")
     */
    private $horaSalida;


    /**
     * @ORM\OneToMany(targetEntity="Reserva", mappedBy="horario")
     */
    private $reserva;
    /**
     * @ORM\ManyToOne(targetEntity="Destino", inversedBy="horario")
     * @ORM\JoinColumn(name="destino_id", referencedColumnName="id")
     */
    private $destino;

    /**
     * @ORM\ManyToOne(targetEntity="Bus", inversedBy="horario")
     * @ORM\JoinColumn(name="bus_id", referencedColumnName="id")
     */
    private $bus;
    
    
    
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
     * Set horaSalida
     *
     * @param \DateTime $horaSalida
     *
     * @return Horario
     */
    public function setHoraSalida($horaSalida)
    {
        $this->horaSalida = $horaSalida;

        return $this;
    }

    /**
     * Get horaSalida
     *
     * @return \DateTime
     */
    public function getHoraSalida()
    {
        return $this->horaSalida;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->reserva = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add reserva
     *
     * @param \AppBundle\Entity\Reserva $reserva
     *
     * @return Horario
     */
    public function addReserva(\AppBundle\Entity\Reserva $reserva)
    {
        $this->reserva[] = $reserva;

        return $this;
    }

    /**
     * Remove reserva
     *
     * @param \AppBundle\Entity\Reserva $reserva
     */
    public function removeReserva(\AppBundle\Entity\Reserva $reserva)
    {
        $this->reserva->removeElement($reserva);
    }

    /**
     * Get reserva
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getReserva()
    {
        return $this->reserva;
    }

    /**
     * Set destino
     *
     * @param \AppBundle\Entity\Destino $destino
     *
     * @return Horario
     */
    public function setDestino(\AppBundle\Entity\Destino $destino = null)
    {
        $this->destino = $destino;

        return $this;
    }

    /**
     * Get destino
     *
     * @return \AppBundle\Entity\Destino
     */
    public function getDestino()
    {
        return $this->destino;
    }

    /**
     * Set bus
     *
     * @param \AppBundle\Entity\Bus $bus
     *
     * @return Horario
     */
    public function setBus(\AppBundle\Entity\Bus $bus = null)
    {
        $this->bus = $bus;

        return $this;
    }

    /**
     * Get bus
     *
     * @return \AppBundle\Entity\Bus
     */
    public function getBus()
    {
        return $this->bus;
    }
}
