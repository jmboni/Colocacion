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
        $__internal_e7b29d772bf915b775414ef85b898bd23f483ee2592607555618504713369f75 = $this->env->getExtension("native_profiler");
        $__internal_e7b29d772bf915b775414ef85b898bd23f483ee2592607555618504713369f75->enter($__internal_e7b29d772bf915b775414ef85b898bd23f483ee2592607555618504713369f75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_boolean.html.twig"));

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
        
        $__internal_e7b29d772bf915b775414ef85b898bd23f483ee2592607555618504713369f75->leave($__internal_e7b29d772bf915b775414ef85b898bd23f483ee2592607555618504713369f75_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_9382340bfbb5f7ad19ce79685eefb89a4139d6150c1ba411ad985d2de9660b0f = $this->env->getExtension("native_profiler");
        $__internal_9382340bfbb5f7ad19ce79685eefb89a4139d6150c1ba411ad985d2de9660b0f->enter($__internal_9382340bfbb5f7ad19ce79685eefb89a4139d6150c1ba411ad985d2de9660b0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
        
        $__internal_9382340bfbb5f7ad19ce79685eefb89a4139d6150c1ba411ad985d2de9660b0f->leave($__internal_9382340bfbb5f7ad19ce79685eefb89a4139d6150c1ba411ad985d2de9660b0f_prof);

    }

    // line 15
    public function block_label($context, array $blocks = array())
    {
        $__internal_c336b1d02be32da9b95f50e9e23f98c234a8810c9cfbb42b03cb42749b4e0c38 = $this->env->getExtension("native_profiler");
        $__internal_c336b1d02be32da9b95f50e9e23f98c234a8810c9cfbb42b03cb42749b4e0c38->enter($__internal_c336b1d02be32da9b95f50e9e23f98c234a8810c9cfbb42b03cb42749b4e0c38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

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
        
        $__internal_c336b1d02be32da9b95f50e9e23f98c234a8810c9cfbb42b03cb42749b4e0c38->leave($__internal_c336b1d02be32da9b95f50e9e23f98c234a8810c9cfbb42b03cb42749b4e0c38_prof);

    }

    // line 25
    public function block_errors($context, array $blocks = array())
    {
        $__internal_48468e068ef2d4ff129549a4a241897637b54c6f65c9d985926c1e5356dd4ec9 = $this->env->getExtension("native_profiler");
        $__internal_48468e068ef2d4ff129549a4a241897637b54c6f65c9d985926c1e5356dd4ec9->enter($__internal_48468e068ef2d4ff129549a4a241897637b54c6f65c9d985926c1e5356dd4ec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
        
        $__internal_48468e068ef2d4ff129549a4a241897637b54c6f65c9d985926c1e5356dd4ec9->leave($__internal_48468e068ef2d4ff129549a4a241897637b54c6f65c9d985926c1e5356dd4ec9_prof);

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
