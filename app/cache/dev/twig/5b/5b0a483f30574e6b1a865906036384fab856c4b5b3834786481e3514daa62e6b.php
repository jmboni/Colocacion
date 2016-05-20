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
        $__internal_04821ffbc93469c9a5ca2d977f070ceb92ef7b7f69440ca55808ddd843200d12 = $this->env->getExtension("native_profiler");
        $__internal_04821ffbc93469c9a5ca2d977f070ceb92ef7b7f69440ca55808ddd843200d12->enter($__internal_04821ffbc93469c9a5ca2d977f070ceb92ef7b7f69440ca55808ddd843200d12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04821ffbc93469c9a5ca2d977f070ceb92ef7b7f69440ca55808ddd843200d12->leave($__internal_04821ffbc93469c9a5ca2d977f070ceb92ef7b7f69440ca55808ddd843200d12_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_8c480d0a4f29057183bcbb4e42502d85419eb5631d31cabf7be895ac06da0493 = $this->env->getExtension("native_profiler");
        $__internal_8c480d0a4f29057183bcbb4e42502d85419eb5631d31cabf7be895ac06da0493->enter($__internal_8c480d0a4f29057183bcbb4e42502d85419eb5631d31cabf7be895ac06da0493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_8c480d0a4f29057183bcbb4e42502d85419eb5631d31cabf7be895ac06da0493->leave($__internal_8c480d0a4f29057183bcbb4e42502d85419eb5631d31cabf7be895ac06da0493_prof);

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
