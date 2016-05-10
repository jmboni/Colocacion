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
        $__internal_1a43d2a3af618bc7e924658d61de360fc35f086a4af72021347a58335a72ec4c = $this->env->getExtension("native_profiler");
        $__internal_1a43d2a3af618bc7e924658d61de360fc35f086a4af72021347a58335a72ec4c->enter($__internal_1a43d2a3af618bc7e924658d61de360fc35f086a4af72021347a58335a72ec4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_1a43d2a3af618bc7e924658d61de360fc35f086a4af72021347a58335a72ec4c->leave($__internal_1a43d2a3af618bc7e924658d61de360fc35f086a4af72021347a58335a72ec4c_prof);

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
