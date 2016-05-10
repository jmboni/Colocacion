<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_00eddd92f377c44684e657891b1b5bae619030a68e805a8dc98a94c869ae821f extends Twig_Template
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
        $__internal_ccd24d30cd689f8e0669fe38d6756649c83938b1aca319e4ccdb48d0ae2ca4b0 = $this->env->getExtension("native_profiler");
        $__internal_ccd24d30cd689f8e0669fe38d6756649c83938b1aca319e4ccdb48d0ae2ca4b0->enter($__internal_ccd24d30cd689f8e0669fe38d6756649c83938b1aca319e4ccdb48d0ae2ca4b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_ccd24d30cd689f8e0669fe38d6756649c83938b1aca319e4ccdb48d0ae2ca4b0->leave($__internal_ccd24d30cd689f8e0669fe38d6756649c83938b1aca319e4ccdb48d0ae2ca4b0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
