<?php

/* DsgagenciaBundle:Default:index.html.twig */
class __TwigTemplate_5c03e1d48d2e73b991fb6cf7f26a8c1496c6792bef013cf932bc12719aeaff39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_efb55fa3766f95938da91bab3ba45ce7256b1795483da6037ae4dd2443b3811b = $this->env->getExtension("native_profiler");
        $__internal_efb55fa3766f95938da91bab3ba45ce7256b1795483da6037ae4dd2443b3811b->enter($__internal_efb55fa3766f95938da91bab3ba45ce7256b1795483da6037ae4dd2443b3811b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DsgagenciaBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_efb55fa3766f95938da91bab3ba45ce7256b1795483da6037ae4dd2443b3811b->leave($__internal_efb55fa3766f95938da91bab3ba45ce7256b1795483da6037ae4dd2443b3811b_prof);

    }

    public function getTemplateName()
    {
        return "DsgagenciaBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* Hello {{ name }}!*/
/* */
