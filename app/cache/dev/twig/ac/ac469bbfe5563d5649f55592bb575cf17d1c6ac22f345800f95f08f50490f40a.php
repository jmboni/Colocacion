<?php

/* DsgagenciaBundle:Trabajos:new.html.twig */
class __TwigTemplate_12956cf386d9ed6d45911cfba33c86f7acafb52874c766ec9409c67fe1174bf9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DsgagenciaBundle::layout.html.twig", "DsgagenciaBundle:Trabajos:new.html.twig", 1);
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
        $__internal_f06f0ec5a00110bebf74f227729c65e0bc93f1af1b6480bf982e145795e7512e = $this->env->getExtension("native_profiler");
        $__internal_f06f0ec5a00110bebf74f227729c65e0bc93f1af1b6480bf982e145795e7512e->enter($__internal_f06f0ec5a00110bebf74f227729c65e0bc93f1af1b6480bf982e145795e7512e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DsgagenciaBundle:Trabajos:new.html.twig"));

        // line 3
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => $this));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f06f0ec5a00110bebf74f227729c65e0bc93f1af1b6480bf982e145795e7512e->leave($__internal_f06f0ec5a00110bebf74f227729c65e0bc93f1af1b6480bf982e145795e7512e_prof);

    }

    // line 5
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_5c23ba149c3cecc7de46d24bdeb3758413247898799484e612370c57504d702a = $this->env->getExtension("native_profiler");
        $__internal_5c23ba149c3cecc7de46d24bdeb3758413247898799484e612370c57504d702a->enter($__internal_5c23ba149c3cecc7de46d24bdeb3758413247898799484e612370c57504d702a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_5c23ba149c3cecc7de46d24bdeb3758413247898799484e612370c57504d702a->leave($__internal_5c23ba149c3cecc7de46d24bdeb3758413247898799484e612370c57504d702a_prof);

    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_332993e5a7fd98e97255923407fffd0c6c809efc9bd5dea9047be72e089cc392 = $this->env->getExtension("native_profiler");
        $__internal_332993e5a7fd98e97255923407fffd0c6c809efc9bd5dea9047be72e089cc392->enter($__internal_332993e5a7fd98e97255923407fffd0c6c809efc9bd5dea9047be72e089cc392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 19
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/csspaginas/show.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_332993e5a7fd98e97255923407fffd0c6c809efc9bd5dea9047be72e089cc392->leave($__internal_332993e5a7fd98e97255923407fffd0c6c809efc9bd5dea9047be72e089cc392_prof);

    }

    // line 23
    public function block_formulario($context, array $blocks = array())
    {
        $__internal_8d9a12460c9ec6afdf9e7fe6d1acfb6e4c8261603b3c55b762c4e39d207c4401 = $this->env->getExtension("native_profiler");
        $__internal_8d9a12460c9ec6afdf9e7fe6d1acfb6e4c8261603b3c55b762c4e39d207c4401->enter($__internal_8d9a12460c9ec6afdf9e7fe6d1acfb6e4c8261603b3c55b762c4e39d207c4401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulario"));

        // line 24
        echo "    <div class=\"container\">
        <div class=\"row well\">
            <div class=\"col-xs-12 col-md-6\">
                <div class=\"page-header\">
                    <h2>Insertar oferta nueva</h2>
                </div>
                
                <form action=";
        // line 31
        echo $this->env->getExtension('routing')->getPath("trabajos_create");
        echo " method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
                    <div class=\"form-group\">
                        ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categoria", array()), 'label');
        echo "
                        ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categoria", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Categoria")));
        echo "
                        <span class=\"text-danger\">";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categoria", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipo", array()), 'label');
        echo "
                        ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipo", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        <span class=\"text-danger\">";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipo", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "compania", array()), 'label');
        echo "
                        ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "compania", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Empresa")));
        echo "
                        <span class=\"text-danger\">";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "compania", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'label');
        echo "
                        ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        <span class=\"text-danger\">";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "url", array()), 'label');
        echo "
                        ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "url", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Website empresa")));
        echo "
                        <span class=\"text-danger\">";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "url", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "posicion", array()), 'label');
        echo "
                        ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "posicion", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Puesto a desemplear")));
        echo "
                        <span class=\"text-danger\">";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "posicion", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "localidad", array()), 'label');
        echo "
                        ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "localidad", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Localidad oferta")));
        echo "
                        <span class=\"text-danger\">";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "localidad", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion", array()), 'label');
        echo "
                        ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Descripción oferta")));
        echo "
                        <span class=\"text-danger\">";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "how_to_apply", array()), 'label');
        echo "
                        ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "how_to_apply", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Como apuntarse")));
        echo "
                        <span class=\"text-danger\">";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "how_to_apply", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"checkbox\">
                        <label>
                            ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "publico", array()), 'widget');
        echo "
                        </label>
                        ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "publico", array()), 'label');
        echo "
                        <span class=\"text-danger\">";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "publico", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label');
        echo "
                        ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Email de contacto")));
        echo "
                        <span class=\"text-danger\">";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "</span>
                    </div>
                    
                    <p>
                        <button type=\"submit\" class=\"btn btn-info\">Crear</button>
                        <a href=\"";
        // line 92
        echo $this->env->getExtension('routing')->getPath("trabajos");
        echo "\" class=\"btn btn-info\" role=\"button\">Volver a la lista</a>
                    </p>
                        
                ";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_8d9a12460c9ec6afdf9e7fe6d1acfb6e4c8261603b3c55b762c4e39d207c4401->leave($__internal_8d9a12460c9ec6afdf9e7fe6d1acfb6e4c8261603b3c55b762c4e39d207c4401_prof);

    }

    public function getTemplateName()
    {
        return "DsgagenciaBundle:Trabajos:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 95,  276 => 92,  268 => 87,  264 => 86,  260 => 85,  254 => 82,  250 => 81,  245 => 79,  238 => 75,  234 => 74,  230 => 73,  224 => 70,  220 => 69,  216 => 68,  210 => 65,  206 => 64,  202 => 63,  196 => 60,  192 => 59,  188 => 58,  182 => 55,  178 => 54,  174 => 53,  168 => 50,  164 => 49,  160 => 48,  154 => 45,  150 => 44,  146 => 43,  140 => 40,  136 => 39,  132 => 38,  126 => 35,  122 => 34,  118 => 33,  111 => 31,  102 => 24,  96 => 23,  87 => 20,  82 => 19,  76 => 18,  66 => 12,  57 => 10,  53 => 9,  50 => 8,  47 => 7,  45 => 6,  39 => 5,  32 => 1,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'DsgagenciaBundle::layout.html.twig' %}*/
/* */
/* {% form_theme form _self %}*/
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
/* */
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <link rel="stylesheet" href="{{ asset('public/csspaginas/show.css') }}" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block formulario %}*/
/*     <div class="container">*/
/*         <div class="row well">*/
/*             <div class="col-xs-12 col-md-6">*/
/*                 <div class="page-header">*/
/*                     <h2>Insertar oferta nueva</h2>*/
/*                 </div>*/
/*                 */
/*                 <form action={{ path('trabajos_create') }} method="post" {{ form_enctype(form) }}>*/
/*                     <div class="form-group">*/
/*                         {{ form_label(form.categoria)}}*/
/*                         {{ form_widget(form.categoria, {'attr' : {'class' : 'form-control', 'placeholder' : 'Categoria'}}) }}*/
/*                         <span class="text-danger">{{ form_errors(form.categoria)}}</span>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         {{ form_label(form.tipo)}}*/
/*                         {{ form_widget(form.tipo, {'attr' : {'class' : 'form-control'}}) }}*/
/*                         <span class="text-danger">{{ form_errors(form.tipo)}}</span>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         {{ form_label(form.compania)}}*/
/*                         {{ form_widget(form.compania, {'attr' : {'class' : 'form-control', 'placeholder' : 'Empresa'}}) }}*/
/*                         <span class="text-danger">{{ form_errors(form.compania)}}</span>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         {{ form_label(form.file)}}*/
/*                         {{ form_widget(form.file, {'attr' : {'class' : 'form-control'}}) }}*/
/*                         <span class="text-danger">{{ form_errors(form.file)}}</span>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         {{ form_label(form.url)}}*/
/*                         {{ form_widget(form.url, {'attr' : {'class' : 'form-control', 'placeholder' : 'Website empresa'}}) }}*/
/*                         <span class="text-danger">{{ form_errors(form.url)}}</span>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         {{ form_label(form.posicion)}}*/
/*                         {{ form_widget(form.posicion, {'attr' : {'class' : 'form-control', 'placeholder' : 'Puesto a desemplear'}}) }}*/
/*                         <span class="text-danger">{{ form_errors(form.posicion)}}</span>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         {{ form_label(form.localidad)}}*/
/*                         {{ form_widget(form.localidad, {'attr' : {'class' : 'form-control', 'placeholder' : 'Localidad oferta'}}) }}*/
/*                         <span class="text-danger">{{ form_errors(form.localidad)}}</span>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         {{ form_label(form.descripcion)}}*/
/*                         {{ form_widget(form.descripcion, {'attr' : {'class' : 'form-control', 'placeholder' : 'Descripción oferta'}}) }}*/
/*                         <span class="text-danger">{{ form_errors(form.descripcion)}}</span>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         {{ form_label(form.how_to_apply)}}*/
/*                         {{ form_widget(form.how_to_apply, {'attr' : {'class' : 'form-control', 'placeholder' : 'Como apuntarse'}}) }}*/
/*                         <span class="text-danger">{{ form_errors(form.how_to_apply)}}</span>*/
/*                     </div>*/
/*                     <div class="checkbox">*/
/*                         <label>*/
/*                             {{ form_widget(form.publico)}}*/
/*                         </label>*/
/*                         {{ form_label(form.publico)}}*/
/*                         <span class="text-danger">{{ form_errors(form.publico)}}</span>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         {{ form_label(form.email)}}*/
/*                         {{ form_widget(form.email, {'attr' : {'class' : 'form-control', 'placeholder' : 'Email de contacto'}}) }}*/
/*                         <span class="text-danger">{{ form_errors(form.email)}}</span>*/
/*                     </div>*/
/*                     */
/*                     <p>*/
/*                         <button type="submit" class="btn btn-info">Crear</button>*/
/*                         <a href="{{ path('trabajos') }}" class="btn btn-info" role="button">Volver a la lista</a>*/
/*                     </p>*/
/*                         */
/*                 {{ form_rest(form)}}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
