<?php

namespace Ff\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;

/**
 * Tarea
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Tarea
{
     /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    
    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $apellidop;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $apellidom;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $nombre;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $dni;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $telefonoc;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $telefonof;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $sexo;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $disciplina;


    /**
     * @ORM\Column(type="date")
     */
    protected $fecha_inicio;

     /**
     * @ORM\Column(type="date")
     */
    protected $fecha_final;

     /**
     * @ORM\Column(type="integer")
     */
    protected $precio;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $tipodepago;

    /**
     * @ORM\Column(type="integer")
     */
    protected $veces;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $email;

    /**
     * @ORM\Column(type="datetime")
     */
    private $cumple;




    

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Tarea
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
     * Set dni
     *
     * @param string $dni
     * @return Tarea
     */
    public function setDni($dni)
    {
        $this->dni = $dni;

        return $this;
    }

    /**
     * Get dni
     *
     * @return string 
     */
    public function getDni()
    {
        return $this->dni;
    }

    
    /**
     * Set fecha_inicio
     *
     * @param \DateTime $fechaInicio
     * @return Tarea
     */
    public function setFechaInicio($fechaInicio)
    {
        $this->fecha_inicio = $fechaInicio;

        return $this;
    }

    /**
     * Get fecha_inicio
     *
     * @return \DateTime 
     */
    public function getFechaInicio()
    {
        return $this->fecha_inicio;
    }

    /**
     * Set fecha_final
     *
     * @param \DateTime $fechaFinal
     * @return Tarea
     */
    public function setFechaFinal($fechaFinal)
    {
        $this->fecha_final = $fechaFinal;

        return $this;
    }

    /**
     * Get fecha_final
     *
     * @return \DateTime 
     */
    public function getFechaFinal()
    {
        return $this->fecha_final;
    }

    /**
     * Set precio
     *
     * @param integer $precio
     * @return Tarea
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return integer 
     */
    public function getPrecio()
    {
        return $this->precio;
    }

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
     * Set disciplina
     *
     * @param string $disciplina
     * @return Tarea
     */
    public function setDisciplina($disciplina)
    {
        $this->disciplina = $disciplina;

        return $this;
    }

    /**
     * Get disciplina
     *
     * @return string 
     */
    public function getDisciplina()
    {
        return $this->disciplina;
    }

    /**
     * Set sexo
     *
     * @param string $sexo
     * @return Tarea
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }

    /**
     * Get sexo
     *
     * @return string 
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Set apellidop
     *
     * @param string $apellidop
     * @return Tarea
     */
    public function setApellidop($apellidop)
    {
        $this->apellidop = $apellidop;

        return $this;
    }

    /**
     * Get apellidop
     *
     * @return string 
     */
    public function getApellidop()
    {
        return $this->apellidop;
    }

    /**
     * Set apellidom
     *
     * @param string $apellidom
     * @return Tarea
     */
    public function setApellidom($apellidom)
    {
        $this->apellidom = $apellidom;

        return $this;
    }

    /**
     * Get apellidom
     *
     * @return string 
     */
    public function getApellidom()
    {
        return $this->apellidom;
    }

    /**
     * Set telefonoc
     *
     * @param string $telefonoc
     * @return Tarea
     */
    public function setTelefonoc($telefonoc)
    {
        $this->telefonoc = $telefonoc;

        return $this;
    }

    /**
     * Get telefonoc
     *
     * @return string 
     */
    public function getTelefonoc()
    {
        return $this->telefonoc;
    }

    /**
     * Set telefonof
     *
     * @param string $telefonof
     * @return Tarea
     */
    public function setTelefonof($telefonof)
    {
        $this->telefonof = $telefonof;

        return $this;
    }

    /**
     * Get telefonof
     *
     * @return string 
     */
    public function getTelefonof()
    {
        return $this->telefonof;
    }

    /**
     * Set tipodepago
     *
     * @param string $tipodepago
     * @return Tarea
     */
    public function setTipodepago($tipodepago)
    {
        $this->tipodepago = $tipodepago;

        return $this;
    }

    /**
     * Get tipodepago
     *
     * @return string 
     */
    public function getTipodepago()
    {
        return $this->tipodepago;
    }

    /**
     * Set veces
     *
     * @param string $veces
     * @return Tarea
     */
    public function setVeces($veces)
    {
        $this->veces = $veces;

        return $this;
    }

    /**
     * Get veces
     *
     * @return string 
     */
    public function getVeces()
    {
        return $this->veces;
    }

    
    /**
     * Set cumple
     *
     * @param \DateTime $cumple
     * @return Tarea
     */
    public function setCumple($cumple)
    {
        $this->cumple = $cumple;

        return $this;
    }

    /**
     * Get cumple
     *
     * @return \DateTime 
     */
    public function getCumple()
    {
        return $this->cumple;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Tarea
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
}
