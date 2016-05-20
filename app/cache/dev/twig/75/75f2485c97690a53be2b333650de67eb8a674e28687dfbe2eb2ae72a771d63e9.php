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
        $__internal_334385cfce0215b4200223a75a1c16fd10fdb76a5e2b65d776105877bbab1d88 = $this->env->getExtension("native_profiler");
        $__internal_334385cfce0215b4200223a75a1c16fd10fdb76a5e2b65d776105877bbab1d88->enter($__internal_334385cfce0215b4200223a75a1c16fd10fdb76a5e2b65d776105877bbab1d88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_334385cfce0215b4200223a75a1c16fd10fdb76a5e2b65d776105877bbab1d88->leave($__internal_334385cfce0215b4200223a75a1c16fd10fdb76a5e2b65d776105877bbab1d88_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5e71a17436a3e6d1eec9c7bc4b88b32361184b967af9f00ad0fd9b35b4516224 = $this->env->getExtension("native_profiler");
        $__internal_5e71a17436a3e6d1eec9c7bc4b88b32361184b967af9f00ad0fd9b35b4516224->enter($__internal_5e71a17436a3e6d1eec9c7bc4b88b32361184b967af9f00ad0fd9b35b4516224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5e71a17436a3e6d1eec9c7bc4b88b32361184b967af9f00ad0fd9b35b4516224->leave($__internal_5e71a17436a3e6d1eec9c7bc4b88b32361184b967af9f00ad0fd9b35b4516224_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ad6e23f4bc7d8dd0e1c895225ad19c3fd94de0299983ec743c650925247673d1 = $this->env->getExtension("native_profiler");
        $__internal_ad6e23f4bc7d8dd0e1c895225ad19c3fd94de0299983ec743c650925247673d1->enter($__internal_ad6e23f4bc7d8dd0e1c895225ad19c3fd94de0299983ec743c650925247673d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ad6e23f4bc7d8dd0e1c895225ad19c3fd94de0299983ec743c650925247673d1->leave($__internal_ad6e23f4bc7d8dd0e1c895225ad19c3fd94de0299983ec743c650925247673d1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e85eb156fbd8930c5e9d6c12fbdbcd4ee2b2decc7e5594f3a618d6ff2eb775b = $this->env->getExtension("native_profiler");
        $__internal_0e85eb156fbd8930c5e9d6c12fbdbcd4ee2b2decc7e5594f3a618d6ff2eb775b->enter($__internal_0e85eb156fbd8930c5e9d6c12fbdbcd4ee2b2decc7e5594f3a618d6ff2eb775b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_0e85eb156fbd8930c5e9d6c12fbdbcd4ee2b2decc7e5594f3a618d6ff2eb775b->leave($__internal_0e85eb156fbd8930c5e9d6c12fbdbcd4ee2b2decc7e5594f3a618d6ff2eb775b_prof);

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
