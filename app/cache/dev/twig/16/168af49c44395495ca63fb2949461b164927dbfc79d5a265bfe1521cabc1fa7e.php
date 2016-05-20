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
        $__internal_dc34be4738fca3a198d8e2d9d944f45f67d8167adb61f9ec56c7cf313f6bd5f9 = $this->env->getExtension("native_profiler");
        $__internal_dc34be4738fca3a198d8e2d9d944f45f67d8167adb61f9ec56c7cf313f6bd5f9->enter($__internal_dc34be4738fca3a198d8e2d9d944f45f67d8167adb61f9ec56c7cf313f6bd5f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_file.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc34be4738fca3a198d8e2d9d944f45f67d8167adb61f9ec56c7cf313f6bd5f9->leave($__internal_dc34be4738fca3a198d8e2d9d944f45f67d8167adb61f9ec56c7cf313f6bd5f9_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_9e38078b6070b0d8a05753fe8435df25e7bf2071dc54af3e7ad42b9a4e33a547 = $this->env->getExtension("native_profiler");
        $__internal_9e38078b6070b0d8a05753fe8435df25e7bf2071dc54af3e7ad42b9a4e33a547->enter($__internal_9e38078b6070b0d8a05753fe8435df25e7bf2071dc54af3e7ad42b9a4e33a547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_9e38078b6070b0d8a05753fe8435df25e7bf2071dc54af3e7ad42b9a4e33a547->leave($__internal_9e38078b6070b0d8a05753fe8435df25e7bf2071dc54af3e7ad42b9a4e33a547_prof);

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
