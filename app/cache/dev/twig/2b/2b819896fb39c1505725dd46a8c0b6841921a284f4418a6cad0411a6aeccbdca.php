<?php

/* SonataAdminBundle:CRUD:edit_integer.html.twig */
class __TwigTemplate_824726b019820a1dc0ed2235e04c39e957c5d05d4d073195571df12cfc2eccfc extends Twig_Template
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
        $__internal_0501d3e19b328bf9bca291bab615d0fc096ac24c75c1378ff6656031a9315f2f = $this->env->getExtension("native_profiler");
        $__internal_0501d3e19b328bf9bca291bab615d0fc096ac24c75c1378ff6656031a9315f2f->enter($__internal_0501d3e19b328bf9bca291bab615d0fc096ac24c75c1378ff6656031a9315f2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0501d3e19b328bf9bca291bab615d0fc096ac24c75c1378ff6656031a9315f2f->leave($__internal_0501d3e19b328bf9bca291bab615d0fc096ac24c75c1378ff6656031a9315f2f_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_0833993951a04f097cff787c28658a516c64922ccd9cf1996d317cbd34156a65 = $this->env->getExtension("native_profiler");
        $__internal_0833993951a04f097cff787c28658a516c64922ccd9cf1996d317cbd34156a65->enter($__internal_0833993951a04f097cff787c28658a516c64922ccd9cf1996d317cbd34156a65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_0833993951a04f097cff787c28658a516c64922ccd9cf1996d317cbd34156a65->leave($__internal_0833993951a04f097cff787c28658a516c64922ccd9cf1996d317cbd34156a65_prof);

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
