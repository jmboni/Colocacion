<?php

/* SonataAdminBundle:CRUD:show.html.twig */
class __TwigTemplate_3a42b6d2bfef76e3c7cb43601ac50f2a0ccf38181cbcc1d4b44c98c80c27d2ca extends Twig_Template
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
        $__internal_345122bc0098a8a2dc09b001cf461c7ff7df130f758f9a9807c895d43f7f4b18 = $this->env->getExtension("native_profiler");
        $__internal_345122bc0098a8a2dc09b001cf461c7ff7df130f758f9a9807c895d43f7f4b18->enter($__internal_345122bc0098a8a2dc09b001cf461c7ff7df130f758f9a9807c895d43f7f4b18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_345122bc0098a8a2dc09b001cf461c7ff7df130f758f9a9807c895d43f7f4b18->leave($__internal_345122bc0098a8a2dc09b001cf461c7ff7df130f758f9a9807c895d43f7f4b18_prof);

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
