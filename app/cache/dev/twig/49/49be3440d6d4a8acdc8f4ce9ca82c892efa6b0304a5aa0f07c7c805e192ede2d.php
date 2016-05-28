<?php

/* DsgagenciaBundle:Trabajos:buscar.html.twig */
class __TwigTemplate_9ab43c19178584ea6092896e18284eb2221724647191ecfaf63497ff54235fa4 extends Twig_Template
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
        $__internal_3c3f32a7f2f6026ecdb38b9f183e82c8e612babcaae0b18a08fe19c4369693b8 = $this->env->getExtension("native_profiler");
        $__internal_3c3f32a7f2f6026ecdb38b9f183e82c8e612babcaae0b18a08fe19c4369693b8->enter($__internal_3c3f32a7f2f6026ecdb38b9f183e82c8e612babcaae0b18a08fe19c4369693b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DsgagenciaBundle:Trabajos:buscar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c3f32a7f2f6026ecdb38b9f183e82c8e612babcaae0b18a08fe19c4369693b8->leave($__internal_3c3f32a7f2f6026ecdb38b9f183e82c8e612babcaae0b18a08fe19c4369693b8_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_cc8af3c8d2413dcda21ecf4ddf0c46af241f53d0733f065e1d83c01e8f12bd3e = $this->env->getExtension("native_profiler");
        $__internal_cc8af3c8d2413dcda21ecf4ddf0c46af241f53d0733f065e1d83c01e8f12bd3e->enter($__internal_cc8af3c8d2413dcda21ecf4ddf0c46af241f53d0733f065e1d83c01e8f12bd3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div id=\"trabajos\">
        ";
        // line 5
        $this->loadTemplate("DsgagenciaBundle:Trabajos:listar.html.twig", "DsgagenciaBundle:Trabajos:buscar.html.twig", 5)->display(array_merge($context, array("trabajos" => (isset($context["trabajos"]) ? $context["trabajos"] : $this->getContext($context, "trabajos")))));
        // line 6
        echo "    </div>
";
        
        $__internal_cc8af3c8d2413dcda21ecf4ddf0c46af241f53d0733f065e1d83c01e8f12bd3e->leave($__internal_cc8af3c8d2413dcda21ecf4ddf0c46af241f53d0733f065e1d83c01e8f12bd3e_prof);

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
        return array (  45 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'DsgagenciaBundle::layout.html.twig' %}*/
/* */
/* {% block content %}*/
/*     <div id="trabajos">*/
/*         {% include 'DsgagenciaBundle:Trabajos:listar.html.twig' with {'trabajos': trabajos} %}*/
/*     </div>*/
/* {% endblock %}*/
