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
        $__internal_67702b84a6b8811ec949e10fcaf64f8e06f9cafc8918200abb07904f36c2f766 = $this->env->getExtension("native_profiler");
        $__internal_67702b84a6b8811ec949e10fcaf64f8e06f9cafc8918200abb07904f36c2f766->enter($__internal_67702b84a6b8811ec949e10fcaf64f8e06f9cafc8918200abb07904f36c2f766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67702b84a6b8811ec949e10fcaf64f8e06f9cafc8918200abb07904f36c2f766->leave($__internal_67702b84a6b8811ec949e10fcaf64f8e06f9cafc8918200abb07904f36c2f766_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_367e9c21f5814aceb440aae8cdf2b72bea0b71d1c74b4ec69c303e23009711d3 = $this->env->getExtension("native_profiler");
        $__internal_367e9c21f5814aceb440aae8cdf2b72bea0b71d1c74b4ec69c303e23009711d3->enter($__internal_367e9c21f5814aceb440aae8cdf2b72bea0b71d1c74b4ec69c303e23009711d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_367e9c21f5814aceb440aae8cdf2b72bea0b71d1c74b4ec69c303e23009711d3->leave($__internal_367e9c21f5814aceb440aae8cdf2b72bea0b71d1c74b4ec69c303e23009711d3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9a49c5257e9a09a04eb7069590e1e00eeb0ddbb4ed9aa4b13997c94e708b1fa3 = $this->env->getExtension("native_profiler");
        $__internal_9a49c5257e9a09a04eb7069590e1e00eeb0ddbb4ed9aa4b13997c94e708b1fa3->enter($__internal_9a49c5257e9a09a04eb7069590e1e00eeb0ddbb4ed9aa4b13997c94e708b1fa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9a49c5257e9a09a04eb7069590e1e00eeb0ddbb4ed9aa4b13997c94e708b1fa3->leave($__internal_9a49c5257e9a09a04eb7069590e1e00eeb0ddbb4ed9aa4b13997c94e708b1fa3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5481af7b78594197ce8929ed3ffd17fab241745686f3af7d53cee3f868326e39 = $this->env->getExtension("native_profiler");
        $__internal_5481af7b78594197ce8929ed3ffd17fab241745686f3af7d53cee3f868326e39->enter($__internal_5481af7b78594197ce8929ed3ffd17fab241745686f3af7d53cee3f868326e39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_5481af7b78594197ce8929ed3ffd17fab241745686f3af7d53cee3f868326e39->leave($__internal_5481af7b78594197ce8929ed3ffd17fab241745686f3af7d53cee3f868326e39_prof);

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
