<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_237abfeb1a05c9f569509404b79ba1fb199b2d234d3919eb206f5bb05487354b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_eb268701fd7bccfc7ac0421987e71b800934727dfc630de2b7eb0d796d0ea81b = $this->env->getExtension("native_profiler");
        $__internal_eb268701fd7bccfc7ac0421987e71b800934727dfc630de2b7eb0d796d0ea81b->enter($__internal_eb268701fd7bccfc7ac0421987e71b800934727dfc630de2b7eb0d796d0ea81b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb268701fd7bccfc7ac0421987e71b800934727dfc630de2b7eb0d796d0ea81b->leave($__internal_eb268701fd7bccfc7ac0421987e71b800934727dfc630de2b7eb0d796d0ea81b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_45064806ce8d7b57f11492a4f38d5611549a6610d4a413be37e3f250cf9604bc = $this->env->getExtension("native_profiler");
        $__internal_45064806ce8d7b57f11492a4f38d5611549a6610d4a413be37e3f250cf9604bc->enter($__internal_45064806ce8d7b57f11492a4f38d5611549a6610d4a413be37e3f250cf9604bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_45064806ce8d7b57f11492a4f38d5611549a6610d4a413be37e3f250cf9604bc->leave($__internal_45064806ce8d7b57f11492a4f38d5611549a6610d4a413be37e3f250cf9604bc_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8cf3358478cd1c210cd1224e31bd2debd10249f278d59710e3a286207c6c3cc4 = $this->env->getExtension("native_profiler");
        $__internal_8cf3358478cd1c210cd1224e31bd2debd10249f278d59710e3a286207c6c3cc4->enter($__internal_8cf3358478cd1c210cd1224e31bd2debd10249f278d59710e3a286207c6c3cc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_8cf3358478cd1c210cd1224e31bd2debd10249f278d59710e3a286207c6c3cc4->leave($__internal_8cf3358478cd1c210cd1224e31bd2debd10249f278d59710e3a286207c6c3cc4_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
