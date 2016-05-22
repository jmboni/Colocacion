<?php

namespace Dsg\agenciaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use FOS\ElasticaBundle\Finder\TransformedFinder;
use Symfony\Component\Templating\EngineInterface;

use Dsg\agenciaBundle\Entity\Trabajos;
use Dsg\agenciaBundle\Entity\Categoria;
use Dsg\agenciaBundle\Form\TrabajosType;


/**
 * Trabajos controller.
 *
 */
class TrabajosController extends Controller
{

    /**
     * Lists all Trabajos entities.
     *
     */

    public function indexAction(Request $request)
    {
        
        
       $em = $this->getDoctrine()->getManager();
       $categorias = $em->getRepository('DsgagenciaBundle:Categoria')->getTrabajosCategorias();
         
       foreach($categorias as $categoria) {
            $categoria->setTrabajosActivos($em->getRepository('DsgagenciaBundle:Trabajos')->getTrabajosActivos($categoria->getId(),$this->container->getParameter('max_trabajos_indexpag')));
            
            $categoria->setMasTrabajos(
                $em->getRepository('DsgagenciaBundle:Trabajos')
                   ->countTrabajosActivos($categoria->getId()) -  $this->container->getParameter('max_trabajos_indexpag')
            );
        }
        
        
        $format = $this->getRequest()->getRequestFormat();
        
        return $this->render('DsgagenciaBundle:Trabajos:index.'.$format.'.twig', array(
            'categorias' => $categorias,
        ));

    }
   
    
    public function buscarAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $query = $this->getRequest()->get('query');
 
        if(!$query) {
            if(!$request->isXmlHttpRequest()) {
                return $this->redirect($this->generateUrl('trabajos'));
            } else {
                return new Response('No hay resultados para su búsqueda');
            }
        }
 
        $trabajos = $em->getRepository('DsgagenciaBundle:Trabajos')->getForLuceneQuery($query);
        
        if($request->isXmlHttpRequest()) {
            return $this->render('DsgagenciaBundle::listar.html.twig', array('trabajos' => $trabajos));
        }
        
        return $this->render('DsgagenciaBundle:Trabajos:buscar.html.twig', array('trabajos' => $trabajos));
    }
    
     
     /**
     * Displays a form to create a new Trabajos entity.
     *
     */
     
    public function newAction()
    {
        $entity = new Trabajos();
        $entity->setTipo('Tiempo Completo');
        $form   = $this->createForm(new TrabajosType(), $entity);

        return $this->render('DsgagenciaBundle:Trabajos:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }
    

    /**
     * Creates a form to create a Trabajos entity.
     *
     * @param Trabajos $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Trabajos $entity)
    {
        $form = $this->createForm(new TrabajosType(), $entity, array(
            'action' => $this->generateUrl('trabajos_create'),
            'method' => 'POST'
        ));

        $form->add('submit', 'submit', array('label' => 'Crear'));

        return $form;
    }
    
    
    
    /**
     * Creates a new Trabajos entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Trabajos();
        $form = $this->createForm(new TrabajosType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            
            
            $em->persist($entity);
            $em->flush();
            
            $this->addFlash('Mensaje', 'La oferta ha sido creada con exito');

            return $this->redirect($this->generateUrl('trabajos_preview', array(
                'compania' => $entity->getCompaniaSlug(),
                'localidad' => $entity->getLocalidadSlug(),
                'token' => $entity->getToken(),
                'posicion' => $entity->getPosicionSlug()
            )));
        }

        return $this->render('DsgagenciaBundle:Trabajos:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }
   
    
    
    

    /**
     * Finds and displays a Trabajos entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DsgagenciaBundle:Trabajos')->getTrabajoActivo($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Trabajos entity.');
        }
        
        
        $session = $this->getRequest()->getSession();
 
        // fetch jobs already stored in the job history
        $trabajos = $session->get('historial_trabajos', array());
     
        // store the job as an array so we can put it in the session and avoid entity serialize errors
        $trabajo = array('id' => $entity->getId(), 'posicion' =>$entity->getPosicion(), 'compania' => $entity->getCompania(), 'companiaslug' => $entity->getCompaniaSlug(), 'localidadslug' => $entity->getLocalidadSlug(), 'posicionslug' => $entity->getPosicionSlug());
     
        if (!in_array($trabajo, $trabajos)) {
            // add the current job at the beginning of the array
            array_unshift($trabajos, $trabajo);
     
            // store the new job history back into the session
            $session->set('historial_trabajos', array_slice($trabajos, 0, 3));
        }


        $deleteForm = $this->createDeleteForm($id);

        return $this->render('DsgagenciaBundle:Trabajos:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }
    
    

    /**
     * Displays a form to edit an existing Trabajos entity.
     *
     */
    public function editAction($token)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DsgagenciaBundle:Trabajos')->findOneByToken($token);

        if (!$entity) {
            throw $this->createNotFoundException('No se ha encontrado ningun valor asociado en la entidad.');
        }
        
        if ($entity->getActivado()) {
            throw $this->createNotFoundException('El trabajo está activado NO puede ser editado');
        }

        $editForm = $this->createForm(new TrabajosType(), $entity);
        $deleteForm = $this->createDeleteForm($token);

        return $this->render('DsgagenciaBundle:Trabajos:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Trabajos entity.
    *
    * @param Trabajos $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Trabajos $entity)
    {
        $form = $this->createForm(new TrabajosType(), $entity, array(
            'action' => $this->generateUrl('trabajos_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Actualizar'));

        return $form;
    }
    
    
    /**
     * Edits an existing Trabajos entity.
     *
     */
    public function updateAction(Request $request, $token)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DsgagenciaBundle:Trabajos')->findOneByToken($token);

        if (!$entity) {
            throw $this->createNotFoundException('No se han encontrado datos asociados a esta oferta.');
        }

        $deleteForm = $this->createDeleteForm($token);
        $entity->setActualizadoValue();
        $editForm = $this->createForm(new TrabajosType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('trabajos_preview', array(
                'compania' => $entity->getCompaniaSlug(),
                'localidad' => $entity->getLocalidadSlug(),
                'token' => $entity->getToken(), 
                'posicion' => $entity->getPosicionSlug()
            )));
        }

        return $this->render('DsgagenciaBundle:Trabajos:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Trabajos entity.
     *
     */
    public function deleteAction(Request $request, $token)
    {
        $form = $this->createDeleteForm($token);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('DsgagenciaBundle:Trabajos')->findOneByToken($token);

            if (!$entity) {
                throw $this->createNotFoundException('Trabajo no borrado, no se encuentra en la entidad.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('trabajos'));
    }

    /**
     * Creates a form to delete a Trabajos entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($token)
    {
        return $this->createFormBuilder(array('token' => $token))
            ->add('token', 'hidden')
            ->getForm()
        ;
    }
    
    public function previewAction($token)
    {
        $em = $this->getDoctrine()->getManager();
 
        $entity = $em->getRepository('DsgagenciaBundle:Trabajos')->findOneByToken($token);
 
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Job entity.');
        }
 
        $deleteForm = $this->createDeleteForm($entity->getId());
        $publishForm = $this->createPublishForm($entity->getToken());
        $extendForm = $this->createExtendForm($entity->getToken());
 
        return $this->render('DsgagenciaBundle:Trabajos:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
            'publish_form' => $publishForm->createView(),
            'extend_form' => $extendForm->createView(),
        ));
    }
    
    public function publishAction(Request $request, $token)
    {
        $form = $this->createPublishForm($token);
        $form->bind($request);
     
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('DsgagenciaBundle:Trabajos')->findOneByToken($token);
     
            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Job entity.');
            }
     
            $entity->publish();
            $em->persist($entity);
            $em->flush();
     
            $this->get('session')->getFlashBag('notice', 'Your job is now online for 30 days.');
        }
     
        return $this->redirect($this->generateUrl('trabajos_preview', array(
            'compania' => $entity->getCompaniaSlug(),
            'localidad' => $entity->getLocalidadSlug(),
            'token' => $entity->getToken(),
            'posicion' => $entity->getPosicionSlug()
        )));
    }
     
    private function createPublishForm($token)
    {
        return $this->createFormBuilder(array('token' => $token))
            ->add('token', 'hidden')
            ->getForm()
        ;
    }
    
    
    public function extendAction(Request $request, $token)
    {
        $form = $this->createExtendForm($token);
        $request = $this->getRequest();
     
        $form->bind($request);
     
        if($form->isValid()) {
            $em=$this->getDoctrine()->getManager();
            $entity = $em->getRepository('DsgagenciaBundle:Trabajos')->findOneByToken($token);
     
            if(!$entity){
                throw $this->createNotFoundException('No se ha podido encontrar la entidad Trabajos.');
            }
     
            if(!$entity->extend()){
                throw $this->createNodFoundException('No se ha podido ampliar la oferta.');
            }
     
            $em->persist($entity);
            $em->flush();
     
            $this->get('session')->getFlashBag()->add('notice', sprintf('Su oferta ha sido ampliada hasta %s', $entity->getExpiresAt()->format('m/d/Y')));
        }
     
        return $this->redirect($this->generateUrl('trabajos_preview', array(
            'compania' => $entity->getCompaniaSlug(),
            'localidad' => $entity->getLocalidadSlug(),
            'token' => $entity->getToken(),
            'posicion' => $entity->getPosicioSlug()
        )));
    }
     
    private function createExtendForm($token)
    {
        return $this->createFormBuilder(array('token' => $token))
            ->add('token', 'hidden')
            ->getForm();
    }
}