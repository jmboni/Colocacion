<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_0e2942b7ecfb06087b939c40519a95b63afa8be5006f0a9f3fb643f71269c7c9 extends Twig_Template
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
        $__internal_5f94aa070fa16358db31c1eee22d68a495881b3cc00254859fe89d422d092d67 = $this->env->getExtension("native_profiler");
        $__internal_5f94aa070fa16358db31c1eee22d68a495881b3cc00254859fe89d422d092d67->enter($__internal_5f94aa070fa16358db31c1eee22d68a495881b3cc00254859fe89d422d092d67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_5f94aa070fa16358db31c1eee22d68a495881b3cc00254859fe89d422d092d67->leave($__internal_5f94aa070fa16358db31c1eee22d68a495881b3cc00254859fe89d422d092d67_prof);

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
