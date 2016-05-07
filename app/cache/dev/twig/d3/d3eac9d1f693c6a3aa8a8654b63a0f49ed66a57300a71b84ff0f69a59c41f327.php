<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_3cbd021a02f7814e46a26431bf488aa5c350d7636569782cb8b2feb309f0dcbd extends Twig_Template
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
        $__internal_c6a0cd84de6d3e58a0026b5b85ff0c20cc2137e54bc873177547df23fa29468c = $this->env->getExtension("native_profiler");
        $__internal_c6a0cd84de6d3e58a0026b5b85ff0c20cc2137e54bc873177547df23fa29468c->enter($__internal_c6a0cd84de6d3e58a0026b5b85ff0c20cc2137e54bc873177547df23fa29468c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_c6a0cd84de6d3e58a0026b5b85ff0c20cc2137e54bc873177547df23fa29468c->leave($__internal_c6a0cd84de6d3e58a0026b5b85ff0c20cc2137e54bc873177547df23fa29468c_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_df08d85bccd047346ce9b3e2d492d7644581408d10b1797b64500989f536a4da = $this->env->getExtension("native_profiler");
        $__internal_df08d85bccd047346ce9b3e2d492d7644581408d10b1797b64500989f536a4da->enter($__internal_df08d85bccd047346ce9b3e2d492d7644581408d10b1797b64500989f536a4da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_df08d85bccd047346ce9b3e2d492d7644581408d10b1797b64500989f536a4da->leave($__internal_df08d85bccd047346ce9b3e2d492d7644581408d10b1797b64500989f536a4da_prof);

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
