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
        $__internal_975cb9a892ff7c415d3642298b2622284e0ac3103ccc74dd1a50f69670bbbc75 = $this->env->getExtension("native_profiler");
        $__internal_975cb9a892ff7c415d3642298b2622284e0ac3103ccc74dd1a50f69670bbbc75->enter($__internal_975cb9a892ff7c415d3642298b2622284e0ac3103ccc74dd1a50f69670bbbc75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_975cb9a892ff7c415d3642298b2622284e0ac3103ccc74dd1a50f69670bbbc75->leave($__internal_975cb9a892ff7c415d3642298b2622284e0ac3103ccc74dd1a50f69670bbbc75_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_eee2b64006b108eac2d4b0068473133eacdb9e93843844dd02dfc97bba4fdcf0 = $this->env->getExtension("native_profiler");
        $__internal_eee2b64006b108eac2d4b0068473133eacdb9e93843844dd02dfc97bba4fdcf0->enter($__internal_eee2b64006b108eac2d4b0068473133eacdb9e93843844dd02dfc97bba4fdcf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_eee2b64006b108eac2d4b0068473133eacdb9e93843844dd02dfc97bba4fdcf0->leave($__internal_eee2b64006b108eac2d4b0068473133eacdb9e93843844dd02dfc97bba4fdcf0_prof);

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
