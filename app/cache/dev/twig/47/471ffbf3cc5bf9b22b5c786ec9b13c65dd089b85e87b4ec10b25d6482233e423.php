<?php

/* DsgagenciaBundle:TrabajosAdmin:imagen.html.twig */
class __TwigTemplate_2700a9cb2139583da70d73c0edeb8004f9cc4f1c57783725e32613ffe0774bd2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list_field.html.twig", "DsgagenciaBundle:TrabajosAdmin:imagen.html.twig", 1);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4c23b85e7a066bb464c769b44d1d0c4cb91d98cc5377abd3ebf2c4cd6e4b87ea = $this->env->getExtension("native_profiler");
        $__internal_4c23b85e7a066bb464c769b44d1d0c4cb91d98cc5377abd3ebf2c4cd6e4b87ea->enter($__internal_4c23b85e7a066bb464c769b44d1d0c4cb91d98cc5377abd3ebf2c4cd6e4b87ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DsgagenciaBundle:TrabajosAdmin:imagen.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c23b85e7a066bb464c769b44d1d0c4cb91d98cc5377abd3ebf2c4cd6e4b87ea->leave($__internal_4c23b85e7a066bb464c769b44d1d0c4cb91d98cc5377abd3ebf2c4cd6e4b87ea_prof);

    }

    // line 2
    public function block_field($context, array $blocks = array())
    {
        $__internal_954687068e2a21b5ad8bb09a1c7119a00798043155795e2677f221d437271507 = $this->env->getExtension("native_profiler");
        $__internal_954687068e2a21b5ad8bb09a1c7119a00798043155795e2677f221d437271507->enter($__internal_954687068e2a21b5ad8bb09a1c7119a00798043155795e2677f221d437271507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 3
        echo "    <img height=\"42\" class=\"img-responsive\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getWebPath", array())), "html", null, true);
        echo "\" />
";
        
        $__internal_954687068e2a21b5ad8bb09a1c7119a00798043155795e2677f221d437271507->leave($__internal_954687068e2a21b5ad8bb09a1c7119a00798043155795e2677f221d437271507_prof);

    }

    public function getTemplateName()
    {
        return "DsgagenciaBundle:TrabajosAdmin:imagen.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'SonataAdminBundle:CRUD:base_list_field.html.twig' %}*/
/* {% block field%}*/
/*     <img height="42" class="img-responsive" src="{{ asset(object.getWebPath) }}" />*/
/* {% endblock %}*/
/* */
