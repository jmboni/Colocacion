<?php

/* DsgagenciaBundle:Afiliados:afiliados_new.html.twig */
class __TwigTemplate_855885c04a721e4df38d324727773e66a298081940320f42d1fa26211975486b extends Twig_Template
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
        // line 3
        $context["form_themes"] = $this;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_form_errors($context, array $blocks = array())
    {
        // line 6
        ob_start();
        // line 7
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
            // line 8
            echo "        <ul class=\"error_list\">
            ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : null));
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
    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/erlemjobeet/css/job.css"), "html", null, true);
        echo " type=\"text/css\" media=\"all\" />
";
    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        // line 23
        echo "    <h1>Become an affiliate</h1>
        <form action=";
        // line 24
        echo $this->env->getExtension('routing')->getPath("afiliado_create");
        echo " method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "url", array()), 'label');
        echo "</th>
                        <td>
                            ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "url", array()), 'errors');
        echo "
                            ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "url", array()), 'widget');
        echo "
                        </td>
                    </tr>
                    <tr>
                        <th>";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'label');
        echo "</th>
                        <td>
                            ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'errors');
        echo "
                            ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'widget');
        echo "
                        </td>
                    </tr>
                    <tr>
                        <th>";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "categorias", array()), 'label');
        echo "</th>
                        <td>
                            ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "categorias", array()), 'errors');
        echo "
                            ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "categorias", array()), 'widget');
        echo "
                        </td>
                    </tr>
                </tbody>
            </table>
        ";
        // line 57
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
";
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
        return array (  149 => 57,  141 => 52,  137 => 51,  132 => 49,  125 => 45,  121 => 44,  116 => 42,  109 => 38,  105 => 37,  100 => 35,  84 => 24,  81 => 23,  78 => 22,  72 => 19,  67 => 18,  64 => 17,  57 => 12,  48 => 10,  44 => 9,  41 => 8,  38 => 7,  36 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
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
/*         <form action={{ path('afiliado_create') }} method="post" {{ form_enctype(form) }}>*/
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
/*                         <th>{{ form_label(form.categorias) }}</th>*/
/*                         <td>*/
/*                             {{ form_errors(form.categorias) }}*/
/*                             {{ form_widget(form.categorias) }}*/
/*                         </td>*/
/*                     </tr>*/
/*                 </tbody>*/
/*             </table>*/
/*         {{ form_end(form) }}*/
/* {% endblock %}*/
