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
        $__internal_4f3bb986b0f4366baa203f04bd2cd7d84922d9dc41372ee0bbc00190079fc55f = $this->env->getExtension("native_profiler");
        $__internal_4f3bb986b0f4366baa203f04bd2cd7d84922d9dc41372ee0bbc00190079fc55f->enter($__internal_4f3bb986b0f4366baa203f04bd2cd7d84922d9dc41372ee0bbc00190079fc55f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_4f3bb986b0f4366baa203f04bd2cd7d84922d9dc41372ee0bbc00190079fc55f->leave($__internal_4f3bb986b0f4366baa203f04bd2cd7d84922d9dc41372ee0bbc00190079fc55f_prof);

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
