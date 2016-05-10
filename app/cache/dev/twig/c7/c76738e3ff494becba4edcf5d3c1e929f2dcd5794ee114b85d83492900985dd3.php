<?php

/* DsgagenciaBundle:Trabajos:new.html.twig */
class __TwigTemplate_087038675ec2cd3c2373794f569e6c28122b38aceb47d1484f8571d4d0590ea9 extends Twig_Template
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
        $__internal_d1de8c477542baeb6cfdc4dfbf8787fe9f7d412e6e971448622ed7fa250ad890 = $this->env->getExtension("native_profiler");
        $__internal_d1de8c477542baeb6cfdc4dfbf8787fe9f7d412e6e971448622ed7fa250ad890->enter($__internal_d1de8c477542baeb6cfdc4dfbf8787fe9f7d412e6e971448622ed7fa250ad890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DsgagenciaBundle:Trabajos:new.html.twig"));

        // line 3
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => $this));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1de8c477542baeb6cfdc4dfbf8787fe9f7d412e6e971448622ed7fa250ad890->leave($__internal_d1de8c477542baeb6cfdc4dfbf8787fe9f7d412e6e971448622ed7fa250ad890_prof);

    }

    // line 5
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_94353ba6420ac682270d37613e912c02126fcaba9f167538c04cce39b0216c57 = $this->env->getExtension("native_profiler");
        $__internal_94353ba6420ac682270d37613e912c02126fcaba9f167538c04cce39b0216c57->enter($__internal_94353ba6420ac682270d37613e912c02126fcaba9f167538c04cce39b0216c57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_94353ba6420ac682270d37613e912c02126fcaba9f167538c04cce39b0216c57->leave($__internal_94353ba6420ac682270d37613e912c02126fcaba9f167538c04cce39b0216c57_prof);

    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_71ca02aaddb3485be141242343a52bcc2ab753e059fb4d9fe8d96ebb4d1c09c5 = $this->env->getExtension("native_profiler");
        $__internal_71ca02aaddb3485be141242343a52bcc2ab753e059fb4d9fe8d96ebb4d1c09c5->enter($__internal_71ca02aaddb3485be141242343a52bcc2ab753e059fb4d9fe8d96ebb4d1c09c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 19
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/csspaginas/show.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_71ca02aaddb3485be141242343a52bcc2ab753e059fb4d9fe8d96ebb4d1c09c5->leave($__internal_71ca02aaddb3485be141242343a52bcc2ab753e059fb4d9fe8d96ebb4d1c09c5_prof);

    }

    // line 23
    public function block_formulario($context, array $blocks = array())
    {
        $__internal_b9223c49ff91a37c9f7c4ed1549fdad6362a513065748af9f90a963dea753e7a = $this->env->getExtension("native_profiler");
        $__internal_b9223c49ff91a37c9f7c4ed1549fdad6362a513065748af9f90a963dea753e7a->enter($__internal_b9223c49ff91a37c9f7c4ed1549fdad6362a513065748af9f90a963dea753e7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulario"));

        // line 24
        echo "    ";
        $this->displayParentBlock("formulario", $context, $blocks);
        echo "
    <div class=\"container editshow\">
        <div class=\"row well\">
            <div class=\"col-xs-4>
                <div class=\"page-header\">
                    <h2>Insertar oferta nueva</h2>
                </div>
                
                <form action=";
        // line 32
        echo $this->env->getExtension('routing')->getPath("trabajos_create");
        echo " method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
                    <div class=\"form-group\">
                        ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categoria", array()), 'label');
        echo "
                        ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categoria", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Categoria")));
        echo "
                        <span class=\"text-danger\">";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categoria", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipo", array()), 'label');
        echo "
                        ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipo", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        <span class=\"text-danger\">";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipo", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "compania", array()), 'label');
        echo "
                        ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "compania", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Empresa")));
        echo "
                        <span class=\"text-danger\">";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "compania", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'label');
        echo "
                        ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        <span class=\"text-danger\">";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "url", array()), 'label');
        echo "
                        ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "url", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Website empresa")));
        echo "
                        <span class=\"text-danger\">";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "url", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "posicion", array()), 'label');
        echo "
                        ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "posicion", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Puesto a desemplear")));
        echo "
                        <span class=\"text-danger\">";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "posicion", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "localidad", array()), 'label');
        echo "
                        ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "localidad", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Localidad oferta")));
        echo "
                        <span class=\"text-danger\">";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "localidad", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion", array()), 'label');
        echo "
                        ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Descripción oferta")));
        echo "
                        <span class=\"text-danger\">";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "how_to_apply", array()), 'label');
        echo "
                        ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "how_to_apply", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Como apuntarse")));
        echo "
                        <span class=\"text-danger\">";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "how_to_apply", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"checkbox\">
                        <label>
                            ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "publico", array()), 'widget');
        echo "
                        </label>
                        ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "publico", array()), 'label');
        echo "
                        <span class=\"text-danger\">";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "publico", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label');
        echo "
                        ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Email de contacto")));
        echo "
                        <span class=\"text-danger\">";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "</span>
                    </div>
                    
                    <p>
                        <button type=\"submit\" class=\"btn btn-info\">Crear</button>
                        <a href=\"";
        // line 93
        echo $this->env->getExtension('routing')->getPath("trabajos");
        echo "\" class=\"btn btn-info\" role=\"button\">Volver a la lista</a>
                    </p>
                        
                ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_b9223c49ff91a37c9f7c4ed1549fdad6362a513065748af9f90a963dea753e7a->leave($__internal_b9223c49ff91a37c9f7c4ed1549fdad6362a513065748af9f90a963dea753e7a_prof);

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
        return array (  285 => 96,  279 => 93,  271 => 88,  267 => 87,  263 => 86,  257 => 83,  253 => 82,  248 => 80,  241 => 76,  237 => 75,  233 => 74,  227 => 71,  223 => 70,  219 => 69,  213 => 66,  209 => 65,  205 => 64,  199 => 61,  195 => 60,  191 => 59,  185 => 56,  181 => 55,  177 => 54,  171 => 51,  167 => 50,  163 => 49,  157 => 46,  153 => 45,  149 => 44,  143 => 41,  139 => 40,  135 => 39,  129 => 36,  125 => 35,  121 => 34,  114 => 32,  102 => 24,  96 => 23,  87 => 20,  82 => 19,  76 => 18,  66 => 12,  57 => 10,  53 => 9,  50 => 8,  47 => 7,  45 => 6,  39 => 5,  32 => 1,  30 => 3,  11 => 1,);
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
/*     {{ parent() }}*/
/*     <div class="container editshow">*/
/*         <div class="row well">*/
/*             <div class="col-xs-4>*/
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
