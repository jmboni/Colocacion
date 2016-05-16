<?php

/* SonataAdminBundle:CRUD:show_compare.html.twig */
class __TwigTemplate_5d9b94e2b4472426e1aba570472aa89b6c1def813c37e64c178c9550b7cd9d4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_compare.html.twig", "SonataAdminBundle:CRUD:show_compare.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_compare.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a07113e0c98c919729c9488815fe39afbf5323b3230dfab739f729cbba69c0a1 = $this->env->getExtension("native_profiler");
        $__internal_a07113e0c98c919729c9488815fe39afbf5323b3230dfab739f729cbba69c0a1->enter($__internal_a07113e0c98c919729c9488815fe39afbf5323b3230dfab739f729cbba69c0a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_compare.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a07113e0c98c919729c9488815fe39afbf5323b3230dfab739f729cbba69c0a1->leave($__internal_a07113e0c98c919729c9488815fe39afbf5323b3230dfab739f729cbba69c0a1_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_compare.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_show_compare.html.twig' %}*/
/* */
