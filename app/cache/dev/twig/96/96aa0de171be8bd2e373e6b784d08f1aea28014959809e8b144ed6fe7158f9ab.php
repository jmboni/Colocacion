<?php

/* SonataAdminBundle:CRUD:base_filter_field.html.twig */
class __TwigTemplate_b106ab19b750050c109660684ce73bcd7aae61de33e310d3a34f030d55965329 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_47efa3b56cbe116fba428541e17780a339a6c24a815e8fd0fbd650715ac11445 = $this->env->getExtension("native_profiler");
        $__internal_47efa3b56cbe116fba428541e17780a339a6c24a815e8fd0fbd650715ac11445->enter($__internal_47efa3b56cbe116fba428541e17780a339a6c24a815e8fd0fbd650715ac11445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_filter_field.html.twig"));

        // line 11
        echo "

<div>
    ";
        // line 14
        $this->displayBlock('label', $context, $blocks);
        // line 22
        echo "
    <div class=\"sonata-ba-field";
        // line 23
        if ($this->getAttribute($this->getAttribute((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), "vars", array()), "errors", array())) {
            echo " sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 24
        $this->displayBlock('field', $context, $blocks);
        // line 25
        echo "    </div>
</div>
";
        
        $__internal_47efa3b56cbe116fba428541e17780a339a6c24a815e8fd0fbd650715ac11445->leave($__internal_47efa3b56cbe116fba428541e17780a339a6c24a815e8fd0fbd650715ac11445_prof);

    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        $__internal_9f0440e96d26540985eb4752a8a1161822c35384849f26b7191f5cb3f94a6748 = $this->env->getExtension("native_profiler");
        $__internal_9f0440e96d26540985eb4752a8a1161822c35384849f26b7191f5cb3f94a6748->enter($__internal_9f0440e96d26540985eb4752a8a1161822c35384849f26b7191f5cb3f94a6748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 15
        echo "        ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "fielddescription", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 16
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")), "fielddescription", array()), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
        ";
        } else {
            // line 18
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'label');
            echo "
        ";
        }
        // line 20
        echo "        <br>
    ";
        
        $__internal_9f0440e96d26540985eb4752a8a1161822c35384849f26b7191f5cb3f94a6748->leave($__internal_9f0440e96d26540985eb4752a8a1161822c35384849f26b7191f5cb3f94a6748_prof);

    }

    // line 24
    public function block_field($context, array $blocks = array())
    {
        $__internal_7cbbee09539a765da1731782d7238033e676a36adad269a7cbc799c036603b6f = $this->env->getExtension("native_profiler");
        $__internal_7cbbee09539a765da1731782d7238033e676a36adad269a7cbc799c036603b6f->enter($__internal_7cbbee09539a765da1731782d7238033e676a36adad269a7cbc799c036603b6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'widget');
        
        $__internal_7cbbee09539a765da1731782d7238033e676a36adad269a7cbc799c036603b6f->leave($__internal_7cbbee09539a765da1731782d7238033e676a36adad269a7cbc799c036603b6f_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_filter_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 24,  72 => 20,  66 => 18,  60 => 16,  57 => 15,  51 => 14,  42 => 25,  40 => 24,  34 => 23,  31 => 22,  29 => 14,  24 => 11,);
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
/* */
/* <div>*/
/*     {% block label %}*/
/*         {% if filter.fielddescription.options.name is defined %}*/
/*             {{ form_label(filter_form, filter.fielddescription.options.name) }}*/
/*         {% else %}*/
/*             {{ form_label(filter_form) }}*/
/*         {% endif %}*/
/*         <br>*/
/*     {% endblock %}*/
/* */
/*     <div class="sonata-ba-field{% if filter_form.vars.errors %} sonata-ba-field-error{% endif %}">*/
/*         {% block field %}{{ form_widget(filter_form) }}{% endblock %}*/
/*     </div>*/
/* </div>*/
/* */