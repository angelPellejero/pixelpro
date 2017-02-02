<?php

namespace Pixelpro\MisCursosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class CursosType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('nombre')
                ->add('des')
                ->add('horas')
                ->add('save', SubmitType::class, array('label'=>'Crear Curso'));
    }

}
