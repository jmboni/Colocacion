<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_c97982116fe72743235cc539e04adc7282c4753467bd8d20773b0f85bddb65ea extends Twig_Template
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
        $__internal_20ea11f992807f6ea70a97aede541a3fdd08df5e2ff1e1354747d27c6467f64c = $this->env->getExtension("native_profiler");
        $__internal_20ea11f992807f6ea70a97aede541a3fdd08df5e2ff1e1354747d27c6467f64c->enter($__internal_20ea11f992807f6ea70a97aede541a3fdd08df5e2ff1e1354747d27c6467f64c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_20ea11f992807f6ea70a97aede541a3fdd08df5e2ff1e1354747d27c6467f64c->leave($__internal_20ea11f992807f6ea70a97aede541a3fdd08df5e2ff1e1354747d27c6467f64c_prof);

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
