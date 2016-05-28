<?php

/* DsgagenciaBundle:Contact:contactEmail.txt.twig */
class __TwigTemplate_567db069ec5521d96c94ea0be3075549f4e947147d93e8a8629c8f227e067e27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "Se ha enviado un nuevo mail de contacto de ";
        echo $this->getAttribute((isset($context["contacto"]) ? $context["contacto"] : null), "name", array());
        echo " at ";
        echo twig_date_format_filter($this->env, "now", "d/m/Y H:i");
        echo ".

Responder a: ";
        // line 3
        echo $this->getAttribute((isset($context["contacto"]) ? $context["contacto"] : null), "email", array());
        echo "
Asunto: ";
        // line 4
        echo $this->getAttribute((isset($context["contacto"]) ? $context["contacto"] : null), "subject", array());
        echo "
Cuerpo mensaje:
";
        // line 6
        echo $this->getAttribute((isset($context["contacto"]) ? $context["contacto"] : null), "body", array());
    }

    public function getTemplateName()
    {
        return "DsgagenciaBundle:Contact:contactEmail.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  31 => 4,  27 => 3,  19 => 1,);
    }
}
/* Se ha enviado un nuevo mail de contacto de {{ contacto.name }} at {{ "now" | date("d/m/Y H:i") }}.*/
/* */
/* Responder a: {{ contacto.email }}*/
/* Asunto: {{ contacto.subject }}*/
/* Cuerpo mensaje:*/
/* {{ contacto.body }}*/
