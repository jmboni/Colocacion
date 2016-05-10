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
        $__internal_2e29b76fb95b489ddec452f506e0e827bf02062957169ccb4435abdc485dfee5 = $this->env->getExtension("native_profiler");
        $__internal_2e29b76fb95b489ddec452f506e0e827bf02062957169ccb4435abdc485dfee5->enter($__internal_2e29b76fb95b489ddec452f506e0e827bf02062957169ccb4435abdc485dfee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e29b76fb95b489ddec452f506e0e827bf02062957169ccb4435abdc485dfee5->leave($__internal_2e29b76fb95b489ddec452f506e0e827bf02062957169ccb4435abdc485dfee5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7008df767a42fd61a99741b09c081ac5e5ce4ac7aa17b444f467b95577db3ea0 = $this->env->getExtension("native_profiler");
        $__internal_7008df767a42fd61a99741b09c081ac5e5ce4ac7aa17b444f467b95577db3ea0->enter($__internal_7008df767a42fd61a99741b09c081ac5e5ce4ac7aa17b444f467b95577db3ea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7008df767a42fd61a99741b09c081ac5e5ce4ac7aa17b444f467b95577db3ea0->leave($__internal_7008df767a42fd61a99741b09c081ac5e5ce4ac7aa17b444f467b95577db3ea0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8214d67afeca7dc63d0c3e06111fc0509770cbaf96a2aecb94c51bb969e407fd = $this->env->getExtension("native_profiler");
        $__internal_8214d67afeca7dc63d0c3e06111fc0509770cbaf96a2aecb94c51bb969e407fd->enter($__internal_8214d67afeca7dc63d0c3e06111fc0509770cbaf96a2aecb94c51bb969e407fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8214d67afeca7dc63d0c3e06111fc0509770cbaf96a2aecb94c51bb969e407fd->leave($__internal_8214d67afeca7dc63d0c3e06111fc0509770cbaf96a2aecb94c51bb969e407fd_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ca20281d5abb47d3ae49bb78e3cbac027fb3334f7083fdae24d0425de504fef2 = $this->env->getExtension("native_profiler");
        $__internal_ca20281d5abb47d3ae49bb78e3cbac027fb3334f7083fdae24d0425de504fef2->enter($__internal_ca20281d5abb47d3ae49bb78e3cbac027fb3334f7083fdae24d0425de504fef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_ca20281d5abb47d3ae49bb78e3cbac027fb3334f7083fdae24d0425de504fef2->leave($__internal_ca20281d5abb47d3ae49bb78e3cbac027fb3334f7083fdae24d0425de504fef2_prof);

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
