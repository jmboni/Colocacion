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
        $__internal_21a430b718cfeb6e52b7bbfb6178ea8c4c99ea3d64577123f851fdf562069ee9 = $this->env->getExtension("native_profiler");
        $__internal_21a430b718cfeb6e52b7bbfb6178ea8c4c99ea3d64577123f851fdf562069ee9->enter($__internal_21a430b718cfeb6e52b7bbfb6178ea8c4c99ea3d64577123f851fdf562069ee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DsgagenciaBundle:TrabajosAdmin:imagen.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21a430b718cfeb6e52b7bbfb6178ea8c4c99ea3d64577123f851fdf562069ee9->leave($__internal_21a430b718cfeb6e52b7bbfb6178ea8c4c99ea3d64577123f851fdf562069ee9_prof);

    }

    // line 2
    public function block_field($context, array $blocks = array())
    {
        $__internal_9b7a1f374d05d8bdeb5cbe7251cc0387d6033f8765c0f08ec96b7da05a451819 = $this->env->getExtension("native_profiler");
        $__internal_9b7a1f374d05d8bdeb5cbe7251cc0387d6033f8765c0f08ec96b7da05a451819->enter($__internal_9b7a1f374d05d8bdeb5cbe7251cc0387d6033f8765c0f08ec96b7da05a451819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 3
        echo "    <img height=\"42\" class=\"img-responsive\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getWebPath", array())), "html", null, true);
        echo "\" />
";
        
        $__internal_9b7a1f374d05d8bdeb5cbe7251cc0387d6033f8765c0f08ec96b7da05a451819->leave($__internal_9b7a1f374d05d8bdeb5cbe7251cc0387d6033f8765c0f08ec96b7da05a451819_prof);

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
