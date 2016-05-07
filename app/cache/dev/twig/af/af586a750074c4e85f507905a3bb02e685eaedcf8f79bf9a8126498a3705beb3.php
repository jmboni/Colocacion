<?php

/* DsgagenciaBundle:Trabajos:new.html.twig */
class __TwigTemplate_facac64e46aa9bc90ed753b90447c521464a683f1b57075c07ac6962b24908bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DsgagenciaBundle::layout.html.twig", "DsgagenciaBundle:Trabajos:new.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DsgagenciaBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f60d853a406cbc05b8c6ad367ba79b678ecad2a7e26af0954f50ae522e82b0cf = $this->env->getExtension("native_profiler");
        $__internal_f60d853a406cbc05b8c6ad367ba79b678ecad2a7e26af0954f50ae522e82b0cf->enter($__internal_f60d853a406cbc05b8c6ad367ba79b678ecad2a7e26af0954f50ae522e82b0cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DsgagenciaBundle:Trabajos:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f60d853a406cbc05b8c6ad367ba79b678ecad2a7e26af0954f50ae522e82b0cf->leave($__internal_f60d853a406cbc05b8c6ad367ba79b678ecad2a7e26af0954f50ae522e82b0cf_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f28f4788a7d79e459d8cc03108620e2fd11e1fc012561b2c9b4d001e2ea376c2 = $this->env->getExtension("native_profiler");
        $__internal_f28f4788a7d79e459d8cc03108620e2fd11e1fc012561b2c9b4d001e2ea376c2->enter($__internal_f28f4788a7d79e459d8cc03108620e2fd11e1fc012561b2c9b4d001e2ea376c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/dsgagencia/css/admin.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f28f4788a7d79e459d8cc03108620e2fd11e1fc012561b2c9b4d001e2ea376c2->leave($__internal_f28f4788a7d79e459d8cc03108620e2fd11e1fc012561b2c9b4d001e2ea376c2_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_e94aa40e78f6ecb28dfeffa0ef6a95505c0003390a678a4d9bc2fb020f336ed9 = $this->env->getExtension("native_profiler");
        $__internal_e94aa40e78f6ecb28dfeffa0ef6a95505c0003390a678a4d9bc2fb020f336ed9->enter($__internal_e94aa40e78f6ecb28dfeffa0ef6a95505c0003390a678a4d9bc2fb020f336ed9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <h1>Insertar oferta nueva</h1>

    ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("trabajos");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
        
        $__internal_e94aa40e78f6ecb28dfeffa0ef6a95505c0003390a678a4d9bc2fb020f336ed9->leave($__internal_e94aa40e78f6ecb28dfeffa0ef6a95505c0003390a678a4d9bc2fb020f336ed9_prof);

    }

    public function getTemplateName()
    {
        return "DsgagenciaBundle:Trabajos:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 16,  68 => 12,  61 => 9,  55 => 8,  46 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'DsgagenciaBundle::layout.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/dsgagencia/css/admin.css') }}" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {{ parent() }}*/
/*     <h1>Insertar oferta nueva</h1>*/
/* */
/*     {{ form(form) }}*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('trabajos') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
