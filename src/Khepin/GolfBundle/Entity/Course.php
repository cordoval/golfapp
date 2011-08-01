<?php

namespace Khepin\GolfBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Khepin\GolfBundle\Entity\Hole;
use Symfony\Component\Validator\Constraints as Assert;

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
     * @Assert\Type(type="string")
     * @Assert\MinLength(3)
     * @Assert\MaxLength(255)
     */
    private $name;

    /**
     * @var string $city
     *
     * @ORM\Column(name="city", type="string", length=255)
     * @Assert\Type(type="string")
     * @Assert\MinLength(3)
     * @Assert\MaxLength(255)
     */
    private $city;

    /**
     * @var integer $holes_number
     *
     * @ORM\Column(name="holes_number", type="integer")
     * @Assert\Type(type="integer")
     * @Assert\Choice(choices= { "9", "18" }, message="Number of holes should be either 9 or 18.")
     */
    private $holes_number;
    
    /**
     * @var array
     * @ORM\OneToMany(targetEntity="Hole", mappedBy="course")
     */
    private $holes;


    public function __construct() {
        $this->holes = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set holes_number
     *
     * @param integer $holesNumber
     */
    public function setHolesNumber($holes_number)
    {
        $this->holes_number = (int) $holes_number;
    }

    /**
     * Get holes_number
     *
     * @return integer 
     */
    public function getHolesNumber()
    {
        return $this->holes_number;
    }

    /**
     * Add holes
     *
     * @param Khepin\GolfBundle\Entity\Hole $holes
     */
    public function addHoles(\Khepin\GolfBundle\Entity\Hole $holes)
    {
        $this->holes[] = $holes;
    }

    /**
     * Get holes
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getHoles()
    {
        return $this->holes;
    }
    
    public function __toString(){
        return $this->getName();
    }
}