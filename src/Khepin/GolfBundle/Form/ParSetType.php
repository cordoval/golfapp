<?php

namespace Khepin\GolfBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
use Khepin\GolfBundle\Form\HoleType;
use Khepin\GolfBundle\Entity\Hole;

class ParSetType extends AbstractType
{
    /**
     * Number of holes to generate in the form
     *
     * @var type 
     */
    private $holes_number;
    /**
     * The Course the holes belong to (used only before saving)
     *
     * @var type 
     */
    private $course;
    
    public function __construct($holes_number){
        $this->holes_number = $holes_number;
    }
    
    public function buildForm(FormBuilder $builder, array $options)
    {
        // CollectionType always adds a csrf. We don't need it here as it is already
        // in the ParSetType. Keeping it keeps it in the data and we only want Holes in the data
        $builder->add('holes', 'collection', array('csrf_protection' => false));
        for($i = 1; $i <= $this->holes_number; $i++) {
            $hole = new Hole();
            $hole->setNumber($i);
            if(isset($this->course)){
                // If the course is set (form data received) we set it in the hole
                $hole->setCourse($this->course);
            }
            $builder->get('holes')->add('hole_'.$i, new HoleType(), array('data' => $hole));
        }
    }

    public function getName()
    {
        return 'khepin_golfbundle_parsettype';
    }
    
    public function setCourse(\Khepin\GolfBundle\Entity\Course $course){
        $this->course = $course;
        //If the course is set, we override the given holes number to match
        $this->holes_number = $course->getHolesNumber();
    }
}
