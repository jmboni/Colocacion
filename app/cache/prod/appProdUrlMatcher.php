<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/trabajos')) {
            // trabajos
            if (rtrim($pathinfo, '/') === '/trabajos') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'trabajos');
                }

                return array (  '_controller' => 'Dsg\\agenciaBundle\\Controller\\TrabajosController::indexAction',  '_route' => 'trabajos',);
            }

            // trabajos_show
            if (preg_match('#^/trabajos/(?P<compania>[^/]++)/(?P<localidad>[^/]++)/(?P<id>[^/]++)/(?P<posicion>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'trabajos_show')), array (  '_controller' => 'Dsg\\agenciaBundle\\Controller\\TrabajosController::showAction',));
            }

            // trabajos_new
            if ($pathinfo === '/trabajos/new') {
                return array (  '_controller' => 'Dsg\\agenciaBundle\\Controller\\TrabajosController::newAction',  '_route' => 'trabajos_new',);
            }

            // trabajos_create
            if ($pathinfo === '/trabajos/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_trabajos_create;
                }

                return array (  '_controller' => 'Dsg\\agenciaBundle\\Controller\\TrabajosController::createAction',  '_route' => 'trabajos_create',);
            }
            not_trabajos_create:

            // trabajos_edit
            if (preg_match('#^/trabajos/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'trabajos_edit')), array (  '_controller' => 'Dsg\\agenciaBundle\\Controller\\TrabajosController::editAction',));
            }

            // trabajos_update
            if (preg_match('#^/trabajos/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_trabajos_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'trabajos_update')), array (  '_controller' => 'Dsg\\agenciaBundle\\Controller\\TrabajosController::updateAction',));
            }
            not_trabajos_update:

            // trabajos_delete
            if (preg_match('#^/trabajos/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_trabajos_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'trabajos_delete')), array (  '_controller' => 'Dsg\\agenciaBundle\\Controller\\TrabajosController::deleteAction',));
            }
            not_trabajos_delete:

        }

        // dsgagencia_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'dsgagencia_homepage')), array (  '_controller' => 'Dsg\\agenciaBundle\\Controller\\TrabajosController::indexAction',));
        }

        // dsgagencia_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'dsgagencia_index');
            }

            return array (  '_controller' => 'Dsg\\agenciaBundle\\Controller\\TrabajosController::indexAction',  '_route' => 'dsgagencia_index',);
        }

        // dsgagencia_categoria
        if (0 === strpos($pathinfo, '/categoria') && preg_match('#^/categoria/(?P<slug>[^/]++)(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'dsgagencia_categoria')), array (  '_controller' => 'Dsg\\agenciaBundle\\Controller\\CategoriaController::showAction',  'page' => 1,));
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
