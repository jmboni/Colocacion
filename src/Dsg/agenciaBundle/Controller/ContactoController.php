<?php

# Dsg\agenciaBundle\contactController
namespace Dsg\agenciaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;

// Importa el nuevo espacio de nombres
use Dsg\agenciaBundle\Entity\Contacto;
use Dsg\agenciaBundle\Form\ContactType;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


/**
 * Trabajos controller.
 *
 */
class ContactoController extends Controller {

    public function contactoAction()
    {
        $contacto = new Contacto();
        $form = $this->createForm(new ContactType(), $contacto);
        
        $breadcrumbs = $this->get("white_october_breadcrumbs");
        $breadcrumbs->addItem("Inicio", $this->get("router")->generate("dsgagencia_index"));
        $breadcrumbs->addItem("Contacto");

        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
        $form->bind($request);

        if ($form->isValid()) {
            $message = \Swift_Message::newInstance()
            ->setSubject('Contact enquiry from symblog')
            ->setFrom('enquiries@symblog.co.uk')
            ->setTo($this->container->getParameter('dsg_agencia.emails.contact_email'))
            ->setBody($this->renderView('DsgagenciaBundle:Contact:contactEmail.txt.twig', array('contacto' => $contacto)));
            $this->get('mailer')->send($message);
            
            $session = new Session();
            
            $session->getFlashBag()->add('notificacion', 'Su consulta ha sido enviada . ¡Gracias!');

        // Redirige - Esto es importante para prevenir que el usuario
        // reenvíe el formulario si actualiza la página
            return $this->redirect($this->generateUrl('dsgagencia_contacto'));
        }
    }

        return $this->render('DsgagenciaBundle:Contact:contact.html.twig', array(
            'form' => $form->createView()
        ));
            
    }
}