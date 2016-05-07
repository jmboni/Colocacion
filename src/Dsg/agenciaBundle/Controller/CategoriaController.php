<?php
 
namespace Dsg\agenciaBundle\Controller;
  
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Dsg\agenciaBundle\Entity\Categoria;
  
/**
* Category controller
*
*/
class CategoriaController extends Controller
{
 
    public function showAction($slug, $page)
    {
        $em = $this->getDoctrine()->getManager();
     
        $categoria = $em->getRepository('DsgagenciaBundle:Categoria')->findOneBySlug($slug);
     
        if (!$categoria) {
            throw $this->createNotFoundException('No se puede encontrar la categoria solicitada.');
        }
        
        $total_trabajos = $em->getRepository('DsgagenciaBundle:Trabajos')->countTrabajosActivos($categoria->getId());
        $trabajos_por_pagina = $this->container->getParameter('max_trabajos_categoriapag');
        $last_page = ceil($total_trabajos / $trabajos_por_pagina);
        $previous_page = $page > 1 ? $page - 1 : 1;
        $next_page = $page < $last_page ? $page + 1 : $last_page;
        $categoria->setTrabajosActivos($em->getRepository('DsgagenciaBundle:Trabajos')->getTrabajosActivos($categoria->getId(),$trabajos_por_pagina, ($page - 1) * $trabajos_por_pagina));
 
        return $this->render('DsgagenciaBundle:Categoria:show.html.twig', array(
        'categoria' => $categoria,
        'last_page' => $last_page,
        'previous_page' => $previous_page,
        'current_page' => $page,
        'next_page' => $next_page,
        'total_trabajos' => $total_trabajos
        ));
    }
}