<?php

/* DsgagenciaBundle:Afiliados:afiliados_new.html.twig */
class __TwigTemplate_253431f10cabe0a3ac6a5a6b591c1d1956290c44ca0da24c218a4b6b7e8edb43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DsgagenciaBundle::layout.html.twig", "DsgagenciaBundle:Afiliados:afiliados_new.html.twig", 1);
        $this->blocks = array(
            'form_errors' => array($this, 'block_form_errors'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DsgagenciaBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2998ece17fc43aa91ac369e1b54b053efe1a1ed073dae1e88fde2345e8eb0f5c = $this->env->getExtension("native_profiler");
        $__internal_2998ece17fc43aa91ac369e1b54b053efe1a1ed073dae1e88fde2345e8eb0f5c->enter($__internal_2998ece17fc43aa91ac369e1b54b053efe1a1ed073dae1e88fde2345e8eb0f5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DsgagenciaBundle:Afiliados:afiliados_new.html.twig"));

        // line 3
        $context["form_themes"] = $this;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2998ece17fc43aa91ac369e1b54b053efe1a1ed073dae1e88fde2345e8eb0f5c->leave($__internal_2998ece17fc43aa91ac369e1b54b053efe1a1ed073dae1e88fde2345e8eb0f5c_prof);

    }

    // line 5
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_90b958bb5c2ca77657a991d3c1a5256b3c68734016aab29a8dcd396241d9623e = $this->env->getExtension("native_profiler");
        $__internal_90b958bb5c2ca77657a991d3c1a5256b3c68734016aab29a8dcd396241d9623e->enter($__internal_90b958bb5c2ca77657a991d3c1a5256b3c68734016aab29a8dcd396241d9623e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 6
        ob_start();
        // line 7
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 8
            echo "        <ul class=\"error_list\">
            ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 10
                echo "                <li>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["error"], "messageTemplate", array()), $this->getAttribute($context["error"], "messageParameters", array()), "validators"), "html", null, true);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "        </ul>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_90b958bb5c2ca77657a991d3c1a5256b3c68734016aab29a8dcd396241d9623e->leave($__internal_90b958bb5c2ca77657a991d3c1a5256b3c68734016aab29a8dcd396241d9623e_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f702e9918a33f5112955e7b4f6617c2a70a2f49181c8c51496fda9a2a4d6ad9d = $this->env->getExtension("native_profiler");
        $__internal_f702e9918a33f5112955e7b4f6617c2a70a2f49181c8c51496fda9a2a4d6ad9d->enter($__internal_f702e9918a33f5112955e7b4f6617c2a70a2f49181c8c51496fda9a2a4d6ad9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 18
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/erlemjobeet/css/job.css"), "html", null, true);
        echo " type=\"text/css\" media=\"all\" />
";
        
        $__internal_f702e9918a33f5112955e7b4f6617c2a70a2f49181c8c51496fda9a2a4d6ad9d->leave($__internal_f702e9918a33f5112955e7b4f6617c2a70a2f49181c8c51496fda9a2a4d6ad9d_prof);

    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        $__internal_865c00f9ae9db6ff348005d4e13420c37b246b4b50b685395e6edd3d22676f9e = $this->env->getExtension("native_profiler");
        $__internal_865c00f9ae9db6ff348005d4e13420c37b246b4b50b685395e6edd3d22676f9e->enter($__internal_865c00f9ae9db6ff348005d4e13420c37b246b4b50b685395e6edd3d22676f9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 23
        echo "    <h1>Become an affiliate</h1>
        <form action=";
        // line 24
        echo $this->env->getExtension('routing')->getPath("afiliados_create");
        echo " method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
            <table id=\"job_form\">
                <tfoot>
                    <tr>
                        <td colspan=\"2\">
                            <input type=\"submit\" value=\"Submit\" />
                        </td>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <th>";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "url", array()), 'label');
        echo "</th>
                        <td>
                            ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "url", array()), 'errors');
        echo "
                            ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "url", array()), 'widget');
        echo "
                        </td>
                    </tr>
                    <tr>
                        <th>";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label');
        echo "</th>
                        <td>
                            ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
                            ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
                        </td>
                    </tr>
                    <tr>
                        <th>";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categoria", array()), 'label');
        echo "</th>
                        <td>
                            ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categoria", array()), 'errors');
        echo "
                            ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categoria", array()), 'widget');
        echo "
                        </td>
                    </tr>
                </tbody>
            </table>
        ";
        // line 57
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_865c00f9ae9db6ff348005d4e13420c37b246b4b50b685395e6edd3d22676f9e->leave($__internal_865c00f9ae9db6ff348005d4e13420c37b246b4b50b685395e6edd3d22676f9e_prof);

    }

    public function getTemplateName()
    {
        return "DsgagenciaBundle:Afiliados:afiliados_new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 57,  162 => 52,  158 => 51,  153 => 49,  146 => 45,  142 => 44,  137 => 42,  130 => 38,  126 => 37,  121 => 35,  105 => 24,  102 => 23,  96 => 22,  87 => 19,  82 => 18,  76 => 17,  66 => 12,  57 => 10,  53 => 9,  50 => 8,  47 => 7,  45 => 6,  39 => 5,  32 => 1,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'DsgagenciaBundle::layout.html.twig' %}*/
/*  */
/* {% set form_themes = _self %}*/
/*  */
/* {% block form_errors %}*/
/* {% spaceless %}*/
/*     {% if errors|length > 0 %}*/
/*         <ul class="error_list">*/
/*             {% for error in errors %}*/
/*                 <li>{{ error.messageTemplate|trans(error.messageParameters, 'validators') }}</li>*/
/*             {% endfor %}*/
/*         </ul>*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock form_errors %}*/
/*  */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <link rel="stylesheet" href={{ asset('bundles/erlemjobeet/css/job.css') }} type="text/css" media="all" />*/
/* {% endblock %}*/
/*  */
/* {% block content %}*/
/*     <h1>Become an affiliate</h1>*/
/*         <form action={{ path('afiliados_create') }} method="post" {{ form_enctype(form) }}>*/
/*             <table id="job_form">*/
/*                 <tfoot>*/
/*                     <tr>*/
/*                         <td colspan="2">*/
/*                             <input type="submit" value="Submit" />*/
/*                         </td>*/
/*                     </tr>*/
/*                 </tfoot>*/
/*                 <tbody>*/
/*                     <tr>*/
/*                         <th>{{ form_label(form.url) }}</th>*/
/*                         <td>*/
/*                             {{ form_errors(form.url) }}*/
/*                             {{ form_widget(form.url) }}*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <th>{{ form_label(form.email) }}</th>*/
/*                         <td>*/
/*                             {{ form_errors(form.email) }}*/
/*                             {{ form_widget(form.email) }}*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <th>{{ form_label(form.categoria) }}</th>*/
/*                         <td>*/
/*                             {{ form_errors(form.categoria) }}*/
/*                             {{ form_widget(form.categoria) }}*/
/*                         </td>*/
/*                     </tr>*/
/*                 </tbody>*/
/*             </table>*/
/*         {{ form_end(form) }}*/
/* {% endblock %}*/
