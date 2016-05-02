<?php

namespace Dsg\agenciaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Dsg\agenciaBundle\Entity\Trabajos;

class TrabajosType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
           ->add('tipo', 'choice', array('choices' =>array('Jornada Completa' => 'Jornada completa', 'Media jornada' => 'Media jornada','Autonomo' =>'Autonomo'),'choices_as_values' => true,))
            ->add('categoria')
            ->add('compania')
            ->add('logo')
            ->add('url')
            ->add('posicion')
            ->add('localidad')
            ->add('descripcion')
            ->add('how_to_apply')
            ->add('token')
            ->add('publico')
            ->add('email')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Dsg\agenciaBundle\Entity\Trabajos'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'dsg_agenciabundle_trabajos';
    }
}
