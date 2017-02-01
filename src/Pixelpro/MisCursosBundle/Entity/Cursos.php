<?php

namespace Pixelpro\MisCursosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="cursos")
 */
class Cursos {

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=65)
     * @Assert\NotBlank()
     *  @Assert\Length(min = 3)
     * )
     */
    private $nombre;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     *  @Assert\Length(min = 30)
     */
    private $des;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank()
     * @Assert\Type(type="integer")
     * @Assert\GreaterThanOrEqual(8)
     */
    private $horas;


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
     * Set nombre
     *
     * @param \string, lenght=65 $nombre
     *
     * @return Cursos
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return \string, lenght=65
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set des
     *
     * @param \string, lenght=255 $des
     *
     * @return Cursos
     */
    public function setDes($des)
    {
        $this->des = $des;

        return $this;
    }

    /**
     * Get des
     *
     * @return \string, lenght=255
     */
    public function getDes()
    {
        return $this->des;
    }

    /**
     * Set horas
     *
     * @param integer $horas
     *
     * @return Cursos
     */
    public function setHoras($horas)
    {
        $this->horas = $horas;

        return $this;
    }

    /**
     * Get horas
     *
     * @return integer
     */
    public function getHoras()
    {
        return $this->horas;
    }
}
