<?php

namespace Khepin\GolfBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
use Khepin\GolfBundle\Entity\Course;
use Khepin\GolfBundle\Form\HoleType;
use Khepin\GolfBundle\Entity\Hole;

class ParSetType extends AbstractType
{
    private $course;
    
    public function __construct(Course $course) {
        $this->course = $course;
    }
    
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder->add('holes', 'collection', array(
            'type' => new HoleType(),
        ));
        for($i = 1; $i <= $this->course->getHolesNumber(); $i++) {
            $hole = new Hole();
            $hole->setCourse($this->course);
            $hole->setNumber($i);
            $builder->get('holes')->add('hole_'.$i, new HoleType($hole));
        }
    }

    public function getName()
    {
        return 'khepin_golfbundle_parsettype';
    }
    
}
