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
        $__internal_d22dac2ed8a8800f9e931a9c8ade1ec9ef23d41c24dcb7e97da32c01a1cf4e40 = $this->env->getExtension("native_profiler");
        $__internal_d22dac2ed8a8800f9e931a9c8ade1ec9ef23d41c24dcb7e97da32c01a1cf4e40->enter($__internal_d22dac2ed8a8800f9e931a9c8ade1ec9ef23d41c24dcb7e97da32c01a1cf4e40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_d22dac2ed8a8800f9e931a9c8ade1ec9ef23d41c24dcb7e97da32c01a1cf4e40->leave($__internal_d22dac2ed8a8800f9e931a9c8ade1ec9ef23d41c24dcb7e97da32c01a1cf4e40_prof);

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
