<?php

/* base.html.twig */
class __TwigTemplate_5312b4f480058c576bf27354f48572eac2a23c13e50878e3d79771893f860191 extends Twig_Template
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
        $__internal_893b5a89ace63760bf29f06890e79890c25e9cdf5cf28a2befefd02dcc73354e = $this->env->getExtension("native_profiler");
        $__internal_893b5a89ace63760bf29f06890e79890c25e9cdf5cf28a2befefd02dcc73354e->enter($__internal_893b5a89ace63760bf29f06890e79890c25e9cdf5cf28a2befefd02dcc73354e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_893b5a89ace63760bf29f06890e79890c25e9cdf5cf28a2befefd02dcc73354e->leave($__internal_893b5a89ace63760bf29f06890e79890c25e9cdf5cf28a2befefd02dcc73354e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6ca38404c808987ce54116082c693b23d830313f9b91e5f9b25841e2e6115d72 = $this->env->getExtension("native_profiler");
        $__internal_6ca38404c808987ce54116082c693b23d830313f9b91e5f9b25841e2e6115d72->enter($__internal_6ca38404c808987ce54116082c693b23d830313f9b91e5f9b25841e2e6115d72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6ca38404c808987ce54116082c693b23d830313f9b91e5f9b25841e2e6115d72->leave($__internal_6ca38404c808987ce54116082c693b23d830313f9b91e5f9b25841e2e6115d72_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_99c530e11263bcca9c7d028acd0a0218962940e1edb71b04d586f7584f9c9fad = $this->env->getExtension("native_profiler");
        $__internal_99c530e11263bcca9c7d028acd0a0218962940e1edb71b04d586f7584f9c9fad->enter($__internal_99c530e11263bcca9c7d028acd0a0218962940e1edb71b04d586f7584f9c9fad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_99c530e11263bcca9c7d028acd0a0218962940e1edb71b04d586f7584f9c9fad->leave($__internal_99c530e11263bcca9c7d028acd0a0218962940e1edb71b04d586f7584f9c9fad_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a07aad3a9a09f39eebdfa940cf0dda3d8e3a4d76a0e73d09a4f4e69e333043a9 = $this->env->getExtension("native_profiler");
        $__internal_a07aad3a9a09f39eebdfa940cf0dda3d8e3a4d76a0e73d09a4f4e69e333043a9->enter($__internal_a07aad3a9a09f39eebdfa940cf0dda3d8e3a4d76a0e73d09a4f4e69e333043a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a07aad3a9a09f39eebdfa940cf0dda3d8e3a4d76a0e73d09a4f4e69e333043a9->leave($__internal_a07aad3a9a09f39eebdfa940cf0dda3d8e3a4d76a0e73d09a4f4e69e333043a9_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6ca91f62aa4172deff8f8a3656fa8268cbcef050a15f23f18de1e87f9b8cbb9a = $this->env->getExtension("native_profiler");
        $__internal_6ca91f62aa4172deff8f8a3656fa8268cbcef050a15f23f18de1e87f9b8cbb9a->enter($__internal_6ca91f62aa4172deff8f8a3656fa8268cbcef050a15f23f18de1e87f9b8cbb9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6ca91f62aa4172deff8f8a3656fa8268cbcef050a15f23f18de1e87f9b8cbb9a->leave($__internal_6ca91f62aa4172deff8f8a3656fa8268cbcef050a15f23f18de1e87f9b8cbb9a_prof);

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
