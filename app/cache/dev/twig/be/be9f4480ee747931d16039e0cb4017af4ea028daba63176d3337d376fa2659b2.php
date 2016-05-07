<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_f219883a74433165ba781ad6d60d9f4c3b5230b2aef6c9f232d86b187de0b416 extends Twig_Template
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
        $__internal_f343134b1f029e886637c84a8702f9139bf0204684129a6347700d12df7e0920 = $this->env->getExtension("native_profiler");
        $__internal_f343134b1f029e886637c84a8702f9139bf0204684129a6347700d12df7e0920->enter($__internal_f343134b1f029e886637c84a8702f9139bf0204684129a6347700d12df7e0920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f343134b1f029e886637c84a8702f9139bf0204684129a6347700d12df7e0920->leave($__internal_f343134b1f029e886637c84a8702f9139bf0204684129a6347700d12df7e0920_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b240475880bd38e985650f1e7c8507e5670ae8224da92a614bfdfb53ad8c0649 = $this->env->getExtension("native_profiler");
        $__internal_b240475880bd38e985650f1e7c8507e5670ae8224da92a614bfdfb53ad8c0649->enter($__internal_b240475880bd38e985650f1e7c8507e5670ae8224da92a614bfdfb53ad8c0649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b240475880bd38e985650f1e7c8507e5670ae8224da92a614bfdfb53ad8c0649->leave($__internal_b240475880bd38e985650f1e7c8507e5670ae8224da92a614bfdfb53ad8c0649_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b1490100953422a1c364d5bfb2b8b49426ed020a1aaab4521731623ab6318e01 = $this->env->getExtension("native_profiler");
        $__internal_b1490100953422a1c364d5bfb2b8b49426ed020a1aaab4521731623ab6318e01->enter($__internal_b1490100953422a1c364d5bfb2b8b49426ed020a1aaab4521731623ab6318e01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b1490100953422a1c364d5bfb2b8b49426ed020a1aaab4521731623ab6318e01->leave($__internal_b1490100953422a1c364d5bfb2b8b49426ed020a1aaab4521731623ab6318e01_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_409518127371ca68097a57534ee72adbd34fbace186f8b5290d68bb22a3ba391 = $this->env->getExtension("native_profiler");
        $__internal_409518127371ca68097a57534ee72adbd34fbace186f8b5290d68bb22a3ba391->enter($__internal_409518127371ca68097a57534ee72adbd34fbace186f8b5290d68bb22a3ba391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_409518127371ca68097a57534ee72adbd34fbace186f8b5290d68bb22a3ba391->leave($__internal_409518127371ca68097a57534ee72adbd34fbace186f8b5290d68bb22a3ba391_prof);

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
