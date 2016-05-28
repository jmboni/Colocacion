<?php

/* DsgagenciaBundle:Trabajos:edit.html.twig */
class __TwigTemplate_4c0c3ea96313ceebf07b4718a9e5d648de3b0afd4b0c8a9394b32ae6b2a18cc1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DsgagenciaBundle::layout.html.twig", "DsgagenciaBundle:Trabajos:edit.html.twig", 1);
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
        // line 3
        $this->env->getExtension('form')->renderer->setTheme((isset($context["edit_form"]) ? $context["edit_form"] : null), array(0 => $this));
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

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 19
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/csspaginas/show.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
    }

    // line 23
    public function block_formulario($context, array $blocks = array())
    {
        // line 24
        echo "    ";
        $this->displayParentBlock("formulario", $context, $blocks);
        echo "
    <div class=\"container editshow\">
        <div class=\"row well\">
            <div class=\"col-xs-4>
                <div class=\"page-header\">
                    <h2>Actualizando oferta</h2>
                </div>
                
                <form action=";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("trabajos_update", array("token" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "token", array()))), "html", null, true);
        echo " method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'enctype');
        echo ">
                    <div class=\"form-group\">
                        ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "categoria", array()), 'label');
        echo "
                        ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "categoria", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Categoria")));
        echo "
                        <span class=\"text-danger\">";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "categoria", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "tipo", array()), 'label');
        echo "
                        ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "tipo", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        <span class=\"text-danger\">";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "tipo", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "compania", array()), 'label');
        echo "
                        ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "compania", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Empresa")));
        echo "
                        <span class=\"text-danger\">";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "compania", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "file", array()), 'label');
        echo "
                        ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "file", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        <span class=\"text-danger\">";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "file", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "url", array()), 'label');
        echo "
                        ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "url", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Website empresa")));
        echo "
                        <span class=\"text-danger\">";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "url", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "posicion", array()), 'label');
        echo "
                        ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "posicion", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Puesto a desemplear")));
        echo "
                        <span class=\"text-danger\">";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "posicion", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "localidad", array()), 'label');
        echo "
                        ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "localidad", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Localidad oferta")));
        echo "
                        <span class=\"text-danger\">";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "localidad", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "descripcion", array()), 'label');
        echo "
                        ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "descripcion", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Descripción oferta")));
        echo "
                        <span class=\"text-danger\">";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "descripcion", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "how_to_apply", array()), 'label');
        echo "
                        ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "how_to_apply", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Como apuntarse")));
        echo "
                        <span class=\"text-danger\">";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "how_to_apply", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"checkbox\">
                        <label>
                            ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "publico", array()), 'widget');
        echo "
                        </label>
                        ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "publico", array()), 'label');
        echo "
                        <span class=\"text-danger\">";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "publico", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "email", array()), 'label');
        echo "
                        ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Email de contacto")));
        echo "
                        <span class=\"text-danger\">";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "email", array()), 'errors');
        echo "</span>
                    </div>
                    
                    <p>
                        <a href=\"";
        // line 92
        echo $this->env->getExtension('routing')->getPath("trabajos");
        echo "\" class=\"btn btn-info\" role=\"button\">Volver a la lista</a>
                        <a href=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("trabajos_preview", array("token" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "token", array()), "compania" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "companiaSlug", array()), "localidad" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "localidadSlug", array()), "posicion" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "posicionSlug", array()))), "html", null, true);
        echo "\" class=\"btn btn-info\" role=\"button\">Vista previa</a>
                        <button type=\"submit\" class=\"btn btn-info\">Actualizar</button>
                    </p>
                        
                ";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'rest');
        echo "
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "DsgagenciaBundle:Trabajos:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 97,  261 => 93,  257 => 92,  250 => 88,  246 => 87,  242 => 86,  236 => 83,  232 => 82,  227 => 80,  220 => 76,  216 => 75,  212 => 74,  206 => 71,  202 => 70,  198 => 69,  192 => 66,  188 => 65,  184 => 64,  178 => 61,  174 => 60,  170 => 59,  164 => 56,  160 => 55,  156 => 54,  150 => 51,  146 => 50,  142 => 49,  136 => 46,  132 => 45,  128 => 44,  122 => 41,  118 => 40,  114 => 39,  108 => 36,  104 => 35,  100 => 34,  93 => 32,  81 => 24,  78 => 23,  72 => 20,  67 => 19,  64 => 18,  57 => 12,  48 => 10,  44 => 9,  41 => 8,  38 => 7,  36 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'DsgagenciaBundle::layout.html.twig' %}*/
/* */
/* {% form_theme edit_form _self %}*/
/* */
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
/*     {{ parent() }}*/
/*     <div class="container editshow">*/
/*         <div class="row well">*/
/*             <div class="col-xs-4>*/
/*                 <div class="page-header">*/
/*                     <h2>Actualizando oferta</h2>*/
/*                 </div>*/
/*                 */
/*                 <form action={{ path('trabajos_update', { 'token': entity.token }) }} method="post" {{ form_enctype(edit_form) }}>*/
/*                     <div class="form-group">*/
/*                         {{ form_label(edit_form.categoria)}}*/
/*                         {{ form_widget(edit_form.categoria, {'attr' : {'class' : 'form-control', 'placeholder' : 'Categoria'}}) }}*/
/*                         <span class="text-danger">{{ form_errors(edit_form.categoria)}}</span>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         {{ form_label(edit_form.tipo)}}*/
/*                         {{ form_widget(edit_form.tipo, {'attr' : {'class' : 'form-control'}}) }}*/
/*                         <span class="text-danger">{{ form_errors(edit_form.tipo)}}</span>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         {{ form_label(edit_form.compania)}}*/
/*                         {{ form_widget(edit_form.compania, {'attr' : {'class' : 'form-control', 'placeholder' : 'Empresa'}}) }}*/
/*                         <span class="text-danger">{{ form_errors(edit_form.compania)}}</span>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         {{ form_label(edit_form.file)}}*/
/*                         {{ form_widget(edit_form.file, {'attr' : {'class' : 'form-control'}}) }}*/
/*                         <span class="text-danger">{{ form_errors(edit_form.file)}}</span>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         {{ form_label(edit_form.url)}}*/
/*                         {{ form_widget(edit_form.url, {'attr' : {'class' : 'form-control', 'placeholder' : 'Website empresa'}}) }}*/
/*                         <span class="text-danger">{{ form_errors(edit_form.url)}}</span>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         {{ form_label(edit_form.posicion)}}*/
/*                         {{ form_widget(edit_form.posicion, {'attr' : {'class' : 'form-control', 'placeholder' : 'Puesto a desemplear'}}) }}*/
/*                         <span class="text-danger">{{ form_errors(edit_form.posicion)}}</span>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         {{ form_label(edit_form.localidad)}}*/
/*                         {{ form_widget(edit_form.localidad, {'attr' : {'class' : 'form-control', 'placeholder' : 'Localidad oferta'}}) }}*/
/*                         <span class="text-danger">{{ form_errors(edit_form.localidad)}}</span>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         {{ form_label(edit_form.descripcion)}}*/
/*                         {{ form_widget(edit_form.descripcion, {'attr' : {'class' : 'form-control', 'placeholder' : 'Descripción oferta'}}) }}*/
/*                         <span class="text-danger">{{ form_errors(edit_form.descripcion)}}</span>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         {{ form_label(edit_form.how_to_apply)}}*/
/*                         {{ form_widget(edit_form.how_to_apply, {'attr' : {'class' : 'form-control', 'placeholder' : 'Como apuntarse'}}) }}*/
/*                         <span class="text-danger">{{ form_errors(edit_form.how_to_apply)}}</span>*/
/*                     </div>*/
/*                     <div class="checkbox">*/
/*                         <label>*/
/*                             {{ form_widget(edit_form.publico)}}*/
/*                         </label>*/
/*                         {{ form_label(edit_form.publico)}}*/
/*                         <span class="text-danger">{{ form_errors(edit_form.publico)}}</span>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         {{ form_label(edit_form.email)}}*/
/*                         {{ form_widget(edit_form.email, {'attr' : {'class' : 'form-control', 'placeholder' : 'Email de contacto'}}) }}*/
/*                         <span class="text-danger">{{ form_errors(edit_form.email)}}</span>*/
/*                     </div>*/
/*                     */
/*                     <p>*/
/*                         <a href="{{ path('trabajos') }}" class="btn btn-info" role="button">Volver a la lista</a>*/
/*                         <a href="{{ url('trabajos_preview', {'token': entity.token, 'compania': entity.companiaSlug, 'localidad': entity.localidadSlug, 'posicion': entity.posicionSlug }) }}" class="btn btn-info" role="button">Vista previa</a>*/
/*                         <button type="submit" class="btn btn-info">Actualizar</button>*/
/*                     </p>*/
/*                         */
/*                 {{ form_rest(edit_form)}}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
