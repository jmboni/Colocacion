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
        $__internal_8886cbc5de996da9ff9eb56dc9215c219171370acd2b5bf48b3013a9ce3b032f = $this->env->getExtension("native_profiler");
        $__internal_8886cbc5de996da9ff9eb56dc9215c219171370acd2b5bf48b3013a9ce3b032f->enter($__internal_8886cbc5de996da9ff9eb56dc9215c219171370acd2b5bf48b3013a9ce3b032f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_time.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8886cbc5de996da9ff9eb56dc9215c219171370acd2b5bf48b3013a9ce3b032f->leave($__internal_8886cbc5de996da9ff9eb56dc9215c219171370acd2b5bf48b3013a9ce3b032f_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_367b74bfe039dcd6839b28ddd08a8fda8d033ac6cfd35746e9d68f0b5d69e98b = $this->env->getExtension("native_profiler");
        $__internal_367b74bfe039dcd6839b28ddd08a8fda8d033ac6cfd35746e9d68f0b5d69e98b->enter($__internal_367b74bfe039dcd6839b28ddd08a8fda8d033ac6cfd35746e9d68f0b5d69e98b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_367b74bfe039dcd6839b28ddd08a8fda8d033ac6cfd35746e9d68f0b5d69e98b->leave($__internal_367b74bfe039dcd6839b28ddd08a8fda8d033ac6cfd35746e9d68f0b5d69e98b_prof);

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
