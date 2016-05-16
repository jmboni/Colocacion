<?php

/* SonataAdminBundle:CRUD:show_percent.html.twig */
class __TwigTemplate_cfca76d030ada3e9cc6b4d20f4fde000fb94652b502b0a298df1b94ad89afc62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_percent.html.twig", 12);
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
        $__internal_f1567d27140e6748a2f3d60f640d50267d4c9b3211155eb0cceece0d5c177f93 = $this->env->getExtension("native_profiler");
        $__internal_f1567d27140e6748a2f3d60f640d50267d4c9b3211155eb0cceece0d5c177f93->enter($__internal_f1567d27140e6748a2f3d60f640d50267d4c9b3211155eb0cceece0d5c177f93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_percent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1567d27140e6748a2f3d60f640d50267d4c9b3211155eb0cceece0d5c177f93->leave($__internal_f1567d27140e6748a2f3d60f640d50267d4c9b3211155eb0cceece0d5c177f93_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_3a99697650b99fcaec83cb1b8b69581577e10a7b329fc547336378127ed871bd = $this->env->getExtension("native_profiler");
        $__internal_3a99697650b99fcaec83cb1b8b69581577e10a7b329fc547336378127ed871bd->enter($__internal_3a99697650b99fcaec83cb1b8b69581577e10a7b329fc547336378127ed871bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_3a99697650b99fcaec83cb1b8b69581577e10a7b329fc547336378127ed871bd->leave($__internal_3a99697650b99fcaec83cb1b8b69581577e10a7b329fc547336378127ed871bd_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_percent.html.twig";
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
/*     {% set value = value * 100 %}*/
/*     {{ value }} %*/
/* {% endblock %}*/
/* */
