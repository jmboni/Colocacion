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
        $__internal_c677f4b7a79de7bbf926e03bdff0c6ceac4c0d37a7a077b1c8a175767bc4f9e0 = $this->env->getExtension("native_profiler");
        $__internal_c677f4b7a79de7bbf926e03bdff0c6ceac4c0d37a7a077b1c8a175767bc4f9e0->enter($__internal_c677f4b7a79de7bbf926e03bdff0c6ceac4c0d37a7a077b1c8a175767bc4f9e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c677f4b7a79de7bbf926e03bdff0c6ceac4c0d37a7a077b1c8a175767bc4f9e0->leave($__internal_c677f4b7a79de7bbf926e03bdff0c6ceac4c0d37a7a077b1c8a175767bc4f9e0_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_9029668717fc7b7e9f8e7a045afea31604cb50667078d7ebacb3387502ac26cb = $this->env->getExtension("native_profiler");
        $__internal_9029668717fc7b7e9f8e7a045afea31604cb50667078d7ebacb3387502ac26cb->enter($__internal_9029668717fc7b7e9f8e7a045afea31604cb50667078d7ebacb3387502ac26cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_9029668717fc7b7e9f8e7a045afea31604cb50667078d7ebacb3387502ac26cb->leave($__internal_9029668717fc7b7e9f8e7a045afea31604cb50667078d7ebacb3387502ac26cb_prof);

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
