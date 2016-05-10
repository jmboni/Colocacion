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
        $__internal_09dbf2c710217b08533468aee449db9159ecdd3df4ea8e4b36c6fec847b25402 = $this->env->getExtension("native_profiler");
        $__internal_09dbf2c710217b08533468aee449db9159ecdd3df4ea8e4b36c6fec847b25402->enter($__internal_09dbf2c710217b08533468aee449db9159ecdd3df4ea8e4b36c6fec847b25402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09dbf2c710217b08533468aee449db9159ecdd3df4ea8e4b36c6fec847b25402->leave($__internal_09dbf2c710217b08533468aee449db9159ecdd3df4ea8e4b36c6fec847b25402_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7ad4eac0516b24849925874400b9071819fdf3c9c7031cef9f0820c1effb78f9 = $this->env->getExtension("native_profiler");
        $__internal_7ad4eac0516b24849925874400b9071819fdf3c9c7031cef9f0820c1effb78f9->enter($__internal_7ad4eac0516b24849925874400b9071819fdf3c9c7031cef9f0820c1effb78f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_7ad4eac0516b24849925874400b9071819fdf3c9c7031cef9f0820c1effb78f9->leave($__internal_7ad4eac0516b24849925874400b9071819fdf3c9c7031cef9f0820c1effb78f9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_975d1e97280b76f5e918c4fba6973c6050bf9b980b3283c8f471f38be5f5dd12 = $this->env->getExtension("native_profiler");
        $__internal_975d1e97280b76f5e918c4fba6973c6050bf9b980b3283c8f471f38be5f5dd12->enter($__internal_975d1e97280b76f5e918c4fba6973c6050bf9b980b3283c8f471f38be5f5dd12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_975d1e97280b76f5e918c4fba6973c6050bf9b980b3283c8f471f38be5f5dd12->leave($__internal_975d1e97280b76f5e918c4fba6973c6050bf9b980b3283c8f471f38be5f5dd12_prof);

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
