<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_495dfeb1ab0bdc940a341d772ab53df5a3283c5a4c8203072a02e77b15a26039 extends Twig_Template
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
        $__internal_04ce31b1d3efe7ea8d24afcee972b245ea3d90634e4927396fc154d8a533a70b = $this->env->getExtension("native_profiler");
        $__internal_04ce31b1d3efe7ea8d24afcee972b245ea3d90634e4927396fc154d8a533a70b->enter($__internal_04ce31b1d3efe7ea8d24afcee972b245ea3d90634e4927396fc154d8a533a70b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_04ce31b1d3efe7ea8d24afcee972b245ea3d90634e4927396fc154d8a533a70b->leave($__internal_04ce31b1d3efe7ea8d24afcee972b245ea3d90634e4927396fc154d8a533a70b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
