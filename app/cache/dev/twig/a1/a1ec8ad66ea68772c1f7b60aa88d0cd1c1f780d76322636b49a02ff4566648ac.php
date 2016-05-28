<?php

/* SonataAdminBundle:CRUD:history.html.twig */
class __TwigTemplate_b5f869c9e336fe274163d26209a465b9c8bdf9e13390b12e534ac55cb9cc3bb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_history.html.twig", "SonataAdminBundle:CRUD:history.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_history.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d763bde50a85c1de6d69760e853fd6dd26feb7bc024bcb3e51532ef14cd8d925 = $this->env->getExtension("native_profiler");
        $__internal_d763bde50a85c1de6d69760e853fd6dd26feb7bc024bcb3e51532ef14cd8d925->enter($__internal_d763bde50a85c1de6d69760e853fd6dd26feb7bc024bcb3e51532ef14cd8d925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d763bde50a85c1de6d69760e853fd6dd26feb7bc024bcb3e51532ef14cd8d925->leave($__internal_d763bde50a85c1de6d69760e853fd6dd26feb7bc024bcb3e51532ef14cd8d925_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:history.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_history.html.twig' %}*/
/* */
