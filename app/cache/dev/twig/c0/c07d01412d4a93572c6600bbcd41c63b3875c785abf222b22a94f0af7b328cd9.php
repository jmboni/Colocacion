<?php

/* SonataAdminBundle:CRUD:edit_string.html.twig */
class __TwigTemplate_2bb8a7152622e20f71f7145dffab2b61bc6a633264002f7a2139dad9d3ab41f6 extends Twig_Template
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
        $__internal_62c407d6be0ca1a41ece0e520e11622b501c8c71757df2e017eeff5520a7c613 = $this->env->getExtension("native_profiler");
        $__internal_62c407d6be0ca1a41ece0e520e11622b501c8c71757df2e017eeff5520a7c613->enter($__internal_62c407d6be0ca1a41ece0e520e11622b501c8c71757df2e017eeff5520a7c613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62c407d6be0ca1a41ece0e520e11622b501c8c71757df2e017eeff5520a7c613->leave($__internal_62c407d6be0ca1a41ece0e520e11622b501c8c71757df2e017eeff5520a7c613_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_5a7e23d725d535bf79c965e3e23f034459527dc435a196550c5384be9d2a6562 = $this->env->getExtension("native_profiler");
        $__internal_5a7e23d725d535bf79c965e3e23f034459527dc435a196550c5384be9d2a6562->enter($__internal_5a7e23d725d535bf79c965e3e23f034459527dc435a196550c5384be9d2a6562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_5a7e23d725d535bf79c965e3e23f034459527dc435a196550c5384be9d2a6562->leave($__internal_5a7e23d725d535bf79c965e3e23f034459527dc435a196550c5384be9d2a6562_prof);

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
