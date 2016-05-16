<?php

/* DsgagenciaBundle:Categoria:show.html.twig */
class __TwigTemplate_c915a7ac5034adb9606e0ae45b2024132ecdd2b493f81ec4aec2884aaf00c997 extends Twig_Template
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
        $__internal_6bb5f45369a90ab770c72b72739de74f5f20cb1314d498e90a4ec31c1d218019 = $this->env->getExtension("native_profiler");
        $__internal_6bb5f45369a90ab770c72b72739de74f5f20cb1314d498e90a4ec31c1d218019->enter($__internal_6bb5f45369a90ab770c72b72739de74f5f20cb1314d498e90a4ec31c1d218019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DsgagenciaBundle:Categoria:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6bb5f45369a90ab770c72b72739de74f5f20cb1314d498e90a4ec31c1d218019->leave($__internal_6bb5f45369a90ab770c72b72739de74f5f20cb1314d498e90a4ec31c1d218019_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3188d2b69b8a9ddbca80e41fae760e27f620f3753fe40537fdd691063b281f21 = $this->env->getExtension("native_profiler");
        $__internal_3188d2b69b8a9ddbca80e41fae760e27f620f3753fe40537fdd691063b281f21->enter($__internal_3188d2b69b8a9ddbca80e41fae760e27f620f3753fe40537fdd691063b281f21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Trabajos en la categoría ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : $this->getContext($context, "categoria")), "nombre", array()), "html", null, true);
        echo " categoria
";
        
        $__internal_3188d2b69b8a9ddbca80e41fae760e27f620f3753fe40537fdd691063b281f21->leave($__internal_3188d2b69b8a9ddbca80e41fae760e27f620f3753fe40537fdd691063b281f21_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_054adbf89888fd72f789895640529a66e0f9c35fbe4be241b58af61fba6c77a7 = $this->env->getExtension("native_profiler");
        $__internal_054adbf89888fd72f789895640529a66e0f9c35fbe4be241b58af61fba6c77a7->enter($__internal_054adbf89888fd72f789895640529a66e0f9c35fbe4be241b58af61fba6c77a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_054adbf89888fd72f789895640529a66e0f9c35fbe4be241b58af61fba6c77a7->leave($__internal_054adbf89888fd72f789895640529a66e0f9c35fbe4be241b58af61fba6c77a7_prof);

    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        $__internal_5ae3ded72859b21faf3b59d4ffe9b1599b1def8ddf324f72bf1761c8a86caabe = $this->env->getExtension("native_profiler");
        $__internal_5ae3ded72859b21faf3b59d4ffe9b1599b1def8ddf324f72bf1761c8a86caabe->enter($__internal_5ae3ded72859b21faf3b59d4ffe9b1599b1def8ddf324f72bf1761c8a86caabe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 14
        echo "        <!-- Three columns of text below the carousel -->
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h2 class=\"panel-title\">";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : $this->getContext($context, "categoria")), "nombre", array()), "html", null, true);
        echo "</h2>
            </div>
             <!--Incluimos la plantilla de listar trabajos-->
            ";
        // line 20
        echo twig_include($this->env, $context, "DsgagenciaBundle::listar.html.twig", array("trabajos" => $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : $this->getContext($context, "categoria")), "trabajosactivos", array())));
        echo "
            
            ";
        // line 22
        if (((isset($context["last_page"]) ? $context["last_page"] : $this->getContext($context, "last_page")) > 1)) {
            // line 23
            echo "                <div class=\"container\">
                   <ul class=\"pagination\">
                        <li><a href=";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dsgagencia_categoria", array("slug" => $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : $this->getContext($context, "categoria")), "slug", array()), "page" => 1)), "html", null, true);
            echo ">|&laquo;</a></li>
                        <li><a href=";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dsgagencia_categoria", array("slug" => $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : $this->getContext($context, "categoria")), "slug", array()), "page" => (isset($context["previous_page"]) ? $context["previous_page"] : $this->getContext($context, "previous_page")))), "html", null, true);
            echo ">&laquo;</a></li>
                        
                        ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["last_page"]) ? $context["last_page"] : $this->getContext($context, "last_page"))));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 29
                echo "                            ";
                if (($context["page"] == (isset($context["current_page"]) ? $context["current_page"] : $this->getContext($context, "current_page")))) {
                    // line 30
                    echo "                               <li class=\"active\"><a href=\"#\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a></li>
                            ";
                } else {
                    // line 32
                    echo "                                <li><a href=";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dsgagencia_categoria", array("slug" => $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : $this->getContext($context, "categoria")), "slug", array()), "page" => $context["page"])), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dsgagencia_categoria", array("slug" => $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : $this->getContext($context, "categoria")), "slug", array()), "page" => (isset($context["next_page"]) ? $context["next_page"] : $this->getContext($context, "next_page")))), "html", null, true);
            echo ">&raquo;</a></li>
                        <li><a href=";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dsgagencia_categoria", array("slug" => $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : $this->getContext($context, "categoria")), "slug", array()), "page" => (isset($context["last_page"]) ? $context["last_page"] : $this->getContext($context, "last_page")))), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["total_trabajos"]) ? $context["total_trabajos"] : $this->getContext($context, "total_trabajos")), "html", null, true);
        echo "</strong> jobs in this categoria
         
                ";
        // line 44
        if (((isset($context["last_page"]) ? $context["last_page"] : $this->getContext($context, "last_page")) > 1)) {
            // line 45
            echo "                    - page <strong>";
            echo twig_escape_filter($this->env, (isset($context["current_page"]) ? $context["current_page"] : $this->getContext($context, "current_page")), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["last_page"]) ? $context["last_page"] : $this->getContext($context, "last_page")), "html", null, true);
            echo "</strong>
                ";
        }
        // line 47
        echo "            </div>
        </div>
";
        
        $__internal_5ae3ded72859b21faf3b59d4ffe9b1599b1def8ddf324f72bf1761c8a86caabe->leave($__internal_5ae3ded72859b21faf3b59d4ffe9b1599b1def8ddf324f72bf1761c8a86caabe_prof);

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
        return array (  168 => 47,  160 => 45,  158 => 44,  153 => 42,  149 => 40,  142 => 36,  137 => 35,  131 => 34,  123 => 32,  117 => 30,  114 => 29,  110 => 28,  105 => 26,  101 => 25,  97 => 23,  95 => 22,  90 => 20,  84 => 17,  79 => 14,  73 => 13,  64 => 10,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
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
/*             {{ include ('DsgagenciaBundle::listar.html.twig', {'trabajos': categoria.trabajosactivos}) }}*/
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
