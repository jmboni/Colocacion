<?php

/* SonataAdminBundle:CRUD:edit_file.html.twig */
class __TwigTemplate_dc4b47a8a259aa750b6d70ace0122e9bbbdd731fc12a2c45248d605e18765ab4 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_file.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d1b1bd6d9cc8460b8dd2cb95c7e607fcc927146b717674edcb5a35ac86c38689 = $this->env->getExtension("native_profiler");
        $__internal_d1b1bd6d9cc8460b8dd2cb95c7e607fcc927146b717674edcb5a35ac86c38689->enter($__internal_d1b1bd6d9cc8460b8dd2cb95c7e607fcc927146b717674edcb5a35ac86c38689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_file.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1b1bd6d9cc8460b8dd2cb95c7e607fcc927146b717674edcb5a35ac86c38689->leave($__internal_d1b1bd6d9cc8460b8dd2cb95c7e607fcc927146b717674edcb5a35ac86c38689_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_8e06b8d726e4c06ad7bc1af9b655223b84f4fa5f94ab2ba534d0fe916af65a57 = $this->env->getExtension("native_profiler");
        $__internal_8e06b8d726e4c06ad7bc1af9b655223b84f4fa5f94ab2ba534d0fe916af65a57->enter($__internal_8e06b8d726e4c06ad7bc1af9b655223b84f4fa5f94ab2ba534d0fe916af65a57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_8e06b8d726e4c06ad7bc1af9b655223b84f4fa5f94ab2ba534d0fe916af65a57->leave($__internal_8e06b8d726e4c06ad7bc1af9b655223b84f4fa5f94ab2ba534d0fe916af65a57_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_file.html.twig";
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
