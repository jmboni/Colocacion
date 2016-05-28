<?php

/* SonataAdminBundle:CRUD:show_percent.html.twig */
class __TwigTemplate_6481cb9005f2865f0a895e07552add7a15535e1c130dd2292dc6a3c2bb642390 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_percent.html.twig", 12);
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
        $__internal_df0a39d04cd892b391ee4b9d4d56b4c3830fdfc3a9a4d1be85cbc51db5813c40 = $this->env->getExtension("native_profiler");
        $__internal_df0a39d04cd892b391ee4b9d4d56b4c3830fdfc3a9a4d1be85cbc51db5813c40->enter($__internal_df0a39d04cd892b391ee4b9d4d56b4c3830fdfc3a9a4d1be85cbc51db5813c40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_percent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df0a39d04cd892b391ee4b9d4d56b4c3830fdfc3a9a4d1be85cbc51db5813c40->leave($__internal_df0a39d04cd892b391ee4b9d4d56b4c3830fdfc3a9a4d1be85cbc51db5813c40_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_05a9f0cdf86f2a080a5be01b6bb79f3745a249725b8db0167b288f6d97721722 = $this->env->getExtension("native_profiler");
        $__internal_05a9f0cdf86f2a080a5be01b6bb79f3745a249725b8db0167b288f6d97721722->enter($__internal_05a9f0cdf86f2a080a5be01b6bb79f3745a249725b8db0167b288f6d97721722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_05a9f0cdf86f2a080a5be01b6bb79f3745a249725b8db0167b288f6d97721722->leave($__internal_05a9f0cdf86f2a080a5be01b6bb79f3745a249725b8db0167b288f6d97721722_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
/*     {% set value = value * 100 %}*/
/*     {{ value }} %*/
/* {% endblock %}*/
/* */
