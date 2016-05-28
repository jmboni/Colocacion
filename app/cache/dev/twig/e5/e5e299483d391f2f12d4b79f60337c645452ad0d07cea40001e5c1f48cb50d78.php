<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_935d443fa54f0c1c03cc8c488bb0fa95e374da60a3f6f8e1d4d7343dc92b8ec8 extends Twig_Template
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
        $__internal_588c86120ccfd8e6e4c7866c4dd00bd2c2ad180a025f2f0bd0f2fb1e6b53d3a0 = $this->env->getExtension("native_profiler");
        $__internal_588c86120ccfd8e6e4c7866c4dd00bd2c2ad180a025f2f0bd0f2fb1e6b53d3a0->enter($__internal_588c86120ccfd8e6e4c7866c4dd00bd2c2ad180a025f2f0bd0f2fb1e6b53d3a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_588c86120ccfd8e6e4c7866c4dd00bd2c2ad180a025f2f0bd0f2fb1e6b53d3a0->leave($__internal_588c86120ccfd8e6e4c7866c4dd00bd2c2ad180a025f2f0bd0f2fb1e6b53d3a0_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_f52dba13b3e7634c87e5e494cb7a3268245814e056e738c5e4d173b66d9bed4e = $this->env->getExtension("native_profiler");
        $__internal_f52dba13b3e7634c87e5e494cb7a3268245814e056e738c5e4d173b66d9bed4e->enter($__internal_f52dba13b3e7634c87e5e494cb7a3268245814e056e738c5e4d173b66d9bed4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_f52dba13b3e7634c87e5e494cb7a3268245814e056e738c5e4d173b66d9bed4e->leave($__internal_f52dba13b3e7634c87e5e494cb7a3268245814e056e738c5e4d173b66d9bed4e_prof);

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
