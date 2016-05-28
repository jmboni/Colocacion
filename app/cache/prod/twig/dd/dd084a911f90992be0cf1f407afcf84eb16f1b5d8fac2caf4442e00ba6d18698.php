<?php

/* DsgagenciaBundle:Categoria:show.html.twig */
class __TwigTemplate_4ead966aede3317f9a2a9f5f96843164286e845bbeb4c9fcb1bd2470afbf5084 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DsgagenciaBundle::layout.html.twig", "DsgagenciaBundle:Categoria:show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    Trabajos en la categoría ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : null), "nombre", array()), "html", null, true);
        echo " categoria
";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <!-- CSS carousel-->
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/dsgagencia/css/jobs.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "        <!-- Three columns of text below the carousel -->
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h2 class=\"panel-title\">";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : null), "nombre", array()), "html", null, true);
        echo "</h2>
            </div>
             <!--Incluimos la plantilla de listar trabajos-->
            ";
        // line 20
        echo twig_include($this->env, $context, "DsgagenciaBundle:Trabajos:listar.html.twig", array("trabajos" => $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : null), "trabajosactivos", array())));
        echo "
            
            ";
        // line 22
        if (((isset($context["last_page"]) ? $context["last_page"] : null) > 1)) {
            // line 23
            echo "                <div class=\"container\">
                   <ul class=\"pagination\">
                        <li><a href=";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dsgagencia_categoria", array("slug" => $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : null), "slug", array()), "page" => 1)), "html", null, true);
            echo ">|&laquo;</a></li>
                        <li><a href=";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dsgagencia_categoria", array("slug" => $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : null), "slug", array()), "page" => (isset($context["previous_page"]) ? $context["previous_page"] : null))), "html", null, true);
            echo ">&laquo;</a></li>
                        
                        ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["last_page"]) ? $context["last_page"] : null)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 29
                echo "                            ";
                if (($context["page"] == (isset($context["current_page"]) ? $context["current_page"] : null))) {
                    // line 30
                    echo "                               <li class=\"active\"><a href=\"#\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a></li>
                            ";
                } else {
                    // line 32
                    echo "                                <li><a href=";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dsgagencia_categoria", array("slug" => $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : null), "slug", array()), "page" => $context["page"])), "html", null, true);
                    echo ">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a><li>
                            ";
                }
                // line 34
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "                        <li><a href=";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dsgagencia_categoria", array("slug" => $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : null), "slug", array()), "page" => (isset($context["next_page"]) ? $context["next_page"] : null))), "html", null, true);
            echo ">&raquo;</a></li>
                        <li><a href=";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dsgagencia_categoria", array("slug" => $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : null), "slug", array()), "page" => (isset($context["last_page"]) ? $context["last_page"] : null))), "html", null, true);
            echo ">&raquo;|</li>
                    </ul>
                </div>
            ";
        }
        // line 40
        echo " 
            <div class=\"pagination_desc\">
                <strong>";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["total_trabajos"]) ? $context["total_trabajos"] : null), "html", null, true);
        echo "</strong> jobs in this categoria
         
                ";
        // line 44
        if (((isset($context["last_page"]) ? $context["last_page"] : null) > 1)) {
            // line 45
            echo "                    - page <strong>";
            echo twig_escape_filter($this->env, (isset($context["current_page"]) ? $context["current_page"] : null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["last_page"]) ? $context["last_page"] : null), "html", null, true);
            echo "</strong>
                ";
        }
        // line 47
        echo "            </div>
        </div>
";
    }

    public function getTemplateName()
    {
        return "DsgagenciaBundle:Categoria:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 47,  139 => 45,  137 => 44,  132 => 42,  128 => 40,  121 => 36,  116 => 35,  110 => 34,  102 => 32,  96 => 30,  93 => 29,  89 => 28,  84 => 26,  80 => 25,  76 => 23,  74 => 22,  69 => 20,  63 => 17,  58 => 14,  55 => 13,  49 => 10,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'DsgagenciaBundle::layout.html.twig' %}*/
/* */
/* {% block title %}*/
/*     Trabajos en la categoría {{ categoria.nombre }} categoria*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <!-- CSS carousel-->*/
/*     <link rel="stylesheet" href="{{ asset('bundles/dsgagencia/css/jobs.css') }}" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*         <!-- Three columns of text below the carousel -->*/
/*         <div class="panel panel-default">*/
/*             <div class="panel-heading">*/
/*                 <h2 class="panel-title">{{ categoria.nombre }}</h2>*/
/*             </div>*/
/*              <!--Incluimos la plantilla de listar trabajos-->*/
/*             {{ include ('DsgagenciaBundle:Trabajos:listar.html.twig', {'trabajos': categoria.trabajosactivos}) }}*/
/*             */
/*             {% if last_page > 1 %}*/
/*                 <div class="container">*/
/*                    <ul class="pagination">*/
/*                         <li><a href={{ path('dsgagencia_categoria', { 'slug': categoria.slug, 'page': 1 }) }}>|&laquo;</a></li>*/
/*                         <li><a href={{ path('dsgagencia_categoria', { 'slug': categoria.slug, 'page': previous_page }) }}>&laquo;</a></li>*/
/*                         */
/*                         {% for page in 1..last_page %}*/
/*                             {% if page == current_page %}*/
/*                                <li class="active"><a href="#">{{ page }}</a></li>*/
/*                             {% else %}*/
/*                                 <li><a href={{ path('dsgagencia_categoria', { 'slug': categoria.slug, 'page': page }) }}>{{ page }}</a><li>*/
/*                             {% endif %}*/
/*                         {% endfor %}*/
/*                         <li><a href={{ path('dsgagencia_categoria', { 'slug': categoria.slug, 'page': next_page }) }}>&raquo;</a></li>*/
/*                         <li><a href={{ path('dsgagencia_categoria', { 'slug': categoria.slug, 'page': last_page }) }}>&raquo;|</li>*/
/*                     </ul>*/
/*                 </div>*/
/*             {% endif %}*/
/*  */
/*             <div class="pagination_desc">*/
/*                 <strong>{{ total_trabajos }}</strong> jobs in this categoria*/
/*          */
/*                 {% if last_page > 1 %}*/
/*                     - page <strong>{{ current_page }}/{{ last_page }}</strong>*/
/*                 {% endif %}*/
/*             </div>*/
/*         </div>*/
/* {% endblock %}*/
