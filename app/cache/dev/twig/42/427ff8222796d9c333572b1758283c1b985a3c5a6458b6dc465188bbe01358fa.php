<?php

/* DsgagenciaBundle:Trabajos:show.html.twig */
class __TwigTemplate_9305b52c17125a1c471b9805e085c47aef4958f893df1f53e681116f8a588496 extends Twig_Template
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
        $__internal_6ff63a9fb7d724a1bc5367a72c64e7e6d104d9a2e044994cb0723b63d40543e5 = $this->env->getExtension("native_profiler");
        $__internal_6ff63a9fb7d724a1bc5367a72c64e7e6d104d9a2e044994cb0723b63d40543e5->enter($__internal_6ff63a9fb7d724a1bc5367a72c64e7e6d104d9a2e044994cb0723b63d40543e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DsgagenciaBundle:Trabajos:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ff63a9fb7d724a1bc5367a72c64e7e6d104d9a2e044994cb0723b63d40543e5->leave($__internal_6ff63a9fb7d724a1bc5367a72c64e7e6d104d9a2e044994cb0723b63d40543e5_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fef53e98ca72b5ffeb4cb968e2a152bf40f42d0b4d917817885ab9ff29bd346e = $this->env->getExtension("native_profiler");
        $__internal_fef53e98ca72b5ffeb4cb968e2a152bf40f42d0b4d917817885ab9ff29bd346e->enter($__internal_fef53e98ca72b5ffeb4cb968e2a152bf40f42d0b4d917817885ab9ff29bd346e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_fef53e98ca72b5ffeb4cb968e2a152bf40f42d0b4d917817885ab9ff29bd346e->leave($__internal_fef53e98ca72b5ffeb4cb968e2a152bf40f42d0b4d917817885ab9ff29bd346e_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_3a8623c1d4d986337d5550a8e14b2050dfb8fee5fe75a3b137cd685c9854b063 = $this->env->getExtension("native_profiler");
        $__internal_3a8623c1d4d986337d5550a8e14b2050dfb8fee5fe75a3b137cd685c9854b063->enter($__internal_3a8623c1d4d986337d5550a8e14b2050dfb8fee5fe75a3b137cd685c9854b063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "<div class=\"row\">
    <div class=\"col-xs-10 col-xs-offset-1\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <!-- Podemos utilizar la clase \"panel-title\" para dar estilo de título
                al encabezado del panel -->
                <h1 class=\"panel-title\">";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "compania", array()), "html", null, true);
        echo "</h1>
                </div>
                <div class=\"panel-body\">
                    ";
        // line 19
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "logo", array())) {
            // line 20
            echo "                    <div class=\"logo\">
                        <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "url", array()), "html", null, true);
            echo "\">
                            <img src=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/upload/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "logo", array()), "html", null, true);
            echo "\"
                                 alt=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "compania", array()), "html", null, true);
            echo " logo\" />
                        </a>
                    </div>
                    <h3>
                        ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "posicion", array()), "html", null, true);
            echo "
                        <small> - ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tipo", array()), "html", null, true);
            echo "</small>
                    </h3>
                    <h3>
                        ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "localidad", array()), "html", null, true);
            echo "
                    </h3>
                ";
        }
        // line 34
        echo "                    ";
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "descripcion", array()), "html", null, true));
        echo "
                    
                     <h4>How to apply?</h4>
        
                    <p class=\"how_to_apply\">";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "howtoapply", array()), "html", null, true);
        echo "</p>
                    
                    <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("trabajos_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">Editar
                    </a>
                </div>
                
                <!-- Siempre podemos agregar y personalizar otros elementos dentro de un
                panel, con estilos compatibles de manera predeterminada. Aquí agregamos
                un pie para el panel (alineado a la derecha) con un botón predeterminado -->
                <div class=\"panel-footer text-right\">
                    <small>Creado el ";
        // line 48
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "creado", array()), "m/d/Y"), "html", null, true);
        echo "</small>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_3a8623c1d4d986337d5550a8e14b2050dfb8fee5fe75a3b137cd685c9854b063->leave($__internal_3a8623c1d4d986337d5550a8e14b2050dfb8fee5fe75a3b137cd685c9854b063_prof);

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
        return array (  138 => 48,  127 => 40,  122 => 38,  114 => 34,  108 => 31,  102 => 28,  98 => 27,  91 => 23,  86 => 22,  82 => 21,  79 => 20,  77 => 19,  71 => 16,  63 => 10,  57 => 9,  48 => 6,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
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
