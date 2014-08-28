<?php

namespace Ff\DemoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TareaType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('apellidop',null, array('label' =>'Apellido Paterno',))
            ->add('apellidom',null, array('label' =>'Apellido Materno',))
            ->add('nombre',null, array('label' =>'Nombre Completo',))
            ->add('email',null,array('label' =>'Correo Electronico',))
            ->add('cumple','birthday')
            ->add('dni')
            ->add('telefonoc',null, array('label' =>' Numero Celular',))
            ->add('telefonof',null, array('label' =>'Numero Fijo',))

            ->add('sexo', 'choice', array(
            'choices' => array('1' => 'Mujer', '2' => 'Hombre'),
            ))

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


            ->add('Procesar alumno', 'submit')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ff\DemoBundle\Entity\Tarea'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ff_demobundle_tarea';
    }
}
