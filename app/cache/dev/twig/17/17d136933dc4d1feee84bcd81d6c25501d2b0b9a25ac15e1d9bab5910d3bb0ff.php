<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_17d447c27a4e7e2f805fa64338277bc736c1cf6307b4e72215672cedf5d9a988 extends Twig_Template
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
        $__internal_e21928e5f468c0d29dd0c5cd55eb6e27f82b19b15baed38199f158d4987cc32b = $this->env->getExtension("native_profiler");
        $__internal_e21928e5f468c0d29dd0c5cd55eb6e27f82b19b15baed38199f158d4987cc32b->enter($__internal_e21928e5f468c0d29dd0c5cd55eb6e27f82b19b15baed38199f158d4987cc32b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_e21928e5f468c0d29dd0c5cd55eb6e27f82b19b15baed38199f158d4987cc32b->leave($__internal_e21928e5f468c0d29dd0c5cd55eb6e27f82b19b15baed38199f158d4987cc32b_prof);

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
