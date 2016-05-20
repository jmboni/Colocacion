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
        $__internal_90e4f22d8c795f092201e50f92dcc354605fb0b0f21100e2331e0f0024373b22 = $this->env->getExtension("native_profiler");
        $__internal_90e4f22d8c795f092201e50f92dcc354605fb0b0f21100e2331e0f0024373b22->enter($__internal_90e4f22d8c795f092201e50f92dcc354605fb0b0f21100e2331e0f0024373b22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_time.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90e4f22d8c795f092201e50f92dcc354605fb0b0f21100e2331e0f0024373b22->leave($__internal_90e4f22d8c795f092201e50f92dcc354605fb0b0f21100e2331e0f0024373b22_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_ca0f6b1fb4de4d1e2566d1b69ba2f5dfc2a3ca906b37fcf8d2676ec4f5448eb5 = $this->env->getExtension("native_profiler");
        $__internal_ca0f6b1fb4de4d1e2566d1b69ba2f5dfc2a3ca906b37fcf8d2676ec4f5448eb5->enter($__internal_ca0f6b1fb4de4d1e2566d1b69ba2f5dfc2a3ca906b37fcf8d2676ec4f5448eb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_ca0f6b1fb4de4d1e2566d1b69ba2f5dfc2a3ca906b37fcf8d2676ec4f5448eb5->leave($__internal_ca0f6b1fb4de4d1e2566d1b69ba2f5dfc2a3ca906b37fcf8d2676ec4f5448eb5_prof);

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
