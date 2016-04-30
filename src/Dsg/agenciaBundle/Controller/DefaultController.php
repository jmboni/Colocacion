<?php

namespace Dsg\agenciaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('DsgagenciaBundle:Default:index.html.twig', array('name' => $name));
    }
}
