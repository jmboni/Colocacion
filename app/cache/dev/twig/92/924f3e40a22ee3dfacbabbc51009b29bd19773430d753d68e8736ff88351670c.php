<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_e40a2fea53b8ae23caf78ddcc37b7b447ea37fc095d96e809b55e8a8c9098adb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_355552f27f8b1f3c0fb0322b8aa5dfcd03d268b1a42557e8bf62d67304db491f = $this->env->getExtension("native_profiler");
        $__internal_355552f27f8b1f3c0fb0322b8aa5dfcd03d268b1a42557e8bf62d67304db491f->enter($__internal_355552f27f8b1f3c0fb0322b8aa5dfcd03d268b1a42557e8bf62d67304db491f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_355552f27f8b1f3c0fb0322b8aa5dfcd03d268b1a42557e8bf62d67304db491f->leave($__internal_355552f27f8b1f3c0fb0322b8aa5dfcd03d268b1a42557e8bf62d67304db491f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ba3e791b6497df16562c4126ad9d2d46b9b28a0ae68b280f546ff7075c9985d8 = $this->env->getExtension("native_profiler");
        $__internal_ba3e791b6497df16562c4126ad9d2d46b9b28a0ae68b280f546ff7075c9985d8->enter($__internal_ba3e791b6497df16562c4126ad9d2d46b9b28a0ae68b280f546ff7075c9985d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_ba3e791b6497df16562c4126ad9d2d46b9b28a0ae68b280f546ff7075c9985d8->leave($__internal_ba3e791b6497df16562c4126ad9d2d46b9b28a0ae68b280f546ff7075c9985d8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d2b37e3cfc0cecc29b7395a45008d69015c2443028321dfd7523000c0c7e1a28 = $this->env->getExtension("native_profiler");
        $__internal_d2b37e3cfc0cecc29b7395a45008d69015c2443028321dfd7523000c0c7e1a28->enter($__internal_d2b37e3cfc0cecc29b7395a45008d69015c2443028321dfd7523000c0c7e1a28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_d2b37e3cfc0cecc29b7395a45008d69015c2443028321dfd7523000c0c7e1a28->leave($__internal_d2b37e3cfc0cecc29b7395a45008d69015c2443028321dfd7523000c0c7e1a28_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_c0ce173b56878e15796ac9d066de080fc643d6a9d71fb2c90e914c6bb26db972 = $this->env->getExtension("native_profiler");
        $__internal_c0ce173b56878e15796ac9d066de080fc643d6a9d71fb2c90e914c6bb26db972->enter($__internal_c0ce173b56878e15796ac9d066de080fc643d6a9d71fb2c90e914c6bb26db972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_c0ce173b56878e15796ac9d066de080fc643d6a9d71fb2c90e914c6bb26db972->leave($__internal_c0ce173b56878e15796ac9d066de080fc643d6a9d71fb2c90e914c6bb26db972_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_3b8d500e47d7903e31982d64f30e14395480040ef636ce2b635e319ae8a0d190 = $this->env->getExtension("native_profiler");
        $__internal_3b8d500e47d7903e31982d64f30e14395480040ef636ce2b635e319ae8a0d190->enter($__internal_3b8d500e47d7903e31982d64f30e14395480040ef636ce2b635e319ae8a0d190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_3b8d500e47d7903e31982d64f30e14395480040ef636ce2b635e319ae8a0d190->leave($__internal_3b8d500e47d7903e31982d64f30e14395480040ef636ce2b635e319ae8a0d190_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "TwigBundle::layout.html.twig" %}*/
/* */
/* {% block head %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}" />*/
/* {% endblock %}*/
/* */
/* {% block title 'Web Configurator Bundle' %}*/
/* */
/* {% block body %}*/
/*     <div class="block">*/
/*         {% block content %}{% endblock %}*/
/*     </div>*/
/*     <div class="version">Symfony Standard Edition v.{{ version }}</div>*/
/* {% endblock %}*/
/* */
