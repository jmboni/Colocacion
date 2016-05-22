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
        $__internal_78933e63065947a90c5a45b7c7b7971107dff78feb38a3f493f36618ad44ab6f = $this->env->getExtension("native_profiler");
        $__internal_78933e63065947a90c5a45b7c7b7971107dff78feb38a3f493f36618ad44ab6f->enter($__internal_78933e63065947a90c5a45b7c7b7971107dff78feb38a3f493f36618ad44ab6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78933e63065947a90c5a45b7c7b7971107dff78feb38a3f493f36618ad44ab6f->leave($__internal_78933e63065947a90c5a45b7c7b7971107dff78feb38a3f493f36618ad44ab6f_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_d3ad470f71c4c75b99c7998193e1c8b0901a0408205e0f16fb5eb85d2009a4fe = $this->env->getExtension("native_profiler");
        $__internal_d3ad470f71c4c75b99c7998193e1c8b0901a0408205e0f16fb5eb85d2009a4fe->enter($__internal_d3ad470f71c4c75b99c7998193e1c8b0901a0408205e0f16fb5eb85d2009a4fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_d3ad470f71c4c75b99c7998193e1c8b0901a0408205e0f16fb5eb85d2009a4fe->leave($__internal_d3ad470f71c4c75b99c7998193e1c8b0901a0408205e0f16fb5eb85d2009a4fe_prof);

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
