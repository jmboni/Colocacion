<?php

/* SonataAdminBundle:CRUD:base_filter_field.html.twig */
class __TwigTemplate_0c2c60ce34cbd06a2a3ff7611541196667bdd5c29e3356f1ca2bbeb57bc1bab2 extends Twig_Template
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
        $__internal_06fcc63cffb7beb62a96a534ab309aa627a0afbeb845ba081cbe8396f3c0644a = $this->env->getExtension("native_profiler");
        $__internal_06fcc63cffb7beb62a96a534ab309aa627a0afbeb845ba081cbe8396f3c0644a->enter($__internal_06fcc63cffb7beb62a96a534ab309aa627a0afbeb845ba081cbe8396f3c0644a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_filter_field.html.twig"));

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
        
        $__internal_06fcc63cffb7beb62a96a534ab309aa627a0afbeb845ba081cbe8396f3c0644a->leave($__internal_06fcc63cffb7beb62a96a534ab309aa627a0afbeb845ba081cbe8396f3c0644a_prof);

    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        $__internal_21f4e51385fdb84ee12de3ed95e674de499cc38918834c5fa16c0569ff567c44 = $this->env->getExtension("native_profiler");
        $__internal_21f4e51385fdb84ee12de3ed95e674de499cc38918834c5fa16c0569ff567c44->enter($__internal_21f4e51385fdb84ee12de3ed95e674de499cc38918834c5fa16c0569ff567c44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

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
        
        $__internal_21f4e51385fdb84ee12de3ed95e674de499cc38918834c5fa16c0569ff567c44->leave($__internal_21f4e51385fdb84ee12de3ed95e674de499cc38918834c5fa16c0569ff567c44_prof);

    }

    // line 24
    public function block_field($context, array $blocks = array())
    {
        $__internal_8300af4de89b2c16c0a166a6d42ba8b80ea2cf6efe98916ee062b54c2cf3a68d = $this->env->getExtension("native_profiler");
        $__internal_8300af4de89b2c16c0a166a6d42ba8b80ea2cf6efe98916ee062b54c2cf3a68d->enter($__internal_8300af4de89b2c16c0a166a6d42ba8b80ea2cf6efe98916ee062b54c2cf3a68d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'widget');
        
        $__internal_8300af4de89b2c16c0a166a6d42ba8b80ea2cf6efe98916ee062b54c2cf3a68d->leave($__internal_8300af4de89b2c16c0a166a6d42ba8b80ea2cf6efe98916ee062b54c2cf3a68d_prof);

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
