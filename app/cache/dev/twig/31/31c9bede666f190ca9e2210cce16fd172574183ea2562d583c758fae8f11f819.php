<?php

/* DsgagenciaBundle:Trabajos:index.html.twig */
class __TwigTemplate_b2f7d82f397791e4c106ff8e0d38ce25f165e0391c97156b5ad7e4bfb41fda8a extends Twig_Template
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
        $__internal_6cbc15843dd6447fe4f87ee3375ee34a4ae14306d8030d9ac247ac7c35afdcba = $this->env->getExtension("native_profiler");
        $__internal_6cbc15843dd6447fe4f87ee3375ee34a4ae14306d8030d9ac247ac7c35afdcba->enter($__internal_6cbc15843dd6447fe4f87ee3375ee34a4ae14306d8030d9ac247ac7c35afdcba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DsgagenciaBundle:Trabajos:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6cbc15843dd6447fe4f87ee3375ee34a4ae14306d8030d9ac247ac7c35afdcba->leave($__internal_6cbc15843dd6447fe4f87ee3375ee34a4ae14306d8030d9ac247ac7c35afdcba_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8bd9eb0998a251d2ed9111d3595c2bac4aa5f4bd9d86aab8d3d048cd83d8b710 = $this->env->getExtension("native_profiler");
        $__internal_8bd9eb0998a251d2ed9111d3595c2bac4aa5f4bd9d86aab8d3d048cd83d8b710->enter($__internal_8bd9eb0998a251d2ed9111d3595c2bac4aa5f4bd9d86aab8d3d048cd83d8b710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_8bd9eb0998a251d2ed9111d3595c2bac4aa5f4bd9d86aab8d3d048cd83d8b710->leave($__internal_8bd9eb0998a251d2ed9111d3595c2bac4aa5f4bd9d86aab8d3d048cd83d8b710_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_c5b3e93fdbed08d92373ae6cc9fdfe472610de29bd0118a07e4fee23cbb95e66 = $this->env->getExtension("native_profiler");
        $__internal_c5b3e93fdbed08d92373ae6cc9fdfe472610de29bd0118a07e4fee23cbb95e66->enter($__internal_c5b3e93fdbed08d92373ae6cc9fdfe472610de29bd0118a07e4fee23cbb95e66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    ";
        // line 11
        echo twig_include($this->env, $context, "DsgagenciaBundle::/Trabajos/carousel.html.twig");
        echo "
";
        
        $__internal_c5b3e93fdbed08d92373ae6cc9fdfe472610de29bd0118a07e4fee23cbb95e66->leave($__internal_c5b3e93fdbed08d92373ae6cc9fdfe472610de29bd0118a07e4fee23cbb95e66_prof);

    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        $__internal_573ecca0591b65304cb313526416e4603ab5a7d580b0bf1c6c0269ffe1ec31f4 = $this->env->getExtension("native_profiler");
        $__internal_573ecca0591b65304cb313526416e4603ab5a7d580b0bf1c6c0269ffe1ec31f4->enter($__internal_573ecca0591b65304cb313526416e4603ab5a7d580b0bf1c6c0269ffe1ec31f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 14
        echo "        <!-- Three columns of text below the carousel -->
        <div class=\"panel panel-default\">
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
            echo "                <div class=\"panel-heading\">
                    <h2 class=\"panel-title\"><a href=";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dsgagencia_categoria", array("slug" => $this->getAttribute($context["categoria"], "slug", array()))), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categoria"], "nombre", array()), "html", null, true);
            echo "</a></h2>
                </div>
                
                <!--Incluimos la plantilla de listar trabajos-->
                ";
            // line 22
            echo twig_include($this->env, $context, "DsgagenciaBundle::listar.html.twig", array("trabajos" => $this->getAttribute($context["categoria"], "trabajosactivos", array())));
            echo "
                
                ";
            // line 24
            if ($this->getAttribute($context["categoria"], "masTrabajos", array())) {
                // line 25
                echo "                    <div class=\"mas center-block\">
                    <a class=\"btn btn-primary\" href=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dsgagencia_categoria", array("slug" => $this->getAttribute($context["categoria"], "slug", array()))), "html", null, true);
                echo "\" role=\"button\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["categoria"], "masTrabajos", array()), "html", null, true);
                echo " ofertas más...</a>
                    </div>
                ";
            }
            // line 29
            echo "                <div class=\"clearfix\"></div>
                <br/>
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
        // line 32
        echo "        </div>
    ";
        
        $__internal_573ecca0591b65304cb313526416e4603ab5a7d580b0bf1c6c0269ffe1ec31f4->leave($__internal_573ecca0591b65304cb313526416e4603ab5a7d580b0bf1c6c0269ffe1ec31f4_prof);

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
        return array (  154 => 32,  138 => 29,  130 => 26,  127 => 25,  125 => 24,  120 => 22,  111 => 18,  108 => 17,  91 => 16,  87 => 14,  81 => 13,  72 => 11,  67 => 10,  61 => 9,  52 => 7,  48 => 6,  42 => 4,  36 => 3,  11 => 1,);
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
/*         <!-- Three columns of text below the carousel -->*/
/*         <div class="panel panel-default">*/
/*         {% for categoria in categorias %}*/
/*                 <div class="panel-heading">*/
/*                     <h2 class="panel-title"><a href={{ path('dsgagencia_categoria', { 'slug': categoria.slug }) }}>{{ categoria.nombre }}</a></h2>*/
/*                 </div>*/
/*                 */
/*                 <!--Incluimos la plantilla de listar trabajos-->*/
/*                 {{ include ('DsgagenciaBundle::listar.html.twig', {'trabajos': categoria.trabajosactivos}) }}*/
/*                 */
/*                 {% if categoria.masTrabajos %}*/
/*                     <div class="mas center-block">*/
/*                     <a class="btn btn-primary" href="{{ path('dsgagencia_categoria', { 'slug': categoria.slug}) }}" role="button">{{categoria.masTrabajos }} ofertas más...</a>*/
/*                     </div>*/
/*                 {% endif %}*/
/*                 <div class="clearfix"></div>*/
/*                 <br/>*/
/*         {% endfor %}*/
/*         </div>*/
/*     {% endblock %}*/
/* */
