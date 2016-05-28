<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_dcef2107a73a7fe0f48387cf942968986c819dadf0ebdb0f6dea812b5996a976 extends Twig_Template
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
        $__internal_6d2de90e401d5a717e6d2c1115e2228c2733c235513f9a19bb5ea1fda1370e44 = $this->env->getExtension("native_profiler");
        $__internal_6d2de90e401d5a717e6d2c1115e2228c2733c235513f9a19bb5ea1fda1370e44->enter($__internal_6d2de90e401d5a717e6d2c1115e2228c2733c235513f9a19bb5ea1fda1370e44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d2de90e401d5a717e6d2c1115e2228c2733c235513f9a19bb5ea1fda1370e44->leave($__internal_6d2de90e401d5a717e6d2c1115e2228c2733c235513f9a19bb5ea1fda1370e44_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c8fca635b9a058a1c607a6fb0ee4e1e405dfa74c4685354a32a79f0c8f8e27bc = $this->env->getExtension("native_profiler");
        $__internal_c8fca635b9a058a1c607a6fb0ee4e1e405dfa74c4685354a32a79f0c8f8e27bc->enter($__internal_c8fca635b9a058a1c607a6fb0ee4e1e405dfa74c4685354a32a79f0c8f8e27bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c8fca635b9a058a1c607a6fb0ee4e1e405dfa74c4685354a32a79f0c8f8e27bc->leave($__internal_c8fca635b9a058a1c607a6fb0ee4e1e405dfa74c4685354a32a79f0c8f8e27bc_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e3152c35935c5b34ef51f4a5c7be2c18982dd28ab989c80d72c5a766cc3b83a2 = $this->env->getExtension("native_profiler");
        $__internal_e3152c35935c5b34ef51f4a5c7be2c18982dd28ab989c80d72c5a766cc3b83a2->enter($__internal_e3152c35935c5b34ef51f4a5c7be2c18982dd28ab989c80d72c5a766cc3b83a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e3152c35935c5b34ef51f4a5c7be2c18982dd28ab989c80d72c5a766cc3b83a2->leave($__internal_e3152c35935c5b34ef51f4a5c7be2c18982dd28ab989c80d72c5a766cc3b83a2_prof);

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
