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
            'formulario' => array($this, 'block_formulario'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DsgagenciaBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3ee926adba2c8d35a528b65e47e156f90140be897d2acaf9bbaba351794de512 = $this->env->getExtension("native_profiler");
        $__internal_3ee926adba2c8d35a528b65e47e156f90140be897d2acaf9bbaba351794de512->enter($__internal_3ee926adba2c8d35a528b65e47e156f90140be897d2acaf9bbaba351794de512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DsgagenciaBundle:Afiliados:afiliados_new.html.twig"));

        // line 3
        $context["form_themes"] = $this;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ee926adba2c8d35a528b65e47e156f90140be897d2acaf9bbaba351794de512->leave($__internal_3ee926adba2c8d35a528b65e47e156f90140be897d2acaf9bbaba351794de512_prof);

    }

    // line 5
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_d3d49c8e809887da1eacb986330ac2f1e2c219a59e1b35b47cc66ba17096d177 = $this->env->getExtension("native_profiler");
        $__internal_d3d49c8e809887da1eacb986330ac2f1e2c219a59e1b35b47cc66ba17096d177->enter($__internal_d3d49c8e809887da1eacb986330ac2f1e2c219a59e1b35b47cc66ba17096d177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_d3d49c8e809887da1eacb986330ac2f1e2c219a59e1b35b47cc66ba17096d177->leave($__internal_d3d49c8e809887da1eacb986330ac2f1e2c219a59e1b35b47cc66ba17096d177_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f2532bcb4e4906fc37e94de87c2e7aeebdbeb23c7d783ed927d8a1a4acd612dd = $this->env->getExtension("native_profiler");
        $__internal_f2532bcb4e4906fc37e94de87c2e7aeebdbeb23c7d783ed927d8a1a4acd612dd->enter($__internal_f2532bcb4e4906fc37e94de87c2e7aeebdbeb23c7d783ed927d8a1a4acd612dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 18
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/csspaginas/show.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f2532bcb4e4906fc37e94de87c2e7aeebdbeb23c7d783ed927d8a1a4acd612dd->leave($__internal_f2532bcb4e4906fc37e94de87c2e7aeebdbeb23c7d783ed927d8a1a4acd612dd_prof);

    }

    // line 22
    public function block_formulario($context, array $blocks = array())
    {
        $__internal_90f6ba674223152a86bce180bd6ba767edc13a4f3c0adf799f06e9844f628994 = $this->env->getExtension("native_profiler");
        $__internal_90f6ba674223152a86bce180bd6ba767edc13a4f3c0adf799f06e9844f628994->enter($__internal_90f6ba674223152a86bce180bd6ba767edc13a4f3c0adf799f06e9844f628994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulario"));

        // line 23
        echo "    ";
        $this->displayParentBlock("formulario", $context, $blocks);
        echo "
    <div class=\"container editshow\">
        <div class=\"row well\">
            <div class=\"col-xs-6\">
                <div class=\"page-header\">
                    <h2>Nuevo Usuario</h2>
                </div>
                    
                <form action=";
        // line 31
        echo $this->env->getExtension('routing')->getPath("afiliados_create");
        echo " method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
                    <div class=\"form-group\">
                        ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "url", array()), 'label');
        echo "
                        ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "url", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Url")));
        echo "
                        <span class=\"text-danger\">";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "url", array()), 'errors');
        echo "</span>
                    </div>    
                    
                    <div class=\"form-group\">    
                        ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label');
        echo "
                        ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Email")));
        echo "
                        <span class=\"text-danger\">";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"form-group\">
                            ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categoria", array()), 'label');
        echo "
                            <br/>
                            ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categoria", array()), 'widget');
        echo "
                            <span class=\"text-danger\">";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categoria", array()), 'errors');
        echo "</span>
                    </div>
                    <p>
                        <!--<input type=\"submit\" value=\"Submit\" />-->
                        <button type=\"submit\" value=\"Submit\" class=\"btn btn-info\">Aceptar</button>
                    </p>
                ";
        // line 53
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            
            </div>
        </div>
    </div>
";
        
        $__internal_90f6ba674223152a86bce180bd6ba767edc13a4f3c0adf799f06e9844f628994->leave($__internal_90f6ba674223152a86bce180bd6ba767edc13a4f3c0adf799f06e9844f628994_prof);

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
        return array (  168 => 53,  159 => 47,  155 => 46,  150 => 44,  144 => 41,  140 => 40,  136 => 39,  129 => 35,  125 => 34,  121 => 33,  114 => 31,  102 => 23,  96 => 22,  87 => 19,  82 => 18,  76 => 17,  66 => 12,  57 => 10,  53 => 9,  50 => 8,  47 => 7,  45 => 6,  39 => 5,  32 => 1,  30 => 3,  11 => 1,);
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
/*     <link rel="stylesheet" href="{{ asset('public/csspaginas/show.css') }}" type="text/css" media="all" />*/
/* {% endblock %}*/
/*  */
/* {% block formulario %}*/
/*     {{ parent() }}*/
/*     <div class="container editshow">*/
/*         <div class="row well">*/
/*             <div class="col-xs-6">*/
/*                 <div class="page-header">*/
/*                     <h2>Nuevo Usuario</h2>*/
/*                 </div>*/
/*                     */
/*                 <form action={{ path('afiliados_create') }} method="post" {{ form_enctype(form) }}>*/
/*                     <div class="form-group">*/
/*                         {{ form_label(form.url) }}*/
/*                         {{ form_widget(form.url, {'attr' : {'class' : 'form-control', 'placeholder' : 'Url'}}) }}*/
/*                         <span class="text-danger">{{ form_errors(form.url) }}</span>*/
/*                     </div>    */
/*                     */
/*                     <div class="form-group">    */
/*                         {{ form_label(form.email) }}*/
/*                         {{ form_widget(form.email, {'attr' : {'class' : 'form-control', 'placeholder' : 'Email'}}) }}*/
/*                         <span class="text-danger">{{ form_errors(form.email) }}</span>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                             {{ form_label(form.categoria) }}*/
/*                             <br/>*/
/*                             {{ form_widget(form.categoria) }}*/
/*                             <span class="text-danger">{{ form_errors(form.categoria)}}</span>*/
/*                     </div>*/
/*                     <p>*/
/*                         <!--<input type="submit" value="Submit" />-->*/
/*                         <button type="submit" value="Submit" class="btn btn-info">Aceptar</button>*/
/*                     </p>*/
/*                 {{ form_end(form) }}*/
/*             */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/*                     */
