<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_fc1dc30d1c677a6e00fb3483c4f495f9a67b995c07206a38ed3f88fcefdaa354 extends Twig_Template
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
        $__internal_bac7166a0e59ca370102d0785c5e62e8c94b08795daca5bbad791dc06e57a7f0 = $this->env->getExtension("native_profiler");
        $__internal_bac7166a0e59ca370102d0785c5e62e8c94b08795daca5bbad791dc06e57a7f0->enter($__internal_bac7166a0e59ca370102d0785c5e62e8c94b08795daca5bbad791dc06e57a7f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_bac7166a0e59ca370102d0785c5e62e8c94b08795daca5bbad791dc06e57a7f0->leave($__internal_bac7166a0e59ca370102d0785c5e62e8c94b08795daca5bbad791dc06e57a7f0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
