<?php

/* DsgagenciaBundle:Trabajos:edit.html.twig */
class __TwigTemplate_2cf0c279e356e6570f5388126bc3b47c37d9ccb2af00697e11de13a8bf6d4225 extends Twig_Template
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
        $__internal_6c2d618433ffb4e4d8e52ca6e349fa0588ee00f08c522e8bb2cec8180624ce49 = $this->env->getExtension("native_profiler");
        $__internal_6c2d618433ffb4e4d8e52ca6e349fa0588ee00f08c522e8bb2cec8180624ce49->enter($__internal_6c2d618433ffb4e4d8e52ca6e349fa0588ee00f08c522e8bb2cec8180624ce49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DsgagenciaBundle:Trabajos:edit.html.twig"));

        // line 3
        $this->env->getExtension('form')->renderer->setTheme((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), array(0 => $this));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c2d618433ffb4e4d8e52ca6e349fa0588ee00f08c522e8bb2cec8180624ce49->leave($__internal_6c2d618433ffb4e4d8e52ca6e349fa0588ee00f08c522e8bb2cec8180624ce49_prof);

    }

    // line 5
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_d39cf3c7be523d018bdf73e5c1c93e5aa8c48e3f911e7eddaf4036eb86939bfc = $this->env->getExtension("native_profiler");
        $__internal_d39cf3c7be523d018bdf73e5c1c93e5aa8c48e3f911e7eddaf4036eb86939bfc->enter($__internal_d39cf3c7be523d018bdf73e5c1c93e5aa8c48e3f911e7eddaf4036eb86939bfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_d39cf3c7be523d018bdf73e5c1c93e5aa8c48e3f911e7eddaf4036eb86939bfc->leave($__internal_d39cf3c7be523d018bdf73e5c1c93e5aa8c48e3f911e7eddaf4036eb86939bfc_prof);

    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bc9b8ead1976173c336c107c3dfe310340f30b7de6fdb9f3ded4c2a4fea93092 = $this->env->getExtension("native_profiler");
        $__internal_bc9b8ead1976173c336c107c3dfe310340f30b7de6fdb9f3ded4c2a4fea93092->enter($__internal_bc9b8ead1976173c336c107c3dfe310340f30b7de6fdb9f3ded4c2a4fea93092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 19
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/csspaginas/show.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_bc9b8ead1976173c336c107c3dfe310340f30b7de6fdb9f3ded4c2a4fea93092->leave($__internal_bc9b8ead1976173c336c107c3dfe310340f30b7de6fdb9f3ded4c2a4fea93092_prof);

    }

    // line 23
    public function block_formulario($context, array $blocks = array())
    {
        $__internal_bcba3938e06d61bcecffeb5deff9fa71ed4aa075e685952764fa8040581a7397 = $this->env->getExtension("native_profiler");
        $__internal_bcba3938e06d61bcecffeb5deff9fa71ed4aa075e685952764fa8040581a7397->enter($__internal_bcba3938e06d61bcecffeb5deff9fa71ed4aa075e685952764fa8040581a7397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulario"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("trabajos_update", array("token" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "token", array()))), "html", null, true);
        echo " method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'enctype');
        echo ">
                    <div class=\"form-group\">
                        ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "categoria", array()), 'label');
        echo "
                        ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "categoria", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Categoria")));
        echo "
                        <span class=\"text-danger\">";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "categoria", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "tipo", array()), 'label');
        echo "
                        ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "tipo", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        <span class=\"text-danger\">";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "tipo", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "compania", array()), 'label');
        echo "
                        ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "compania", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Empresa")));
        echo "
                        <span class=\"text-danger\">";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "compania", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "file", array()), 'label');
        echo "
                        ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "file", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        <span class=\"text-danger\">";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "file", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "url", array()), 'label');
        echo "
                        ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "url", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Website empresa")));
        echo "
                        <span class=\"text-danger\">";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "url", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "posicion", array()), 'label');
        echo "
                        ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "posicion", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Puesto a desemplear")));
        echo "
                        <span class=\"text-danger\">";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "posicion", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "localidad", array()), 'label');
        echo "
                        ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "localidad", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Localidad oferta")));
        echo "
                        <span class=\"text-danger\">";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "localidad", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "descripcion", array()), 'label');
        echo "
                        ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "descripcion", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Descripción oferta")));
        echo "
                        <span class=\"text-danger\">";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "descripcion", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "how_to_apply", array()), 'label');
        echo "
                        ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "how_to_apply", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Como apuntarse")));
        echo "
                        <span class=\"text-danger\">";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "how_to_apply", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"checkbox\">
                        <label>
                            ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "publico", array()), 'widget');
        echo "
                        </label>
                        ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "publico", array()), 'label');
        echo "
                        <span class=\"text-danger\">";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "publico", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email", array()), 'label');
        echo "
                        ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Email de contacto")));
        echo "
                        <span class=\"text-danger\">";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email", array()), 'errors');
        echo "</span>
                    </div>
                    
                    <p>
                        <a href=\"";
        // line 92
        echo $this->env->getExtension('routing')->getPath("trabajos");
        echo "\" class=\"btn btn-info\" role=\"button\">Volver a la lista</a>
                        <a href=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("trabajos_preview", array("token" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "token", array()), "compania" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "companiaSlug", array()), "localidad" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "localidadSlug", array()), "posicion" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "posicionSlug", array()))), "html", null, true);
        echo "\" class=\"btn btn-info\" role=\"button\">Vista previa</a>
                        <button type=\"submit\" class=\"btn btn-info\">Actualizar</button>
                    </p>
                        
                ";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'rest');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_bcba3938e06d61bcecffeb5deff9fa71ed4aa075e685952764fa8040581a7397->leave($__internal_bcba3938e06d61bcecffeb5deff9fa71ed4aa075e685952764fa8040581a7397_prof);

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
        return array (  289 => 97,  282 => 93,  278 => 92,  271 => 88,  267 => 87,  263 => 86,  257 => 83,  253 => 82,  248 => 80,  241 => 76,  237 => 75,  233 => 74,  227 => 71,  223 => 70,  219 => 69,  213 => 66,  209 => 65,  205 => 64,  199 => 61,  195 => 60,  191 => 59,  185 => 56,  181 => 55,  177 => 54,  171 => 51,  167 => 50,  163 => 49,  157 => 46,  153 => 45,  149 => 44,  143 => 41,  139 => 40,  135 => 39,  129 => 36,  125 => 35,  121 => 34,  114 => 32,  102 => 24,  96 => 23,  87 => 20,  82 => 19,  76 => 18,  66 => 12,  57 => 10,  53 => 9,  50 => 8,  47 => 7,  45 => 6,  39 => 5,  32 => 1,  30 => 3,  11 => 1,);
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
