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
        $__internal_88b893da90d23d23356954b4e009df3783af5df6798e6f32a46ff5ed7fc8609e = $this->env->getExtension("native_profiler");
        $__internal_88b893da90d23d23356954b4e009df3783af5df6798e6f32a46ff5ed7fc8609e->enter($__internal_88b893da90d23d23356954b4e009df3783af5df6798e6f32a46ff5ed7fc8609e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_88b893da90d23d23356954b4e009df3783af5df6798e6f32a46ff5ed7fc8609e->leave($__internal_88b893da90d23d23356954b4e009df3783af5df6798e6f32a46ff5ed7fc8609e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_d2c9f605a6dc35597ae7f4b0e2c1ae9e380f877efc0954dd77bd9232a7e2c551 = $this->env->getExtension("native_profiler");
        $__internal_d2c9f605a6dc35597ae7f4b0e2c1ae9e380f877efc0954dd77bd9232a7e2c551->enter($__internal_d2c9f605a6dc35597ae7f4b0e2c1ae9e380f877efc0954dd77bd9232a7e2c551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_d2c9f605a6dc35597ae7f4b0e2c1ae9e380f877efc0954dd77bd9232a7e2c551->leave($__internal_d2c9f605a6dc35597ae7f4b0e2c1ae9e380f877efc0954dd77bd9232a7e2c551_prof);

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
