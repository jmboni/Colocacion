<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_6b77a08906e880e633a5d691123fedfef59d618f9ca34f87a6d1e750739eb80b extends Twig_Template
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
        $__internal_99f52f72f51be3b3fb2f7eaa5b6949989a56d086d4650c2ddc64dd4f2513a5fa = $this->env->getExtension("native_profiler");
        $__internal_99f52f72f51be3b3fb2f7eaa5b6949989a56d086d4650c2ddc64dd4f2513a5fa->enter($__internal_99f52f72f51be3b3fb2f7eaa5b6949989a56d086d4650c2ddc64dd4f2513a5fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_99f52f72f51be3b3fb2f7eaa5b6949989a56d086d4650c2ddc64dd4f2513a5fa->leave($__internal_99f52f72f51be3b3fb2f7eaa5b6949989a56d086d4650c2ddc64dd4f2513a5fa_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
