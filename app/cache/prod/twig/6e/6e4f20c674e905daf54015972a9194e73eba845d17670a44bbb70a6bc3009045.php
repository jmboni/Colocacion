<?php

/* DsgagenciaBundle:Trabajos:show.html.twig */
class __TwigTemplate_d18a6aeb4c79c9253ba0e15e07280eac20649cc95f73f200b25350a35e7d4314 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/dsgagencia/css/job.css"), "html", null, true);
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
        echo "<div class=\"row\">
    <div class=\"col-xs-10 col-xs-offset-1\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <!-- Podemos utilizar la clase \"panel-title\" para dar estilo de título
                al encabezado del panel -->
                <h1 class=\"panel-title\">";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "compania", array()), "html", null, true);
        echo "</h1>
                </div>
                <div class=\"panel-body\">
                    ";
        // line 19
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "logo", array())) {
            // line 20
            echo "                    <div class=\"logo\">
                        <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "url", array()), "html", null, true);
            echo "\">
                            <img src=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/upload/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "logo", array()), "html", null, true);
            echo "\"
                                 alt=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "compania", array()), "html", null, true);
            echo " logo\" />
                        </a>
                    </div>
                    <h3>
                        ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "posicion", array()), "html", null, true);
            echo "
                        <small> - ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "tipo", array()), "html", null, true);
            echo "</small>
                    </h3>
                    <h3>
                        ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "localidad", array()), "html", null, true);
            echo "
                    </h3>
                ";
        }
        // line 34
        echo "                    ";
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "descripcion", array()), "html", null, true));
        echo "
                    
                     <h4>How to apply?</h4>
        
                    <p class=\"how_to_apply\">";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "howtoapply", array()), "html", null, true);
        echo "</p>
                    
                    <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("trabajos_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\">Editar
                    </a>
                </div>
                
                <!-- Siempre podemos agregar y personalizar otros elementos dentro de un
                panel, con estilos compatibles de manera predeterminada. Aquí agregamos
                un pie para el panel (alineado a la derecha) con un botón predeterminado -->
                <div class=\"panel-footer text-right\">
                    <small>Creado el ";
        // line 48
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
        return array (  123 => 48,  112 => 40,  107 => 38,  99 => 34,  93 => 31,  87 => 28,  83 => 27,  76 => 23,  71 => 22,  67 => 21,  64 => 20,  62 => 19,  56 => 16,  48 => 10,  45 => 9,  39 => 6,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'DsgagenciaBundle::layout.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*     <!-- CSS carousel-->*/
/*     <link rel="stylesheet" href="{{ asset('bundles/dsgagencia/css/job.css') }}" type="text/css" media="all" />*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* <div class="row">*/
/*     <div class="col-xs-10 col-xs-offset-1">*/
/*         <div class="panel panel-default">*/
/*             <div class="panel-heading">*/
/*                 <!-- Podemos utilizar la clase "panel-title" para dar estilo de título*/
/*                 al encabezado del panel -->*/
/*                 <h1 class="panel-title">{{ entity.compania }}</h1>*/
/*                 </div>*/
/*                 <div class="panel-body">*/
/*                     {% if entity.logo %}*/
/*                     <div class="logo">*/
/*                         <a href="{{ entity.url }}">*/
/*                             <img src="{{ asset('public/upload/') }}{{ entity.logo }}"*/
/*                                  alt="{{ entity.compania }} logo" />*/
/*                         </a>*/
/*                     </div>*/
/*                     <h3>*/
/*                         {{ entity.posicion }}*/
/*                         <small> - {{ entity.tipo }}</small>*/
/*                     </h3>*/
/*                     <h3>*/
/*                         {{ entity.localidad }}*/
/*                     </h3>*/
/*                 {% endif %}*/
/*                     {{ entity.descripcion|nl2br }}*/
/*                     */
/*                      <h4>How to apply?</h4>*/
/*         */
/*                     <p class="how_to_apply">{{ entity.howtoapply }}</p>*/
/*                     */
/*                     <a href="{{ path('trabajos_edit', { 'id': entity.id }) }}">Editar*/
/*                     </a>*/
/*                 </div>*/
/*                 */
/*                 <!-- Siempre podemos agregar y personalizar otros elementos dentro de un*/
/*                 panel, con estilos compatibles de manera predeterminada. Aquí agregamos*/
/*                 un pie para el panel (alineado a la derecha) con un botón predeterminado -->*/
/*                 <div class="panel-footer text-right">*/
/*                     <small>Creado el {{ entity.creado|date('m/d/Y') }}</small>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
