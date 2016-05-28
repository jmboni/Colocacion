<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_b39649b6399174290a2ff03dac0261ee5c65335840f025f6977e4f4170edbf91 extends Twig_Template
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
        $__internal_358f76d7eae60b8156ab1df328956d0aae9959a3495efbcf4d1f89be4da30308 = $this->env->getExtension("native_profiler");
        $__internal_358f76d7eae60b8156ab1df328956d0aae9959a3495efbcf4d1f89be4da30308->enter($__internal_358f76d7eae60b8156ab1df328956d0aae9959a3495efbcf4d1f89be4da30308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_358f76d7eae60b8156ab1df328956d0aae9959a3495efbcf4d1f89be4da30308->leave($__internal_358f76d7eae60b8156ab1df328956d0aae9959a3495efbcf4d1f89be4da30308_prof);

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
