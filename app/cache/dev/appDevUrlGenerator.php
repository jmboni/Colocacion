<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_purge' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:purgeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/purge',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_configurator_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_configurator_step' => array (  0 =>   array (    0 => 'index',  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'index',    ),    1 =>     array (      0 => 'text',      1 => '/_configurator/step',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_configurator_final' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/final',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_twig_error_test' => array (  0 =>   array (    0 => 'code',    1 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',  ),  2 =>   array (    'code' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trabajos' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Dsg\\agenciaBundle\\Controller\\TrabajosController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/trabajos/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trabajos_show' => array (  0 =>   array (    0 => 'compania',    1 => 'localidad',    2 => 'id',    3 => 'posicion',  ),  1 =>   array (    '_controller' => 'Dsg\\agenciaBundle\\Controller\\TrabajosController::showAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'posicion',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'localidad',    ),    3 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'compania',    ),    4 =>     array (      0 => 'text',      1 => '/trabajos',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trabajos_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Dsg\\agenciaBundle\\Controller\\TrabajosController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/trabajos/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trabajos_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Dsg\\agenciaBundle\\Controller\\TrabajosController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/trabajos/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trabajos_edit' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'Dsg\\agenciaBundle\\Controller\\TrabajosController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/trabajos',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trabajos_update' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'Dsg\\agenciaBundle\\Controller\\TrabajosController::updateAction',  ),  2 =>   array (    '_method' => 'POST|PUT',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/trabajos',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trabajos_preview' => array (  0 =>   array (    0 => 'compania',    1 => 'localidad',    2 => 'token',    3 => 'posicion',  ),  1 =>   array (    '_controller' => 'Dsg\\agenciaBundle\\Controller\\TrabajosController::previewAction',  ),  2 =>   array (    'token' => '\\w+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'posicion',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\w+',      3 => 'token',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'localidad',    ),    3 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'compania',    ),    4 =>     array (      0 => 'text',      1 => '/trabajos',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trabajos_delete' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'Dsg\\agenciaBundle\\Controller\\TrabajosController::deleteAction',  ),  2 =>   array (    '_method' => 'POST|DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/trabajos',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trabajos_publish' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'Dsg\\agenciaBundle\\Controller\\TrabajosController::publishAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/publish',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/trabajos',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trabajos_extend' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'Dsg\\agenciaBundle\\Controller\\trabajosController::extendAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/extend',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/trabajos',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dsgagencia_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Dsg\\agenciaBundle\\Controller\\TrabajosController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dsgagencia_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Dsg\\agenciaBundle\\Controller\\TrabajosController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dsgagencia_categoria' => array (  0 =>   array (    0 => 'slug',    1 => 'page',  ),  1 =>   array (    '_controller' => 'Dsg\\agenciaBundle\\Controller\\CategoriaController::showAction',    'page' => 1,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'page',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'slug',    ),    2 =>     array (      0 => 'text',      1 => '/categoria',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Dsg\\agenciaBundle\\Controller\\DefaultController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login_check' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'DsgagenciaBundle_api' => array (  0 =>   array (    0 => 'token',    1 => '_format',  ),  1 =>   array (    '_controller' => 'Dsg\\agenciaBundle\\Controller\\ApiController::listAction',  ),  2 =>   array (    '_format' => 'xml|json|yaml',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'xml|json|yaml',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/trabajos',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    3 =>     array (      0 => 'text',      1 => '/api',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sonata_admin_redirect' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',    'route' => 'sonata_admin_dashboard',    'permanent' => 'true',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sonata_admin_dashboard' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/dashboard',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sonata_admin_retrieve_form_element' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/core/get-form-field-element',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sonata_admin_append_form_element' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/core/append-form-field-element',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sonata_admin_short_object_information' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',    '_format' => 'html',  ),  2 =>   array (    '_format' => 'html|json',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'html|json',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/admin/core/get-short-object-description',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sonata_admin_set_object_field_value' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/core/set-object-field-value',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sonata_admin_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sonata_admin_retrieve_autocomplete_items' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'sonata.admin.controller.admin:retrieveAutocompleteItemsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/core/get-autocomplete-items',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_dsg_agencia_categoria_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Dsg\\agenciaBundle\\Controller\\CategoriaAdminController::listAction',    '_sonata_admin' => 'dsg.agencia.admin.categoria',    '_sonata_name' => 'admin_dsg_agencia_categoria_list',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/dsg/agencia/categoria/list',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_dsg_agencia_categoria_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Dsg\\agenciaBundle\\Controller\\CategoriaAdminController::createAction',    '_sonata_admin' => 'dsg.agencia.admin.categoria',    '_sonata_name' => 'admin_dsg_agencia_categoria_create',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/dsg/agencia/categoria/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_dsg_agencia_categoria_batch' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Dsg\\agenciaBundle\\Controller\\CategoriaAdminController::batchAction',    '_sonata_admin' => 'dsg.agencia.admin.categoria',    '_sonata_name' => 'admin_dsg_agencia_categoria_batch',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/dsg/agencia/categoria/batch',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_dsg_agencia_categoria_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Dsg\\agenciaBundle\\Controller\\CategoriaAdminController::editAction',    '_sonata_admin' => 'dsg.agencia.admin.categoria',    '_sonata_name' => 'admin_dsg_agencia_categoria_edit',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/dsg/agencia/categoria',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_dsg_agencia_categoria_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Dsg\\agenciaBundle\\Controller\\CategoriaAdminController::deleteAction',    '_sonata_admin' => 'dsg.agencia.admin.categoria',    '_sonata_name' => 'admin_dsg_agencia_categoria_delete',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/dsg/agencia/categoria',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_dsg_agencia_categoria_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Dsg\\agenciaBundle\\Controller\\CategoriaAdminController::showAction',    '_sonata_admin' => 'dsg.agencia.admin.categoria',    '_sonata_name' => 'admin_dsg_agencia_categoria_show',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/dsg/agencia/categoria',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_dsg_agencia_categoria_export' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Dsg\\agenciaBundle\\Controller\\CategoriaAdminController::exportAction',    '_sonata_admin' => 'dsg.agencia.admin.categoria',    '_sonata_name' => 'admin_dsg_agencia_categoria_export',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/dsg/agencia/categoria/export',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_dsg_agencia_trabajos_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Dsg\\agenciaBundle\\Controller\\TrabajosAdminController::listAction',    '_sonata_admin' => 'dsg.agencia.admin.trabajos',    '_sonata_name' => 'admin_dsg_agencia_trabajos_list',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/dsg/agencia/trabajos/list',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_dsg_agencia_trabajos_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Dsg\\agenciaBundle\\Controller\\TrabajosAdminController::createAction',    '_sonata_admin' => 'dsg.agencia.admin.trabajos',    '_sonata_name' => 'admin_dsg_agencia_trabajos_create',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/dsg/agencia/trabajos/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_dsg_agencia_trabajos_batch' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Dsg\\agenciaBundle\\Controller\\TrabajosAdminController::batchAction',    '_sonata_admin' => 'dsg.agencia.admin.trabajos',    '_sonata_name' => 'admin_dsg_agencia_trabajos_batch',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/dsg/agencia/trabajos/batch',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_dsg_agencia_trabajos_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Dsg\\agenciaBundle\\Controller\\TrabajosAdminController::editAction',    '_sonata_admin' => 'dsg.agencia.admin.trabajos',    '_sonata_name' => 'admin_dsg_agencia_trabajos_edit',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/dsg/agencia/trabajos',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_dsg_agencia_trabajos_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Dsg\\agenciaBundle\\Controller\\TrabajosAdminController::deleteAction',    '_sonata_admin' => 'dsg.agencia.admin.trabajos',    '_sonata_name' => 'admin_dsg_agencia_trabajos_delete',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/dsg/agencia/trabajos',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_dsg_agencia_trabajos_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Dsg\\agenciaBundle\\Controller\\TrabajosAdminController::showAction',    '_sonata_admin' => 'dsg.agencia.admin.trabajos',    '_sonata_name' => 'admin_dsg_agencia_trabajos_show',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/dsg/agencia/trabajos',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_dsg_agencia_trabajos_export' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Dsg\\agenciaBundle\\Controller\\TrabajosAdminController::exportAction',    '_sonata_admin' => 'dsg.agencia.admin.trabajos',    '_sonata_name' => 'admin_dsg_agencia_trabajos_export',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/dsg/agencia/trabajos/export',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
