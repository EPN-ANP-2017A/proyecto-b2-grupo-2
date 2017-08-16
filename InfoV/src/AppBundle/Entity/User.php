<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="usuario")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @Assert\Regex(
     *     pattern="/\d/",
     *     match=false,
     *     message="No se acepta numeros"
     * )
     * @ORM\Column(type="string", length=30)
     */
    protected $nombre;

    /**
     * @var string
     *
     * @Assert\Regex(
     *     pattern="/\d/",
     *     match=false,
     *     message="No se acepta numeros"
     * )
     * @ORM\Column(name="apellido", type="string", length=30)
     */
    private $apellido;

    /**
     * @var string
     *
     * @Assert\Type(
     *     type="integer",
     *     message="El valor  no es del {{ type }} válido."
     * )
     * @Assert\Length(
     *      min = 10,
     *      max = 10,
     *      minMessage = "Tu ID debe tener al menos {{ limit }} numeros",
     *      maxMessage = "Tu ID no puede ser mayor a {{ limit }} numeros"
     * )
     * @ORM\Column(name="cedula", type="string", length=10, nullable=true, unique=true)
     */
    private $cedula;


    /**
     * @var bool
     *
     * @ORM\Column(name="discapacidad", type="boolean")
     */
    private $discapacidad;


    /**
     * @ORM\OneToMany(targetEntity="Reserva", mappedBy="user")
     */
    private $reserva;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return User
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set apellido
     *
     * @param string $apellido
     *
     * @return User
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get apellido
     *
     * @return string
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set cedula
     *
     * @param string $cedula
     *
     * @return User
     */
    public function setCedula($cedula)
    {
        $this->cedula = $cedula;

        return $this;
    }

    /**
     * Get cedula
     *
     * @return string
     */
    public function getCedula()
    {
        return $this->cedula;
    }

    /**
     * Set discapacidad
     *
     * @param boolean $discapacidad
     *
     * @return User
     */
    public function setDiscapacidad($discapacidad)
    {
        $this->discapacidad = $discapacidad;

        return $this;
    }

    /**
     * Get discapacidad
     *
     * @return boolean
     */
    public function getDiscapacidad()
    {
        return $this->discapacidad;
    }

    /**
     * Add reserva
     *
     * @param \AppBundle\Entity\Reserva $reserva
     *
     * @return User
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
}
