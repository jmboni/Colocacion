<?php

/* DsgagenciaBundle:TrabajosAdmin:imagen.html.twig */
class __TwigTemplate_b9b8a362493e6e3d2bebcd7561c5ea10093387091982209007423a30aef47398 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_field($context, array $blocks = array())
    {
        // line 3
        echo "    <img height=\"42\" class=\"img-responsive\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["object"]) ? $context["object"] : null), "getWebPath", array())), "html", null, true);
        echo "\" />
";
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
        return array (  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'SonataAdminBundle:CRUD:base_list_field.html.twig' %}*/
/* {% block field%}*/
/*     <img height="42" class="img-responsive" src="{{ asset(object.getWebPath) }}" />*/
/* {% endblock %}*/
/* */
