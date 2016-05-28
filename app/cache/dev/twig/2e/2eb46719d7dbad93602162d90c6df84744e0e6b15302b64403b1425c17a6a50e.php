<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_06a660a1bfd00c6c0248f15e11ba0de6bc04cc99ff108e3dda362616b8e46325 extends Twig_Template
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
        $__internal_b8deb0fb4ff5b594f5a07ec32898d9d324a77e973829c08ba6b72f8cecb7c0af = $this->env->getExtension("native_profiler");
        $__internal_b8deb0fb4ff5b594f5a07ec32898d9d324a77e973829c08ba6b72f8cecb7c0af->enter($__internal_b8deb0fb4ff5b594f5a07ec32898d9d324a77e973829c08ba6b72f8cecb7c0af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_b8deb0fb4ff5b594f5a07ec32898d9d324a77e973829c08ba6b72f8cecb7c0af->leave($__internal_b8deb0fb4ff5b594f5a07ec32898d9d324a77e973829c08ba6b72f8cecb7c0af_prof);

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
