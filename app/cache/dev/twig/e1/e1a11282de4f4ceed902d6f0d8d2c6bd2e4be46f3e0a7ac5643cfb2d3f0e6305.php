<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_0f454065f7f2db68dbf26ca64802dcbca4610169e43ace87fa9e4c40d8b6713e extends Twig_Template
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
        $__internal_bc7b890814bb327940f3e0eb3c11ff9ec290cd7fab99941c1add302cc5df6cca = $this->env->getExtension("native_profiler");
        $__internal_bc7b890814bb327940f3e0eb3c11ff9ec290cd7fab99941c1add302cc5df6cca->enter($__internal_bc7b890814bb327940f3e0eb3c11ff9ec290cd7fab99941c1add302cc5df6cca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_bc7b890814bb327940f3e0eb3c11ff9ec290cd7fab99941c1add302cc5df6cca->leave($__internal_bc7b890814bb327940f3e0eb3c11ff9ec290cd7fab99941c1add302cc5df6cca_prof);

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
