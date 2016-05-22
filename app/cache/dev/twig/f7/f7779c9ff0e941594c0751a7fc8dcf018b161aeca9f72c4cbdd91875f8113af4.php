<?php

/* DsgagenciaBundle:Trabajos:buscar.html.twig */
class __TwigTemplate_0419d8d8fe7f9301e28a1d3defa83129e2239c523052925fa8805c482734c401 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DsgagenciaBundle::layout.html.twig", "DsgagenciaBundle:Trabajos:buscar.html.twig", 1);
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
        $__internal_517ea8a1c88ba35779ca1813345c3b37be397b88073d2b47bcd41e7ff56ff0c7 = $this->env->getExtension("native_profiler");
        $__internal_517ea8a1c88ba35779ca1813345c3b37be397b88073d2b47bcd41e7ff56ff0c7->enter($__internal_517ea8a1c88ba35779ca1813345c3b37be397b88073d2b47bcd41e7ff56ff0c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DsgagenciaBundle:Trabajos:buscar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_517ea8a1c88ba35779ca1813345c3b37be397b88073d2b47bcd41e7ff56ff0c7->leave($__internal_517ea8a1c88ba35779ca1813345c3b37be397b88073d2b47bcd41e7ff56ff0c7_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_954211b11ca993470f4457e381bc9e0cba25518e5627b0b23cd9dc4f876e87a5 = $this->env->getExtension("native_profiler");
        $__internal_954211b11ca993470f4457e381bc9e0cba25518e5627b0b23cd9dc4f876e87a5->enter($__internal_954211b11ca993470f4457e381bc9e0cba25518e5627b0b23cd9dc4f876e87a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <!--<link rel=\"stylesheet\" href=";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/erlemjobeet/css/jobs.css"), "html", null, true);
        echo " type=\"text/css\" media=\"all\" />-->
";
        
        $__internal_954211b11ca993470f4457e381bc9e0cba25518e5627b0b23cd9dc4f876e87a5->leave($__internal_954211b11ca993470f4457e381bc9e0cba25518e5627b0b23cd9dc4f876e87a5_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_a38a583936f7676812ddd7095813ddba009aa6c128b64aec39ca505941df1063 = $this->env->getExtension("native_profiler");
        $__internal_a38a583936f7676812ddd7095813ddba009aa6c128b64aec39ca505941df1063->enter($__internal_a38a583936f7676812ddd7095813ddba009aa6c128b64aec39ca505941df1063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "    <div id=\"jobs\">
        ";
        // line 10
        $this->loadTemplate("DsgagenciaBundle::listar.html.twig", "DsgagenciaBundle:Trabajos:buscar.html.twig", 10)->display(array_merge($context, array("trabajos" => (isset($context["trabajos"]) ? $context["trabajos"] : $this->getContext($context, "trabajos")))));
        // line 11
        echo "    </div>
";
        
        $__internal_a38a583936f7676812ddd7095813ddba009aa6c128b64aec39ca505941df1063->leave($__internal_a38a583936f7676812ddd7095813ddba009aa6c128b64aec39ca505941df1063_prof);

    }

    public function getTemplateName()
    {
        return "DsgagenciaBundle:Trabajos:buscar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  64 => 10,  61 => 9,  55 => 8,  46 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'DsgagenciaBundle::layout.html.twig' %}*/
/*  */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <!--<link rel="stylesheet" href={{ asset('bundles/erlemjobeet/css/jobs.css') }} type="text/css" media="all" />-->*/
/* {% endblock %}*/
/*  */
/* {% block content %}*/
/*     <div id="jobs">*/
/*         {% include 'DsgagenciaBundle::listar.html.twig' with {'trabajos': trabajos} %}*/
/*     </div>*/
/* {% endblock %}*/
