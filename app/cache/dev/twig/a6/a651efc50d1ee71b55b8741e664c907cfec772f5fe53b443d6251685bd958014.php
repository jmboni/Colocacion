<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_64896ce2f61c097ae807812809715d7f48e2c7a8634932a4198221e7a20cec43 extends Twig_Template
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
        $__internal_62e6f91f35325b6012c46f9e3e0a4bc9f951c159a325b43f4ceedf19210472f0 = $this->env->getExtension("native_profiler");
        $__internal_62e6f91f35325b6012c46f9e3e0a4bc9f951c159a325b43f4ceedf19210472f0->enter($__internal_62e6f91f35325b6012c46f9e3e0a4bc9f951c159a325b43f4ceedf19210472f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_62e6f91f35325b6012c46f9e3e0a4bc9f951c159a325b43f4ceedf19210472f0->leave($__internal_62e6f91f35325b6012c46f9e3e0a4bc9f951c159a325b43f4ceedf19210472f0_prof);

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
