<?php

/* SonataAdminBundle:CRUD:edit_text.html.twig */
class __TwigTemplate_33aa139e5f32b5301c8f3f058e59becac18c938478a2e315ee2c1e52f418fca7 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ab88b0fb73e325ca91d759f58d2eb42bd4036be0421b1c90b547b60a8af517d5 = $this->env->getExtension("native_profiler");
        $__internal_ab88b0fb73e325ca91d759f58d2eb42bd4036be0421b1c90b547b60a8af517d5->enter($__internal_ab88b0fb73e325ca91d759f58d2eb42bd4036be0421b1c90b547b60a8af517d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab88b0fb73e325ca91d759f58d2eb42bd4036be0421b1c90b547b60a8af517d5->leave($__internal_ab88b0fb73e325ca91d759f58d2eb42bd4036be0421b1c90b547b60a8af517d5_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_d211553da639986090853d6fc56c2000994c96d615deff46d8fba0c0a4e1a669 = $this->env->getExtension("native_profiler");
        $__internal_d211553da639986090853d6fc56c2000994c96d615deff46d8fba0c0a4e1a669->enter($__internal_d211553da639986090853d6fc56c2000994c96d615deff46d8fba0c0a4e1a669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_d211553da639986090853d6fc56c2000994c96d615deff46d8fba0c0a4e1a669->leave($__internal_d211553da639986090853d6fc56c2000994c96d615deff46d8fba0c0a4e1a669_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_text.html.twig";
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
