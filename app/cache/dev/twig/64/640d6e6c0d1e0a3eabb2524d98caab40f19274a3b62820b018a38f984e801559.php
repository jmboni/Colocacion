<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_8dfd624be10d2b1cea118df863dca84277c57beb493a2a9c820be501c9411c47 extends Twig_Template
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
        $__internal_d4660df86c84b1b1dfa390a9ac64eaeb3ee700bae9ca4477860007b6492413fb = $this->env->getExtension("native_profiler");
        $__internal_d4660df86c84b1b1dfa390a9ac64eaeb3ee700bae9ca4477860007b6492413fb->enter($__internal_d4660df86c84b1b1dfa390a9ac64eaeb3ee700bae9ca4477860007b6492413fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4660df86c84b1b1dfa390a9ac64eaeb3ee700bae9ca4477860007b6492413fb->leave($__internal_d4660df86c84b1b1dfa390a9ac64eaeb3ee700bae9ca4477860007b6492413fb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2788cb0500473761eb2325386ba5e893f1c73d0d2df0af254912665a6b3d78d5 = $this->env->getExtension("native_profiler");
        $__internal_2788cb0500473761eb2325386ba5e893f1c73d0d2df0af254912665a6b3d78d5->enter($__internal_2788cb0500473761eb2325386ba5e893f1c73d0d2df0af254912665a6b3d78d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_2788cb0500473761eb2325386ba5e893f1c73d0d2df0af254912665a6b3d78d5->leave($__internal_2788cb0500473761eb2325386ba5e893f1c73d0d2df0af254912665a6b3d78d5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4e4f0715713c02c1cda1ee9bdba1badebf6e37034a4031a3fca0cebb0050e9d4 = $this->env->getExtension("native_profiler");
        $__internal_4e4f0715713c02c1cda1ee9bdba1badebf6e37034a4031a3fca0cebb0050e9d4->enter($__internal_4e4f0715713c02c1cda1ee9bdba1badebf6e37034a4031a3fca0cebb0050e9d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_4e4f0715713c02c1cda1ee9bdba1badebf6e37034a4031a3fca0cebb0050e9d4->leave($__internal_4e4f0715713c02c1cda1ee9bdba1badebf6e37034a4031a3fca0cebb0050e9d4_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_660d29b760616da7b15d309976c521de1abee623bd66dceb042d4ef4a6d0fbce = $this->env->getExtension("native_profiler");
        $__internal_660d29b760616da7b15d309976c521de1abee623bd66dceb042d4ef4a6d0fbce->enter($__internal_660d29b760616da7b15d309976c521de1abee623bd66dceb042d4ef4a6d0fbce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_660d29b760616da7b15d309976c521de1abee623bd66dceb042d4ef4a6d0fbce->leave($__internal_660d29b760616da7b15d309976c521de1abee623bd66dceb042d4ef4a6d0fbce_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_13bb5c8970cbfd42042087cb9e3fb802294cc2d34797914cdb40258fd5b5b1d3 = $this->env->getExtension("native_profiler");
        $__internal_13bb5c8970cbfd42042087cb9e3fb802294cc2d34797914cdb40258fd5b5b1d3->enter($__internal_13bb5c8970cbfd42042087cb9e3fb802294cc2d34797914cdb40258fd5b5b1d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_13bb5c8970cbfd42042087cb9e3fb802294cc2d34797914cdb40258fd5b5b1d3->leave($__internal_13bb5c8970cbfd42042087cb9e3fb802294cc2d34797914cdb40258fd5b5b1d3_prof);

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
