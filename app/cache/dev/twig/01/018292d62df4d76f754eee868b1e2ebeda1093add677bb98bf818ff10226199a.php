<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_a55e2869fb07c1ce9d0e4ab83e10111d39aae8cec5ee16f635c0f644090453c2 extends Twig_Template
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
        $__internal_3ee7282ac5e17f34b9a4ebbcbbd20b280458a16e18282e30735b9a57981e0b65 = $this->env->getExtension("native_profiler");
        $__internal_3ee7282ac5e17f34b9a4ebbcbbd20b280458a16e18282e30735b9a57981e0b65->enter($__internal_3ee7282ac5e17f34b9a4ebbcbbd20b280458a16e18282e30735b9a57981e0b65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_3ee7282ac5e17f34b9a4ebbcbbd20b280458a16e18282e30735b9a57981e0b65->leave($__internal_3ee7282ac5e17f34b9a4ebbcbbd20b280458a16e18282e30735b9a57981e0b65_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include 'TwigBundle:Exception:exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
