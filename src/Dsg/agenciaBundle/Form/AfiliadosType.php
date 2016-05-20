<?php
 
namespace Dsg\agenciaBundle\Form;
 
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Dsg\agenciaBundle\Entity\Afiliados;
use Dsg\agenciaBundle\Entity\Categoria;
 
class AfiliadosType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('url')
            ->add('email')
            ->add('categoria', null,  array('placeholder'=> 'Selecciona una categoría'))
        ;
    }
 
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Dsg\agenciaBundle\Entity\Afiliados',
        ));
    }
 
    public function getName()
    {
        return 'afiliados';
    }
}