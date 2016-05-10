<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_4d6dce3118cd08d24a3f9d48357d59a38793b9ca8063e7a0a0d1be5afd9f31cc extends Twig_Template
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
        $__internal_1af406671efa93c34fe2e91240a70893b53a300144475b4c64801b2ba675707a = $this->env->getExtension("native_profiler");
        $__internal_1af406671efa93c34fe2e91240a70893b53a300144475b4c64801b2ba675707a->enter($__internal_1af406671efa93c34fe2e91240a70893b53a300144475b4c64801b2ba675707a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_1af406671efa93c34fe2e91240a70893b53a300144475b4c64801b2ba675707a->leave($__internal_1af406671efa93c34fe2e91240a70893b53a300144475b4c64801b2ba675707a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
