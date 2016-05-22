<?php

/* SonataAdminBundle:CRUD:list_currency.html.twig */
class __TwigTemplate_eb2e9df0a455afa406b6313727596faf91755598a787d9c8423d5fc611d676a6 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_currency.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2319b1249ae0bddc322d023a16fb6d638399ef215111261296e8aec823782356 = $this->env->getExtension("native_profiler");
        $__internal_2319b1249ae0bddc322d023a16fb6d638399ef215111261296e8aec823782356->enter($__internal_2319b1249ae0bddc322d023a16fb6d638399ef215111261296e8aec823782356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_currency.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2319b1249ae0bddc322d023a16fb6d638399ef215111261296e8aec823782356->leave($__internal_2319b1249ae0bddc322d023a16fb6d638399ef215111261296e8aec823782356_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_ef54e84cd64aafec9c6ea6055856db98fdc05f738cc4f46060a5ad1e63e4e1c7 = $this->env->getExtension("native_profiler");
        $__internal_ef54e84cd64aafec9c6ea6055856db98fdc05f738cc4f46060a5ad1e63e4e1c7->enter($__internal_ef54e84cd64aafec9c6ea6055856db98fdc05f738cc4f46060a5ad1e63e4e1c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ( !(null === (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_ef54e84cd64aafec9c6ea6055856db98fdc05f738cc4f46060a5ad1e63e4e1c7->leave($__internal_ef54e84cd64aafec9c6ea6055856db98fdc05f738cc4f46060a5ad1e63e4e1c7_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_currency.html.twig";
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
/* {% extends admin.getTemplate('base_list_field') %}*/
/* */
/* {% block field %}*/
/*     {% if value is not null %}*/
/*         {{ field_description.options.currency }} {{ value }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
