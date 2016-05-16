<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_4d6dce3118cd08d24a3f9d48357d59a38793b9ca8063e7a0a0d1be5afd9f31cc extends Twig_Template
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
        $__internal_b97c9154221ec7fd9bad4654b05991b0be8e09eab10d1c6767909bc22d268255 = $this->env->getExtension("native_profiler");
        $__internal_b97c9154221ec7fd9bad4654b05991b0be8e09eab10d1c6767909bc22d268255->enter($__internal_b97c9154221ec7fd9bad4654b05991b0be8e09eab10d1c6767909bc22d268255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_b97c9154221ec7fd9bad4654b05991b0be8e09eab10d1c6767909bc22d268255->leave($__internal_b97c9154221ec7fd9bad4654b05991b0be8e09eab10d1c6767909bc22d268255_prof);

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
