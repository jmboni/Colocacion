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
        $__internal_75d9c273be0718ab097dc6799fc6dfe5a78b40460f3b329c217352afc19d244d = $this->env->getExtension("native_profiler");
        $__internal_75d9c273be0718ab097dc6799fc6dfe5a78b40460f3b329c217352afc19d244d->enter($__internal_75d9c273be0718ab097dc6799fc6dfe5a78b40460f3b329c217352afc19d244d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_75d9c273be0718ab097dc6799fc6dfe5a78b40460f3b329c217352afc19d244d->leave($__internal_75d9c273be0718ab097dc6799fc6dfe5a78b40460f3b329c217352afc19d244d_prof);

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
