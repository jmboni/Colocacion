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
        $__internal_4483cc52f485030c1c1fc005df4308326bb536a60c053854dd86160ce973ca03 = $this->env->getExtension("native_profiler");
        $__internal_4483cc52f485030c1c1fc005df4308326bb536a60c053854dd86160ce973ca03->enter($__internal_4483cc52f485030c1c1fc005df4308326bb536a60c053854dd86160ce973ca03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_4483cc52f485030c1c1fc005df4308326bb536a60c053854dd86160ce973ca03->leave($__internal_4483cc52f485030c1c1fc005df4308326bb536a60c053854dd86160ce973ca03_prof);

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
