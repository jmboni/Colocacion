<?php

/* SonataAdminBundle:CRUD:list_inner_row.html.twig */
class __TwigTemplate_8dc0d9bb6cce113326de9f463454a44699ffc2fb7a2b80b3c3eefd8ae108c2ea extends Twig_Template
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
        $__internal_d96a48fdc88fe169441dd9c4579c6cf6b806fde84d1499d8ff79c1b723fc7cb0 = $this->env->getExtension("native_profiler");
        $__internal_d96a48fdc88fe169441dd9c4579c6cf6b806fde84d1499d8ff79c1b723fc7cb0->enter($__internal_d96a48fdc88fe169441dd9c4579c6cf6b806fde84d1499d8ff79c1b723fc7cb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_inner_row.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d96a48fdc88fe169441dd9c4579c6cf6b806fde84d1499d8ff79c1b723fc7cb0->leave($__internal_d96a48fdc88fe169441dd9c4579c6cf6b806fde84d1499d8ff79c1b723fc7cb0_prof);

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
