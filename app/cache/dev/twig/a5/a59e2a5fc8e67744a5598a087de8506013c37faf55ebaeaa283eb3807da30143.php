<?php

/* SonataAdminBundle:CRUD:show.html.twig */
class __TwigTemplate_beaea2a684b4fa558b3703c4edeeefa05fbb839d566f86baa8b52ae8b2f990fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "SonataAdminBundle:CRUD:show.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ff8991c84ad2798492f73e27a6ec6b774756da5ecbb2b1f51c075e1ab98dbeea = $this->env->getExtension("native_profiler");
        $__internal_ff8991c84ad2798492f73e27a6ec6b774756da5ecbb2b1f51c075e1ab98dbeea->enter($__internal_ff8991c84ad2798492f73e27a6ec6b774756da5ecbb2b1f51c075e1ab98dbeea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff8991c84ad2798492f73e27a6ec6b774756da5ecbb2b1f51c075e1ab98dbeea->leave($__internal_ff8991c84ad2798492f73e27a6ec6b774756da5ecbb2b1f51c075e1ab98dbeea_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_show.html.twig' %}*/
/* */
