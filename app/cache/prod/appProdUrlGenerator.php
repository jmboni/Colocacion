<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
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
        'trabajos' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Dsg\\agenciaBundle\\Controller\\TrabajosController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/trabajos/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trabajos_show' => array (  0 =>   array (    0 => 'compania',    1 => 'localidad',    2 => 'id',    3 => 'posicion',  ),  1 =>   array (    '_controller' => 'Dsg\\agenciaBundle\\Controller\\TrabajosController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'posicion',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'localidad',    ),    3 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'compania',    ),    4 =>     array (      0 => 'text',      1 => '/trabajos',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trabajos_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Dsg\\agenciaBundle\\Controller\\TrabajosController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/trabajos/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trabajos_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Dsg\\agenciaBundle\\Controller\\TrabajosController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/trabajos/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trabajos_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Dsg\\agenciaBundle\\Controller\\TrabajosController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/trabajos',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trabajos_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Dsg\\agenciaBundle\\Controller\\TrabajosController::updateAction',  ),  2 =>   array (    '_method' => 'POST|PUT',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/trabajos',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trabajos_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Dsg\\agenciaBundle\\Controller\\TrabajosController::deleteAction',  ),  2 =>   array (    '_method' => 'POST|DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/trabajos',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dsgagencia_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Dsg\\agenciaBundle\\Controller\\TrabajosController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dsgagencia_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Dsg\\agenciaBundle\\Controller\\TrabajosController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dsgagencia_categoria' => array (  0 =>   array (    0 => 'slug',    1 => 'page',  ),  1 =>   array (    '_controller' => 'Dsg\\agenciaBundle\\Controller\\CategoriaController::showAction',    'page' => 1,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'page',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'slug',    ),    2 =>     array (      0 => 'text',      1 => '/categoria',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
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
