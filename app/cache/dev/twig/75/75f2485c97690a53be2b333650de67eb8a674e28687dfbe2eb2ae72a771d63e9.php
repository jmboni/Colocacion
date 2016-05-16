<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_daefbd218cf104d3c9fdbaa5eeb55874aa8198bc8283181e8f0f59ecc8a9a384 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c9e8ebb77b667004192bd1f6c87cd345c00f8ad1df36313bb229eb4feabd89ba = $this->env->getExtension("native_profiler");
        $__internal_c9e8ebb77b667004192bd1f6c87cd345c00f8ad1df36313bb229eb4feabd89ba->enter($__internal_c9e8ebb77b667004192bd1f6c87cd345c00f8ad1df36313bb229eb4feabd89ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9e8ebb77b667004192bd1f6c87cd345c00f8ad1df36313bb229eb4feabd89ba->leave($__internal_c9e8ebb77b667004192bd1f6c87cd345c00f8ad1df36313bb229eb4feabd89ba_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_23ab90a4a8c9b8f18d6a0124c669e137b00653c89184fd69db36f7a5430f18d4 = $this->env->getExtension("native_profiler");
        $__internal_23ab90a4a8c9b8f18d6a0124c669e137b00653c89184fd69db36f7a5430f18d4->enter($__internal_23ab90a4a8c9b8f18d6a0124c669e137b00653c89184fd69db36f7a5430f18d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_23ab90a4a8c9b8f18d6a0124c669e137b00653c89184fd69db36f7a5430f18d4->leave($__internal_23ab90a4a8c9b8f18d6a0124c669e137b00653c89184fd69db36f7a5430f18d4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_359e38fcdfff40d8f44fe0e170d69c1cb13ee56bf4e9d56ea179c3a4e60a6f7d = $this->env->getExtension("native_profiler");
        $__internal_359e38fcdfff40d8f44fe0e170d69c1cb13ee56bf4e9d56ea179c3a4e60a6f7d->enter($__internal_359e38fcdfff40d8f44fe0e170d69c1cb13ee56bf4e9d56ea179c3a4e60a6f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_359e38fcdfff40d8f44fe0e170d69c1cb13ee56bf4e9d56ea179c3a4e60a6f7d->leave($__internal_359e38fcdfff40d8f44fe0e170d69c1cb13ee56bf4e9d56ea179c3a4e60a6f7d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_beb3251b21e408ea57108f9352e4b5bdb936dd21c1cbe0d1d1c3e3ee3aa871c4 = $this->env->getExtension("native_profiler");
        $__internal_beb3251b21e408ea57108f9352e4b5bdb936dd21c1cbe0d1d1c3e3ee3aa871c4->enter($__internal_beb3251b21e408ea57108f9352e4b5bdb936dd21c1cbe0d1d1c3e3ee3aa871c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_beb3251b21e408ea57108f9352e4b5bdb936dd21c1cbe0d1d1c3e3ee3aa871c4->leave($__internal_beb3251b21e408ea57108f9352e4b5bdb936dd21c1cbe0d1d1c3e3ee3aa871c4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
