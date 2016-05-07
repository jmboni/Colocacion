<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_745bdeed0338b174023ad27382a681e406f5f4046e1fc3915e5d2ef7fb30bb9c extends Twig_Template
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
        $__internal_1ac89bb80e4512a9114875d8f7406fd15f3f0f33e20d5d83f1ee7ad8b7e33d88 = $this->env->getExtension("native_profiler");
        $__internal_1ac89bb80e4512a9114875d8f7406fd15f3f0f33e20d5d83f1ee7ad8b7e33d88->enter($__internal_1ac89bb80e4512a9114875d8f7406fd15f3f0f33e20d5d83f1ee7ad8b7e33d88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_1ac89bb80e4512a9114875d8f7406fd15f3f0f33e20d5d83f1ee7ad8b7e33d88->leave($__internal_1ac89bb80e4512a9114875d8f7406fd15f3f0f33e20d5d83f1ee7ad8b7e33d88_prof);

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
