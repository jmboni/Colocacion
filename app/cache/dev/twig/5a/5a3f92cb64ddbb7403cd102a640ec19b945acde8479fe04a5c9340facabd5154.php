<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_eac08f64bd57a5e566629f005759f169769fb17cfec641e6c211d743c7d74f42 extends Twig_Template
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
        $__internal_c79cc24db0f7831a21182e497ff86afdfd9bcb5b52804e840ff9c5d0eb4bbae2 = $this->env->getExtension("native_profiler");
        $__internal_c79cc24db0f7831a21182e497ff86afdfd9bcb5b52804e840ff9c5d0eb4bbae2->enter($__internal_c79cc24db0f7831a21182e497ff86afdfd9bcb5b52804e840ff9c5d0eb4bbae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_c79cc24db0f7831a21182e497ff86afdfd9bcb5b52804e840ff9c5d0eb4bbae2->leave($__internal_c79cc24db0f7831a21182e497ff86afdfd9bcb5b52804e840ff9c5d0eb4bbae2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
