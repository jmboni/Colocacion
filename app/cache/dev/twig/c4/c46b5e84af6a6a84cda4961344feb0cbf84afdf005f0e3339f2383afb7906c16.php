<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_71d8411370804a12646105074e87d1a04fc892574338bd6b5aa2b273df9900d8 extends Twig_Template
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
        $__internal_ff54bf296dbad50e73b4adb170622a7657c8a8dd02aebf452678ed6f00651dd2 = $this->env->getExtension("native_profiler");
        $__internal_ff54bf296dbad50e73b4adb170622a7657c8a8dd02aebf452678ed6f00651dd2->enter($__internal_ff54bf296dbad50e73b4adb170622a7657c8a8dd02aebf452678ed6f00651dd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_ff54bf296dbad50e73b4adb170622a7657c8a8dd02aebf452678ed6f00651dd2->leave($__internal_ff54bf296dbad50e73b4adb170622a7657c8a8dd02aebf452678ed6f00651dd2_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
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
/* {% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}*/
/* */
