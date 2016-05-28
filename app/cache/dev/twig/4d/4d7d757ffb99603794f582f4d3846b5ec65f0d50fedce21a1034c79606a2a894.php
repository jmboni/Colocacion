<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_468c395448d11aa40768850f8184813ddb1e96ad0cc36b133508dc5f323e86ff extends Twig_Template
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
        $__internal_a8fd5fb506ecc82933267dc1196c19740e2dfded4ee9a2963af71249fbb1c324 = $this->env->getExtension("native_profiler");
        $__internal_a8fd5fb506ecc82933267dc1196c19740e2dfded4ee9a2963af71249fbb1c324->enter($__internal_a8fd5fb506ecc82933267dc1196c19740e2dfded4ee9a2963af71249fbb1c324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_a8fd5fb506ecc82933267dc1196c19740e2dfded4ee9a2963af71249fbb1c324->leave($__internal_a8fd5fb506ecc82933267dc1196c19740e2dfded4ee9a2963af71249fbb1c324_prof);

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
