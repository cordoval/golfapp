<?php

namespace Khepin\GolfBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class CourseType extends AbstractType {

    public function buildForm(FormBuilder $builder, array $options) {
        $builder
                ->add('name')
                ->add('city')
                ->add('holes_number', 'choice', array('choices' => array(18 => 18, 9 => 9)));
        ;
    }

    public function getName() {
        return 'khepin_golfbundle_coursetype';
    }

    public function getDefaultOptions(array $options) {
        return array(
            'data_class' => 'Khepin\GolfBundle\Entity\Course',
        );
    }

}
