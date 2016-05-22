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
        $__internal_12351458cb0772ed2c2cc2091fa8138f324df0a6909a1cf6db4ab6c048b88294 = $this->env->getExtension("native_profiler");
        $__internal_12351458cb0772ed2c2cc2091fa8138f324df0a6909a1cf6db4ab6c048b88294->enter($__internal_12351458cb0772ed2c2cc2091fa8138f324df0a6909a1cf6db4ab6c048b88294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_boolean.html.twig"));

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
        
        $__internal_12351458cb0772ed2c2cc2091fa8138f324df0a6909a1cf6db4ab6c048b88294->leave($__internal_12351458cb0772ed2c2cc2091fa8138f324df0a6909a1cf6db4ab6c048b88294_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_593f45dcadca0b1e00f6bf8e20a03d91176cb753c28359f41b88d10dade8bc18 = $this->env->getExtension("native_profiler");
        $__internal_593f45dcadca0b1e00f6bf8e20a03d91176cb753c28359f41b88d10dade8bc18->enter($__internal_593f45dcadca0b1e00f6bf8e20a03d91176cb753c28359f41b88d10dade8bc18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
        
        $__internal_593f45dcadca0b1e00f6bf8e20a03d91176cb753c28359f41b88d10dade8bc18->leave($__internal_593f45dcadca0b1e00f6bf8e20a03d91176cb753c28359f41b88d10dade8bc18_prof);

    }

    // line 15
    public function block_label($context, array $blocks = array())
    {
        $__internal_9c32f5e91b550a2f45094aba38596ed58bad611cc308837830a044f5ba2ee9db = $this->env->getExtension("native_profiler");
        $__internal_9c32f5e91b550a2f45094aba38596ed58bad611cc308837830a044f5ba2ee9db->enter($__internal_9c32f5e91b550a2f45094aba38596ed58bad611cc308837830a044f5ba2ee9db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

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
        
        $__internal_9c32f5e91b550a2f45094aba38596ed58bad611cc308837830a044f5ba2ee9db->leave($__internal_9c32f5e91b550a2f45094aba38596ed58bad611cc308837830a044f5ba2ee9db_prof);

    }

    // line 25
    public function block_errors($context, array $blocks = array())
    {
        $__internal_8aa524e2874b24cbb9aa681e939dade540e1c7ef2ee6c3eadb1262d78390bf3e = $this->env->getExtension("native_profiler");
        $__internal_8aa524e2874b24cbb9aa681e939dade540e1c7ef2ee6c3eadb1262d78390bf3e->enter($__internal_8aa524e2874b24cbb9aa681e939dade540e1c7ef2ee6c3eadb1262d78390bf3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
        
        $__internal_8aa524e2874b24cbb9aa681e939dade540e1c7ef2ee6c3eadb1262d78390bf3e->leave($__internal_8aa524e2874b24cbb9aa681e939dade540e1c7ef2ee6c3eadb1262d78390bf3e_prof);

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
