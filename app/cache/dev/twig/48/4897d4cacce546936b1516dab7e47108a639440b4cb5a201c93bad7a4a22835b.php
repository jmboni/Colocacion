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
        $__internal_2d382dd56f2b0eab6c93ca34732aa8d90207c1baedf26359d5075d77f5293b4c = $this->env->getExtension("native_profiler");
        $__internal_2d382dd56f2b0eab6c93ca34732aa8d90207c1baedf26359d5075d77f5293b4c->enter($__internal_2d382dd56f2b0eab6c93ca34732aa8d90207c1baedf26359d5075d77f5293b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DsgagenciaBundle:Categoria:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d382dd56f2b0eab6c93ca34732aa8d90207c1baedf26359d5075d77f5293b4c->leave($__internal_2d382dd56f2b0eab6c93ca34732aa8d90207c1baedf26359d5075d77f5293b4c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_64abb47d7c48c8ef058746e36f62cbe79c88f5f147672affed664e4837cee27d = $this->env->getExtension("native_profiler");
        $__internal_64abb47d7c48c8ef058746e36f62cbe79c88f5f147672affed664e4837cee27d->enter($__internal_64abb47d7c48c8ef058746e36f62cbe79c88f5f147672affed664e4837cee27d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Trabajos en la categoría ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : $this->getContext($context, "categoria")), "nombre", array()), "html", null, true);
        echo " categoria
";
        
        $__internal_64abb47d7c48c8ef058746e36f62cbe79c88f5f147672affed664e4837cee27d->leave($__internal_64abb47d7c48c8ef058746e36f62cbe79c88f5f147672affed664e4837cee27d_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bcfeb618d092dff4ebabb7b68b908b46d9ca7d9ef576113421cf3853795e5e0c = $this->env->getExtension("native_profiler");
        $__internal_bcfeb618d092dff4ebabb7b68b908b46d9ca7d9ef576113421cf3853795e5e0c->enter($__internal_bcfeb618d092dff4ebabb7b68b908b46d9ca7d9ef576113421cf3853795e5e0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_bcfeb618d092dff4ebabb7b68b908b46d9ca7d9ef576113421cf3853795e5e0c->leave($__internal_bcfeb618d092dff4ebabb7b68b908b46d9ca7d9ef576113421cf3853795e5e0c_prof);

    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        $__internal_30a47984a0b26a72189a10e94788801439ccc9421fb74e14a3f1fa851b3bb17c = $this->env->getExtension("native_profiler");
        $__internal_30a47984a0b26a72189a10e94788801439ccc9421fb74e14a3f1fa851b3bb17c->enter($__internal_30a47984a0b26a72189a10e94788801439ccc9421fb74e14a3f1fa851b3bb17c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_30a47984a0b26a72189a10e94788801439ccc9421fb74e14a3f1fa851b3bb17c->leave($__internal_30a47984a0b26a72189a10e94788801439ccc9421fb74e14a3f1fa851b3bb17c_prof);

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
