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
        $__internal_f80584f6e60a67ef01c3ed5778d4cd85cb9488c401d2f239b98c41563e9a7b28 = $this->env->getExtension("native_profiler");
        $__internal_f80584f6e60a67ef01c3ed5778d4cd85cb9488c401d2f239b98c41563e9a7b28->enter($__internal_f80584f6e60a67ef01c3ed5778d4cd85cb9488c401d2f239b98c41563e9a7b28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f80584f6e60a67ef01c3ed5778d4cd85cb9488c401d2f239b98c41563e9a7b28->leave($__internal_f80584f6e60a67ef01c3ed5778d4cd85cb9488c401d2f239b98c41563e9a7b28_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ef7f9c317b760988417d0dbf715edb10648ed16304e78b660d82e375cd9e177f = $this->env->getExtension("native_profiler");
        $__internal_ef7f9c317b760988417d0dbf715edb10648ed16304e78b660d82e375cd9e177f->enter($__internal_ef7f9c317b760988417d0dbf715edb10648ed16304e78b660d82e375cd9e177f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ef7f9c317b760988417d0dbf715edb10648ed16304e78b660d82e375cd9e177f->leave($__internal_ef7f9c317b760988417d0dbf715edb10648ed16304e78b660d82e375cd9e177f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_bff8eaaf0887eceeb7664cee3fa50604be7854c1c92ddf4fae36c84aaa78e2c2 = $this->env->getExtension("native_profiler");
        $__internal_bff8eaaf0887eceeb7664cee3fa50604be7854c1c92ddf4fae36c84aaa78e2c2->enter($__internal_bff8eaaf0887eceeb7664cee3fa50604be7854c1c92ddf4fae36c84aaa78e2c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_bff8eaaf0887eceeb7664cee3fa50604be7854c1c92ddf4fae36c84aaa78e2c2->leave($__internal_bff8eaaf0887eceeb7664cee3fa50604be7854c1c92ddf4fae36c84aaa78e2c2_prof);

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
