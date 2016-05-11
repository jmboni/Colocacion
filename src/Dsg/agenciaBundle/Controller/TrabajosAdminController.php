<?php
 
namespace Dsg\agenciaBundle\Controller;
 
use Sonata\AdminBundle\Controller\CRUDController as Controller;
 
class TrabajosAdminController extends Controller
{
    public function batchActionExtend(ProxyQueryInterface $selectedModelQuery)
    {
        if ($this->admin->isGranted('EDIT') === false || $this->admin->isGranted('DELETE') === false) {
            throw new AccessDeniedException();
        }
 
        $modelManager = $this->admin->getModelManager();
 
        $selectedModels = $selectedModelQuery->execute();
 
        try {
            foreach ($selectedModels as $selectedModel) {
                $selectedModel->extend();
                $modelManager->update($selectedModel);
            }
        } catch (\Exception $e) {
            $this->get('session')->getFlashBag()->add('sonata_flash_error', $e->getMessage());
 
            return new RedirectResponse($this->admin->generateUrl('list',$this->admin->getFilterParameters()));
        }
 
        $this->get('session')->getFlashBag()->add('sonata_flash_success',  sprintf('El trabajo seleccionado ha sido activado y ampliado %s.', date('m/d/Y', time() + 86400 * 30)));
 
        return new RedirectResponse($this->admin->generateUrl('list',$this->admin->getFilterParameters()));
    }
    
    
    public function batchActionDeleteNeverActivatedIsRelevant()
    {
        return true;
    }
     
    public function batchActionDeleteNeverActivated()
    {
        if ($this->admin->isGranted('EDIT') === false || $this->admin->isGranted('DELETE') === false) {
            throw new AccessDeniedException();
        }
     
        $em = $this->getDoctrine()->getManager();
        $nb = $em->getRepository('DsgagenciaBundle:Trabajos')->cleanup(60);
     
        if ($nb) {
            $this->get('session')->getFlashBag()->add('sonata_flash_success',  sprintf('%d las ofertas que nunca han sido activadas han sido borradas con exito.', $nb));
        } else {
            $this->get('session')->getFlashBag()->add('sonata_flash_info',  'Ofertas no borradas.');
        }
     
        return new RedirectResponse($this->admin->generateUrl('list',$this->admin->getFilterParameters()));
    }
}