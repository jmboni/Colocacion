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
        $__internal_3a1aca239e69dbd1f0c29a9865250a225a6159db9e92f6deb1702c00f3234996 = $this->env->getExtension("native_profiler");
        $__internal_3a1aca239e69dbd1f0c29a9865250a225a6159db9e92f6deb1702c00f3234996->enter($__internal_3a1aca239e69dbd1f0c29a9865250a225a6159db9e92f6deb1702c00f3234996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_3a1aca239e69dbd1f0c29a9865250a225a6159db9e92f6deb1702c00f3234996->leave($__internal_3a1aca239e69dbd1f0c29a9865250a225a6159db9e92f6deb1702c00f3234996_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_80b88ce8a4bcec988496f501ccde4d0381c760a5a30af078ea635acdb6808f25 = $this->env->getExtension("native_profiler");
        $__internal_80b88ce8a4bcec988496f501ccde4d0381c760a5a30af078ea635acdb6808f25->enter($__internal_80b88ce8a4bcec988496f501ccde4d0381c760a5a30af078ea635acdb6808f25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_80b88ce8a4bcec988496f501ccde4d0381c760a5a30af078ea635acdb6808f25->leave($__internal_80b88ce8a4bcec988496f501ccde4d0381c760a5a30af078ea635acdb6808f25_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3df00dc1871865d6eece2f3950ab677d6eb776dd00faae8b5d69f845ef6ffadf = $this->env->getExtension("native_profiler");
        $__internal_3df00dc1871865d6eece2f3950ab677d6eb776dd00faae8b5d69f845ef6ffadf->enter($__internal_3df00dc1871865d6eece2f3950ab677d6eb776dd00faae8b5d69f845ef6ffadf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3df00dc1871865d6eece2f3950ab677d6eb776dd00faae8b5d69f845ef6ffadf->leave($__internal_3df00dc1871865d6eece2f3950ab677d6eb776dd00faae8b5d69f845ef6ffadf_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_27136da612d44d9316273333ad6ce73d87f67606f47db5ad2743033f97f61584 = $this->env->getExtension("native_profiler");
        $__internal_27136da612d44d9316273333ad6ce73d87f67606f47db5ad2743033f97f61584->enter($__internal_27136da612d44d9316273333ad6ce73d87f67606f47db5ad2743033f97f61584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_27136da612d44d9316273333ad6ce73d87f67606f47db5ad2743033f97f61584->leave($__internal_27136da612d44d9316273333ad6ce73d87f67606f47db5ad2743033f97f61584_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3ec4d8a91854210b7c272ec7b5d0e7a58ede6e7a0a3dad840e55951e1c7269d4 = $this->env->getExtension("native_profiler");
        $__internal_3ec4d8a91854210b7c272ec7b5d0e7a58ede6e7a0a3dad840e55951e1c7269d4->enter($__internal_3ec4d8a91854210b7c272ec7b5d0e7a58ede6e7a0a3dad840e55951e1c7269d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3ec4d8a91854210b7c272ec7b5d0e7a58ede6e7a0a3dad840e55951e1c7269d4->leave($__internal_3ec4d8a91854210b7c272ec7b5d0e7a58ede6e7a0a3dad840e55951e1c7269d4_prof);

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
