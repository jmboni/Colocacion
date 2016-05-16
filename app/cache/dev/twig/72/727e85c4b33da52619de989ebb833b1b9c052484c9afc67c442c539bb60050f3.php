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
        $__internal_f374bcd24d1bc0e8259a4c841211ab3b1e17476702576823fd9382bb51c96512 = $this->env->getExtension("native_profiler");
        $__internal_f374bcd24d1bc0e8259a4c841211ab3b1e17476702576823fd9382bb51c96512->enter($__internal_f374bcd24d1bc0e8259a4c841211ab3b1e17476702576823fd9382bb51c96512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f374bcd24d1bc0e8259a4c841211ab3b1e17476702576823fd9382bb51c96512->leave($__internal_f374bcd24d1bc0e8259a4c841211ab3b1e17476702576823fd9382bb51c96512_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_c18afc671582a4e95f173d9e5dfc022dbe54d4e432ba0d8247d35908300ea496 = $this->env->getExtension("native_profiler");
        $__internal_c18afc671582a4e95f173d9e5dfc022dbe54d4e432ba0d8247d35908300ea496->enter($__internal_c18afc671582a4e95f173d9e5dfc022dbe54d4e432ba0d8247d35908300ea496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_c18afc671582a4e95f173d9e5dfc022dbe54d4e432ba0d8247d35908300ea496->leave($__internal_c18afc671582a4e95f173d9e5dfc022dbe54d4e432ba0d8247d35908300ea496_prof);

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
