<?php

/* DsgagenciaBundle:Trabajos:index.html.twig */
class __TwigTemplate_9f4e416ae91b2df7c93894539c6aaefc571a8ccc314b6538b1ae8499896a1212 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DsgagenciaBundle::layout.html.twig", "DsgagenciaBundle:Trabajos:index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DsgagenciaBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d45af498e1517fd5baf0691adefad9e698f3af6e3d69a499d3f5ca07aaa682b6 = $this->env->getExtension("native_profiler");
        $__internal_d45af498e1517fd5baf0691adefad9e698f3af6e3d69a499d3f5ca07aaa682b6->enter($__internal_d45af498e1517fd5baf0691adefad9e698f3af6e3d69a499d3f5ca07aaa682b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DsgagenciaBundle:Trabajos:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d45af498e1517fd5baf0691adefad9e698f3af6e3d69a499d3f5ca07aaa682b6->leave($__internal_d45af498e1517fd5baf0691adefad9e698f3af6e3d69a499d3f5ca07aaa682b6_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_60146c896be396349ce7c913e4a00c786d29b6d0f31075453e3e95e187310746 = $this->env->getExtension("native_profiler");
        $__internal_60146c896be396349ce7c913e4a00c786d29b6d0f31075453e3e95e187310746->enter($__internal_60146c896be396349ce7c913e4a00c786d29b6d0f31075453e3e95e187310746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <!-- CSS carousel-->
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/carousel.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/trabajos.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_60146c896be396349ce7c913e4a00c786d29b6d0f31075453e3e95e187310746->leave($__internal_60146c896be396349ce7c913e4a00c786d29b6d0f31075453e3e95e187310746_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_573974c31c8f3ff40ffb4efa938c0dc3c4ca22bb4dc3ea8c2dcb055fe91e876d = $this->env->getExtension("native_profiler");
        $__internal_573974c31c8f3ff40ffb4efa938c0dc3c4ca22bb4dc3ea8c2dcb055fe91e876d->enter($__internal_573974c31c8f3ff40ffb4efa938c0dc3c4ca22bb4dc3ea8c2dcb055fe91e876d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    ";
        // line 11
        echo twig_include($this->env, $context, "DsgagenciaBundle::/Trabajos/carousel.html.twig");
        echo "
";
        
        $__internal_573974c31c8f3ff40ffb4efa938c0dc3c4ca22bb4dc3ea8c2dcb055fe91e876d->leave($__internal_573974c31c8f3ff40ffb4efa938c0dc3c4ca22bb4dc3ea8c2dcb055fe91e876d_prof);

    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        $__internal_95cc5afb8774c6879ea850976c2296c3a129ddd8551d5bcaa00487b2206054fc = $this->env->getExtension("native_profiler");
        $__internal_95cc5afb8774c6879ea850976c2296c3a129ddd8551d5bcaa00487b2206054fc->enter($__internal_95cc5afb8774c6879ea850976c2296c3a129ddd8551d5bcaa00487b2206054fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 14
        echo "    <div id=\"trabajos\">    
        <!-- Three columns of text below the carousel -->
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) ? $context["categorias"] : $this->getContext($context, "categorias")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["categoria"]) {
            // line 17
            echo "            <div class=\"panel panel-primary\">
                <div class=\"panel-heading\">
                    <h2 class=\"panel-title\"><a href=";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dsgagencia_categoria", array("slug" => $this->getAttribute($context["categoria"], "slug", array()))), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categoria"], "nombre", array()), "html", null, true);
            echo "</a></h2>
                </div>
                
                <!--Incluimos la plantilla de listar trabajos-->
                ";
            // line 23
            echo twig_include($this->env, $context, "DsgagenciaBundle:Trabajos:listar.html.twig", array("trabajos" => $this->getAttribute($context["categoria"], "trabajosactivos", array())));
            echo "
                
                ";
            // line 25
            if ($this->getAttribute($context["categoria"], "masTrabajos", array())) {
                // line 26
                echo "                    <div class=\"mas center-block\">
                    <a class=\"btn btn-primary\" href=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dsgagencia_categoria", array("slug" => $this->getAttribute($context["categoria"], "slug", array()))), "html", null, true);
                echo "\" role=\"button\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["categoria"], "masTrabajos", array()), "html", null, true);
                echo " ofertas más...</a>
                    </div>
                ";
            }
            // line 30
            echo "                <div class=\"clearfix\"></div>
                <br/>
            </div>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoria'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </div>
    ";
        
        $__internal_95cc5afb8774c6879ea850976c2296c3a129ddd8551d5bcaa00487b2206054fc->leave($__internal_95cc5afb8774c6879ea850976c2296c3a129ddd8551d5bcaa00487b2206054fc_prof);

    }

    public function getTemplateName()
    {
        return "DsgagenciaBundle:Trabajos:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 34,  139 => 30,  131 => 27,  128 => 26,  126 => 25,  121 => 23,  112 => 19,  108 => 17,  91 => 16,  87 => 14,  81 => 13,  72 => 11,  67 => 10,  61 => 9,  52 => 7,  48 => 6,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'DsgagenciaBundle::layout.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <!-- CSS carousel-->*/
/*     <link rel="stylesheet" href="{{ asset('public/css/carousel.css') }}" type="text/css" media="all" />*/
/*     <link rel="stylesheet" href="{{ asset('public/css/trabajos.css') }}" type="text/css" media="all" />*/
/* {% endblock %}*/
/* {% block body %}*/
/*     {{ parent() }}*/
/*     {{ include('DsgagenciaBundle::/Trabajos/carousel.html.twig') }}*/
/* {% endblock %}*/
/*    {% block content %}*/
/*     <div id="trabajos">    */
/*         <!-- Three columns of text below the carousel -->*/
/*         {% for categoria in categorias %}*/
/*             <div class="panel panel-primary">*/
/*                 <div class="panel-heading">*/
/*                     <h2 class="panel-title"><a href={{ path('dsgagencia_categoria', { 'slug': categoria.slug }) }}>{{ categoria.nombre }}</a></h2>*/
/*                 </div>*/
/*                 */
/*                 <!--Incluimos la plantilla de listar trabajos-->*/
/*                 {{ include ('DsgagenciaBundle:Trabajos:listar.html.twig', {'trabajos': categoria.trabajosactivos}) }}*/
/*                 */
/*                 {% if categoria.masTrabajos %}*/
/*                     <div class="mas center-block">*/
/*                     <a class="btn btn-primary" href="{{ path('dsgagencia_categoria', { 'slug': categoria.slug}) }}" role="button">{{categoria.masTrabajos }} ofertas más...</a>*/
/*                     </div>*/
/*                 {% endif %}*/
/*                 <div class="clearfix"></div>*/
/*                 <br/>*/
/*             </div>*/
/*         {% endfor %}*/
/*         </div>*/
/*     {% endblock %}*/
/* */
