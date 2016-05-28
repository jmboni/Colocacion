<?php

/* DsgagenciaBundle:Default:index.html.twig */
class __TwigTemplate_6584c72c625cf500ee6a75d537cb802d73f23be3226631b85c0aa0cf90fbbb18 extends Twig_Template
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
        $__internal_108b1492f17fddb33ea8cdae40dc150020a565b5d75519e164f38e3bc87a6aab = $this->env->getExtension("native_profiler");
        $__internal_108b1492f17fddb33ea8cdae40dc150020a565b5d75519e164f38e3bc87a6aab->enter($__internal_108b1492f17fddb33ea8cdae40dc150020a565b5d75519e164f38e3bc87a6aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DsgagenciaBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_108b1492f17fddb33ea8cdae40dc150020a565b5d75519e164f38e3bc87a6aab->leave($__internal_108b1492f17fddb33ea8cdae40dc150020a565b5d75519e164f38e3bc87a6aab_prof);

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
