<?php

/* SonataAdminBundle:CRUD:edit.html.twig */
class __TwigTemplate_fb8a2767cc4e6e7d7178f89de90d547ba577ef722a3f5d3a66e6f43014e326c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit.html.twig", "SonataAdminBundle:CRUD:edit.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1866ec264c942de3571b169b4c937a07202c472aed0f4644cb6dd921ed34eac2 = $this->env->getExtension("native_profiler");
        $__internal_1866ec264c942de3571b169b4c937a07202c472aed0f4644cb6dd921ed34eac2->enter($__internal_1866ec264c942de3571b169b4c937a07202c472aed0f4644cb6dd921ed34eac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1866ec264c942de3571b169b4c937a07202c472aed0f4644cb6dd921ed34eac2->leave($__internal_1866ec264c942de3571b169b4c937a07202c472aed0f4644cb6dd921ed34eac2_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_edit.html.twig' %}*/
/* */
