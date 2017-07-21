<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * @ORM\Column(name="nombre_coop", type="string", length=30, unique=true)
     */
    private $nombreCoop;

    /**
     * @var string
     *
     * @ORM\Column(name="ruc_coop", type="string", length=13, unique=true)
     */
    private $rucCoop;

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
     * Set nombreCoop
     *
     * @param string $nombreCoop
     *
     * @return Cooperativa
     */
    public function setNombreCoop($nombreCoop)
    {
        $this->nombreCoop = $nombreCoop;

        return $this;
    }

    /**
     * Get nombreCoop
     *
     * @return string
     */
    public function getNombreCoop()
    {
        return $this->nombreCoop;
    }

    /**
     * Set rucCoop
     *
     * @param string $rucCoop
     *
     * @return Cooperativa
     */
    public function setRucCoop($rucCoop)
    {
        $this->rucCoop = $rucCoop;

        return $this;
    }

    /**
     * Get rucCoop
     *
     * @return string
     */
    public function getRucCoop()
    {
        return $this->rucCoop;
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
