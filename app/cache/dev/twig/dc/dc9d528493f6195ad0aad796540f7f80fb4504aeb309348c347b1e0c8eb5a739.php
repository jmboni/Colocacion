<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_4029e8286a6b002d9b4d1f8aef59315b29036092092859348de41b2fe360e834 extends Twig_Template
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
        $__internal_615309a85b7e42001f6b3b26bacf88de833c093073bc5d321e908fe171d2cbf1 = $this->env->getExtension("native_profiler");
        $__internal_615309a85b7e42001f6b3b26bacf88de833c093073bc5d321e908fe171d2cbf1->enter($__internal_615309a85b7e42001f6b3b26bacf88de833c093073bc5d321e908fe171d2cbf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_615309a85b7e42001f6b3b26bacf88de833c093073bc5d321e908fe171d2cbf1->leave($__internal_615309a85b7e42001f6b3b26bacf88de833c093073bc5d321e908fe171d2cbf1_prof);

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
