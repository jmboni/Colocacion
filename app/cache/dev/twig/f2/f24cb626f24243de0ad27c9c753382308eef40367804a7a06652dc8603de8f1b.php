<?php

/* SonataAdminBundle:CRUD:show_time.html.twig */
class __TwigTemplate_e4bde9ea670dfb55f8cae1ec021f04a43487aa4bfebd32894be55a395bb6d860 extends Twig_Template
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
        $__internal_2a235bc43299a728049bade81140e7f215a1fa5f285980548f0fc4c733c51448 = $this->env->getExtension("native_profiler");
        $__internal_2a235bc43299a728049bade81140e7f215a1fa5f285980548f0fc4c733c51448->enter($__internal_2a235bc43299a728049bade81140e7f215a1fa5f285980548f0fc4c733c51448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_time.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a235bc43299a728049bade81140e7f215a1fa5f285980548f0fc4c733c51448->leave($__internal_2a235bc43299a728049bade81140e7f215a1fa5f285980548f0fc4c733c51448_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_3ebbc376a2f0fe19ef559e736edb875d3f2c4c66cd2221e0df828f67d657dde5 = $this->env->getExtension("native_profiler");
        $__internal_3ebbc376a2f0fe19ef559e736edb875d3f2c4c66cd2221e0df828f67d657dde5->enter($__internal_3ebbc376a2f0fe19ef559e736edb875d3f2c4c66cd2221e0df828f67d657dde5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_3ebbc376a2f0fe19ef559e736edb875d3f2c4c66cd2221e0df828f67d657dde5->leave($__internal_3ebbc376a2f0fe19ef559e736edb875d3f2c4c66cd2221e0df828f67d657dde5_prof);

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
