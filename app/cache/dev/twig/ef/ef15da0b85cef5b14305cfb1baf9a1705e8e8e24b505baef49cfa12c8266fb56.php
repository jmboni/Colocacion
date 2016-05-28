<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_4c975b33c489bff1546f510d117e0f6842333aee9fe722fe20725ec9fb881127 extends Twig_Template
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
        $__internal_e3ee41a719e907310c391ab2d8621b006a13e69a49cb348d16e3f5aee88d5167 = $this->env->getExtension("native_profiler");
        $__internal_e3ee41a719e907310c391ab2d8621b006a13e69a49cb348d16e3f5aee88d5167->enter($__internal_e3ee41a719e907310c391ab2d8621b006a13e69a49cb348d16e3f5aee88d5167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_e3ee41a719e907310c391ab2d8621b006a13e69a49cb348d16e3f5aee88d5167->leave($__internal_e3ee41a719e907310c391ab2d8621b006a13e69a49cb348d16e3f5aee88d5167_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
/* {% include 'TwigBundle:Exception:exception.xml.twig' with { 'exception': exception } %}*/
/* */
