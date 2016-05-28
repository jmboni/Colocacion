<?php

/* base.html.twig */
class __TwigTemplate_e5af677671e1fb18b44b2251dfb896523702060341e85c9a30468883d3070caa extends Twig_Template
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
        $__internal_056c0eb790644898aead519c8b3c4e6f16bed7b3d6be94884a2fbb7409aeb0c6 = $this->env->getExtension("native_profiler");
        $__internal_056c0eb790644898aead519c8b3c4e6f16bed7b3d6be94884a2fbb7409aeb0c6->enter($__internal_056c0eb790644898aead519c8b3c4e6f16bed7b3d6be94884a2fbb7409aeb0c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_056c0eb790644898aead519c8b3c4e6f16bed7b3d6be94884a2fbb7409aeb0c6->leave($__internal_056c0eb790644898aead519c8b3c4e6f16bed7b3d6be94884a2fbb7409aeb0c6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_30ede1697670ce36df3bdac77be8ebde08d2329434c3e1506dc8a8903ec1aa3f = $this->env->getExtension("native_profiler");
        $__internal_30ede1697670ce36df3bdac77be8ebde08d2329434c3e1506dc8a8903ec1aa3f->enter($__internal_30ede1697670ce36df3bdac77be8ebde08d2329434c3e1506dc8a8903ec1aa3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_30ede1697670ce36df3bdac77be8ebde08d2329434c3e1506dc8a8903ec1aa3f->leave($__internal_30ede1697670ce36df3bdac77be8ebde08d2329434c3e1506dc8a8903ec1aa3f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_417e89ece59892590c148addb95bcfd190c9c0d0a2928c1d0f80030d0af29327 = $this->env->getExtension("native_profiler");
        $__internal_417e89ece59892590c148addb95bcfd190c9c0d0a2928c1d0f80030d0af29327->enter($__internal_417e89ece59892590c148addb95bcfd190c9c0d0a2928c1d0f80030d0af29327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_417e89ece59892590c148addb95bcfd190c9c0d0a2928c1d0f80030d0af29327->leave($__internal_417e89ece59892590c148addb95bcfd190c9c0d0a2928c1d0f80030d0af29327_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_cee553eafb9adc84d18d5c36788185f1de8c146441901e24a808f9a9a8eca558 = $this->env->getExtension("native_profiler");
        $__internal_cee553eafb9adc84d18d5c36788185f1de8c146441901e24a808f9a9a8eca558->enter($__internal_cee553eafb9adc84d18d5c36788185f1de8c146441901e24a808f9a9a8eca558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cee553eafb9adc84d18d5c36788185f1de8c146441901e24a808f9a9a8eca558->leave($__internal_cee553eafb9adc84d18d5c36788185f1de8c146441901e24a808f9a9a8eca558_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ed2d9be380f590a7b451638c881ac412d5ea5f3b7760c7064911b78077210183 = $this->env->getExtension("native_profiler");
        $__internal_ed2d9be380f590a7b451638c881ac412d5ea5f3b7760c7064911b78077210183->enter($__internal_ed2d9be380f590a7b451638c881ac412d5ea5f3b7760c7064911b78077210183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ed2d9be380f590a7b451638c881ac412d5ea5f3b7760c7064911b78077210183->leave($__internal_ed2d9be380f590a7b451638c881ac412d5ea5f3b7760c7064911b78077210183_prof);

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
