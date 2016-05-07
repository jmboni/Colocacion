<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_b39dd851fda1efd1b285b67caa248f12447d0134920753062d7c52d5b33dac1c extends Twig_Template
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
        $__internal_76653a11a7431eb7daf1a6b877d4564f9d14d006c081955e2777302008461010 = $this->env->getExtension("native_profiler");
        $__internal_76653a11a7431eb7daf1a6b877d4564f9d14d006c081955e2777302008461010->enter($__internal_76653a11a7431eb7daf1a6b877d4564f9d14d006c081955e2777302008461010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_76653a11a7431eb7daf1a6b877d4564f9d14d006c081955e2777302008461010->leave($__internal_76653a11a7431eb7daf1a6b877d4564f9d14d006c081955e2777302008461010_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
