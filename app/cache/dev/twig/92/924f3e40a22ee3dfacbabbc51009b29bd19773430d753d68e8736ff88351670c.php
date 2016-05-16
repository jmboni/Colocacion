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
        $__internal_41fb53169e7b5c9bb6bc23aaa3e517323ef697b3e3fea586317122b413791590 = $this->env->getExtension("native_profiler");
        $__internal_41fb53169e7b5c9bb6bc23aaa3e517323ef697b3e3fea586317122b413791590->enter($__internal_41fb53169e7b5c9bb6bc23aaa3e517323ef697b3e3fea586317122b413791590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41fb53169e7b5c9bb6bc23aaa3e517323ef697b3e3fea586317122b413791590->leave($__internal_41fb53169e7b5c9bb6bc23aaa3e517323ef697b3e3fea586317122b413791590_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6a9abdf7ee30c0485f2ddac20dd1f4c3e1c237ad530df79531f078206c24dfc8 = $this->env->getExtension("native_profiler");
        $__internal_6a9abdf7ee30c0485f2ddac20dd1f4c3e1c237ad530df79531f078206c24dfc8->enter($__internal_6a9abdf7ee30c0485f2ddac20dd1f4c3e1c237ad530df79531f078206c24dfc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_6a9abdf7ee30c0485f2ddac20dd1f4c3e1c237ad530df79531f078206c24dfc8->leave($__internal_6a9abdf7ee30c0485f2ddac20dd1f4c3e1c237ad530df79531f078206c24dfc8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ef3285f35094a91b6674d8f966557e100e9636bf2bd0e0d0268a3c8f58c25f9d = $this->env->getExtension("native_profiler");
        $__internal_ef3285f35094a91b6674d8f966557e100e9636bf2bd0e0d0268a3c8f58c25f9d->enter($__internal_ef3285f35094a91b6674d8f966557e100e9636bf2bd0e0d0268a3c8f58c25f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_ef3285f35094a91b6674d8f966557e100e9636bf2bd0e0d0268a3c8f58c25f9d->leave($__internal_ef3285f35094a91b6674d8f966557e100e9636bf2bd0e0d0268a3c8f58c25f9d_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_7ef36b7cba54713c0aaf3775a7c5d34ca0ab2e67ac372367e2f9873a3d1b1312 = $this->env->getExtension("native_profiler");
        $__internal_7ef36b7cba54713c0aaf3775a7c5d34ca0ab2e67ac372367e2f9873a3d1b1312->enter($__internal_7ef36b7cba54713c0aaf3775a7c5d34ca0ab2e67ac372367e2f9873a3d1b1312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7ef36b7cba54713c0aaf3775a7c5d34ca0ab2e67ac372367e2f9873a3d1b1312->leave($__internal_7ef36b7cba54713c0aaf3775a7c5d34ca0ab2e67ac372367e2f9873a3d1b1312_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_281b56eabcb1b7f78875aabaf2111b1911e1ed866c7876bc2ca4b16ed6eb0e78 = $this->env->getExtension("native_profiler");
        $__internal_281b56eabcb1b7f78875aabaf2111b1911e1ed866c7876bc2ca4b16ed6eb0e78->enter($__internal_281b56eabcb1b7f78875aabaf2111b1911e1ed866c7876bc2ca4b16ed6eb0e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_281b56eabcb1b7f78875aabaf2111b1911e1ed866c7876bc2ca4b16ed6eb0e78->leave($__internal_281b56eabcb1b7f78875aabaf2111b1911e1ed866c7876bc2ca4b16ed6eb0e78_prof);

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
