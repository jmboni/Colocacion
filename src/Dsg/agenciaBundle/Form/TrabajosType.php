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
            //->add('tipo', 'choice', array('choices' =>array('Jornada Completa' => 'Jornada completa', 'Media jornada' => 'Media jornada','Autonomo' =>'Autonomo'),'choices_as_values' => true,))
            ->add('tipo', 'choice', array('choices' => Trabajos::getTipos(), 'expanded' => true))
            ->add('categoria')
            ->add('compania')
            ->add('logo', null, array('label' => 'Logotipo empresa'))
            ->add('url')
            ->add('posicion')
            ->add('localidad')
            ->add('descripcion')
            ->add('how_to_apply', null, array('label' => '¿Como suscribirse?'))
            ->add('token')
            ->add('publico', null, array('label' => '¿La oferta es publica?'))
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
        return 'formulariotTrabajos';
    }
}
