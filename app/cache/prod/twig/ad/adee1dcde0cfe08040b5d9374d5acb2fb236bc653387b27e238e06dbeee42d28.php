<?php

/* DsgagenciaBundle:Trabajos:buscar.html.twig */
class __TwigTemplate_8cf8b8564ff84dbc01411b21aa978739b506377e11b17ca505d540187be73e9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DsgagenciaBundle::layout.html.twig", "DsgagenciaBundle:Trabajos:buscar.html.twig", 1);
        $this->blocks = array(
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
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div id=\"trabajos\">
        ";
        // line 5
        $this->loadTemplate("DsgagenciaBundle:Trabajos:listar.html.twig", "DsgagenciaBundle:Trabajos:buscar.html.twig", 5)->display(array_merge($context, array("trabajos" => (isset($context["trabajos"]) ? $context["trabajos"] : null))));
        // line 6
        echo "    </div>
";
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
        return array (  36 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'DsgagenciaBundle::layout.html.twig' %}*/
/* */
/* {% block content %}*/
/*     <div id="trabajos">*/
/*         {% include 'DsgagenciaBundle:Trabajos:listar.html.twig' with {'trabajos': trabajos} %}*/
/*     </div>*/
/* {% endblock %}*/
