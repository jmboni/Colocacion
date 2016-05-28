<?php
 
namespace Dsg\agenciaBundle\Controller;
 
use Sonata\AdminBundle\Controller\CRUDController as Controller;
use Sonata\DoctrineORMAdminBundle\Datagrid\ProxyQuery as ProxyQueryInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
 
class AfiliadosAdminController extends Controller
{
    
    public function batchActionActivate(ProxyQueryInterface $selectedModelQuery)
    {
        if($this->admin->isGranted('EDIT') === false || $this->admin->isGranted('DELETE') === false) {
            throw new AccessDeniedException();
        }
 
        $request = $this->get('request');
        $modelManager = $this->admin->getModelManager();
 
        $selectedModels = $selectedModelQuery->execute();
 
        try {
            foreach($selectedModels as $selectedModel) {
                $selectedModel->activate();
                $modelManager->update($selectedModel);
                
                $message = \Swift_Message::newInstance()
                    ->setSubject('Código de usuario')
                    ->setFrom('example@example.com')
                    ->setTo($selectedModel->getEmail())
                    ->setBody(
                        $this->renderView('DsgagenciaBundle:Afiliados:email.txt.twig', array('afiliados' => $selectedModel->getToken())))
                ;
 
                $this->get('mailer')->send($message);
            }
        } catch(\Exception $e) {
            $this->get('session')->setFlashBag()->add('sonata_flash_error', $e->getMessage());
 
            return new RedirectResponse($this->admin->generateUrl('list',$this->admin->getFilterParameters()));
        }
 
        $this->get('session')->getFlashBag()->add('sonata_flash_success',  sprintf('The selected accounts have been activated'));
 
        return new RedirectResponse($this->admin->generateUrl('list',$this->admin->getFilterParameters()));
    }
 
 
 
    public function batchActionDeactivate(ProxyQueryInterface $selectedModelQuery)
    {
        if($this->admin->isGranted('EDIT') === false || $this->admin->isGranted('DELETE') === false) {
            throw new AccessDeniedException();
        }
 
        $request = $this->get('request');
        $modelManager = $this->admin->getModelManager();
 
        $selectedModels = $selectedModelQuery->execute();
 
        try {
            foreach($selectedModels as $selectedModel) {
                $selectedModel->deactivate();
                $modelManager->update($selectedModel);
            }
        } catch(\Exception $e) {
            $this->get('session')->getFlashBag()->add('sonata_flash_error', $e->getMessage());
 
            return new RedirectResponse($this->admin->generateUrl('list',$this->admin->getFilterParameters()));
        }
 
        $this->get('session')->getFlashBag()->add('sonata_flash_success',  sprintf('The selected accounts have been deactivated'));
 
        return new RedirectResponse($this->admin->generateUrl('list',$this->admin->getFilterParameters()));
    }
    
    
     public function activateAction($id)
    {
        if($this->admin->isGranted('EDIT') === false) {
            throw new AccessDeniedException();
        }
 
        $em = $this->getDoctrine()->getManager();
        $afiliado = $em->getRepository('DsgagenciaBundle:Afiliados')->findOneById($id);
 
        try {
            $afiliado->setActivado(true);
            $em->flush();
            
            $message = \Swift_Message::newInstance()
                ->setSubject('Código de afiliado de la Agencia de Colocación DSG')
                ->setFrom('address@example.com')
                ->setTo($afiliado->getEmail())
                ->setBody(
                    $this->renderView('DsgagenciaBundle:Afiliados:email.txt.twig', array('afiliados' => $afiliado->getToken())))
            ;
  
            $this->get('mailer')->send($message);
            
        } catch(\Exception $e) {
            $this->get('session')->setFlashBag()->add('sonata_flash_error', $e->getMessage());
 
            return new RedirectResponse($this->admin->generateUrl('list', $this->admin->getFilterParameters()));
        }
 
        return new RedirectResponse($this->admin->generateUrl('list',$this->admin->getFilterParameters()));
 
    }
    
    
 
    public function deactivateAction($id)
    {
        if($this->admin->isGranted('EDIT') === false) {
            throw new AccessDeniedException();
        }
 
        $em = $this->getDoctrine()->getManager();
        $afiliado = $em->getRepository('DsgagenciaBundle:Afiliados')->findOneById($id);
 
        try {
            $afiliado->setActivado(false);
            $em->flush();
        } catch(\Exception $e) {
            $this->get('session')->getFlashBag()->add('sonata_flash_error', $e->getMessage());
 
            return new RedirectResponse($this->admin->generateUrl('list', $this->admin->getFilterParameters()));
        }
 
        return new RedirectResponse($this->admin->generateUrl('list',$this->admin->getFilterParameters()));
    }
}