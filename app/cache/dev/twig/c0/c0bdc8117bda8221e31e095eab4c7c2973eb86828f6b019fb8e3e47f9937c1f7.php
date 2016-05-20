<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_233a1a6c7380b0d865433a67bdce7af169c8cef2ba544d44a4a20144a1ad4053 extends Twig_Template
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
        $__internal_3eefe3fb8506444a9673d5bc4ac0c3225bad3216d0bc2d28d7d500123a6cfd7c = $this->env->getExtension("native_profiler");
        $__internal_3eefe3fb8506444a9673d5bc4ac0c3225bad3216d0bc2d28d7d500123a6cfd7c->enter($__internal_3eefe3fb8506444a9673d5bc4ac0c3225bad3216d0bc2d28d7d500123a6cfd7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_3eefe3fb8506444a9673d5bc4ac0c3225bad3216d0bc2d28d7d500123a6cfd7c->leave($__internal_3eefe3fb8506444a9673d5bc4ac0c3225bad3216d0bc2d28d7d500123a6cfd7c_prof);

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
