<?php

/* SonataAdminBundle:CRUD:list_datetime.html.twig */
class __TwigTemplate_9970c22814fad04df49785a2ee7f11350021e81d778879c6690088beb69231d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_datetime.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ba8764e46f5431e2dcd20c3fe6a7f02ae57c750e1a8c368679fb7afd469f340f = $this->env->getExtension("native_profiler");
        $__internal_ba8764e46f5431e2dcd20c3fe6a7f02ae57c750e1a8c368679fb7afd469f340f->enter($__internal_ba8764e46f5431e2dcd20c3fe6a7f02ae57c750e1a8c368679fb7afd469f340f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_datetime.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba8764e46f5431e2dcd20c3fe6a7f02ae57c750e1a8c368679fb7afd469f340f->leave($__internal_ba8764e46f5431e2dcd20c3fe6a7f02ae57c750e1a8c368679fb7afd469f340f_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_003e1475d3719cb20819d8f8f81d394470b9ff725d89772757b635bf8efa0e72 = $this->env->getExtension("native_profiler");
        $__internal_003e1475d3719cb20819d8f8f81d394470b9ff725d89772757b635bf8efa0e72->enter($__internal_003e1475d3719cb20819d8f8f81d394470b9ff725d89772757b635bf8efa0e72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } elseif ($this->getAttribute($this->getAttribute(        // line 17
(isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "format", array(), "any", true, true)) {
            // line 18
            $context["timezone"] = (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "timezone", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "timezone", array())) : (null));
            // line 19
            echo "        ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "format", array()), (isset($context["timezone"]) ? $context["timezone"] : $this->getContext($context, "timezone"))), "html", null, true);
        } elseif ($this->getAttribute($this->getAttribute(        // line 20
(isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "timezone", array(), "any", true, true)) {
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), null, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "timezone", array())), "html", null, true);
        } else {
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
        }
        
        $__internal_003e1475d3719cb20819d8f8f81d394470b9ff725d89772757b635bf8efa0e72->leave($__internal_003e1475d3719cb20819d8f8f81d394470b9ff725d89772757b635bf8efa0e72_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_datetime.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 23,  52 => 21,  50 => 20,  47 => 19,  45 => 18,  43 => 17,  41 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/* {% extends admin.getTemplate('base_list_field') %}*/
/* */
/* {% block field %}*/
/*     {%- if value is empty -%}*/
/*         &nbsp;*/
/*     {%- elseif field_description.options.format is defined -%}*/
/*         {% set timezone = field_description.options.timezone is defined ? field_description.options.timezone : null %}*/
/*         {{ value|date(field_description.options.format, timezone) }}*/
/*     {%- elseif field_description.options.timezone is defined -%}*/
/*         {{ value|date(null, field_description.options.timezone) }}*/
/*     {%- else -%}*/
/*         {{ value|date }}*/
/*     {%- endif -%}*/
/* {% endblock %}*/
/* */
