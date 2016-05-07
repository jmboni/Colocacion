<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_c182dd8fdb4990dff5997025cf21e4e8f9ad1dfbec719dee7fb58891e317c507 extends Twig_Template
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
        $__internal_1932c57d12b5436e23431fc7cf07a8a7460057fdc3b3094d6bff0ac5b3c49ea8 = $this->env->getExtension("native_profiler");
        $__internal_1932c57d12b5436e23431fc7cf07a8a7460057fdc3b3094d6bff0ac5b3c49ea8->enter($__internal_1932c57d12b5436e23431fc7cf07a8a7460057fdc3b3094d6bff0ac5b3c49ea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1932c57d12b5436e23431fc7cf07a8a7460057fdc3b3094d6bff0ac5b3c49ea8->leave($__internal_1932c57d12b5436e23431fc7cf07a8a7460057fdc3b3094d6bff0ac5b3c49ea8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_609f2b37b980efb5bfabb8d33632c586833cf19ad5525e7e5db0bb0050ade182 = $this->env->getExtension("native_profiler");
        $__internal_609f2b37b980efb5bfabb8d33632c586833cf19ad5525e7e5db0bb0050ade182->enter($__internal_609f2b37b980efb5bfabb8d33632c586833cf19ad5525e7e5db0bb0050ade182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_609f2b37b980efb5bfabb8d33632c586833cf19ad5525e7e5db0bb0050ade182->leave($__internal_609f2b37b980efb5bfabb8d33632c586833cf19ad5525e7e5db0bb0050ade182_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d72bb776afeb3e27b22db797782d0e0b86f8e32f35627c5716bb1b8e8ff39067 = $this->env->getExtension("native_profiler");
        $__internal_d72bb776afeb3e27b22db797782d0e0b86f8e32f35627c5716bb1b8e8ff39067->enter($__internal_d72bb776afeb3e27b22db797782d0e0b86f8e32f35627c5716bb1b8e8ff39067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d72bb776afeb3e27b22db797782d0e0b86f8e32f35627c5716bb1b8e8ff39067->leave($__internal_d72bb776afeb3e27b22db797782d0e0b86f8e32f35627c5716bb1b8e8ff39067_prof);

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
