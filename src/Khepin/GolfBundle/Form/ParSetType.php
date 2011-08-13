<?php

namespace Khepin\GolfBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
use Khepin\GolfBundle\Form\HoleType;
use Khepin\GolfBundle\Entity\Hole;

class ParSetType extends AbstractType
{
    private $course;
    
    public function __construct(\Khepin\GolfBundle\Entity\Course $course){
        $this->course = $course;
    }
    
    public function buildForm(FormBuilder $builder, array $options)
    {
        // CollectionType always adds a csrf. We don't need it here as it is already
        // in the ParSetType. Keeping it keeps it in the data and we only want Holes in the data
        $builder->add('holes', 'collection', array('csrf_protection' => false));
        for($i = 1; $i <= $this->course->getHolesNumber(); $i++) {
            $hole = new Hole();
            $hole->setNumber($i);
            $hole->setCourse($this->course);
            $builder->get('holes')->add('hole_'.$i, new HoleType(), array('data' => $hole));
        }
    }

    public function getName()
    {
        return 'khepin_golfbundle_parsettype';
    }
}
