<?php
namespace Dsg\agenciaBundle\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Dsg\agenciaBundle\Entity\Afiliados;
use Dsg\agenciaBundle\Form\AfiliadosType;
use Symfony\Component\HttpFoundation\Request;
use Dsg\agenciaBundle\Entity\Categoria;
 
class AfiliadosController extends Controller
{
    public function newAction()
    {
        $entity = new Afiliados();
        $form = $this->createForm(new AfiliadosType(), $entity);
 
        return $this->render('DsgagenciaBundle:Afiliados:afiliados_new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }
    
    
    public function createAction(Request $request)
    {
        $afiliado = new Afiliados();
        $form = $this->createForm(new AfiliadosType(), $afiliado);
        $form->bind($request);
        $em = $this->getDoctrine()->getManager();
        
        
        if ($form->isValid()) {
 
            $formData = $request->get('afiliados');
            $afiliado->setUrl($formData['url']);
            $afiliado->setEmail($formData['email']);
            $afiliado->setActivado(false);
 
            $em->persist($afiliado);
            $em->flush();
 
            return $this->redirect($this->generateUrl('afiliados_sinActivar'));
        }
 
        return $this->render('DsgagenciaBundle:Afiliados:afiliados_new.html.twig', array(
            'entity' => $afiliado,
            'form'   => $form->createView(),
        ));
    }
    
    public function sinActivarAction()
    {
        return $this->render('DsgagenciaBundle:Afiliados:wait.html.twig');
    }
}