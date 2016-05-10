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
        $__internal_3eef80b2e658f6262e6c850976c8f9d21ffc6932c275be474c5bd44a6c85aedd = $this->env->getExtension("native_profiler");
        $__internal_3eef80b2e658f6262e6c850976c8f9d21ffc6932c275be474c5bd44a6c85aedd->enter($__internal_3eef80b2e658f6262e6c850976c8f9d21ffc6932c275be474c5bd44a6c85aedd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_3eef80b2e658f6262e6c850976c8f9d21ffc6932c275be474c5bd44a6c85aedd->leave($__internal_3eef80b2e658f6262e6c850976c8f9d21ffc6932c275be474c5bd44a6c85aedd_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3e0b8377039eb3c568f4417d04cb6dd16fd30db4725fed9d562350ef05953ed0 = $this->env->getExtension("native_profiler");
        $__internal_3e0b8377039eb3c568f4417d04cb6dd16fd30db4725fed9d562350ef05953ed0->enter($__internal_3e0b8377039eb3c568f4417d04cb6dd16fd30db4725fed9d562350ef05953ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3e0b8377039eb3c568f4417d04cb6dd16fd30db4725fed9d562350ef05953ed0->leave($__internal_3e0b8377039eb3c568f4417d04cb6dd16fd30db4725fed9d562350ef05953ed0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bbee882206d610c055bf99b1f955794a93de343faa07552e10d1ff246fbb4524 = $this->env->getExtension("native_profiler");
        $__internal_bbee882206d610c055bf99b1f955794a93de343faa07552e10d1ff246fbb4524->enter($__internal_bbee882206d610c055bf99b1f955794a93de343faa07552e10d1ff246fbb4524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_bbee882206d610c055bf99b1f955794a93de343faa07552e10d1ff246fbb4524->leave($__internal_bbee882206d610c055bf99b1f955794a93de343faa07552e10d1ff246fbb4524_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_83383cd1daaf82de75aaea388826328f53eda5ca49d7e97f95081eafbb06fa23 = $this->env->getExtension("native_profiler");
        $__internal_83383cd1daaf82de75aaea388826328f53eda5ca49d7e97f95081eafbb06fa23->enter($__internal_83383cd1daaf82de75aaea388826328f53eda5ca49d7e97f95081eafbb06fa23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_83383cd1daaf82de75aaea388826328f53eda5ca49d7e97f95081eafbb06fa23->leave($__internal_83383cd1daaf82de75aaea388826328f53eda5ca49d7e97f95081eafbb06fa23_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_513199aef8923397a34f99966502f9eb67b79651338be1239256d99300562076 = $this->env->getExtension("native_profiler");
        $__internal_513199aef8923397a34f99966502f9eb67b79651338be1239256d99300562076->enter($__internal_513199aef8923397a34f99966502f9eb67b79651338be1239256d99300562076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_513199aef8923397a34f99966502f9eb67b79651338be1239256d99300562076->leave($__internal_513199aef8923397a34f99966502f9eb67b79651338be1239256d99300562076_prof);

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
