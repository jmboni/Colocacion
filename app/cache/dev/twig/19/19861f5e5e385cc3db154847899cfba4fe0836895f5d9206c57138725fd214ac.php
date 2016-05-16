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
        $__internal_b32cd20400316f72cb5afea21c93f373128f5899e82c413bd2f16bf770d39655 = $this->env->getExtension("native_profiler");
        $__internal_b32cd20400316f72cb5afea21c93f373128f5899e82c413bd2f16bf770d39655->enter($__internal_b32cd20400316f72cb5afea21c93f373128f5899e82c413bd2f16bf770d39655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_b32cd20400316f72cb5afea21c93f373128f5899e82c413bd2f16bf770d39655->leave($__internal_b32cd20400316f72cb5afea21c93f373128f5899e82c413bd2f16bf770d39655_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c47f753706564c363e81893c70261766968ac252b0321644229fb9c5dc661ccb = $this->env->getExtension("native_profiler");
        $__internal_c47f753706564c363e81893c70261766968ac252b0321644229fb9c5dc661ccb->enter($__internal_c47f753706564c363e81893c70261766968ac252b0321644229fb9c5dc661ccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c47f753706564c363e81893c70261766968ac252b0321644229fb9c5dc661ccb->leave($__internal_c47f753706564c363e81893c70261766968ac252b0321644229fb9c5dc661ccb_prof);

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
