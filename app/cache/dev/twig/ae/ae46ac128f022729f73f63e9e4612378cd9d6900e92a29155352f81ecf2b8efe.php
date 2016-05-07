<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_7f8243bba5ba37a60a6740413eae7dc513a15a47aba6e84eb94822e8ed084e95 extends Twig_Template
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
        $__internal_df4d5da17fd42b1d04213f18f4c4b0746007f7b7fa7e94ab4214f10ba1f87c5d = $this->env->getExtension("native_profiler");
        $__internal_df4d5da17fd42b1d04213f18f4c4b0746007f7b7fa7e94ab4214f10ba1f87c5d->enter($__internal_df4d5da17fd42b1d04213f18f4c4b0746007f7b7fa7e94ab4214f10ba1f87c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_df4d5da17fd42b1d04213f18f4c4b0746007f7b7fa7e94ab4214f10ba1f87c5d->leave($__internal_df4d5da17fd42b1d04213f18f4c4b0746007f7b7fa7e94ab4214f10ba1f87c5d_prof);

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
