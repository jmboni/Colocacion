<?php

/* DsgagenciaBundle:Trabajos:show.html.twig */
class __TwigTemplate_e8b43b03cd9ccf0f48ff1dd271e66b0a1f305cd11e510500b4696496507bd154 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DsgagenciaBundle::layout.html.twig", "DsgagenciaBundle:Trabajos:show.html.twig", 1);
        $this->blocks = array(
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
        $__internal_827fa465623506b3673d17e067ae341e0d1c1a5de3786e0751242e6551268e2c = $this->env->getExtension("native_profiler");
        $__internal_827fa465623506b3673d17e067ae341e0d1c1a5de3786e0751242e6551268e2c->enter($__internal_827fa465623506b3673d17e067ae341e0d1c1a5de3786e0751242e6551268e2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DsgagenciaBundle:Trabajos:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_827fa465623506b3673d17e067ae341e0d1c1a5de3786e0751242e6551268e2c->leave($__internal_827fa465623506b3673d17e067ae341e0d1c1a5de3786e0751242e6551268e2c_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5c818aa44e1c452a0061a0ec16630c2f9b3dc8c1f0c24fe5c13d613014392889 = $this->env->getExtension("native_profiler");
        $__internal_5c818aa44e1c452a0061a0ec16630c2f9b3dc8c1f0c24fe5c13d613014392889->enter($__internal_5c818aa44e1c452a0061a0ec16630c2f9b3dc8c1f0c24fe5c13d613014392889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <!-- CSS carousel-->
    ";
        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/csspaginas/show.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />

";
        
        $__internal_5c818aa44e1c452a0061a0ec16630c2f9b3dc8c1f0c24fe5c13d613014392889->leave($__internal_5c818aa44e1c452a0061a0ec16630c2f9b3dc8c1f0c24fe5c13d613014392889_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_d0d14a31cfb3e1a10eac2736f25ad6fc84b37c08ca5375b365c82cc6ada49bc3 = $this->env->getExtension("native_profiler");
        $__internal_d0d14a31cfb3e1a10eac2736f25ad6fc84b37c08ca5375b365c82cc6ada49bc3->enter($__internal_d0d14a31cfb3e1a10eac2736f25ad6fc84b37c08ca5375b365c82cc6ada49bc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo "    
    <div class=\"container trabajoshow\">
        <div class=\"col-md-9 col-xs-offset-1\">
            
            ";
        // line 15
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "token"), "method")) {
            // line 16
            echo "                ";
            echo twig_include($this->env, $context, "DsgagenciaBundle::Trabajos/admin.html.twig", array("trabajos" => (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity"))));
            echo "
            ";
        }
        // line 18
        echo "            
            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "Mensaje"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 20
            echo "                <div class=\"alert alert-sucess\" role=\"alert\">
                    <div class=\"container\">
                        ";
            // line 22
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "            <h2>Oferta de Empleo - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "compania", array()), "html", null, true);
        echo "</h2>
            <div class=\"panel panel-primary\">
                <div class=\"panel-heading\">
                    <!-- Podemos utilizar la clase \"panel-title\" para dar estilo de título
                    al encabezado del panel -->
                    <h1 class=\"panel-title\">";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "compania", array()), "html", null, true);
        echo "</h1>
                    </div>
                    <div class=\"panel-body\">
                        ";
        // line 34
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "logo", array())) {
            // line 35
            echo "                        <div class=\"logo\">
                            <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "url", array()), "html", null, true);
            echo "\">
                                <img src=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/upload/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "logo", array()), "html", null, true);
            echo "\"
                                     alt=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "compania", array()), "html", null, true);
            echo " logo\" />
                            </a>
                        </div>
                        <h3>
                            ";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "posicion", array()), "html", null, true);
            echo "
                            <small> - ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tipo", array()), "html", null, true);
            echo "</small>
                        </h3>
                        <h3>
                            ";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "localidad", array()), "html", null, true);
            echo "
                        </h3>
                    ";
        }
        // line 49
        echo "                        ";
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "descripcion", array()), "html", null, true));
        echo "
                        
                         <h4>How to apply?</h4>
            
                        <p class=\"how_to_apply\">";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "howtoapply", array()), "html", null, true);
        echo "</p>
                    </div>
                    
                    <!-- Siempre podemos agregar y personalizar otros elementos dentro de un
                    panel, con estilos compatibles de manera predeterminada. Aquí agregamos
                    un pie para el panel (alineado a la derecha) con un botón predeterminado -->
                    <div class=\"panel-footer text-right\">
                        <small>Creado el ";
        // line 60
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "creado", array()), "m/d/Y"), "html", null, true);
        echo "</small>
                    </div>
            </div>
        </div>
    </div>
";
        
        $__internal_d0d14a31cfb3e1a10eac2736f25ad6fc84b37c08ca5375b365c82cc6ada49bc3->leave($__internal_d0d14a31cfb3e1a10eac2736f25ad6fc84b37c08ca5375b365c82cc6ada49bc3_prof);

    }

    public function getTemplateName()
    {
        return "DsgagenciaBundle:Trabajos:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 60,  159 => 53,  151 => 49,  145 => 46,  139 => 43,  135 => 42,  128 => 38,  123 => 37,  119 => 36,  116 => 35,  114 => 34,  108 => 31,  99 => 26,  89 => 22,  85 => 20,  81 => 19,  78 => 18,  72 => 16,  70 => 15,  64 => 11,  58 => 10,  48 => 6,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'DsgagenciaBundle::layout.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*     <!-- CSS carousel-->*/
/*     {{ parent() }}*/
/*     <link rel="stylesheet" href="{{ asset('public/csspaginas/show.css') }}" type="text/css" media="all" />*/
/* */
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     */
/*     <div class="container trabajoshow">*/
/*         <div class="col-md-9 col-xs-offset-1">*/
/*             */
/*             {% if app.request.get('token') %}*/
/*                 {{ include('DsgagenciaBundle::Trabajos/admin.html.twig', { 'trabajos': entity }) }}*/
/*             {% endif %}*/
/*             */
/*             {% for flashMessage in app.session.flashbag.get('Mensaje') %}*/
/*                 <div class="alert alert-sucess" role="alert">*/
/*                     <div class="container">*/
/*                         {{ flashMessage }}*/
/*                     </div>*/
/*                 </div>*/
/*             {% endfor %}*/
/*             <h2>Oferta de Empleo - {{ entity.compania }}</h2>*/
/*             <div class="panel panel-primary">*/
/*                 <div class="panel-heading">*/
/*                     <!-- Podemos utilizar la clase "panel-title" para dar estilo de título*/
/*                     al encabezado del panel -->*/
/*                     <h1 class="panel-title">{{ entity.compania }}</h1>*/
/*                     </div>*/
/*                     <div class="panel-body">*/
/*                         {% if entity.logo %}*/
/*                         <div class="logo">*/
/*                             <a href="{{ entity.url }}">*/
/*                                 <img src="{{ asset('public/upload/') }}{{ entity.logo }}"*/
/*                                      alt="{{ entity.compania }} logo" />*/
/*                             </a>*/
/*                         </div>*/
/*                         <h3>*/
/*                             {{ entity.posicion }}*/
/*                             <small> - {{ entity.tipo }}</small>*/
/*                         </h3>*/
/*                         <h3>*/
/*                             {{ entity.localidad }}*/
/*                         </h3>*/
/*                     {% endif %}*/
/*                         {{ entity.descripcion|nl2br }}*/
/*                         */
/*                          <h4>How to apply?</h4>*/
/*             */
/*                         <p class="how_to_apply">{{ entity.howtoapply }}</p>*/
/*                     </div>*/
/*                     */
/*                     <!-- Siempre podemos agregar y personalizar otros elementos dentro de un*/
/*                     panel, con estilos compatibles de manera predeterminada. Aquí agregamos*/
/*                     un pie para el panel (alineado a la derecha) con un botón predeterminado -->*/
/*                     <div class="panel-footer text-right">*/
/*                         <small>Creado el {{ entity.creado|date('m/d/Y') }}</small>*/
/*                     </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
