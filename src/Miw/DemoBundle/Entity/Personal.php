<?php

namespace Miw\DemoBundle\Entity;

/**
 * Personal
 */
class Personal
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $dni;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $email;

    private $contador;
    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set dni
     *
     * @param integer $dni
     *
     * @return Personal
     */
    public function setDni($dni)
    {
        $this->dni = $dni;

        return $this;
    }

    /**
     * Get dni
     *
     * @return integer
     */
    public function getDni()
    {
        return $this->dni;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Personal
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
     * Set email
     *
     * @param string $email
     *
     * @return Personal
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set contador
     *
     * @param integer $contador
     *
     * @return Personal
     */
    public function setContador($contador)
    {
        $this->contador = $contador;

        return $this;
    }

    /**
     * Get contador
     *
     * @return integer
     */
    public function getContador()
    {
        return $this->contador;
    }
}
