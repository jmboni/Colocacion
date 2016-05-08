<?php

/* DsgagenciaBundle:Trabajos:edit.html.twig */
class __TwigTemplate_2430e8a66f9a328f25c4181630861e31beaa22a803a5ee534952ba94d71e1a06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DsgagenciaBundle::layout.html.twig", "DsgagenciaBundle:Trabajos:edit.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DsgagenciaBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dc7df1f31799a574e4bdc1886360f8544d4c43763abe6b37e8868841a591b385 = $this->env->getExtension("native_profiler");
        $__internal_dc7df1f31799a574e4bdc1886360f8544d4c43763abe6b37e8868841a591b385->enter($__internal_dc7df1f31799a574e4bdc1886360f8544d4c43763abe6b37e8868841a591b385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DsgagenciaBundle:Trabajos:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc7df1f31799a574e4bdc1886360f8544d4c43763abe6b37e8868841a591b385->leave($__internal_dc7df1f31799a574e4bdc1886360f8544d4c43763abe6b37e8868841a591b385_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a497871069a001b6b782d0784e13f1d6be9b64dd09725174cf0daa3d0a22fbe4 = $this->env->getExtension("native_profiler");
        $__internal_a497871069a001b6b782d0784e13f1d6be9b64dd09725174cf0daa3d0a22fbe4->enter($__internal_a497871069a001b6b782d0784e13f1d6be9b64dd09725174cf0daa3d0a22fbe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <!-- CSS carousel-->
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/dsgagencia/css/job.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a497871069a001b6b782d0784e13f1d6be9b64dd09725174cf0daa3d0a22fbe4->leave($__internal_a497871069a001b6b782d0784e13f1d6be9b64dd09725174cf0daa3d0a22fbe4_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_b7b190fc409eb9958f98c705ffaaad2edf6e74892388512c677875c323d1a517 = $this->env->getExtension("native_profiler");
        $__internal_b7b190fc409eb9958f98c705ffaaad2edf6e74892388512c677875c323d1a517->enter($__internal_b7b190fc409eb9958f98c705ffaaad2edf6e74892388512c677875c323d1a517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <h1>Trabajos edit</h1>

    ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("trabajos");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>";
        // line 21
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_b7b190fc409eb9958f98c705ffaaad2edf6e74892388512c677875c323d1a517->leave($__internal_b7b190fc409eb9958f98c705ffaaad2edf6e74892388512c677875c323d1a517_prof);

    }

    public function getTemplateName()
    {
        return "DsgagenciaBundle:Trabajos:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 21,  76 => 17,  69 => 13,  62 => 10,  56 => 9,  47 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'DsgagenciaBundle::layout.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <!-- CSS carousel-->*/
/*     <link rel="stylesheet" href="{{ asset('bundles/dsgagencia/css/job.css') }}" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {{ parent() }}*/
/*     <h1>Trabajos edit</h1>*/
/* */
/*     {{ form(edit_form) }}*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('trabajos') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/*     <li>{{ form(delete_form) }}</li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
