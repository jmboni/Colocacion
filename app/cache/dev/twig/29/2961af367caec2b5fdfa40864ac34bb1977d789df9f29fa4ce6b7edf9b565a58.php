<?php

/* SonataAdminBundle:CRUD:list_inner_row.html.twig */
class __TwigTemplate_ba250e8526e4c056e91530c24d765527442dae040d4569392374598797679a36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list_inner_row.html.twig", "SonataAdminBundle:CRUD:list_inner_row.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_inner_row.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1d82fc53b864627284fa30e931832366b69bd3105505aa047116dcfd2d72edd7 = $this->env->getExtension("native_profiler");
        $__internal_1d82fc53b864627284fa30e931832366b69bd3105505aa047116dcfd2d72edd7->enter($__internal_1d82fc53b864627284fa30e931832366b69bd3105505aa047116dcfd2d72edd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_inner_row.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d82fc53b864627284fa30e931832366b69bd3105505aa047116dcfd2d72edd7->leave($__internal_1d82fc53b864627284fa30e931832366b69bd3105505aa047116dcfd2d72edd7_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_inner_row.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% extends 'SonataAdminBundle:CRUD:base_list_inner_row.html.twig' %}*/
/* */
