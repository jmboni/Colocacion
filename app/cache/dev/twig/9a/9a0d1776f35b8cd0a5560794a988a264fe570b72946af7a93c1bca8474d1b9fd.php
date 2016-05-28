<?php

/* SonataAdminBundle:CRUD:edit_text.html.twig */
class __TwigTemplate_d9f6f66e9219dabee050a56bea9adb8e520f4ccf6b0eeca8a8307c1e9fb9e4ca extends Twig_Template
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
        $__internal_1d6659a72bca8698cf69432cc6da2d542c8994d337b47e86b1c59762ac077b80 = $this->env->getExtension("native_profiler");
        $__internal_1d6659a72bca8698cf69432cc6da2d542c8994d337b47e86b1c59762ac077b80->enter($__internal_1d6659a72bca8698cf69432cc6da2d542c8994d337b47e86b1c59762ac077b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d6659a72bca8698cf69432cc6da2d542c8994d337b47e86b1c59762ac077b80->leave($__internal_1d6659a72bca8698cf69432cc6da2d542c8994d337b47e86b1c59762ac077b80_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_86010dbb92af025c80d7e992a3b8e8ca913bdeb4907add74e64c267097f504fd = $this->env->getExtension("native_profiler");
        $__internal_86010dbb92af025c80d7e992a3b8e8ca913bdeb4907add74e64c267097f504fd->enter($__internal_86010dbb92af025c80d7e992a3b8e8ca913bdeb4907add74e64c267097f504fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_86010dbb92af025c80d7e992a3b8e8ca913bdeb4907add74e64c267097f504fd->leave($__internal_86010dbb92af025c80d7e992a3b8e8ca913bdeb4907add74e64c267097f504fd_prof);

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
