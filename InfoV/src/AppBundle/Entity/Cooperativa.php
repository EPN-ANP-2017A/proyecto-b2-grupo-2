<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Cooperativa
 *
 * @ORM\Table(name="cooperativa")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CooperativaRepository")
 */
class Cooperativa
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
     *      min = 4,
     *      max = 100,
     *      minMessage = "Nombre debe tener al menos {{ limit }} caracteres",
     *      maxMessage = "Nombre no puede ser mayor a {{ limit }} caracteres"
     * )
     * @ORM\Column(name="nombre_cooperativa", type="string", length=100, unique=true)
     */
    private $nombreCooperativa;

    /**
     * @var string
     *
     * @Assert\Type(
     *     type="integer",
     *     message="El valor  no es del {{ type }} válido."
     * )
     * @Assert\Length(
     *      min = 12,
     *      max = 14,
     *      minMessage = "Tu RUC debe tener al menos {{ limit }} numeros",
     *      maxMessage = "Tu RUC no puede ser mayor a {{ limit }} numeros"
     * )
     * @ORM\Column(name="ruc_cooperativa", type="string", length=13, unique=true)
     */
    private $rucCooperativa;


    /**
     * @ORM\OneToMany(targetEntity="Bus", mappedBy="cooperativa")
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
     * Set nombreCooperativa
     *
     * @param string $nombreCooperativa
     *
     * @return Cooperativa
     */
    public function setNombreCooperativa($nombreCooperativa)
    {
        $this->nombreCooperativa = $nombreCooperativa;

        return $this;
    }

    /**
     * Get nombreCooperativa
     *
     * @return string
     */
    public function getNombreCooperativa()
    {
        return $this->nombreCooperativa;
    }

    /**
     * Set rucCooperativa
     *
     * @param string $rucCooperativa
     *
     * @return Cooperativa
     */
    public function setRucCooperativa($rucCooperativa)
    {
        $this->rucCooperativa = $rucCooperativa;

        return $this;
    }

    /**
     * Get rucCooperativa
     *
     * @return string
     */
    public function getRucCooperativa()
    {
        return $this->rucCooperativa;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->bus = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add bus
     *
     * @param \AppBundle\Entity\Bus $bus
     *
     * @return Cooperativa
     */
    public function addBus(\AppBundle\Entity\Bus $bus)
    {
        $this->bus[] = $bus;

        return $this;
    }

    /**
     * Remove bus
     *
     * @param \AppBundle\Entity\Bus $bus
     */
    public function removeBus(\AppBundle\Entity\Bus $bus)
    {
        $this->bus->removeElement($bus);
    }

    /**
     * Get bus
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getBus()
    {
        return $this->bus;
    }
}
