<?php

namespace Ff\DemoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class tarea2Type extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)

    {
        $builder
        ->add('disciplina', 'choice', array(
            'choices' => array('1' => 'Muay Thai', '2' => 'jiu jitsu', '3' => 'judo','4' => 'MMA', '5' => 'box'),
            ))

            ->add('fecha_inicio','date')

            ->add('fecha_final','date')

            ->add('tipodepago' , 
                  'choice', 
                   array('choices' => array('1' => 'efectivo', '2' => 'tarjeta',),'label'=>'Tipo de Pago',
            ))

            ->add('veces', 'choice', array(
            'choices' => array('1' => '1', '2' => '2' , '3' => '3', '4' => '4', '5' => '5', '6' => '6',),'label'=>'Dias por semana',
            ))

            ->add('precio')

            ->add('Matricular Alumno', 'submit')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ff\DemoBundle\Entity\tarea2'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ff_demobundle_tarea2';
    }
}
