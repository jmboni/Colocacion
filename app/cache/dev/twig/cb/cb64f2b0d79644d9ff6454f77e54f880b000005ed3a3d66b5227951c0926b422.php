<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_84ca20954b636aa72933aa781198717e643b2510ffc1952cad09d159c35f4f97 extends Twig_Template
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
        $__internal_1c8ca3076e8967c62e3a979a6331300e7fef4481a2169d2ae431cd326b9c17fe = $this->env->getExtension("native_profiler");
        $__internal_1c8ca3076e8967c62e3a979a6331300e7fef4481a2169d2ae431cd326b9c17fe->enter($__internal_1c8ca3076e8967c62e3a979a6331300e7fef4481a2169d2ae431cd326b9c17fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_1c8ca3076e8967c62e3a979a6331300e7fef4481a2169d2ae431cd326b9c17fe->leave($__internal_1c8ca3076e8967c62e3a979a6331300e7fef4481a2169d2ae431cd326b9c17fe_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
