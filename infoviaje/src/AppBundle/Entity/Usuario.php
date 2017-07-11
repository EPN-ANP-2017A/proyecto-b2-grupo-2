<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario
 *
 * @ORM\Table(name="usuario")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UsuarioRepository")
 */
class Usuario
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
     * @ORM\Column(name="nombre", type="string", length=30)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido", type="string", length=30)
     */
    private $apellido;

    /**
     * @var string
     *
     * @ORM\Column(name="cedula", type="string", length=10, nullable=true, unique=true)
     */
    private $cedula;

    /**
     * @var int
     *
     * @ORM\Column(name="edad", type="integer")
     */
    private $edad;

    /**
     * @var bool
     *
     * @ORM\Column(name="discapacidad", type="boolean")
     */
    private $discapacidad;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_usuario", type="string", length=30, nullable=true, unique=true)
     */
    private $nomUsuario;

    /**
     * @var string
     *
     * @ORM\Column(name="clave", type="string", length=255, nullable=true)
     */
    private $clave;


    /**
     * @ORM\OneToMany(targetEntity="Rol", mappedBy="usuario")
     */
    private $rol;

    /**
     * @ORM\OneToMany(targetEntity="Reserva", mappedBy="usuario")
     */
    private $reserva;
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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Usuario
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
     * @return Usuario
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
     * @return Usuario
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
     * Set edad
     *
     * @param integer $edad
     *
     * @return Usuario
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

    /**
     * Get edad
     *
     * @return int
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * Set discapacidad
     *
     * @param boolean $discapacidad
     *
     * @return Usuario
     */
    public function setDiscapacidad($discapacidad)
    {
        $this->discapacidad = $discapacidad;

        return $this;
    }

    /**
     * Get discapacidad
     *
     * @return bool
     */
    public function getDiscapacidad()
    {
        return $this->discapacidad;
    }

    /**
     * Set nomUsuario
     *
     * @param string $nomUsuario
     *
     * @return Usuario
     */
    public function setNomUsuario($nomUsuario)
    {
        $this->nomUsuario = $nomUsuario;

        return $this;
    }

    /**
     * Get nomUsuario
     *
     * @return string
     */
    public function getNomUsuario()
    {
        return $this->nomUsuario;
    }

    /**
     * Set clave
     *
     * @param string $clave
     *
     * @return Usuario
     */
    public function setClave($clave)
    {
        $this->clave = $clave;

        return $this;
    }

    /**
     * Get clave
     *
     * @return string
     */
    public function getClave()
    {
        return $this->clave;
    }
}
