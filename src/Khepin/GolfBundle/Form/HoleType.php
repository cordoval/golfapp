<?php

namespace Khepin\GolfBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

class HoleType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('number', new HiddenType())
            ->add('par')
            ->add('course', new HiddenType())
        ;
    }

    public function getName()
    {
        return 'khepin_golfbundle_holetype';
    }
    
    public function getDefaultOptions(array $options){
        return array(
            'data_class' => 'Khepin\GolfBundle\Entity\Hole',
        );
    }
}
