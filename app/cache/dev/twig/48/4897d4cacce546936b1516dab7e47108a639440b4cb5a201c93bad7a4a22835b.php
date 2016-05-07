<?php

/* DsgagenciaBundle:Categoria:show.html.twig */
class __TwigTemplate_cfda2040fb0afe729eea2a927078dce114ac3a6d8674a228e19f6f894debe423 extends Twig_Template
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
        $__internal_0e6d1ae0431e75a27a6229183b248a2efc06dcd343813c79dc04e9f8e3ddf038 = $this->env->getExtension("native_profiler");
        $__internal_0e6d1ae0431e75a27a6229183b248a2efc06dcd343813c79dc04e9f8e3ddf038->enter($__internal_0e6d1ae0431e75a27a6229183b248a2efc06dcd343813c79dc04e9f8e3ddf038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DsgagenciaBundle:Categoria:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e6d1ae0431e75a27a6229183b248a2efc06dcd343813c79dc04e9f8e3ddf038->leave($__internal_0e6d1ae0431e75a27a6229183b248a2efc06dcd343813c79dc04e9f8e3ddf038_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7a3638ddfe8d6a5b0e76cc637dd071458e45193b6a7ed02ef17f88491bdee723 = $this->env->getExtension("native_profiler");
        $__internal_7a3638ddfe8d6a5b0e76cc637dd071458e45193b6a7ed02ef17f88491bdee723->enter($__internal_7a3638ddfe8d6a5b0e76cc637dd071458e45193b6a7ed02ef17f88491bdee723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Trabajos en la categoría ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : $this->getContext($context, "categoria")), "nombre", array()), "html", null, true);
        echo " categoria
";
        
        $__internal_7a3638ddfe8d6a5b0e76cc637dd071458e45193b6a7ed02ef17f88491bdee723->leave($__internal_7a3638ddfe8d6a5b0e76cc637dd071458e45193b6a7ed02ef17f88491bdee723_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fca5d0a4a381db8b31b9fe01800e7c15c7e8bd1c8486661f5f43bac308d555c3 = $this->env->getExtension("native_profiler");
        $__internal_fca5d0a4a381db8b31b9fe01800e7c15c7e8bd1c8486661f5f43bac308d555c3->enter($__internal_fca5d0a4a381db8b31b9fe01800e7c15c7e8bd1c8486661f5f43bac308d555c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_fca5d0a4a381db8b31b9fe01800e7c15c7e8bd1c8486661f5f43bac308d555c3->leave($__internal_fca5d0a4a381db8b31b9fe01800e7c15c7e8bd1c8486661f5f43bac308d555c3_prof);

    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        $__internal_5d0c3e891cce81ff59b7fbd5d3ee24371bcb9b0e75405690db5e9ced2836179e = $this->env->getExtension("native_profiler");
        $__internal_5d0c3e891cce81ff59b7fbd5d3ee24371bcb9b0e75405690db5e9ced2836179e->enter($__internal_5d0c3e891cce81ff59b7fbd5d3ee24371bcb9b0e75405690db5e9ced2836179e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
            echo "                <div class=\"pagination\">
                    <a href=";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dsgagencia_categoria", array("slug" => $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : $this->getContext($context, "categoria")), "slug", array()), "page" => 1)), "html", null, true);
            echo ">
                        <img src=";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/dsgagencia/images/first.png"), "html", null, true);
            echo " alt=\"First page\" title=\"First page\" />
                    </a>
                    <a href=";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dsgagencia_categoria", array("slug" => $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : $this->getContext($context, "categoria")), "slug", array()), "page" => (isset($context["previous_page"]) ? $context["previous_page"] : $this->getContext($context, "previous_page")))), "html", null, true);
            echo ">
                        <img src=";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/dsgagencia/images/previous.png"), "html", null, true);
            echo " alt=\"Previous page\" title=\"Previous page\" />
                    </a>
                    
                    ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["last_page"]) ? $context["last_page"] : $this->getContext($context, "last_page"))));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 32
                echo "                        ";
                if (($context["page"] == (isset($context["current_page"]) ? $context["current_page"] : $this->getContext($context, "current_page")))) {
                    // line 33
                    echo "                            ";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "
                        ";
                } else {
                    // line 35
                    echo "                            <a href=";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dsgagencia_categoria", array("slug" => $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : $this->getContext($context, "categoria")), "slug", array()), "page" => $context["page"])), "html", null, true);
                    echo ">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
                        ";
                }
                // line 37
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "                    
                    <a href=";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dsgagencia_categoria", array("slug" => $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : $this->getContext($context, "categoria")), "slug", array()), "page" => (isset($context["next_page"]) ? $context["next_page"] : $this->getContext($context, "next_page")))), "html", null, true);
            echo ">
                        <img src=";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/dsgagencia/images/next.png"), "html", null, true);
            echo " alt=\"Next page\" title=\"Next page\" />
                    </a>
                    <a href=";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dsgagencia_categoria", array("slug" => $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : $this->getContext($context, "categoria")), "slug", array()), "page" => (isset($context["last_page"]) ? $context["last_page"] : $this->getContext($context, "last_page")))), "html", null, true);
            echo ">
                        <img src=";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/dsgagencia/images/last.png"), "html", null, true);
            echo " alt=\"Last page\" title=\"Last page\" />
                    </a>
                </div>
            ";
        }
        // line 47
        echo " 
            <div class=\"pagination_desc\">
                <strong>";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["total_trabajos"]) ? $context["total_trabajos"] : $this->getContext($context, "total_trabajos")), "html", null, true);
        echo "</strong> jobs in this categoria
         
                ";
        // line 51
        if (((isset($context["last_page"]) ? $context["last_page"] : $this->getContext($context, "last_page")) > 1)) {
            // line 52
            echo "                    - page <strong>";
            echo twig_escape_filter($this->env, (isset($context["current_page"]) ? $context["current_page"] : $this->getContext($context, "current_page")), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["last_page"]) ? $context["last_page"] : $this->getContext($context, "last_page")), "html", null, true);
            echo "</strong>
                ";
        }
        // line 54
        echo "            </div>
        </div>
";
        
        $__internal_5d0c3e891cce81ff59b7fbd5d3ee24371bcb9b0e75405690db5e9ced2836179e->leave($__internal_5d0c3e891cce81ff59b7fbd5d3ee24371bcb9b0e75405690db5e9ced2836179e_prof);

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
        return array (  188 => 54,  180 => 52,  178 => 51,  173 => 49,  169 => 47,  162 => 43,  158 => 42,  153 => 40,  149 => 39,  146 => 38,  140 => 37,  132 => 35,  126 => 33,  123 => 32,  119 => 31,  113 => 28,  109 => 27,  104 => 25,  100 => 24,  97 => 23,  95 => 22,  90 => 20,  84 => 17,  79 => 14,  73 => 13,  64 => 10,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
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
/*                 <div class="pagination">*/
/*                     <a href={{ path('dsgagencia_categoria', { 'slug': categoria.slug, 'page': 1 }) }}>*/
/*                         <img src={{ asset('bundles/dsgagencia/images/first.png') }} alt="First page" title="First page" />*/
/*                     </a>*/
/*                     <a href={{ path('dsgagencia_categoria', { 'slug': categoria.slug, 'page': previous_page }) }}>*/
/*                         <img src={{ asset('bundles/dsgagencia/images/previous.png') }} alt="Previous page" title="Previous page" />*/
/*                     </a>*/
/*                     */
/*                     {% for page in 1..last_page %}*/
/*                         {% if page == current_page %}*/
/*                             {{ page }}*/
/*                         {% else %}*/
/*                             <a href={{ path('dsgagencia_categoria', { 'slug': categoria.slug, 'page': page }) }}>{{ page }}</a>*/
/*                         {% endif %}*/
/*                     {% endfor %}*/
/*                     */
/*                     <a href={{ path('dsgagencia_categoria', { 'slug': categoria.slug, 'page': next_page }) }}>*/
/*                         <img src={{ asset('bundles/dsgagencia/images/next.png') }} alt="Next page" title="Next page" />*/
/*                     </a>*/
/*                     <a href={{ path('dsgagencia_categoria', { 'slug': categoria.slug, 'page': last_page }) }}>*/
/*                         <img src={{ asset('bundles/dsgagencia/images/last.png') }} alt="Last page" title="Last page" />*/
/*                     </a>*/
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
