<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_d8a88819bf4de5144ff270269b52b7cbcea96d37859454da9583c7800e86a577 extends Twig_Template
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
        $__internal_cc1b553757cbb354f3e908054e799984deba4141985333df5b89d58112bf80d9 = $this->env->getExtension("native_profiler");
        $__internal_cc1b553757cbb354f3e908054e799984deba4141985333df5b89d58112bf80d9->enter($__internal_cc1b553757cbb354f3e908054e799984deba4141985333df5b89d58112bf80d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_cc1b553757cbb354f3e908054e799984deba4141985333df5b89d58112bf80d9->leave($__internal_cc1b553757cbb354f3e908054e799984deba4141985333df5b89d58112bf80d9_prof);

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
