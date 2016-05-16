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
        $__internal_be8138d254001bb671cbdf6ec9227bada12b75439b39327a226e59ce6d1c283f = $this->env->getExtension("native_profiler");
        $__internal_be8138d254001bb671cbdf6ec9227bada12b75439b39327a226e59ce6d1c283f->enter($__internal_be8138d254001bb671cbdf6ec9227bada12b75439b39327a226e59ce6d1c283f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_be8138d254001bb671cbdf6ec9227bada12b75439b39327a226e59ce6d1c283f->leave($__internal_be8138d254001bb671cbdf6ec9227bada12b75439b39327a226e59ce6d1c283f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4ebab3cee125b5916a2c43d60e0621a5d62875d6dcb043f8c73dbe47144e6625 = $this->env->getExtension("native_profiler");
        $__internal_4ebab3cee125b5916a2c43d60e0621a5d62875d6dcb043f8c73dbe47144e6625->enter($__internal_4ebab3cee125b5916a2c43d60e0621a5d62875d6dcb043f8c73dbe47144e6625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_4ebab3cee125b5916a2c43d60e0621a5d62875d6dcb043f8c73dbe47144e6625->leave($__internal_4ebab3cee125b5916a2c43d60e0621a5d62875d6dcb043f8c73dbe47144e6625_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_57112b78c65b054a886add05502f865bd0b28c365e149663a755e61ce384b8c5 = $this->env->getExtension("native_profiler");
        $__internal_57112b78c65b054a886add05502f865bd0b28c365e149663a755e61ce384b8c5->enter($__internal_57112b78c65b054a886add05502f865bd0b28c365e149663a755e61ce384b8c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_57112b78c65b054a886add05502f865bd0b28c365e149663a755e61ce384b8c5->leave($__internal_57112b78c65b054a886add05502f865bd0b28c365e149663a755e61ce384b8c5_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_da31155053dc7541c511b7e01cb41aa72b3ea7b9287e35cc653581e310ccc6a8 = $this->env->getExtension("native_profiler");
        $__internal_da31155053dc7541c511b7e01cb41aa72b3ea7b9287e35cc653581e310ccc6a8->enter($__internal_da31155053dc7541c511b7e01cb41aa72b3ea7b9287e35cc653581e310ccc6a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_da31155053dc7541c511b7e01cb41aa72b3ea7b9287e35cc653581e310ccc6a8->leave($__internal_da31155053dc7541c511b7e01cb41aa72b3ea7b9287e35cc653581e310ccc6a8_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cc59e636e59c7e6c66fb2deb287eff95dcc0e80fe9e42d6d248d20bce549db60 = $this->env->getExtension("native_profiler");
        $__internal_cc59e636e59c7e6c66fb2deb287eff95dcc0e80fe9e42d6d248d20bce549db60->enter($__internal_cc59e636e59c7e6c66fb2deb287eff95dcc0e80fe9e42d6d248d20bce549db60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_cc59e636e59c7e6c66fb2deb287eff95dcc0e80fe9e42d6d248d20bce549db60->leave($__internal_cc59e636e59c7e6c66fb2deb287eff95dcc0e80fe9e42d6d248d20bce549db60_prof);

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
