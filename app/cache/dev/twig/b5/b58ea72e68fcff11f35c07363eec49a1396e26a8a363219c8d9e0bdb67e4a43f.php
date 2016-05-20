<?php

/* SonataAdminBundle:CRUD:show_currency.html.twig */
class __TwigTemplate_61b36863027c059b9a2ffb52874b65a23325c7c0535306c53c3c01a10dadcf6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_currency.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_11df32e8cce0b78bff57a7fb0c299a82e0aeed71cd325b818536af4bc78d64c9 = $this->env->getExtension("native_profiler");
        $__internal_11df32e8cce0b78bff57a7fb0c299a82e0aeed71cd325b818536af4bc78d64c9->enter($__internal_11df32e8cce0b78bff57a7fb0c299a82e0aeed71cd325b818536af4bc78d64c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_currency.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11df32e8cce0b78bff57a7fb0c299a82e0aeed71cd325b818536af4bc78d64c9->leave($__internal_11df32e8cce0b78bff57a7fb0c299a82e0aeed71cd325b818536af4bc78d64c9_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_45ebb8fc75f07bc6f6840000344884c5c8e2daab05a34f96c37195e14d57dcab = $this->env->getExtension("native_profiler");
        $__internal_45ebb8fc75f07bc6f6840000344884c5c8e2daab05a34f96c37195e14d57dcab->enter($__internal_45ebb8fc75f07bc6f6840000344884c5c8e2daab05a34f96c37195e14d57dcab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_45ebb8fc75f07bc6f6840000344884c5c8e2daab05a34f96c37195e14d57dcab->leave($__internal_45ebb8fc75f07bc6f6840000344884c5c8e2daab05a34f96c37195e14d57dcab_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_currency.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
/* {% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}*/
/* */
/* {% block field %}*/
/*     {% if value is not null %}*/
/*         {{ field_description.options.currency }} {{ value }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
