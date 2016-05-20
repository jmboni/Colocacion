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
        $__internal_2987a8592628fa43274f738138dc53555f9be6cd8338ff6e2e81908a09a9ac60 = $this->env->getExtension("native_profiler");
        $__internal_2987a8592628fa43274f738138dc53555f9be6cd8338ff6e2e81908a09a9ac60->enter($__internal_2987a8592628fa43274f738138dc53555f9be6cd8338ff6e2e81908a09a9ac60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2987a8592628fa43274f738138dc53555f9be6cd8338ff6e2e81908a09a9ac60->leave($__internal_2987a8592628fa43274f738138dc53555f9be6cd8338ff6e2e81908a09a9ac60_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_604443d048f8b27def7bfd2c930ab3728b69f114228cc702f82e294ab2b225dc = $this->env->getExtension("native_profiler");
        $__internal_604443d048f8b27def7bfd2c930ab3728b69f114228cc702f82e294ab2b225dc->enter($__internal_604443d048f8b27def7bfd2c930ab3728b69f114228cc702f82e294ab2b225dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_604443d048f8b27def7bfd2c930ab3728b69f114228cc702f82e294ab2b225dc->leave($__internal_604443d048f8b27def7bfd2c930ab3728b69f114228cc702f82e294ab2b225dc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e5f6e1662890153e0c00669c079921092fd3dad34e254f1665fa694c80d47cf2 = $this->env->getExtension("native_profiler");
        $__internal_e5f6e1662890153e0c00669c079921092fd3dad34e254f1665fa694c80d47cf2->enter($__internal_e5f6e1662890153e0c00669c079921092fd3dad34e254f1665fa694c80d47cf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_e5f6e1662890153e0c00669c079921092fd3dad34e254f1665fa694c80d47cf2->leave($__internal_e5f6e1662890153e0c00669c079921092fd3dad34e254f1665fa694c80d47cf2_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_bc31dcab53f52a8cf9da8cea0ca1dcca82808c72155ba85842e4db7c46b72434 = $this->env->getExtension("native_profiler");
        $__internal_bc31dcab53f52a8cf9da8cea0ca1dcca82808c72155ba85842e4db7c46b72434->enter($__internal_bc31dcab53f52a8cf9da8cea0ca1dcca82808c72155ba85842e4db7c46b72434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_bc31dcab53f52a8cf9da8cea0ca1dcca82808c72155ba85842e4db7c46b72434->leave($__internal_bc31dcab53f52a8cf9da8cea0ca1dcca82808c72155ba85842e4db7c46b72434_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_dee984ba0882096b523dfa6c644c23f39aabffe812ac3825aec0be04b016724b = $this->env->getExtension("native_profiler");
        $__internal_dee984ba0882096b523dfa6c644c23f39aabffe812ac3825aec0be04b016724b->enter($__internal_dee984ba0882096b523dfa6c644c23f39aabffe812ac3825aec0be04b016724b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_dee984ba0882096b523dfa6c644c23f39aabffe812ac3825aec0be04b016724b->leave($__internal_dee984ba0882096b523dfa6c644c23f39aabffe812ac3825aec0be04b016724b_prof);

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
