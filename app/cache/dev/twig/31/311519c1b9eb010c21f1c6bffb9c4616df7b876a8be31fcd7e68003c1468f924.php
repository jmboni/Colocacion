<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_e4cf295f6ce5e3fa48508b5ea11e806d138c20d2843043290e67181a4091d298 extends Twig_Template
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
        $__internal_9d7532d328bfee7f09e4cd5a0e6a40e8d3b439d0e4685b3ca71f0f689dd330d9 = $this->env->getExtension("native_profiler");
        $__internal_9d7532d328bfee7f09e4cd5a0e6a40e8d3b439d0e4685b3ca71f0f689dd330d9->enter($__internal_9d7532d328bfee7f09e4cd5a0e6a40e8d3b439d0e4685b3ca71f0f689dd330d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_9d7532d328bfee7f09e4cd5a0e6a40e8d3b439d0e4685b3ca71f0f689dd330d9->leave($__internal_9d7532d328bfee7f09e4cd5a0e6a40e8d3b439d0e4685b3ca71f0f689dd330d9_prof);

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
