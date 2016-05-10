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
        $__internal_e0ca1a3fea8a9e8991149a1a10b1912994e835c8c042c6e0e703e8c402293770 = $this->env->getExtension("native_profiler");
        $__internal_e0ca1a3fea8a9e8991149a1a10b1912994e835c8c042c6e0e703e8c402293770->enter($__internal_e0ca1a3fea8a9e8991149a1a10b1912994e835c8c042c6e0e703e8c402293770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_e0ca1a3fea8a9e8991149a1a10b1912994e835c8c042c6e0e703e8c402293770->leave($__internal_e0ca1a3fea8a9e8991149a1a10b1912994e835c8c042c6e0e703e8c402293770_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_3a265e189acb1a6079164e73283039c2f35326cfad44e30b3cbe577bc8cadc08 = $this->env->getExtension("native_profiler");
        $__internal_3a265e189acb1a6079164e73283039c2f35326cfad44e30b3cbe577bc8cadc08->enter($__internal_3a265e189acb1a6079164e73283039c2f35326cfad44e30b3cbe577bc8cadc08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_3a265e189acb1a6079164e73283039c2f35326cfad44e30b3cbe577bc8cadc08->leave($__internal_3a265e189acb1a6079164e73283039c2f35326cfad44e30b3cbe577bc8cadc08_prof);

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
