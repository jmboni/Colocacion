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
        $__internal_9d2049ef3b07ff19553a42a3624ba08078d074adc041ed0e48a09d664359cf56 = $this->env->getExtension("native_profiler");
        $__internal_9d2049ef3b07ff19553a42a3624ba08078d074adc041ed0e48a09d664359cf56->enter($__internal_9d2049ef3b07ff19553a42a3624ba08078d074adc041ed0e48a09d664359cf56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DsgagenciaBundle:Trabajos:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d2049ef3b07ff19553a42a3624ba08078d074adc041ed0e48a09d664359cf56->leave($__internal_9d2049ef3b07ff19553a42a3624ba08078d074adc041ed0e48a09d664359cf56_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e747b1d839006798a0fbcbd366c2c9f35ba7be87dca12ec9d1b75b702d9151b4 = $this->env->getExtension("native_profiler");
        $__internal_e747b1d839006798a0fbcbd366c2c9f35ba7be87dca12ec9d1b75b702d9151b4->enter($__internal_e747b1d839006798a0fbcbd366c2c9f35ba7be87dca12ec9d1b75b702d9151b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <!-- CSS carousel-->
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/csspaginas/show.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    ";
        // line 6
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_e747b1d839006798a0fbcbd366c2c9f35ba7be87dca12ec9d1b75b702d9151b4->leave($__internal_e747b1d839006798a0fbcbd366c2c9f35ba7be87dca12ec9d1b75b702d9151b4_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_e24157854b113d040b631e846d9af6c0203954dfdd15417fefcc4eab54f1f24d = $this->env->getExtension("native_profiler");
        $__internal_e24157854b113d040b631e846d9af6c0203954dfdd15417fefcc4eab54f1f24d->enter($__internal_e24157854b113d040b631e846d9af6c0203954dfdd15417fefcc4eab54f1f24d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "    
    <div class=\"container trabajoshow\">
        <div class=\"col-md-9 col-xs-offset-1\">
            
            ";
        // line 14
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "token"), "method")) {
            // line 15
            echo "                ";
            echo twig_include($this->env, $context, "DsgagenciaBundle::Trabajos/admin.html.twig", array("trabajos" => (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity"))));
            echo "
            ";
        }
        // line 17
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "Mensaje"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 18
            echo "                <div class=\"alert alert-sucess\" role=\"alert\">
                    <div class=\"container\">
                        ";
            // line 20
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "            <div class=\"panel panel-primary\">
                <div class=\"panel-heading\">
                    <!-- Podemos utilizar la clase \"panel-title\" para dar estilo de título
                    al encabezado del panel -->
                    <h1 class=\"panel-title\">";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "compania", array()), "html", null, true);
        echo "</h1>
                    </div>
                    <div class=\"panel-body\">
                        ";
        // line 31
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "logo", array())) {
            // line 32
            echo "                        <div class=\"logo\">
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "url", array()), "html", null, true);
            echo "\">
                                <img src=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/upload/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "logo", array()), "html", null, true);
            echo "\"
                                     alt=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "compania", array()), "html", null, true);
            echo " logo\" />
                            </a>
                        </div>
                        <h3>
                            ";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "posicion", array()), "html", null, true);
            echo "
                            <small> - ";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tipo", array()), "html", null, true);
            echo "</small>
                        </h3>
                        <h3>
                            ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "localidad", array()), "html", null, true);
            echo "
                        </h3>
                    ";
        }
        // line 46
        echo "                        ";
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "descripcion", array()), "html", null, true));
        echo "
                        
                         <h4>How to apply?</h4>
            
                        <p class=\"how_to_apply\">";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "howtoapply", array()), "html", null, true);
        echo "</p>
                    </div>
                    
                    <!-- Siempre podemos agregar y personalizar otros elementos dentro de un
                    panel, con estilos compatibles de manera predeterminada. Aquí agregamos
                    un pie para el panel (alineado a la derecha) con un botón predeterminado -->
                    <div class=\"panel-footer text-right\">
                        <small>Creado el ";
        // line 57
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "creado", array()), "m/d/Y"), "html", null, true);
        echo "</small>
                    </div>
            </div>
        </div>
    </div>
";
        
        $__internal_e24157854b113d040b631e846d9af6c0203954dfdd15417fefcc4eab54f1f24d->leave($__internal_e24157854b113d040b631e846d9af6c0203954dfdd15417fefcc4eab54f1f24d_prof);

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
        return array (  163 => 57,  153 => 50,  145 => 46,  139 => 43,  133 => 40,  129 => 39,  122 => 35,  117 => 34,  113 => 33,  110 => 32,  108 => 31,  102 => 28,  96 => 24,  86 => 20,  82 => 18,  77 => 17,  71 => 15,  69 => 14,  63 => 10,  57 => 9,  48 => 6,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'DsgagenciaBundle::layout.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*     <!-- CSS carousel-->*/
/*     <link rel="stylesheet" href="{{ asset('public/csspaginas/show.css') }}" type="text/css" media="all" />*/
/*     {{ parent() }}*/
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
/*             {% for flashMessage in app.session.flashbag.get('Mensaje') %}*/
/*                 <div class="alert alert-sucess" role="alert">*/
/*                     <div class="container">*/
/*                         {{ flashMessage }}*/
/*                     </div>*/
/*                 </div>*/
/*             {% endfor %}*/
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
