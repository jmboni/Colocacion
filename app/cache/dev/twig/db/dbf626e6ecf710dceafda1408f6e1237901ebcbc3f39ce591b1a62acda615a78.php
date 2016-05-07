<?php

/* base.html.twig */
class __TwigTemplate_65f1d69c8d9c9c71a02e4fd4b2ddafbac6b5998617d1d07c33960aef2cd57e0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6c215d3140bed0e59dfcc5378b912576199b65c41ef390926d5665473850b01a = $this->env->getExtension("native_profiler");
        $__internal_6c215d3140bed0e59dfcc5378b912576199b65c41ef390926d5665473850b01a->enter($__internal_6c215d3140bed0e59dfcc5378b912576199b65c41ef390926d5665473850b01a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_6c215d3140bed0e59dfcc5378b912576199b65c41ef390926d5665473850b01a->leave($__internal_6c215d3140bed0e59dfcc5378b912576199b65c41ef390926d5665473850b01a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_629a2506326772684a1648a77cfcfa2b66328ac6de0f238677d153637a23658e = $this->env->getExtension("native_profiler");
        $__internal_629a2506326772684a1648a77cfcfa2b66328ac6de0f238677d153637a23658e->enter($__internal_629a2506326772684a1648a77cfcfa2b66328ac6de0f238677d153637a23658e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_629a2506326772684a1648a77cfcfa2b66328ac6de0f238677d153637a23658e->leave($__internal_629a2506326772684a1648a77cfcfa2b66328ac6de0f238677d153637a23658e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_58e3f6e12531a4d6cd99c8cf2de3638603ffe51234c4d7c3146095a6fd0f6854 = $this->env->getExtension("native_profiler");
        $__internal_58e3f6e12531a4d6cd99c8cf2de3638603ffe51234c4d7c3146095a6fd0f6854->enter($__internal_58e3f6e12531a4d6cd99c8cf2de3638603ffe51234c4d7c3146095a6fd0f6854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_58e3f6e12531a4d6cd99c8cf2de3638603ffe51234c4d7c3146095a6fd0f6854->leave($__internal_58e3f6e12531a4d6cd99c8cf2de3638603ffe51234c4d7c3146095a6fd0f6854_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_192a9e0bd0d201237351b7d1df5da5934fd4d74ddfa11c0180a63fd56a7e0d71 = $this->env->getExtension("native_profiler");
        $__internal_192a9e0bd0d201237351b7d1df5da5934fd4d74ddfa11c0180a63fd56a7e0d71->enter($__internal_192a9e0bd0d201237351b7d1df5da5934fd4d74ddfa11c0180a63fd56a7e0d71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_192a9e0bd0d201237351b7d1df5da5934fd4d74ddfa11c0180a63fd56a7e0d71->leave($__internal_192a9e0bd0d201237351b7d1df5da5934fd4d74ddfa11c0180a63fd56a7e0d71_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5c723b00273851a7add307cea0c5991aa5e3bcafb1decbee86a3892d6601a36d = $this->env->getExtension("native_profiler");
        $__internal_5c723b00273851a7add307cea0c5991aa5e3bcafb1decbee86a3892d6601a36d->enter($__internal_5c723b00273851a7add307cea0c5991aa5e3bcafb1decbee86a3892d6601a36d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5c723b00273851a7add307cea0c5991aa5e3bcafb1decbee86a3892d6601a36d->leave($__internal_5c723b00273851a7add307cea0c5991aa5e3bcafb1decbee86a3892d6601a36d_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
