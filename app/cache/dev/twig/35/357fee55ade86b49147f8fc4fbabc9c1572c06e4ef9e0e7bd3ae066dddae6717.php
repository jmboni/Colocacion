<?php

/* SonataAdminBundle:CRUD:list_time.html.twig */
class __TwigTemplate_0ec2c7c5667465e225f00f6b11572d90aa6180794ff3de01434cfd118a0d09aa extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_time.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7114f3e68cb51130353d08be9235e978e2acf43394261fe36e68b91ca19f07b2 = $this->env->getExtension("native_profiler");
        $__internal_7114f3e68cb51130353d08be9235e978e2acf43394261fe36e68b91ca19f07b2->enter($__internal_7114f3e68cb51130353d08be9235e978e2acf43394261fe36e68b91ca19f07b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_time.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7114f3e68cb51130353d08be9235e978e2acf43394261fe36e68b91ca19f07b2->leave($__internal_7114f3e68cb51130353d08be9235e978e2acf43394261fe36e68b91ca19f07b2_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_5ae357efa8ed3187a64062d4617ad39d38fd696abaad10ca99e3242545a0783f = $this->env->getExtension("native_profiler");
        $__internal_5ae357efa8ed3187a64062d4617ad39d38fd696abaad10ca99e3242545a0783f->enter($__internal_5ae357efa8ed3187a64062d4617ad39d38fd696abaad10ca99e3242545a0783f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_5ae357efa8ed3187a64062d4617ad39d38fd696abaad10ca99e3242545a0783f->leave($__internal_5ae357efa8ed3187a64062d4617ad39d38fd696abaad10ca99e3242545a0783f_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 18,  41 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/*     {%- else -%}*/
/*         {{ value|date('H:i:s') }}*/
/*     {%- endif -%}*/
/* {% endblock %}*/
/* */
