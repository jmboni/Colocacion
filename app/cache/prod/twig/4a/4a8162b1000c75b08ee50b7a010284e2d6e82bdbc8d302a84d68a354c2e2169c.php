<?php

/* DsgagenciaBundle:Trabajos:show.html.twig */
class __TwigTemplate_f1401e2f237b97a05f8f64dad4ac122b6399bd59268c3599b59155dc7be48cad extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
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
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "    
    <div class=\"container trabajoshow\">
        <div class=\"col-md-9 col-xs-offset-1\">
            
            ";
        // line 15
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "token"), "method")) {
            // line 16
            echo "                ";
            echo twig_include($this->env, $context, "DsgagenciaBundle::Trabajos/admin.html.twig", array("trabajos" => (isset($context["entity"]) ? $context["entity"] : null)));
            echo "
            ";
        }
        // line 18
        echo "            
            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "Mensaje"), "method"));
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "compania", array()), "html", null, true);
        echo "</h2>
            <div class=\"panel panel-primary\">
                <div class=\"panel-heading\">
                    <!-- Podemos utilizar la clase \"panel-title\" para dar estilo de título
                    al encabezado del panel -->
                    <h1 class=\"panel-title\">";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "compania", array()), "html", null, true);
        echo "</h1>
                    </div>
                    <div class=\"panel-body\">
                        ";
        // line 34
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "logo", array())) {
            // line 35
            echo "                        <div class=\"logo\">
                            <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "url", array()), "html", null, true);
            echo "\">
                                <img src=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/upload/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "logo", array()), "html", null, true);
            echo "\"
                                     alt=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "compania", array()), "html", null, true);
            echo " logo\" />
                            </a>
                        </div>
                        <h3>
                            ";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "posicion", array()), "html", null, true);
            echo "
                            <small> - ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "tipo", array()), "html", null, true);
            echo "</small>
                        </h3>
                        <h3>
                            ";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "localidad", array()), "html", null, true);
            echo "
                        </h3>
                    ";
        }
        // line 49
        echo "                        ";
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "descripcion", array()), "html", null, true));
        echo "
                        
                         <h4>How to apply?</h4>
            
                        <p class=\"how_to_apply\">";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "howtoapply", array()), "html", null, true);
        echo "</p>
                    </div>
                    
                    <!-- Siempre podemos agregar y personalizar otros elementos dentro de un
                    panel, con estilos compatibles de manera predeterminada. Aquí agregamos
                    un pie para el panel (alineado a la derecha) con un botón predeterminado -->
                    <div class=\"panel-footer text-right\">
                        <small>Creado el ";
        // line 60
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "creado", array()), "d/m/Y"), "html", null, true);
        echo "</small>
                    </div>
            </div>
        </div>
    </div>
";
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
        return array (  154 => 60,  144 => 53,  136 => 49,  130 => 46,  124 => 43,  120 => 42,  113 => 38,  108 => 37,  104 => 36,  101 => 35,  99 => 34,  93 => 31,  84 => 26,  74 => 22,  70 => 20,  66 => 19,  63 => 18,  57 => 16,  55 => 15,  49 => 11,  46 => 10,  39 => 6,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
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
/*                         <small>Creado el {{ entity.creado|date('d/m/Y') }}</small>*/
/*                     </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
