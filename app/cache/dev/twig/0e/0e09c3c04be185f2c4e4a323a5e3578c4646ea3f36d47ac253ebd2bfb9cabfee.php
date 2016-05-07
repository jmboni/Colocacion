<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_ee3323bb4c16cd51f0be3660f057c87ab0c5b913ed0dc484c0f2a8ed15f978be extends Twig_Template
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
        $__internal_c783077a04b2109d5302640acdc3e330f8f151b28a5527ea5e0e6d1d8d8845b5 = $this->env->getExtension("native_profiler");
        $__internal_c783077a04b2109d5302640acdc3e330f8f151b28a5527ea5e0e6d1d8d8845b5->enter($__internal_c783077a04b2109d5302640acdc3e330f8f151b28a5527ea5e0e6d1d8d8845b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_c783077a04b2109d5302640acdc3e330f8f151b28a5527ea5e0e6d1d8d8845b5->leave($__internal_c783077a04b2109d5302640acdc3e330f8f151b28a5527ea5e0e6d1d8d8845b5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
/* {% include 'TwigBundle:Exception:exception.xml.twig' with { 'exception': exception } %}*/
/* */
