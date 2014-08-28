<?php

namespace Ff\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AlumnoPago
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class AlumnoPago
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
     * @ORM\Column(type="integer")
     */
    private $idalumno;

    /**
     * @ORM\Column(type="string", length=1)
     */
    private $disciplina;

    
    /**
     * @ORM\Column(type="integer")
     */
    private $precio;

    /**
     * @ORM\Column(type="string", length=1)
     */
    private $tipodepago;

    /**
     * @ORM\Column(type="date")
     */
    private $fechainicio;

    /**
     * @ORM\Column(type="date")
     */
    private $fechafinal;

    /**
     *
     * @ORM\Column(type="integer")
     */
    private $veces;

    /**
     *
     * @ORM\Column(type="integer")
     */
    private $vecestotales;

    /**
     *
     * @ORM\Column(type="integer")
     */
    private $vecesasistencia;

  

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
     * Set fechainicio
     *
     * @param array $fechainicio
     * @return AlumnoPago
     */
    public function setFechainicio($fechainicio)
    {
        $this->fechainicio = $fechainicio;

        return $this;
    }

    /**
     * Get fechainicio
     *
     * @return array 
     */
    public function getFechainicio()
    {
        return $this->fechainicio;
    }

    /**
     * Set fechafinal
     *
     * @param array $fechafinal
     * @return AlumnoPago
     */
    public function setFechafinal($fechafinal)
    {
        $this->fechafinal = $fechafinal;

        return $this;
    }

    /**
     * Get fechafinal
     *
     * @return array 
     */
    public function getFechafinal()
    {
        return $this->fechafinal;
    }

    /**
     * Set precio
     *
     * @param array $precio
     * @return AlumnoPago
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return array 
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set disciplina
     *
     * @param array $disciplina
     * @return AlumnoPago
     */
    public function setDisciplina($disciplina)
    {
        $this->disciplina = $disciplina;

        return $this;
    }

    /**
     * Get disciplina
     *
     * @return array 
     */
    public function getDisciplina()
    {
        return $this->disciplina;
    }

    /**
     * Set tipodepago
     *
     * @param array $tipodepago
     * @return AlumnoPago
     */
    public function setTipodepago($tipodepago)
    {
        $this->tipodepago = $tipodepago;

        return $this;
    }

    /**
     * Get tipodepago
     *
     * @return array 
     */
    public function getTipodepago()
    {
        return $this->tipodepago;
    }

    /**
     * Set veces
     *
     * @param array $veces
     * @return AlumnoPago
     */
    public function setVeces($veces)
    {
        $this->veces = $veces;

        return $this;
    }

    /**
     * Get veces
     *
     * @return array 
     */
    public function getVeces()
    {
        return $this->veces;
    }

    

    /**
     * Set idalumno
     *
     * @param integer $idalumno
     * @return AlumnoPago
     */
    public function setIdalumno($idalumno)
    {
        $this->idalumno = $idalumno;

        return $this;
    }

    /**
     * Get idalumno
     *
     * @return integer 
     */
    public function getIdalumno()
    {
        return $this->idalumno;
    }

    /**
     * Set vecestotales
     *
     * @param string $vecestotales
     * @return AlumnoPago
     */
    public function setVecestotales($vecestotales)
    {
        $this->vecestotales = $vecestotales;

        return $this;
    }

    /**
     * Get vecestotales
     *
     * @return string 
     */
    public function getVecestotales()
    {
        return $this->vecestotales;
    }

    /**
     * Set vecesasistencia
     *
     * @param integer $vecesasistencia
     * @return AlumnoPago
     */
    public function setVecesasistencia($vecesasistencia)
    {
        $this->vecesasistencia = $vecesasistencia;

        return $this;
    }

    /**
     * Get vecesasistencia
     *
     * @return integer 
     */
    public function getVecesasistencia()
    {
        return $this->vecesasistencia;
    }
}
