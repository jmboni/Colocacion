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
        $__internal_a7658724a1bec56a761d6baced56dc2fd20b08c95497c64c575e1fbe2b783338 = $this->env->getExtension("native_profiler");
        $__internal_a7658724a1bec56a761d6baced56dc2fd20b08c95497c64c575e1fbe2b783338->enter($__internal_a7658724a1bec56a761d6baced56dc2fd20b08c95497c64c575e1fbe2b783338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7658724a1bec56a761d6baced56dc2fd20b08c95497c64c575e1fbe2b783338->leave($__internal_a7658724a1bec56a761d6baced56dc2fd20b08c95497c64c575e1fbe2b783338_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_49d05ece5c3852ef22e7f56f0826f6a0fe4bfc274e5dbb057c585134d83e267d = $this->env->getExtension("native_profiler");
        $__internal_49d05ece5c3852ef22e7f56f0826f6a0fe4bfc274e5dbb057c585134d83e267d->enter($__internal_49d05ece5c3852ef22e7f56f0826f6a0fe4bfc274e5dbb057c585134d83e267d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_49d05ece5c3852ef22e7f56f0826f6a0fe4bfc274e5dbb057c585134d83e267d->leave($__internal_49d05ece5c3852ef22e7f56f0826f6a0fe4bfc274e5dbb057c585134d83e267d_prof);

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
