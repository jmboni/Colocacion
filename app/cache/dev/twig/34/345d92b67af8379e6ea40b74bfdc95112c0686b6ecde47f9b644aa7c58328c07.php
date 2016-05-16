<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_28e4cd3fa43e0fee8de22271ef6ea345a32b14ab8b374aa17c462140f49279d5 extends Twig_Template
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
        $__internal_abac841475c11f00ebb5c1fcbf697bd2b20df72de15660c490dc95d50459f412 = $this->env->getExtension("native_profiler");
        $__internal_abac841475c11f00ebb5c1fcbf697bd2b20df72de15660c490dc95d50459f412->enter($__internal_abac841475c11f00ebb5c1fcbf697bd2b20df72de15660c490dc95d50459f412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_abac841475c11f00ebb5c1fcbf697bd2b20df72de15660c490dc95d50459f412->leave($__internal_abac841475c11f00ebb5c1fcbf697bd2b20df72de15660c490dc95d50459f412_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include 'TwigBundle:Exception:exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
