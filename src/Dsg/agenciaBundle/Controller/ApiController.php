<?php
 
namespace Dsg\agenciaBundle\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Dsg\agenciaBundle\Entity\Afiliados;
use Dsg\agenciaBundle\Entity\Trabajos;
use Dsg\agenciaBundle\Repository\AfiliadosRepository;
 
class ApiController extends Controller
{
    public function listAction(Request $request, $token)
    {
        $em = $this->getDoctrine()->getManager();
 
        $trabajos = array();
 
        $rep = $em->getRepository('DsgagenciaBundle:Afiliados');
        
        $afiliado = $rep->getForToken($token);
 
        if(!$afiliado) { 
            throw $this->createNotFoundException('!La cuenta de este asociado no se encuentra!');
        }
 
        $rep = $em->getRepository('DsgagenciaBundle:Trabajos');
        
        $trabajos_activos = $rep->getTrabajosActivos(null, null, null, $afiliado->getId());
 
        
        foreach ($trabajos_activos as $oferta) {
            $trabajos[$this->get('router')->generate('trabajos_show', array('compania' => $oferta->getCompaniaSlug(), 'localidad' => $oferta->getLocalidadSlug(), 'id' => $oferta->getId(), 'posicion' => $oferta->getPosicionSlug()), true)] = $oferta->asArray($request->getHost());
        }
        
 
        $format = $request->getRequestFormat();
        $jsonData = json_encode($trabajos);
        
       if ($format == "json") {
            $headers = array('Content-Type' => 'application/json'); 
            $response = new Response($jsonData, 200, $headers);
 
            return $response;
        }
       
        return $this->render('DsgagenciaBundle:Api:trabajos.' . $format . '.twig', array('trabajos' => $trabajos));  
    }
}