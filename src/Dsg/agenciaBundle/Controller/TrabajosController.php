<?php

namespace Dsg\agenciaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Dsg\agenciaBundle\Entity\Trabajos;
use Dsg\agenciaBundle\Form\TrabajosType;

use Doctrine\ORM\Query;

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

    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        
        $em = $this->getDoctrine()->getEntityManager();
        
        $categorias = $em->getRepository('DsgagenciaBundle:Categoria')->getTrabajosCategorias();
        
        foreach($categorias as $categoria) {
            $categoria->setTrabajosActivos($em->getRepository('DsgagenciaBundle:Trabajos')->getTrabajosActivos($categoria->getId(),$this->container->getParameter('max_trabajos_indexpag')));
            
            $categoria->setMasTrabajos(
                $em->getRepository('DsgagenciaBundle:Trabajos')
                   ->countTrabajosActivos($categoria->getId()) -  $this->container->getParameter('max_trabajos_indexpag')
            );
        }

        return $this->render('DsgagenciaBundle:Trabajos:index.html.twig', array(
            'categorias' => $categorias,
        ));
    }
    /**
     * Creates a new Trabajos entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Trabajos();
        $form = $this->createCreateForm(new TrabajosType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('trabajos_show', array(
                'compania' => $entity->getCompaniaSlug(),
                'localidad' => $entity->getLocalidadSlug(),
                'id' => $entity->getId(),
                'posicion' => $entity->getPosicionSlug()
            )));
        }

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
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Trabajos entity.
     *
     */
    public function newAction()
    {
        $entity = new Trabajos();
        $form   = $this->createCreateForm($entity);

        return $this->render('DsgagenciaBundle:Trabajos:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
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
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DsgagenciaBundle:Trabajos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Trabajos entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

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

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Trabajos entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DsgagenciaBundle:Trabajos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Trabajos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('trabajos_edit', array('id' => $id)));
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
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('DsgagenciaBundle:Trabajos')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Trabajos entity.');
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
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('trabajos_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
