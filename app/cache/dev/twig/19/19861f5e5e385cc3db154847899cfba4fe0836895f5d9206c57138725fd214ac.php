<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_6b6517a4b42a4d49b7393e02eac1c5da6a1c79c88311326e12dd9eac163071ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_81949e5459cf9997b84e36f24d63d36ce948036621a0346c2a5e0c056c8bac28 = $this->env->getExtension("native_profiler");
        $__internal_81949e5459cf9997b84e36f24d63d36ce948036621a0346c2a5e0c056c8bac28->enter($__internal_81949e5459cf9997b84e36f24d63d36ce948036621a0346c2a5e0c056c8bac28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_81949e5459cf9997b84e36f24d63d36ce948036621a0346c2a5e0c056c8bac28->leave($__internal_81949e5459cf9997b84e36f24d63d36ce948036621a0346c2a5e0c056c8bac28_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_4b4464772e0ac7a62996b86e5c5d021912982d6347d14f1680aa21571fd3403a = $this->env->getExtension("native_profiler");
        $__internal_4b4464772e0ac7a62996b86e5c5d021912982d6347d14f1680aa21571fd3403a->enter($__internal_4b4464772e0ac7a62996b86e5c5d021912982d6347d14f1680aa21571fd3403a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_4b4464772e0ac7a62996b86e5c5d021912982d6347d14f1680aa21571fd3403a->leave($__internal_4b4464772e0ac7a62996b86e5c5d021912982d6347d14f1680aa21571fd3403a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
