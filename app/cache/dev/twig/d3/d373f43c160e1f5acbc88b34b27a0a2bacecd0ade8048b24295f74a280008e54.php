<?php

/* SonataAdminBundle:CRUD:show_datetime.html.twig */
class __TwigTemplate_90b92335e3b4359cdad6f869bf786ef914e3ef638b56d1acb93502207174af01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_datetime.html.twig", 12);
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
        $__internal_7c4c4297c5170e97afab97b66aa755db43189c4b5c963fb462bfdf0e513c25a7 = $this->env->getExtension("native_profiler");
        $__internal_7c4c4297c5170e97afab97b66aa755db43189c4b5c963fb462bfdf0e513c25a7->enter($__internal_7c4c4297c5170e97afab97b66aa755db43189c4b5c963fb462bfdf0e513c25a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_datetime.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c4c4297c5170e97afab97b66aa755db43189c4b5c963fb462bfdf0e513c25a7->leave($__internal_7c4c4297c5170e97afab97b66aa755db43189c4b5c963fb462bfdf0e513c25a7_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_8a8e26a8aa1c4d543f1832afe94591e9a34224f9fec179ad06678ad2a0a571c0 = $this->env->getExtension("native_profiler");
        $__internal_8a8e26a8aa1c4d543f1832afe94591e9a34224f9fec179ad06678ad2a0a571c0->enter($__internal_8a8e26a8aa1c4d543f1832afe94591e9a34224f9fec179ad06678ad2a0a571c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } elseif ($this->getAttribute($this->getAttribute(        // line 17
(isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "format", array(), "any", true, true)) {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "format", array())), "html", null, true);
        } else {
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
        }
        
        $__internal_8a8e26a8aa1c4d543f1832afe94591e9a34224f9fec179ad06678ad2a0a571c0->leave($__internal_8a8e26a8aa1c4d543f1832afe94591e9a34224f9fec179ad06678ad2a0a571c0_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_datetime.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 20,  46 => 18,  44 => 17,  42 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
/*     {%- elseif field_description.options.format is defined -%}*/
/*         {{ value|date(field_description.options.format) }}*/
/*     {%- else -%}*/
/*         {{ value|date }}*/
/*     {%- endif -%}*/
/* {% endblock %}*/
/* */
