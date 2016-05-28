<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_0215ecb9784153eb2dbbe5d4987c33ab67df255d426a05246078e98576fdf62d extends Twig_Template
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
        $__internal_3ffeaecde59a5539988bf27be7fc6801f2ed8bd665595f0deda3afe13e5d6e0d = $this->env->getExtension("native_profiler");
        $__internal_3ffeaecde59a5539988bf27be7fc6801f2ed8bd665595f0deda3afe13e5d6e0d->enter($__internal_3ffeaecde59a5539988bf27be7fc6801f2ed8bd665595f0deda3afe13e5d6e0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ffeaecde59a5539988bf27be7fc6801f2ed8bd665595f0deda3afe13e5d6e0d->leave($__internal_3ffeaecde59a5539988bf27be7fc6801f2ed8bd665595f0deda3afe13e5d6e0d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_710a209242bf43c55b8b87c54c4210b023ee899cc5ab399f73d57d85c421a6f6 = $this->env->getExtension("native_profiler");
        $__internal_710a209242bf43c55b8b87c54c4210b023ee899cc5ab399f73d57d85c421a6f6->enter($__internal_710a209242bf43c55b8b87c54c4210b023ee899cc5ab399f73d57d85c421a6f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_710a209242bf43c55b8b87c54c4210b023ee899cc5ab399f73d57d85c421a6f6->leave($__internal_710a209242bf43c55b8b87c54c4210b023ee899cc5ab399f73d57d85c421a6f6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_50a69f956cf9fcacae32c8f3ca12e8423e5611c2a489501c2306edde448ce9d0 = $this->env->getExtension("native_profiler");
        $__internal_50a69f956cf9fcacae32c8f3ca12e8423e5611c2a489501c2306edde448ce9d0->enter($__internal_50a69f956cf9fcacae32c8f3ca12e8423e5611c2a489501c2306edde448ce9d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_50a69f956cf9fcacae32c8f3ca12e8423e5611c2a489501c2306edde448ce9d0->leave($__internal_50a69f956cf9fcacae32c8f3ca12e8423e5611c2a489501c2306edde448ce9d0_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_30a2e8b41fb9678d38c5664bf1a336948c6edfdddb02bc46e38b613f6fae930c = $this->env->getExtension("native_profiler");
        $__internal_30a2e8b41fb9678d38c5664bf1a336948c6edfdddb02bc46e38b613f6fae930c->enter($__internal_30a2e8b41fb9678d38c5664bf1a336948c6edfdddb02bc46e38b613f6fae930c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_30a2e8b41fb9678d38c5664bf1a336948c6edfdddb02bc46e38b613f6fae930c->leave($__internal_30a2e8b41fb9678d38c5664bf1a336948c6edfdddb02bc46e38b613f6fae930c_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_f2decb35c1872875ec19b537a5d0c566499a740c4f6609a34f21660cca94de6c = $this->env->getExtension("native_profiler");
        $__internal_f2decb35c1872875ec19b537a5d0c566499a740c4f6609a34f21660cca94de6c->enter($__internal_f2decb35c1872875ec19b537a5d0c566499a740c4f6609a34f21660cca94de6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_f2decb35c1872875ec19b537a5d0c566499a740c4f6609a34f21660cca94de6c->leave($__internal_f2decb35c1872875ec19b537a5d0c566499a740c4f6609a34f21660cca94de6c_prof);

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
