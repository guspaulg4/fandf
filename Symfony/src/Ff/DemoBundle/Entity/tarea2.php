<?php

namespace Ff\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * tarea2
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class tarea2
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

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
     * @return tarea2
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
     * Set fecha_inicio
     *
     * @param \DateTime $fechaInicio
     * @return tarea2
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
     * @return tarea2
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
     * @return tarea2
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
     * Set tipodepago
     *
     * @param string $tipodepago
     * @return tarea2
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
     * @param integer $veces
     * @return tarea2
     */
    public function setVeces($veces)
    {
        $this->veces = $veces;

        return $this;
    }

    /**
     * Get veces
     *
     * @return integer 
     */
    public function getVeces()
    {
        return $this->veces;
    }
}
