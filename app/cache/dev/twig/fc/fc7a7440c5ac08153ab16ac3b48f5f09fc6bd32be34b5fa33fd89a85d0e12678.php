<?php

/* SonataAdminBundle:CRUD:history.html.twig */
class __TwigTemplate_60283ec7a4fcda4969a50a0e918107c4bf9cb40173e2a68972255f9102f5d508 extends Twig_Template
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
        $__internal_516b7e7d77af0b3f06e8c2a0990e021fed80f3305b88d04bafc33bd7400d7712 = $this->env->getExtension("native_profiler");
        $__internal_516b7e7d77af0b3f06e8c2a0990e021fed80f3305b88d04bafc33bd7400d7712->enter($__internal_516b7e7d77af0b3f06e8c2a0990e021fed80f3305b88d04bafc33bd7400d7712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_516b7e7d77af0b3f06e8c2a0990e021fed80f3305b88d04bafc33bd7400d7712->leave($__internal_516b7e7d77af0b3f06e8c2a0990e021fed80f3305b88d04bafc33bd7400d7712_prof);

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
