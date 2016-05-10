<?php

/* SonataAdminBundle:CRUD:base_inline_edit_field.html.twig */
class __TwigTemplate_ca2fc8fd7ee7820def6d7576fd7f77e23c179a8a140bcbd70939f8aafbe30089 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_71a0d4b784fbcdb9b5ef190c3cc74a6b70a9764ba3f89faa204a9afff316c8d3 = $this->env->getExtension("native_profiler");
        $__internal_71a0d4b784fbcdb9b5ef190c3cc74a6b70a9764ba3f89faa204a9afff316c8d3->enter($__internal_71a0d4b784fbcdb9b5ef190c3cc74a6b70a9764ba3f89faa204a9afff316c8d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_inline_edit_field.html.twig"));

        // line 11
        echo "
<div id=\"sonata-ba-field-container-";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "vars", array()), "id", array()), "html", null, true);
        echo "\" class=\"sonata-ba-field sonata-ba-field-";
        echo twig_escape_filter($this->env, (isset($context["edit"]) ? $context["edit"] : $this->getContext($context, "edit")), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["inline"]) ? $context["inline"] : $this->getContext($context, "inline")), "html", null, true);
        echo " ";
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "vars", array()), "errors", array()))) {
            echo "sonata-ba-field-error";
        }
        echo "\">

    ";
        // line 14
        $this->displayBlock('label', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('field', $context, $blocks);
        // line 26
        echo "
    <div class=\"sonata-ba-field-error-messages\">
        ";
        // line 28
        $this->displayBlock('errors', $context, $blocks);
        // line 29
        echo "    </div>
</div>
";
        
        $__internal_71a0d4b784fbcdb9b5ef190c3cc74a6b70a9764ba3f89faa204a9afff316c8d3->leave($__internal_71a0d4b784fbcdb9b5ef190c3cc74a6b70a9764ba3f89faa204a9afff316c8d3_prof);

    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        $__internal_d5ec6b8ed8f31f146b6d69eb327446141792bb6cfec0d4494e56af9b9cca2abd = $this->env->getExtension("native_profiler");
        $__internal_d5ec6b8ed8f31f146b6d69eb327446141792bb6cfec0d4494e56af9b9cca2abd->enter($__internal_d5ec6b8ed8f31f146b6d69eb327446141792bb6cfec0d4494e56af9b9cca2abd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 15
        echo "        ";
        if (((isset($context["inline"]) ? $context["inline"] : $this->getContext($context, "inline")) == "natural")) {
            // line 16
            echo "            ";
            if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
                // line 17
                echo "                ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
                echo "
            ";
            } else {
                // line 19
                echo "                ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label');
                echo "
            ";
            }
            // line 21
            echo "            <br>
        ";
        }
        // line 23
        echo "    ";
        
        $__internal_d5ec6b8ed8f31f146b6d69eb327446141792bb6cfec0d4494e56af9b9cca2abd->leave($__internal_d5ec6b8ed8f31f146b6d69eb327446141792bb6cfec0d4494e56af9b9cca2abd_prof);

    }

    // line 25
    public function block_field($context, array $blocks = array())
    {
        $__internal_457752ea49b6f455b1962c2cd878944b2a828d88232d661d5da0eefac896af57 = $this->env->getExtension("native_profiler");
        $__internal_457752ea49b6f455b1962c2cd878944b2a828d88232d661d5da0eefac896af57->enter($__internal_457752ea49b6f455b1962c2cd878944b2a828d88232d661d5da0eefac896af57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
        
        $__internal_457752ea49b6f455b1962c2cd878944b2a828d88232d661d5da0eefac896af57->leave($__internal_457752ea49b6f455b1962c2cd878944b2a828d88232d661d5da0eefac896af57_prof);

    }

    // line 28
    public function block_errors($context, array $blocks = array())
    {
        $__internal_7a0131cad30cd6e21a9454374b447847683791a418d02d89845242a97c4b68a8 = $this->env->getExtension("native_profiler");
        $__internal_7a0131cad30cd6e21a9454374b447847683791a418d02d89845242a97c4b68a8->enter($__internal_7a0131cad30cd6e21a9454374b447847683791a418d02d89845242a97c4b68a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
        
        $__internal_7a0131cad30cd6e21a9454374b447847683791a418d02d89845242a97c4b68a8->leave($__internal_7a0131cad30cd6e21a9454374b447847683791a418d02d89845242a97c4b68a8_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_inline_edit_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 28,  98 => 25,  91 => 23,  87 => 21,  81 => 19,  75 => 17,  72 => 16,  69 => 15,  63 => 14,  54 => 29,  52 => 28,  48 => 26,  46 => 25,  43 => 24,  41 => 14,  28 => 12,  25 => 11,);
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
/* <div id="sonata-ba-field-container-{{ field_element.vars.id }}" class="sonata-ba-field sonata-ba-field-{{ edit }}-{{ inline }} {% if field_element.vars.errors|length %}sonata-ba-field-error{% endif %}">*/
/* */
/*     {% block label %}*/
/*         {% if inline == 'natural' %}*/
/*             {% if field_description.options.name is defined %}*/
/*                 {{ form_label(field_element, field_description.options.name) }}*/
/*             {% else %}*/
/*                 {{ form_label(field_element) }}*/
/*             {% endif %}*/
/*             <br>*/
/*         {% endif %}*/
/*     {% endblock %}*/
/* */
/*     {% block field %}{{ form_widget(field_element) }}{% endblock %}*/
/* */
/*     <div class="sonata-ba-field-error-messages">*/
/*         {% block errors %}{{ form_errors(field_element) }}{% endblock %}*/
/*     </div>*/
/* </div>*/
/* */
