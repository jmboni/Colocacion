<?php

/* DsgagenciaBundle:Trabajos:show.html.twig */
class __TwigTemplate_079f4594f91d9fb4bc610bfdf7678c257e4469236efcd03fdaae2a54f9e4a80b extends Twig_Template
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
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/csspaginas/show.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    ";
        // line 6
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "    
    <div class=\"container trabajoshow\">
        <div class=\"col-md-9 col-xs-offset-1\">
            
            ";
        // line 14
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "token"), "method")) {
            // line 15
            echo "                ";
            echo twig_include($this->env, $context, "DsgagenciaBundle::Trabajos/admin.html.twig", array("trabajos" => (isset($context["entity"]) ? $context["entity"] : null)));
            echo "
            ";
        }
        // line 17
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "Mensaje"), "method"));
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "compania", array()), "html", null, true);
        echo "</h1>
                    </div>
                    <div class=\"panel-body\">
                        ";
        // line 31
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "logo", array())) {
            // line 32
            echo "                        <div class=\"logo\">
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "url", array()), "html", null, true);
            echo "\">
                                <img src=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/upload/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "logo", array()), "html", null, true);
            echo "\"
                                     alt=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "compania", array()), "html", null, true);
            echo " logo\" />
                            </a>
                        </div>
                        <h3>
                            ";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "posicion", array()), "html", null, true);
            echo "
                            <small> - ";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "tipo", array()), "html", null, true);
            echo "</small>
                        </h3>
                        <h3>
                            ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "localidad", array()), "html", null, true);
            echo "
                        </h3>
                    ";
        }
        // line 46
        echo "                        ";
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "descripcion", array()), "html", null, true));
        echo "
                        
                         <h4>How to apply?</h4>
            
                        <p class=\"how_to_apply\">";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "howtoapply", array()), "html", null, true);
        echo "</p>
                    </div>
                    
                    <!-- Siempre podemos agregar y personalizar otros elementos dentro de un
                    panel, con estilos compatibles de manera predeterminada. Aquí agregamos
                    un pie para el panel (alineado a la derecha) con un botón predeterminado -->
                    <div class=\"panel-footer text-right\">
                        <small>Creado el ";
        // line 57
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "creado", array()), "m/d/Y"), "html", null, true);
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
        return array (  148 => 57,  138 => 50,  130 => 46,  124 => 43,  118 => 40,  114 => 39,  107 => 35,  102 => 34,  98 => 33,  95 => 32,  93 => 31,  87 => 28,  81 => 24,  71 => 20,  67 => 18,  62 => 17,  56 => 15,  54 => 14,  48 => 10,  45 => 9,  39 => 6,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
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
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
