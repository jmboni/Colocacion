<?php

/* SonataAdminBundle:CRUD:edit_integer.html.twig */
class __TwigTemplate_1f5f6130a9e65b1992fd0c1d27694241dbbe4f1511122cd9e484aee68a01ba6f extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_integer.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eaee94ca5e29f493303eb288f59ab9e409e96a66b863ddda7c865a5f4057d14d = $this->env->getExtension("native_profiler");
        $__internal_eaee94ca5e29f493303eb288f59ab9e409e96a66b863ddda7c865a5f4057d14d->enter($__internal_eaee94ca5e29f493303eb288f59ab9e409e96a66b863ddda7c865a5f4057d14d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eaee94ca5e29f493303eb288f59ab9e409e96a66b863ddda7c865a5f4057d14d->leave($__internal_eaee94ca5e29f493303eb288f59ab9e409e96a66b863ddda7c865a5f4057d14d_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_fa50e7ac2f0626d7a677b05306de22c09e94d096cab99c7af8739b5c5eba2787 = $this->env->getExtension("native_profiler");
        $__internal_fa50e7ac2f0626d7a677b05306de22c09e94d096cab99c7af8739b5c5eba2787->enter($__internal_fa50e7ac2f0626d7a677b05306de22c09e94d096cab99c7af8739b5c5eba2787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_fa50e7ac2f0626d7a677b05306de22c09e94d096cab99c7af8739b5c5eba2787->leave($__internal_fa50e7ac2f0626d7a677b05306de22c09e94d096cab99c7af8739b5c5eba2787_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_integer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 14,  18 => 12,);
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
/* {% extends base_template %}*/
/* */
/* {% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}*/
/* */
