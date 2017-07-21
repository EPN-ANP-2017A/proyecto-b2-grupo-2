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
     * @var string
     *
     * @ORM\Column(name="hora_salida", type="string", length=10)
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
     * @param string $horaSalida
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
     * @return string
     */
    public function getHoraSalida()
    {
        return $this->horaSalida;
    }
}
