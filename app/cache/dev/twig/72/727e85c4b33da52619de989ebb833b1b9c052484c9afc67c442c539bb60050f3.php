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
        $__internal_99c362606e29273023a40e2da4f48148b71b8d1e2a8fc82948400b9ce6d6b08b = $this->env->getExtension("native_profiler");
        $__internal_99c362606e29273023a40e2da4f48148b71b8d1e2a8fc82948400b9ce6d6b08b->enter($__internal_99c362606e29273023a40e2da4f48148b71b8d1e2a8fc82948400b9ce6d6b08b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99c362606e29273023a40e2da4f48148b71b8d1e2a8fc82948400b9ce6d6b08b->leave($__internal_99c362606e29273023a40e2da4f48148b71b8d1e2a8fc82948400b9ce6d6b08b_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_a3152dc4118b8dc27c360a86fe2fa258598d6b202c476fb6bd6a21b56e17b4fe = $this->env->getExtension("native_profiler");
        $__internal_a3152dc4118b8dc27c360a86fe2fa258598d6b202c476fb6bd6a21b56e17b4fe->enter($__internal_a3152dc4118b8dc27c360a86fe2fa258598d6b202c476fb6bd6a21b56e17b4fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_a3152dc4118b8dc27c360a86fe2fa258598d6b202c476fb6bd6a21b56e17b4fe->leave($__internal_a3152dc4118b8dc27c360a86fe2fa258598d6b202c476fb6bd6a21b56e17b4fe_prof);

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
