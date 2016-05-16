<?php

/* SonataAdminBundle:CRUD:show_time.html.twig */
class __TwigTemplate_e98bf1749182adf130e4e0cbff695811164b4f560d7ea37bc515fbe89d1291b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_time.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e71daf8087823225a332b9df507529ccc2a90cfb7b029b6c31dddcf4ace6fc75 = $this->env->getExtension("native_profiler");
        $__internal_e71daf8087823225a332b9df507529ccc2a90cfb7b029b6c31dddcf4ace6fc75->enter($__internal_e71daf8087823225a332b9df507529ccc2a90cfb7b029b6c31dddcf4ace6fc75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_time.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e71daf8087823225a332b9df507529ccc2a90cfb7b029b6c31dddcf4ace6fc75->leave($__internal_e71daf8087823225a332b9df507529ccc2a90cfb7b029b6c31dddcf4ace6fc75_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_9d2dee14de35542b77f7269f17fd526feb596dcbc3c7f6b10daf4dcce0e47955 = $this->env->getExtension("native_profiler");
        $__internal_9d2dee14de35542b77f7269f17fd526feb596dcbc3c7f6b10daf4dcce0e47955->enter($__internal_9d2dee14de35542b77f7269f17fd526feb596dcbc3c7f6b10daf4dcce0e47955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_9d2dee14de35542b77f7269f17fd526feb596dcbc3c7f6b10daf4dcce0e47955->leave($__internal_9d2dee14de35542b77f7269f17fd526feb596dcbc3c7f6b10daf4dcce0e47955_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 18,  42 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
/* {% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}*/
/* */
/* {% block field %}*/
/*     {%- if value is empty -%}*/
/*         &nbsp;*/
/*     {%- else -%}*/
/*         {{ value|date('H:i:s') }}*/
/*     {%- endif -%}*/
/* {% endblock %}*/
/* */
