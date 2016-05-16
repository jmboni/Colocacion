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
        $__internal_35be90de6f987cb8e24dc6e3ee32f0f261c4b1bc872d13bdbae8097d48211189 = $this->env->getExtension("native_profiler");
        $__internal_35be90de6f987cb8e24dc6e3ee32f0f261c4b1bc872d13bdbae8097d48211189->enter($__internal_35be90de6f987cb8e24dc6e3ee32f0f261c4b1bc872d13bdbae8097d48211189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_time.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35be90de6f987cb8e24dc6e3ee32f0f261c4b1bc872d13bdbae8097d48211189->leave($__internal_35be90de6f987cb8e24dc6e3ee32f0f261c4b1bc872d13bdbae8097d48211189_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_cb709a5f0a438f7d3ebb2a88e35991ddd2f5bcbab79719a929a4041f50fff228 = $this->env->getExtension("native_profiler");
        $__internal_cb709a5f0a438f7d3ebb2a88e35991ddd2f5bcbab79719a929a4041f50fff228->enter($__internal_cb709a5f0a438f7d3ebb2a88e35991ddd2f5bcbab79719a929a4041f50fff228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_cb709a5f0a438f7d3ebb2a88e35991ddd2f5bcbab79719a929a4041f50fff228->leave($__internal_cb709a5f0a438f7d3ebb2a88e35991ddd2f5bcbab79719a929a4041f50fff228_prof);

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
