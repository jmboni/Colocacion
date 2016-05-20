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
        $__internal_d96f97829209c40fff6270c3869b6e978f739a5e44886cda5ea9c046e538a8a5 = $this->env->getExtension("native_profiler");
        $__internal_d96f97829209c40fff6270c3869b6e978f739a5e44886cda5ea9c046e538a8a5->enter($__internal_d96f97829209c40fff6270c3869b6e978f739a5e44886cda5ea9c046e538a8a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DsgagenciaBundle:TrabajosAdmin:imagen.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d96f97829209c40fff6270c3869b6e978f739a5e44886cda5ea9c046e538a8a5->leave($__internal_d96f97829209c40fff6270c3869b6e978f739a5e44886cda5ea9c046e538a8a5_prof);

    }

    // line 2
    public function block_field($context, array $blocks = array())
    {
        $__internal_f170e39ac0d2a5831b4b7634279908e05cb5e8f2c2d6e08cb9604ed15a5c5e4b = $this->env->getExtension("native_profiler");
        $__internal_f170e39ac0d2a5831b4b7634279908e05cb5e8f2c2d6e08cb9604ed15a5c5e4b->enter($__internal_f170e39ac0d2a5831b4b7634279908e05cb5e8f2c2d6e08cb9604ed15a5c5e4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 3
        echo "    <img height=\"42\" class=\"img-responsive\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getWebPath", array())), "html", null, true);
        echo "\" />
";
        
        $__internal_f170e39ac0d2a5831b4b7634279908e05cb5e8f2c2d6e08cb9604ed15a5c5e4b->leave($__internal_f170e39ac0d2a5831b4b7634279908e05cb5e8f2c2d6e08cb9604ed15a5c5e4b_prof);

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
