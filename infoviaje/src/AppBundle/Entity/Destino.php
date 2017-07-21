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
     * @ORM\Column(name="nom_destino", type="string", length=30, nullable=true, unique=true)
     */
    private $nomDestino;

    /**
     * @var string
     *
     * @ORM\Column(name="tiempo_viaje", type="string", length=10)
     */
    private $tiempoViaje;

    /**
     * @var string
     *
     * @ORM\Column(name="precio", type="decimal", precision=2, scale=0)
     */
    private $precio;

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
     * Set nomDestino
     *
     * @param string $nomDestino
     *
     * @return Destino
     */
    public function setNomDestino($nomDestino)
    {
        $this->nomDestino = $nomDestino;

        return $this;
    }

    /**
     * Get nomDestino
     *
     * @return string
     */
    public function getNomDestino()
    {
        return $this->nomDestino;
    }

    /**
     * Set tiempoViaje
     *
     * @param string $tiempoViaje
     *
     * @return Destino
     */
    public function setTiempoViaje($tiempoViaje)
    {
        $this->tiempoViaje = $tiempoViaje;

        return $this;
    }

    /**
     * Get tiempoViaje
     *
     * @return string
     */
    public function getTiempoViaje()
    {
        return $this->tiempoViaje;
    }

    /**
     * Set precio
     *
     * @param string $precio
     *
     * @return Destino
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return string
     */
    public function getPrecio()
    {
        return $this->precio;
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
