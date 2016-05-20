<?php

/* SonataAdminBundle:CRUD:edit_string.html.twig */
class __TwigTemplate_519482a19ece1423d1b4235b58c68e8c56726318d92085ceedc4f83b314d21cc extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aa4ddebccd64c7385346649eae3cafea4d9c62d7536cc9d32a0dd17f38de9fa7 = $this->env->getExtension("native_profiler");
        $__internal_aa4ddebccd64c7385346649eae3cafea4d9c62d7536cc9d32a0dd17f38de9fa7->enter($__internal_aa4ddebccd64c7385346649eae3cafea4d9c62d7536cc9d32a0dd17f38de9fa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa4ddebccd64c7385346649eae3cafea4d9c62d7536cc9d32a0dd17f38de9fa7->leave($__internal_aa4ddebccd64c7385346649eae3cafea4d9c62d7536cc9d32a0dd17f38de9fa7_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_b7ccb07da987fab18a647b198264fb3099a16e0e620cef6e54357e2a7dd8227d = $this->env->getExtension("native_profiler");
        $__internal_b7ccb07da987fab18a647b198264fb3099a16e0e620cef6e54357e2a7dd8227d->enter($__internal_b7ccb07da987fab18a647b198264fb3099a16e0e620cef6e54357e2a7dd8227d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_b7ccb07da987fab18a647b198264fb3099a16e0e620cef6e54357e2a7dd8227d->leave($__internal_b7ccb07da987fab18a647b198264fb3099a16e0e620cef6e54357e2a7dd8227d_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_string.html.twig";
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
