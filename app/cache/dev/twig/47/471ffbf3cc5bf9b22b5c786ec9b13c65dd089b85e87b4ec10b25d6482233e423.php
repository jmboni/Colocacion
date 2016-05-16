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
        $__internal_f6a27a412b5ae02747efc4c7b8b081e1a1e9887bbdf884a60f820d95214751cd = $this->env->getExtension("native_profiler");
        $__internal_f6a27a412b5ae02747efc4c7b8b081e1a1e9887bbdf884a60f820d95214751cd->enter($__internal_f6a27a412b5ae02747efc4c7b8b081e1a1e9887bbdf884a60f820d95214751cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DsgagenciaBundle:TrabajosAdmin:imagen.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6a27a412b5ae02747efc4c7b8b081e1a1e9887bbdf884a60f820d95214751cd->leave($__internal_f6a27a412b5ae02747efc4c7b8b081e1a1e9887bbdf884a60f820d95214751cd_prof);

    }

    // line 2
    public function block_field($context, array $blocks = array())
    {
        $__internal_b86a753f8efcd2933c482f829f58550dfdbdf393682ab79bfa1a56a858ab6b37 = $this->env->getExtension("native_profiler");
        $__internal_b86a753f8efcd2933c482f829f58550dfdbdf393682ab79bfa1a56a858ab6b37->enter($__internal_b86a753f8efcd2933c482f829f58550dfdbdf393682ab79bfa1a56a858ab6b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 3
        echo "    <img height=\"42\" class=\"img-responsive\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getWebPath", array())), "html", null, true);
        echo "\" />
";
        
        $__internal_b86a753f8efcd2933c482f829f58550dfdbdf393682ab79bfa1a56a858ab6b37->leave($__internal_b86a753f8efcd2933c482f829f58550dfdbdf393682ab79bfa1a56a858ab6b37_prof);

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
