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
        $__internal_5706f08e441f0b038bf6b361148a39d01fb6b1f623bc19d397d71cd5bbcbeae9 = $this->env->getExtension("native_profiler");
        $__internal_5706f08e441f0b038bf6b361148a39d01fb6b1f623bc19d397d71cd5bbcbeae9->enter($__internal_5706f08e441f0b038bf6b361148a39d01fb6b1f623bc19d397d71cd5bbcbeae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_5706f08e441f0b038bf6b361148a39d01fb6b1f623bc19d397d71cd5bbcbeae9->leave($__internal_5706f08e441f0b038bf6b361148a39d01fb6b1f623bc19d397d71cd5bbcbeae9_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_dbd63fa8685e9313176f84eb843667c01d39ad985d54f50a4ed244fd7a0ef5e2 = $this->env->getExtension("native_profiler");
        $__internal_dbd63fa8685e9313176f84eb843667c01d39ad985d54f50a4ed244fd7a0ef5e2->enter($__internal_dbd63fa8685e9313176f84eb843667c01d39ad985d54f50a4ed244fd7a0ef5e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_dbd63fa8685e9313176f84eb843667c01d39ad985d54f50a4ed244fd7a0ef5e2->leave($__internal_dbd63fa8685e9313176f84eb843667c01d39ad985d54f50a4ed244fd7a0ef5e2_prof);

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
