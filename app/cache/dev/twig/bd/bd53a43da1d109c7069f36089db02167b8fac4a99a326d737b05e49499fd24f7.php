<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_30db9f84d12395e14073a22659fc3bf57528bd2f66879af0646365b856fcc5c5 extends Twig_Template
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
        $__internal_65ea5f9e3967c71355cdbf53b15de323e95e92a3913221ad459829deb630a60d = $this->env->getExtension("native_profiler");
        $__internal_65ea5f9e3967c71355cdbf53b15de323e95e92a3913221ad459829deb630a60d->enter($__internal_65ea5f9e3967c71355cdbf53b15de323e95e92a3913221ad459829deb630a60d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_65ea5f9e3967c71355cdbf53b15de323e95e92a3913221ad459829deb630a60d->leave($__internal_65ea5f9e3967c71355cdbf53b15de323e95e92a3913221ad459829deb630a60d_prof);

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
