<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_91454746e4903d1510489b00d1d97aa74c7c3e55d60c511259efd7e3b52477c3 extends Twig_Template
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
        $__internal_65c7bc9f9dcc44eaa168d9b3b4a4bd825b76dfe90c84270b072da2bfa453142c = $this->env->getExtension("native_profiler");
        $__internal_65c7bc9f9dcc44eaa168d9b3b4a4bd825b76dfe90c84270b072da2bfa453142c->enter($__internal_65c7bc9f9dcc44eaa168d9b3b4a4bd825b76dfe90c84270b072da2bfa453142c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_65c7bc9f9dcc44eaa168d9b3b4a4bd825b76dfe90c84270b072da2bfa453142c->leave($__internal_65c7bc9f9dcc44eaa168d9b3b4a4bd825b76dfe90c84270b072da2bfa453142c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
