<?php
# AppBundle/Form/ContactType.php

namespace Dsg\agenciaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', null, array('label' => 'Nombre'));
        $builder->add('email', 'email');
        $builder->add('subject', null, array('label' => 'Asunto'));
        $builder->add('body', 'textarea', array('label' => 'Mensaje'));
    }

    public function getName()
    {
        return 'contact';
    }
}