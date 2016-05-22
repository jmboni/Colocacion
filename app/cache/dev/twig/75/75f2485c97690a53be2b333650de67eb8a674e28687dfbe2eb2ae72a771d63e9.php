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
        $__internal_1f0601783f9cbf348870425686c5e8de4327c233c6b74605501d0e6b8719a2f2 = $this->env->getExtension("native_profiler");
        $__internal_1f0601783f9cbf348870425686c5e8de4327c233c6b74605501d0e6b8719a2f2->enter($__internal_1f0601783f9cbf348870425686c5e8de4327c233c6b74605501d0e6b8719a2f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f0601783f9cbf348870425686c5e8de4327c233c6b74605501d0e6b8719a2f2->leave($__internal_1f0601783f9cbf348870425686c5e8de4327c233c6b74605501d0e6b8719a2f2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f12913186d33bedd6cc96a32905ab1da7f0a332fd0797bf37f4ab0ab7291cec6 = $this->env->getExtension("native_profiler");
        $__internal_f12913186d33bedd6cc96a32905ab1da7f0a332fd0797bf37f4ab0ab7291cec6->enter($__internal_f12913186d33bedd6cc96a32905ab1da7f0a332fd0797bf37f4ab0ab7291cec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f12913186d33bedd6cc96a32905ab1da7f0a332fd0797bf37f4ab0ab7291cec6->leave($__internal_f12913186d33bedd6cc96a32905ab1da7f0a332fd0797bf37f4ab0ab7291cec6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_29eff46a0bf0f8086f083f822a3e6f9b48532eabca9c3b9204a61a130bd181bf = $this->env->getExtension("native_profiler");
        $__internal_29eff46a0bf0f8086f083f822a3e6f9b48532eabca9c3b9204a61a130bd181bf->enter($__internal_29eff46a0bf0f8086f083f822a3e6f9b48532eabca9c3b9204a61a130bd181bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_29eff46a0bf0f8086f083f822a3e6f9b48532eabca9c3b9204a61a130bd181bf->leave($__internal_29eff46a0bf0f8086f083f822a3e6f9b48532eabca9c3b9204a61a130bd181bf_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_956076426b495198e2d2f8526b169b174e589e2501c07563b5b99d6bf2a51c32 = $this->env->getExtension("native_profiler");
        $__internal_956076426b495198e2d2f8526b169b174e589e2501c07563b5b99d6bf2a51c32->enter($__internal_956076426b495198e2d2f8526b169b174e589e2501c07563b5b99d6bf2a51c32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_956076426b495198e2d2f8526b169b174e589e2501c07563b5b99d6bf2a51c32->leave($__internal_956076426b495198e2d2f8526b169b174e589e2501c07563b5b99d6bf2a51c32_prof);

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
