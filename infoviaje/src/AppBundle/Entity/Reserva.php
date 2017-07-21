<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reserva
 *
 * @ORM\Table(name="reserva")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ReservaRepository")
 */
class Reserva
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
     * @var int
     *
     * @ORM\Column(name="num_asientos", type="integer")
     */
    private $numAsientos;

    /**
     * @var string
     *
     * @ORM\Column(name="fecha", type="string", length=15)
     */
    private $fecha;


    /**
    * @ORM\ManyToOne(targetEntity="Usuario", inversedBy="reserva")
    * @ORM\JoinColumn(name="usuario_id", referencedColumnName="id")
    */
    private $usuario;
    /**
     * @ORM\ManyToOne(targetEntity="Horario", inversedBy="reserva")
     * @ORM\JoinColumn(name="horario_id", referencedColumnName="id")
     */
    private $horario;
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
     * Set numAsientos
     *
     * @param integer $numAsientos
     *
     * @return Reserva
     */
    public function setNumAsientos($numAsientos)
    {
        $this->numAsientos = $numAsientos;

        return $this;
    }

    /**
     * Get numAsientos
     *
     * @return int
     */
    public function getNumAsientos()
    {
        return $this->numAsientos;
    }

    /**
     * Set fecha
     *
     * @param string $fecha
     *
     * @return Reserva
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return string
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set usuario
     *
     * @param \AppBundle\Entity\Usuario $usuario
     *
     * @return Reserva
     */
    public function setUsuario(\AppBundle\Entity\Usuario $usuario = null)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return \AppBundle\Entity\Usuario
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set horario
     *
     * @param \AppBundle\Entity\Horario $horario
     *
     * @return Reserva
     */
    public function setHorario(\AppBundle\Entity\Horario $horario = null)
    {
        $this->horario = $horario;

        return $this;
    }

    /**
     * Get horario
     *
     * @return \AppBundle\Entity\Horario
     */
    public function getHorario()
    {
        return $this->horario;
    }
}
