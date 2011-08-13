<?php

namespace Khepin\GolfBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Khepin\GolfBundle\Entity\Hole;

class HoleType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('number', new HiddenType())
            ->add('par', 'choice', array(
                // Hardcoded since golf rules don't change "that often"
                'choices' => array(
                    '3' => '3',
                    '4' => '4',
                    '5' => '5',
                    ),
                // Display as 3 radio buttons
                'expanded' => true,
                'multiple' => false,
                ))
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
