<?php

/* DsgagenciaBundle:Trabajos:index.html.twig */
class __TwigTemplate_707f0ce21ccb8b2cc845fe4efdee1da1017e315b1c97a3501a3a4835a67262e2 extends Twig_Template
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
        $__internal_2405589eb86ad8ba39194f1eac23090c90e4fbca6c0d7584be7c474fd3aeb02f = $this->env->getExtension("native_profiler");
        $__internal_2405589eb86ad8ba39194f1eac23090c90e4fbca6c0d7584be7c474fd3aeb02f->enter($__internal_2405589eb86ad8ba39194f1eac23090c90e4fbca6c0d7584be7c474fd3aeb02f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DsgagenciaBundle:Trabajos:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2405589eb86ad8ba39194f1eac23090c90e4fbca6c0d7584be7c474fd3aeb02f->leave($__internal_2405589eb86ad8ba39194f1eac23090c90e4fbca6c0d7584be7c474fd3aeb02f_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_077c08bb1e69fab6bf809d0524f61bf5ba5562bd5fd0fbd5ddff20ac7da3b1c0 = $this->env->getExtension("native_profiler");
        $__internal_077c08bb1e69fab6bf809d0524f61bf5ba5562bd5fd0fbd5ddff20ac7da3b1c0->enter($__internal_077c08bb1e69fab6bf809d0524f61bf5ba5562bd5fd0fbd5ddff20ac7da3b1c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_077c08bb1e69fab6bf809d0524f61bf5ba5562bd5fd0fbd5ddff20ac7da3b1c0->leave($__internal_077c08bb1e69fab6bf809d0524f61bf5ba5562bd5fd0fbd5ddff20ac7da3b1c0_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_af6aae706791fc0c0f875213acfaa849293a5c08d53c4dd63f5d935f67075cac = $this->env->getExtension("native_profiler");
        $__internal_af6aae706791fc0c0f875213acfaa849293a5c08d53c4dd63f5d935f67075cac->enter($__internal_af6aae706791fc0c0f875213acfaa849293a5c08d53c4dd63f5d935f67075cac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    ";
        // line 11
        echo twig_include($this->env, $context, "DsgagenciaBundle::/Trabajos/carousel.html.twig");
        echo "
";
        
        $__internal_af6aae706791fc0c0f875213acfaa849293a5c08d53c4dd63f5d935f67075cac->leave($__internal_af6aae706791fc0c0f875213acfaa849293a5c08d53c4dd63f5d935f67075cac_prof);

    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        $__internal_b2c2dbc0a05391664a768df98130c141da4298fda4f20f558e3c1abeeccf1beb = $this->env->getExtension("native_profiler");
        $__internal_b2c2dbc0a05391664a768df98130c141da4298fda4f20f558e3c1abeeccf1beb->enter($__internal_b2c2dbc0a05391664a768df98130c141da4298fda4f20f558e3c1abeeccf1beb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 14
        echo "        <!-- Three columns of text below the carousel -->
        ";
        // line 15
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
            // line 16
            echo "            <div class=\"panel panel-primary\">
                <div class=\"panel-heading\">
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
        // line 33
        echo "    ";
        
        $__internal_b2c2dbc0a05391664a768df98130c141da4298fda4f20f558e3c1abeeccf1beb->leave($__internal_b2c2dbc0a05391664a768df98130c141da4298fda4f20f558e3c1abeeccf1beb_prof);

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
        return array (  155 => 33,  138 => 29,  130 => 26,  127 => 25,  125 => 24,  120 => 22,  111 => 18,  107 => 16,  90 => 15,  87 => 14,  81 => 13,  72 => 11,  67 => 10,  61 => 9,  52 => 7,  48 => 6,  42 => 4,  36 => 3,  11 => 1,);
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
/*         {% for categoria in categorias %}*/
/*             <div class="panel panel-primary">*/
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
/*             </div>*/
/*         {% endfor %}*/
/*     {% endblock %}*/
/* */
