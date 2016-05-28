<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_17e6c5b7d2f66be095d6f47fe8a662cb91e704d3d3242d7d5b8b89cf596184fa extends Twig_Template
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
        $__internal_ba5461029d734730ca1f48dc825f06c2857c78a0e7e3a3bfb39b81e3f1f16250 = $this->env->getExtension("native_profiler");
        $__internal_ba5461029d734730ca1f48dc825f06c2857c78a0e7e3a3bfb39b81e3f1f16250->enter($__internal_ba5461029d734730ca1f48dc825f06c2857c78a0e7e3a3bfb39b81e3f1f16250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba5461029d734730ca1f48dc825f06c2857c78a0e7e3a3bfb39b81e3f1f16250->leave($__internal_ba5461029d734730ca1f48dc825f06c2857c78a0e7e3a3bfb39b81e3f1f16250_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_be6e416ec9743a8455dddbd42bb654c6fc004968fdf0da9e6cafea8ccdab7003 = $this->env->getExtension("native_profiler");
        $__internal_be6e416ec9743a8455dddbd42bb654c6fc004968fdf0da9e6cafea8ccdab7003->enter($__internal_be6e416ec9743a8455dddbd42bb654c6fc004968fdf0da9e6cafea8ccdab7003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_be6e416ec9743a8455dddbd42bb654c6fc004968fdf0da9e6cafea8ccdab7003->leave($__internal_be6e416ec9743a8455dddbd42bb654c6fc004968fdf0da9e6cafea8ccdab7003_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5a91f88305e77b9f71cdefcfbe644c7fd72ef168b30712f02556e3c2e1a12eb9 = $this->env->getExtension("native_profiler");
        $__internal_5a91f88305e77b9f71cdefcfbe644c7fd72ef168b30712f02556e3c2e1a12eb9->enter($__internal_5a91f88305e77b9f71cdefcfbe644c7fd72ef168b30712f02556e3c2e1a12eb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5a91f88305e77b9f71cdefcfbe644c7fd72ef168b30712f02556e3c2e1a12eb9->leave($__internal_5a91f88305e77b9f71cdefcfbe644c7fd72ef168b30712f02556e3c2e1a12eb9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_117203dc8970cb181981dfa04e236d996ddf1fcf7f095d68180c16c820822afd = $this->env->getExtension("native_profiler");
        $__internal_117203dc8970cb181981dfa04e236d996ddf1fcf7f095d68180c16c820822afd->enter($__internal_117203dc8970cb181981dfa04e236d996ddf1fcf7f095d68180c16c820822afd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_117203dc8970cb181981dfa04e236d996ddf1fcf7f095d68180c16c820822afd->leave($__internal_117203dc8970cb181981dfa04e236d996ddf1fcf7f095d68180c16c820822afd_prof);

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
