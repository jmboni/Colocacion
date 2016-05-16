<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

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

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'Dsg\\agenciaBundle\\Controller\\DefaultController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'login_check');
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        if (0 === strpos($pathinfo, '/a')) {
            // DsgagenciaBundle_api
            if (0 === strpos($pathinfo, '/api') && preg_match('#^/api/(?P<token>[^/]++)/trabajos\\.(?P<_format>xml|json|yaml)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'DsgagenciaBundle_api')), array (  '_controller' => 'Dsg\\agenciaBundle\\Controller\\ApiController::listAction',));
            }

            if (0 === strpos($pathinfo, '/afiliados')) {
                // afiliados_new
                if ($pathinfo === '/afiliados/new') {
                    return array (  '_controller' => 'Dsg\\agenciaBundle\\Controller\\AfiliadosController::newAction',  '_route' => 'afiliados_new',);
                }

                // afiliados_create
                if ($pathinfo === '/afiliados/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_afiliados_create;
                    }

                    return array (  '_controller' => 'Dsg\\agenciaBundle\\Controller\\AfiliadosController::createAction',  '_route' => 'afiliados_create',);
                }
                not_afiliados_create:

                // afiliados_wait
                if ($pathinfo === '/afiliados/wait') {
                    return array (  '_controller' => 'Dsg\\agenciaBundle\\Controller\\AfiliadosController::waitAction',  '_route' => 'afiliados_wait',);
                }

            }

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

            if (0 === strpos($pathinfo, '/admin/dsg/agencia')) {
                if (0 === strpos($pathinfo, '/admin/dsg/agencia/categoria')) {
                    // admin_dsg_agencia_categoria_list
                    if ($pathinfo === '/admin/dsg/agencia/categoria/list') {
                        return array (  '_controller' => 'Dsg\\agenciaBundle\\Controller\\CategoriaAdminController::listAction',  '_sonata_admin' => 'dsg.agencia.admin.categoria',  '_sonata_name' => 'admin_dsg_agencia_categoria_list',  '_route' => 'admin_dsg_agencia_categoria_list',);
                    }

                    // admin_dsg_agencia_categoria_create
                    if ($pathinfo === '/admin/dsg/agencia/categoria/create') {
                        return array (  '_controller' => 'Dsg\\agenciaBundle\\Controller\\CategoriaAdminController::createAction',  '_sonata_admin' => 'dsg.agencia.admin.categoria',  '_sonata_name' => 'admin_dsg_agencia_categoria_create',  '_route' => 'admin_dsg_agencia_categoria_create',);
                    }

                    // admin_dsg_agencia_categoria_batch
                    if ($pathinfo === '/admin/dsg/agencia/categoria/batch') {
                        return array (  '_controller' => 'Dsg\\agenciaBundle\\Controller\\CategoriaAdminController::batchAction',  '_sonata_admin' => 'dsg.agencia.admin.categoria',  '_sonata_name' => 'admin_dsg_agencia_categoria_batch',  '_route' => 'admin_dsg_agencia_categoria_batch',);
                    }

                    // admin_dsg_agencia_categoria_edit
                    if (preg_match('#^/admin/dsg/agencia/categoria/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_dsg_agencia_categoria_edit')), array (  '_controller' => 'Dsg\\agenciaBundle\\Controller\\CategoriaAdminController::editAction',  '_sonata_admin' => 'dsg.agencia.admin.categoria',  '_sonata_name' => 'admin_dsg_agencia_categoria_edit',));
                    }

                    // admin_dsg_agencia_categoria_delete
                    if (preg_match('#^/admin/dsg/agencia/categoria/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_dsg_agencia_categoria_delete')), array (  '_controller' => 'Dsg\\agenciaBundle\\Controller\\CategoriaAdminController::deleteAction',  '_sonata_admin' => 'dsg.agencia.admin.categoria',  '_sonata_name' => 'admin_dsg_agencia_categoria_delete',));
                    }

                    // admin_dsg_agencia_categoria_show
                    if (preg_match('#^/admin/dsg/agencia/categoria/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_dsg_agencia_categoria_show')), array (  '_controller' => 'Dsg\\agenciaBundle\\Controller\\CategoriaAdminController::showAction',  '_sonata_admin' => 'dsg.agencia.admin.categoria',  '_sonata_name' => 'admin_dsg_agencia_categoria_show',));
                    }

                    // admin_dsg_agencia_categoria_export
                    if ($pathinfo === '/admin/dsg/agencia/categoria/export') {
                        return array (  '_controller' => 'Dsg\\agenciaBundle\\Controller\\CategoriaAdminController::exportAction',  '_sonata_admin' => 'dsg.agencia.admin.categoria',  '_sonata_name' => 'admin_dsg_agencia_categoria_export',  '_route' => 'admin_dsg_agencia_categoria_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/dsg/agencia/trabajos')) {
                    // admin_dsg_agencia_trabajos_list
                    if ($pathinfo === '/admin/dsg/agencia/trabajos/list') {
                        return array (  '_controller' => 'Dsg\\agenciaBundle\\Controller\\TrabajosAdminController::listAction',  '_sonata_admin' => 'dsg.agencia.admin.trabajos',  '_sonata_name' => 'admin_dsg_agencia_trabajos_list',  '_route' => 'admin_dsg_agencia_trabajos_list',);
                    }

                    // admin_dsg_agencia_trabajos_create
                    if ($pathinfo === '/admin/dsg/agencia/trabajos/create') {
                        return array (  '_controller' => 'Dsg\\agenciaBundle\\Controller\\TrabajosAdminController::createAction',  '_sonata_admin' => 'dsg.agencia.admin.trabajos',  '_sonata_name' => 'admin_dsg_agencia_trabajos_create',  '_route' => 'admin_dsg_agencia_trabajos_create',);
                    }

                    // admin_dsg_agencia_trabajos_batch
                    if ($pathinfo === '/admin/dsg/agencia/trabajos/batch') {
                        return array (  '_controller' => 'Dsg\\agenciaBundle\\Controller\\TrabajosAdminController::batchAction',  '_sonata_admin' => 'dsg.agencia.admin.trabajos',  '_sonata_name' => 'admin_dsg_agencia_trabajos_batch',  '_route' => 'admin_dsg_agencia_trabajos_batch',);
                    }

                    // admin_dsg_agencia_trabajos_edit
                    if (preg_match('#^/admin/dsg/agencia/trabajos/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_dsg_agencia_trabajos_edit')), array (  '_controller' => 'Dsg\\agenciaBundle\\Controller\\TrabajosAdminController::editAction',  '_sonata_admin' => 'dsg.agencia.admin.trabajos',  '_sonata_name' => 'admin_dsg_agencia_trabajos_edit',));
                    }

                    // admin_dsg_agencia_trabajos_delete
                    if (preg_match('#^/admin/dsg/agencia/trabajos/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_dsg_agencia_trabajos_delete')), array (  '_controller' => 'Dsg\\agenciaBundle\\Controller\\TrabajosAdminController::deleteAction',  '_sonata_admin' => 'dsg.agencia.admin.trabajos',  '_sonata_name' => 'admin_dsg_agencia_trabajos_delete',));
                    }

                    // admin_dsg_agencia_trabajos_show
                    if (preg_match('#^/admin/dsg/agencia/trabajos/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_dsg_agencia_trabajos_show')), array (  '_controller' => 'Dsg\\agenciaBundle\\Controller\\TrabajosAdminController::showAction',  '_sonata_admin' => 'dsg.agencia.admin.trabajos',  '_sonata_name' => 'admin_dsg_agencia_trabajos_show',));
                    }

                    // admin_dsg_agencia_trabajos_export
                    if ($pathinfo === '/admin/dsg/agencia/trabajos/export') {
                        return array (  '_controller' => 'Dsg\\agenciaBundle\\Controller\\TrabajosAdminController::exportAction',  '_sonata_admin' => 'dsg.agencia.admin.trabajos',  '_sonata_name' => 'admin_dsg_agencia_trabajos_export',  '_route' => 'admin_dsg_agencia_trabajos_export',);
                    }

                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
