<?php

namespace Khepin\GolfBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Khepin\GolfBundle\Entity\Course
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Khepin\GolfBundle\Repository\CourseRepository")
 */
class Course
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string $city
     *
     * @ORM\Column(name="city", type="string", length=255)
     */
    private $city;

    /**
     * @var integer $holes
     *
     * @ORM\Column(name="holes", type="integer")
     */
    private $holes;


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
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set city
     *
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set holes
     *
     * @param integer $holes
     */
    public function setHoles($holes)
    {
        $this->holes = $holes;
    }

    /**
     * Get holes
     *
     * @return integer 
     */
    public function getHoles()
    {
        return $this->holes;
    }
}