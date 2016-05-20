<?php

/* SonataAdminBundle:CRUD:edit_array.html.twig */
class __TwigTemplate_649b2cfcab510c37c9ce55c6c8f65d1a1697ff2058be01320335262617ec7096 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d23707f668bbdf5489360b58655c6a9f1d7f9b2c8593a4541c0eec1e16e5275c = $this->env->getExtension("native_profiler");
        $__internal_d23707f668bbdf5489360b58655c6a9f1d7f9b2c8593a4541c0eec1e16e5275c->enter($__internal_d23707f668bbdf5489360b58655c6a9f1d7f9b2c8593a4541c0eec1e16e5275c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d23707f668bbdf5489360b58655c6a9f1d7f9b2c8593a4541c0eec1e16e5275c->leave($__internal_d23707f668bbdf5489360b58655c6a9f1d7f9b2c8593a4541c0eec1e16e5275c_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_d8a49a09589fc90cccdd819294bf10cd670e5f7b7caeb7a0870c111387166e5e = $this->env->getExtension("native_profiler");
        $__internal_d8a49a09589fc90cccdd819294bf10cd670e5f7b7caeb7a0870c111387166e5e->enter($__internal_d8a49a09589fc90cccdd819294bf10cd670e5f7b7caeb7a0870c111387166e5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <span class=\"edit\">
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        echo "
    </span>
";
        
        $__internal_d8a49a09589fc90cccdd819294bf10cd670e5f7b7caeb7a0870c111387166e5e->leave($__internal_d8a49a09589fc90cccdd819294bf10cd670e5f7b7caeb7a0870c111387166e5e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/* {% block field %}*/
/*     <span class="edit">*/
/*         {{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}*/
/*     </span>*/
/* {% endblock %}*/
/* */
