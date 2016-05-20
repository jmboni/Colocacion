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
        $__internal_6d048460e7f8f0a3ad9ce3ed027f4668b22dc609806aacd9039a3b82d04054be = $this->env->getExtension("native_profiler");
        $__internal_6d048460e7f8f0a3ad9ce3ed027f4668b22dc609806aacd9039a3b82d04054be->enter($__internal_6d048460e7f8f0a3ad9ce3ed027f4668b22dc609806aacd9039a3b82d04054be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d048460e7f8f0a3ad9ce3ed027f4668b22dc609806aacd9039a3b82d04054be->leave($__internal_6d048460e7f8f0a3ad9ce3ed027f4668b22dc609806aacd9039a3b82d04054be_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8768c8ac0a8960321fc110fd339cb5dbbfb62a0d2422e0ecd383dbf2e904ddf4 = $this->env->getExtension("native_profiler");
        $__internal_8768c8ac0a8960321fc110fd339cb5dbbfb62a0d2422e0ecd383dbf2e904ddf4->enter($__internal_8768c8ac0a8960321fc110fd339cb5dbbfb62a0d2422e0ecd383dbf2e904ddf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_8768c8ac0a8960321fc110fd339cb5dbbfb62a0d2422e0ecd383dbf2e904ddf4->leave($__internal_8768c8ac0a8960321fc110fd339cb5dbbfb62a0d2422e0ecd383dbf2e904ddf4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_dfeed19f620a69e3f7b8e903fc6280ff6b19563a49df82e8b45d52a58c3ee13d = $this->env->getExtension("native_profiler");
        $__internal_dfeed19f620a69e3f7b8e903fc6280ff6b19563a49df82e8b45d52a58c3ee13d->enter($__internal_dfeed19f620a69e3f7b8e903fc6280ff6b19563a49df82e8b45d52a58c3ee13d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_dfeed19f620a69e3f7b8e903fc6280ff6b19563a49df82e8b45d52a58c3ee13d->leave($__internal_dfeed19f620a69e3f7b8e903fc6280ff6b19563a49df82e8b45d52a58c3ee13d_prof);

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
