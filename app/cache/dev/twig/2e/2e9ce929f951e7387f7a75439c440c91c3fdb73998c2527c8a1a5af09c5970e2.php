<?php

/* SonataAdminBundle:CRUD:edit_boolean.html.twig */
class __TwigTemplate_c791de609a00b8b5f1b3e62ed32b709fc92cef835e96849c64ee8bb03d51da58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'label' => array($this, 'block_label'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eb565517a013da36bf133fed090fe2233fdf3ea3a3c466fc7fd47c8bef5f3a93 = $this->env->getExtension("native_profiler");
        $__internal_eb565517a013da36bf133fed090fe2233fdf3ea3a3c466fc7fd47c8bef5f3a93->enter($__internal_eb565517a013da36bf133fed090fe2233fdf3ea3a3c466fc7fd47c8bef5f3a93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_boolean.html.twig"));

        // line 11
        echo "
<div>
    <div class=\"sonata-ba-field ";
        // line 13
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "vars", array()), "errors", array())) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 14
        $this->displayBlock('field', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('label', $context, $blocks);
        // line 23
        echo "
        <div class=\"sonata-ba-field-error-messages\">
            ";
        // line 25
        $this->displayBlock('errors', $context, $blocks);
        // line 26
        echo "        </div>

    </div>
</div>
";
        
        $__internal_eb565517a013da36bf133fed090fe2233fdf3ea3a3c466fc7fd47c8bef5f3a93->leave($__internal_eb565517a013da36bf133fed090fe2233fdf3ea3a3c466fc7fd47c8bef5f3a93_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_b0442bab59c66218ab58931fa754cfe4de688b0a145e95f3c0c23538ff5160ad = $this->env->getExtension("native_profiler");
        $__internal_b0442bab59c66218ab58931fa754cfe4de688b0a145e95f3c0c23538ff5160ad->enter($__internal_b0442bab59c66218ab58931fa754cfe4de688b0a145e95f3c0c23538ff5160ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
        
        $__internal_b0442bab59c66218ab58931fa754cfe4de688b0a145e95f3c0c23538ff5160ad->leave($__internal_b0442bab59c66218ab58931fa754cfe4de688b0a145e95f3c0c23538ff5160ad_prof);

    }

    // line 15
    public function block_label($context, array $blocks = array())
    {
        $__internal_003390d61d92fd32c5326af7011c299e39ef6b2941d28cd2be1cba060c4fec8c = $this->env->getExtension("native_profiler");
        $__internal_003390d61d92fd32c5326af7011c299e39ef6b2941d28cd2be1cba060c4fec8c->enter($__internal_003390d61d92fd32c5326af7011c299e39ef6b2941d28cd2be1cba060c4fec8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

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
        
        $__internal_003390d61d92fd32c5326af7011c299e39ef6b2941d28cd2be1cba060c4fec8c->leave($__internal_003390d61d92fd32c5326af7011c299e39ef6b2941d28cd2be1cba060c4fec8c_prof);

    }

    // line 25
    public function block_errors($context, array $blocks = array())
    {
        $__internal_79a103546e038fca5b2674cc2e5d00306fa0d98c8e4e3b2329b2aedf6f502ef4 = $this->env->getExtension("native_profiler");
        $__internal_79a103546e038fca5b2674cc2e5d00306fa0d98c8e4e3b2329b2aedf6f502ef4->enter($__internal_79a103546e038fca5b2674cc2e5d00306fa0d98c8e4e3b2329b2aedf6f502ef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
        
        $__internal_79a103546e038fca5b2674cc2e5d00306fa0d98c8e4e3b2329b2aedf6f502ef4->leave($__internal_79a103546e038fca5b2674cc2e5d00306fa0d98c8e4e3b2329b2aedf6f502ef4_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 25,  90 => 21,  84 => 19,  78 => 17,  75 => 16,  69 => 15,  57 => 14,  46 => 26,  44 => 25,  40 => 23,  37 => 15,  35 => 14,  29 => 13,  25 => 11,);
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
/* <div>*/
/*     <div class="sonata-ba-field {% if field_element.vars.errors|length > 0 %}sonata-ba-field-error{% endif %}">*/
/*         {% block field %}{{ form_widget(field_element) }}{% endblock %}*/
/*         {% block label %}*/
/*             {% if field_description.options.name is defined %}*/
/*                 {{ form_label(field_element, field_description.options.name) }}*/
/*             {% else %}*/
/*                 {{ form_label(field_element) }}*/
/*             {% endif %}*/
/*             <br>*/
/*         {% endblock %}*/
/* */
/*         <div class="sonata-ba-field-error-messages">*/
/*             {% block errors %}{{ form_errors(field_element) }}{% endblock %}*/
/*         </div>*/
/* */
/*     </div>*/
/* </div>*/
/* */
