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
        $__internal_80e61ddfb342833372c07daabb4450fb45c4f59c85583aae9afa69391dcad04f = $this->env->getExtension("native_profiler");
        $__internal_80e61ddfb342833372c07daabb4450fb45c4f59c85583aae9afa69391dcad04f->enter($__internal_80e61ddfb342833372c07daabb4450fb45c4f59c85583aae9afa69391dcad04f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_boolean.html.twig"));

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
        
        $__internal_80e61ddfb342833372c07daabb4450fb45c4f59c85583aae9afa69391dcad04f->leave($__internal_80e61ddfb342833372c07daabb4450fb45c4f59c85583aae9afa69391dcad04f_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_acbf2a7071f8b5b6cd1b9ccc330b56b4a9664165c38a2e477de4b50f6ad13659 = $this->env->getExtension("native_profiler");
        $__internal_acbf2a7071f8b5b6cd1b9ccc330b56b4a9664165c38a2e477de4b50f6ad13659->enter($__internal_acbf2a7071f8b5b6cd1b9ccc330b56b4a9664165c38a2e477de4b50f6ad13659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
        
        $__internal_acbf2a7071f8b5b6cd1b9ccc330b56b4a9664165c38a2e477de4b50f6ad13659->leave($__internal_acbf2a7071f8b5b6cd1b9ccc330b56b4a9664165c38a2e477de4b50f6ad13659_prof);

    }

    // line 15
    public function block_label($context, array $blocks = array())
    {
        $__internal_dac22669b32eaad8e8546d3c339b8e0dee2ec230ac3c2310aeb81f366c30686f = $this->env->getExtension("native_profiler");
        $__internal_dac22669b32eaad8e8546d3c339b8e0dee2ec230ac3c2310aeb81f366c30686f->enter($__internal_dac22669b32eaad8e8546d3c339b8e0dee2ec230ac3c2310aeb81f366c30686f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

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
        
        $__internal_dac22669b32eaad8e8546d3c339b8e0dee2ec230ac3c2310aeb81f366c30686f->leave($__internal_dac22669b32eaad8e8546d3c339b8e0dee2ec230ac3c2310aeb81f366c30686f_prof);

    }

    // line 25
    public function block_errors($context, array $blocks = array())
    {
        $__internal_d185491125b0a49f7eec091b8eec74843fefdfa43d70f0d4e10d7876d65af234 = $this->env->getExtension("native_profiler");
        $__internal_d185491125b0a49f7eec091b8eec74843fefdfa43d70f0d4e10d7876d65af234->enter($__internal_d185491125b0a49f7eec091b8eec74843fefdfa43d70f0d4e10d7876d65af234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
        
        $__internal_d185491125b0a49f7eec091b8eec74843fefdfa43d70f0d4e10d7876d65af234->leave($__internal_d185491125b0a49f7eec091b8eec74843fefdfa43d70f0d4e10d7876d65af234_prof);

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
