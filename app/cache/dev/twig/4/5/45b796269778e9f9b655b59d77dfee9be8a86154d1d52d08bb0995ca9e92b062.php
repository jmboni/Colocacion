<?php

/* base.html.twig */
class __TwigTemplate_45b796269778e9f9b655b59d77dfee9be8a86154d1d52d08bb0995ca9e92b062 extends Twig_Template
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
        $__internal_669fe94a142852a30aa88608be213728747d8e9bf23795a6f336870102e02e74 = $this->env->getExtension("native_profiler");
        $__internal_669fe94a142852a30aa88608be213728747d8e9bf23795a6f336870102e02e74->enter($__internal_669fe94a142852a30aa88608be213728747d8e9bf23795a6f336870102e02e74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_669fe94a142852a30aa88608be213728747d8e9bf23795a6f336870102e02e74->leave($__internal_669fe94a142852a30aa88608be213728747d8e9bf23795a6f336870102e02e74_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0235f90451bc341ce210397b56c73e5c30dbe1b5818693bdf79348474397392d = $this->env->getExtension("native_profiler");
        $__internal_0235f90451bc341ce210397b56c73e5c30dbe1b5818693bdf79348474397392d->enter($__internal_0235f90451bc341ce210397b56c73e5c30dbe1b5818693bdf79348474397392d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_0235f90451bc341ce210397b56c73e5c30dbe1b5818693bdf79348474397392d->leave($__internal_0235f90451bc341ce210397b56c73e5c30dbe1b5818693bdf79348474397392d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_46791566878bb178e500e52c5b75aac8bfab15cfd0785a9306cf3243d1c9f1bd = $this->env->getExtension("native_profiler");
        $__internal_46791566878bb178e500e52c5b75aac8bfab15cfd0785a9306cf3243d1c9f1bd->enter($__internal_46791566878bb178e500e52c5b75aac8bfab15cfd0785a9306cf3243d1c9f1bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_46791566878bb178e500e52c5b75aac8bfab15cfd0785a9306cf3243d1c9f1bd->leave($__internal_46791566878bb178e500e52c5b75aac8bfab15cfd0785a9306cf3243d1c9f1bd_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_20aa230ee53d9e9fb5ee2a40bc4741038a273f5df850a747b1d90aeb8d6d9261 = $this->env->getExtension("native_profiler");
        $__internal_20aa230ee53d9e9fb5ee2a40bc4741038a273f5df850a747b1d90aeb8d6d9261->enter($__internal_20aa230ee53d9e9fb5ee2a40bc4741038a273f5df850a747b1d90aeb8d6d9261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_20aa230ee53d9e9fb5ee2a40bc4741038a273f5df850a747b1d90aeb8d6d9261->leave($__internal_20aa230ee53d9e9fb5ee2a40bc4741038a273f5df850a747b1d90aeb8d6d9261_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5880b6157526fa3292d8eeee49c0db7ba8c14fcbc805233ee64aa7e34400236e = $this->env->getExtension("native_profiler");
        $__internal_5880b6157526fa3292d8eeee49c0db7ba8c14fcbc805233ee64aa7e34400236e->enter($__internal_5880b6157526fa3292d8eeee49c0db7ba8c14fcbc805233ee64aa7e34400236e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5880b6157526fa3292d8eeee49c0db7ba8c14fcbc805233ee64aa7e34400236e->leave($__internal_5880b6157526fa3292d8eeee49c0db7ba8c14fcbc805233ee64aa7e34400236e_prof);

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
