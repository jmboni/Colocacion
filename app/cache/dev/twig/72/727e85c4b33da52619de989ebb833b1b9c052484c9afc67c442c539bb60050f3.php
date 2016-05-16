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
        $__internal_e11ddaa175b35e60bb3934f79add5bba93992219577d1b775efc320ab1ec1d89 = $this->env->getExtension("native_profiler");
        $__internal_e11ddaa175b35e60bb3934f79add5bba93992219577d1b775efc320ab1ec1d89->enter($__internal_e11ddaa175b35e60bb3934f79add5bba93992219577d1b775efc320ab1ec1d89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e11ddaa175b35e60bb3934f79add5bba93992219577d1b775efc320ab1ec1d89->leave($__internal_e11ddaa175b35e60bb3934f79add5bba93992219577d1b775efc320ab1ec1d89_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_915f9052357376cc9de714449212f59a12d36fc5133a6c77183327e20b72c948 = $this->env->getExtension("native_profiler");
        $__internal_915f9052357376cc9de714449212f59a12d36fc5133a6c77183327e20b72c948->enter($__internal_915f9052357376cc9de714449212f59a12d36fc5133a6c77183327e20b72c948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_915f9052357376cc9de714449212f59a12d36fc5133a6c77183327e20b72c948->leave($__internal_915f9052357376cc9de714449212f59a12d36fc5133a6c77183327e20b72c948_prof);

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
