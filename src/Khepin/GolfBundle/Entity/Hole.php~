<?php

namespace Khepin\GolfBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Khepin\GolfBundle\Entity\Course;

/**
 * Khepin\GolfBundle\Entity\Hole
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Hole
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
     * @var integer $number
     *
     * @ORM\Column(name="number", type="integer")
     */
    private $number;

    /**
     * @var integer $par
     *
     * @ORM\Column(name="par", type="integer")
     */
    private $par;
    
    /**
     * @ORM\ManyToOne(targetEntity="Course", inversedBy="holes")
     * @ORM\JoinColumn(name="course_id", referencedColumnName="id")
     * @var Course 
     */
    private $course;


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
     * Set number
     *
     * @param integer $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    /**
     * Get number
     *
     * @return integer 
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set par
     *
     * @param integer $par
     */
    public function setPar($par)
    {
        $this->par = $par;
    }

    /**
     * Get par
     *
     * @return integer 
     */
    public function getPar()
    {
        return $this->par;
    }

    /**
     * Set course
     *
     * @param Khepin\GolfBundle\Entity\Course $course
     */
    public function setCourse(\Khepin\GolfBundle\Entity\Course $course)
    {
        $this->course = $course;
    }

    /**
     * Get course
     *
     * @return Khepin\GolfBundle\Entity\Course 
     */
    public function getCourse()
    {
        return $this->course;
    }
    
    public function __toString() {
        return ''.$this->number;
    }
}