<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_c4a9195fc6845526e9537d0bf8a52eb5140ad2f09b576c183f7be2f438b0767b extends Twig_Template
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
        $__internal_d3dbfb809e9a1b732c83b9d1a30e7b0d31d2a2fceb7177f0bfc5a0ff1d8c71b8 = $this->env->getExtension("native_profiler");
        $__internal_d3dbfb809e9a1b732c83b9d1a30e7b0d31d2a2fceb7177f0bfc5a0ff1d8c71b8->enter($__internal_d3dbfb809e9a1b732c83b9d1a30e7b0d31d2a2fceb7177f0bfc5a0ff1d8c71b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_d3dbfb809e9a1b732c83b9d1a30e7b0d31d2a2fceb7177f0bfc5a0ff1d8c71b8->leave($__internal_d3dbfb809e9a1b732c83b9d1a30e7b0d31d2a2fceb7177f0bfc5a0ff1d8c71b8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
