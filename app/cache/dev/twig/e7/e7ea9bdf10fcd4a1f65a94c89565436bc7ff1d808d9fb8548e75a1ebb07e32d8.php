<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_b6bf8d00d82b912f5780d020e3c36d7da59e6d634e98485d2cfeb28a1446c79b extends Twig_Template
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
        $__internal_2d670f466466659219c4151d018bcde2339eefb674fb8897592317738f0d5cc8 = $this->env->getExtension("native_profiler");
        $__internal_2d670f466466659219c4151d018bcde2339eefb674fb8897592317738f0d5cc8->enter($__internal_2d670f466466659219c4151d018bcde2339eefb674fb8897592317738f0d5cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_2d670f466466659219c4151d018bcde2339eefb674fb8897592317738f0d5cc8->leave($__internal_2d670f466466659219c4151d018bcde2339eefb674fb8897592317738f0d5cc8_prof);

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
