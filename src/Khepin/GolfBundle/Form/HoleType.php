<?php

namespace Khepin\GolfBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Khepin\GolfBundle\Entity\Hole;

class HoleType extends AbstractType
{
    /**
     * Used to populate from the constructor
     * @var Hole
     */
    private $hole = null;
    
    public function __construct(Hole $hole = null) {
        $this->hole = $hole;
    }
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('number', new HiddenType())
            ->add('par', 'choice', array(
                'choices' => array(
                    '3' => '3',
                    '4' => '4',
                    '5' => '5',
                    ),
                'expanded' => true,
                'multiple' => false,
                ))
        ;
        if (!is_null($this->hole)){
            $builder->setData($this->hole);
        }
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
