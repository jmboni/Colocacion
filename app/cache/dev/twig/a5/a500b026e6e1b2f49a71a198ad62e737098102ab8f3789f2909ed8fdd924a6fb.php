<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_175acb6ba8f79bd0d9dcb4a09c48a84f62006fcb6b0a598a8616438673b22021 extends Twig_Template
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
        $__internal_2068ffd754352804a5bd82bd409f23c50d0d31c09b99298d192e29936a687aae = $this->env->getExtension("native_profiler");
        $__internal_2068ffd754352804a5bd82bd409f23c50d0d31c09b99298d192e29936a687aae->enter($__internal_2068ffd754352804a5bd82bd409f23c50d0d31c09b99298d192e29936a687aae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_2068ffd754352804a5bd82bd409f23c50d0d31c09b99298d192e29936a687aae->leave($__internal_2068ffd754352804a5bd82bd409f23c50d0d31c09b99298d192e29936a687aae_prof);

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
