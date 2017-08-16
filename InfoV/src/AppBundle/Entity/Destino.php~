<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Destino
 *
 * @ORM\Table(name="destino")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DestinoRepository")
 */
class Destino
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
     * @ORM\Column(name="lugar_destino", type="string", length=70, unique=true)
     */
    private $lugarDestino;

    /**
     * @var string
     *
     * @ORM\Column(name="tiempo_destino", type="string", length=20)
     */
    private $tiempoDestino;

    /**
     * @var string
     *
     * @ORM\Column(name="precio_destino", type="decimal", precision=10, scale=2)
     */
    private $precioDestino;


    /**
     * @ORM\OneToMany(targetEntity="Horario", mappedBy="destino")
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
     * Set lugarDestino
     *
     * @param string $lugarDestino
     *
     * @return Destino
     */
    public function setLugarDestino($lugarDestino)
    {
        $this->lugarDestino = $lugarDestino;

        return $this;
    }

    /**
     * Get lugarDestino
     *
     * @return string
     */
    public function getLugarDestino()
    {
        return $this->lugarDestino;
    }

    /**
     * Set tiempoDestino
     *
     * @param string $tiempoDestino
     *
     * @return Destino
     */
    public function setTiempoDestino($tiempoDestino)
    {
        $this->tiempoDestino = $tiempoDestino;

        return $this;
    }

    /**
     * Get tiempoDestino
     *
     * @return string
     */
    public function getTiempoDestino()
    {
        return $this->tiempoDestino;
    }

    /**
     * Set precioDestino
     *
     * @param string $precioDestino
     *
     * @return Destino
     */
    public function setPrecioDestino($precioDestino)
    {
        $this->precioDestino = $precioDestino;

        return $this;
    }

    /**
     * Get precioDestino
     *
     * @return string
     */
    public function getPrecioDestino()
    {
        return $this->precioDestino;
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
     * @return Destino
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
}
