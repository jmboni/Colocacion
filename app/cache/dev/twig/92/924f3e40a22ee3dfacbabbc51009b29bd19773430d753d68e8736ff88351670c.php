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
        $__internal_a4a2b89673805318032d29d1ac7d635bc2dc247fd8a449872b9729d781560374 = $this->env->getExtension("native_profiler");
        $__internal_a4a2b89673805318032d29d1ac7d635bc2dc247fd8a449872b9729d781560374->enter($__internal_a4a2b89673805318032d29d1ac7d635bc2dc247fd8a449872b9729d781560374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4a2b89673805318032d29d1ac7d635bc2dc247fd8a449872b9729d781560374->leave($__internal_a4a2b89673805318032d29d1ac7d635bc2dc247fd8a449872b9729d781560374_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1db91bbe75839e2a704a9f5395f03211136e0a4f897ff9190767bd06eb0ab64d = $this->env->getExtension("native_profiler");
        $__internal_1db91bbe75839e2a704a9f5395f03211136e0a4f897ff9190767bd06eb0ab64d->enter($__internal_1db91bbe75839e2a704a9f5395f03211136e0a4f897ff9190767bd06eb0ab64d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_1db91bbe75839e2a704a9f5395f03211136e0a4f897ff9190767bd06eb0ab64d->leave($__internal_1db91bbe75839e2a704a9f5395f03211136e0a4f897ff9190767bd06eb0ab64d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4f4bc7714a755c80938942fd71c574cd07d6460a45d8aa275332961321c91660 = $this->env->getExtension("native_profiler");
        $__internal_4f4bc7714a755c80938942fd71c574cd07d6460a45d8aa275332961321c91660->enter($__internal_4f4bc7714a755c80938942fd71c574cd07d6460a45d8aa275332961321c91660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_4f4bc7714a755c80938942fd71c574cd07d6460a45d8aa275332961321c91660->leave($__internal_4f4bc7714a755c80938942fd71c574cd07d6460a45d8aa275332961321c91660_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_270396b16280ebaf4abdad9438434a763b5fe2355217c08e01665bc3e70907e5 = $this->env->getExtension("native_profiler");
        $__internal_270396b16280ebaf4abdad9438434a763b5fe2355217c08e01665bc3e70907e5->enter($__internal_270396b16280ebaf4abdad9438434a763b5fe2355217c08e01665bc3e70907e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_270396b16280ebaf4abdad9438434a763b5fe2355217c08e01665bc3e70907e5->leave($__internal_270396b16280ebaf4abdad9438434a763b5fe2355217c08e01665bc3e70907e5_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_f88b0c6b4ed3bcc82211abc84868b03d6418ba8ff229285b0c39e0e053a8fdf3 = $this->env->getExtension("native_profiler");
        $__internal_f88b0c6b4ed3bcc82211abc84868b03d6418ba8ff229285b0c39e0e053a8fdf3->enter($__internal_f88b0c6b4ed3bcc82211abc84868b03d6418ba8ff229285b0c39e0e053a8fdf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_f88b0c6b4ed3bcc82211abc84868b03d6418ba8ff229285b0c39e0e053a8fdf3->leave($__internal_f88b0c6b4ed3bcc82211abc84868b03d6418ba8ff229285b0c39e0e053a8fdf3_prof);

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
