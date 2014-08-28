<?php

namespace Ff\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tarea4
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Tarea4
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
    protected $apellidop;


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
     * Set apellidop
     *
     * @param string $apellidop
     * @return Tarea4
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
}
