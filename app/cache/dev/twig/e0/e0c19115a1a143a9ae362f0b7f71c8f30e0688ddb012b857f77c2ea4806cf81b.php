<?php

/* DsgagenciaBundle:TrabajosAdmin:imagen.html.twig */
class __TwigTemplate_a8dd8a9353de3e34e8caf1e3abacfc6227df8d67951b9557a99554a8c3ff22f8 extends Twig_Template
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
        $__internal_ce551075ef562a5b326cad1af5445feced708d5826bd2bc30da3543b8d7d7d52 = $this->env->getExtension("native_profiler");
        $__internal_ce551075ef562a5b326cad1af5445feced708d5826bd2bc30da3543b8d7d7d52->enter($__internal_ce551075ef562a5b326cad1af5445feced708d5826bd2bc30da3543b8d7d7d52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DsgagenciaBundle:TrabajosAdmin:imagen.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce551075ef562a5b326cad1af5445feced708d5826bd2bc30da3543b8d7d7d52->leave($__internal_ce551075ef562a5b326cad1af5445feced708d5826bd2bc30da3543b8d7d7d52_prof);

    }

    // line 2
    public function block_field($context, array $blocks = array())
    {
        $__internal_15ce62b370f1ef9edb74eccf9b8520635de92a5e6bc31083af4c3354032fa3bd = $this->env->getExtension("native_profiler");
        $__internal_15ce62b370f1ef9edb74eccf9b8520635de92a5e6bc31083af4c3354032fa3bd->enter($__internal_15ce62b370f1ef9edb74eccf9b8520635de92a5e6bc31083af4c3354032fa3bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 3
        echo "    <img height=\"42\" class=\"img-responsive\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getWebPath", array())), "html", null, true);
        echo "\" />
";
        
        $__internal_15ce62b370f1ef9edb74eccf9b8520635de92a5e6bc31083af4c3354032fa3bd->leave($__internal_15ce62b370f1ef9edb74eccf9b8520635de92a5e6bc31083af4c3354032fa3bd_prof);

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
