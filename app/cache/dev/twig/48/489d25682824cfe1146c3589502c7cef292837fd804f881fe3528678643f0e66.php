<?php

/* SonataAdminBundle:CRUD:list_percent.html.twig */
class __TwigTemplate_8966225536e06960095efa712f195a4d2d51df98ea714ab925224a9237791352 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_percent.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6deb5ce30e3d3936fb7f6c60fdc0edc1c348d7898d6d2e97cbfd84be07be312a = $this->env->getExtension("native_profiler");
        $__internal_6deb5ce30e3d3936fb7f6c60fdc0edc1c348d7898d6d2e97cbfd84be07be312a->enter($__internal_6deb5ce30e3d3936fb7f6c60fdc0edc1c348d7898d6d2e97cbfd84be07be312a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_percent.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6deb5ce30e3d3936fb7f6c60fdc0edc1c348d7898d6d2e97cbfd84be07be312a->leave($__internal_6deb5ce30e3d3936fb7f6c60fdc0edc1c348d7898d6d2e97cbfd84be07be312a_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_cad9fbdd28087af3cd857c038fb425b79d0a6c709d1d65c70705995395972e71 = $this->env->getExtension("native_profiler");
        $__internal_cad9fbdd28087af3cd857c038fb425b79d0a6c709d1d65c70705995395972e71->enter($__internal_cad9fbdd28087af3cd857c038fb425b79d0a6c709d1d65c70705995395972e71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_cad9fbdd28087af3cd857c038fb425b79d0a6c709d1d65c70705995395972e71->leave($__internal_cad9fbdd28087af3cd857c038fb425b79d0a6c709d1d65c70705995395972e71_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_percent.html.twig";
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
/*     {% set value = value * 100 %}*/
/*     {{ value }} %*/
/* {% endblock %}*/
/* */
