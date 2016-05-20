<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_00eddd92f377c44684e657891b1b5bae619030a68e805a8dc98a94c869ae821f extends Twig_Template
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
        $__internal_c16956c32f26986c640ce33fbacad28cd1a1fa88a3df27e957e574675f742071 = $this->env->getExtension("native_profiler");
        $__internal_c16956c32f26986c640ce33fbacad28cd1a1fa88a3df27e957e574675f742071->enter($__internal_c16956c32f26986c640ce33fbacad28cd1a1fa88a3df27e957e574675f742071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_c16956c32f26986c640ce33fbacad28cd1a1fa88a3df27e957e574675f742071->leave($__internal_c16956c32f26986c640ce33fbacad28cd1a1fa88a3df27e957e574675f742071_prof);

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
