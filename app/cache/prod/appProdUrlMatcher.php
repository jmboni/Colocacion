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
            if (preg_match('#^/trabajos/(?P<compania>[^/]++)/(?P<localidad>[^/]++)/(?P<id>\\d+)/(?P<posicion>[^/]++)$#s', $pathinfo, $matches)) {
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
            if (preg_match('#^/trabajos/(?P<token>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'trabajos_edit')), array (  '_controller' => 'Dsg\\agenciaBundle\\Controller\\TrabajosController::editAction',));
            }

            // trabajos_update
            if (preg_match('#^/trabajos/(?P<token>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_trabajos_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'trabajos_update')), array (  '_controller' => 'Dsg\\agenciaBundle\\Controller\\TrabajosController::updateAction',));
            }
            not_trabajos_update:

            // trabajos_preview
            if (preg_match('#^/trabajos/(?P<compania>[^/]++)/(?P<localidad>[^/]++)/(?P<token>\\w+)/(?P<posicion>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'trabajos_preview')), array (  '_controller' => 'Dsg\\agenciaBundle\\Controller\\TrabajosController::previewAction',));
            }

            // trabajos_delete
            if (preg_match('#^/trabajos/(?P<token>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_trabajos_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'trabajos_delete')), array (  '_controller' => 'Dsg\\agenciaBundle\\Controller\\TrabajosController::deleteAction',));
            }
            not_trabajos_delete:

            // trabajos_publish
            if (preg_match('#^/trabajos/(?P<token>[^/]++)/publish$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_trabajos_publish;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'trabajos_publish')), array (  '_controller' => 'Dsg\\agenciaBundle\\Controller\\TrabajosController::publishAction',));
            }
            not_trabajos_publish:

            // trabajos_extend
            if (preg_match('#^/trabajos/(?P<token>[^/]++)/extend$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_trabajos_extend;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'trabajos_extend')), array (  '_controller' => 'Dsg\\agenciaBundle\\Controller\\trabajosController::extendAction',));
            }
            not_trabajos_extend:

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

        if (0 === strpos($pathinfo, '/admin')) {
            // sonata_admin_redirect
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_admin_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
            }

            // sonata_admin_dashboard
            if ($pathinfo === '/admin/dashboard') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            if (0 === strpos($pathinfo, '/admin/core')) {
                // sonata_admin_retrieve_form_element
                if ($pathinfo === '/admin/core/get-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                }

                // sonata_admin_append_form_element
                if ($pathinfo === '/admin/core/append-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                }

                // sonata_admin_short_object_information
                if (0 === strpos($pathinfo, '/admin/core/get-short-object-description') && preg_match('#^/admin/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',));
                }

                // sonata_admin_set_object_field_value
                if ($pathinfo === '/admin/core/set-object-field-value') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                }

            }

            // sonata_admin_search
            if ($pathinfo === '/admin/search') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_route' => 'sonata_admin_search',);
            }

            // sonata_admin_retrieve_autocomplete_items
            if ($pathinfo === '/admin/core/get-autocomplete-items') {
                return array (  '_controller' => 'sonata.admin.controller.admin:retrieveAutocompleteItemsAction',  '_route' => 'sonata_admin_retrieve_autocomplete_items',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
