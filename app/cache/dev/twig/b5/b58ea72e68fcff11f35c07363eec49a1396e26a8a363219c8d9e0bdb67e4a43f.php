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
        $__internal_505a4c40346b422305e79b42d10414fa6412f7f6e0e2264d652d9ba42913a384 = $this->env->getExtension("native_profiler");
        $__internal_505a4c40346b422305e79b42d10414fa6412f7f6e0e2264d652d9ba42913a384->enter($__internal_505a4c40346b422305e79b42d10414fa6412f7f6e0e2264d652d9ba42913a384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_currency.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_505a4c40346b422305e79b42d10414fa6412f7f6e0e2264d652d9ba42913a384->leave($__internal_505a4c40346b422305e79b42d10414fa6412f7f6e0e2264d652d9ba42913a384_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_805fc782b81375759ff33e2d35260074ed98c189d78b5afb16f5ea56e8e41a44 = $this->env->getExtension("native_profiler");
        $__internal_805fc782b81375759ff33e2d35260074ed98c189d78b5afb16f5ea56e8e41a44->enter($__internal_805fc782b81375759ff33e2d35260074ed98c189d78b5afb16f5ea56e8e41a44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_805fc782b81375759ff33e2d35260074ed98c189d78b5afb16f5ea56e8e41a44->leave($__internal_805fc782b81375759ff33e2d35260074ed98c189d78b5afb16f5ea56e8e41a44_prof);

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
