<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_5e4ecf65e5908a61baebc745323e46b29958cdd6a5f09b8e28d4938eff9a739a extends Twig_Template
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
        $__internal_f788e71d9f325f0b02124a9bab5962f40ed4c24576e6d47b62ddef8951c91843 = $this->env->getExtension("native_profiler");
        $__internal_f788e71d9f325f0b02124a9bab5962f40ed4c24576e6d47b62ddef8951c91843->enter($__internal_f788e71d9f325f0b02124a9bab5962f40ed4c24576e6d47b62ddef8951c91843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_f788e71d9f325f0b02124a9bab5962f40ed4c24576e6d47b62ddef8951c91843->leave($__internal_f788e71d9f325f0b02124a9bab5962f40ed4c24576e6d47b62ddef8951c91843_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
