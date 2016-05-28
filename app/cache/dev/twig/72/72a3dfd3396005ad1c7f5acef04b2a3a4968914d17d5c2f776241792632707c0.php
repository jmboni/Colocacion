<?php

/* DsgagenciaBundle:Contact:contactEmail.txt.twig */
class __TwigTemplate_c7c6123745e16aa9aab368730cec85088306c575be9b0b7d5cf3de633ee9880c extends Twig_Template
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
        $__internal_e87649b73b627f8b6e640594761147d0d0bf1347fedc3edddcc71d654525c2c9 = $this->env->getExtension("native_profiler");
        $__internal_e87649b73b627f8b6e640594761147d0d0bf1347fedc3edddcc71d654525c2c9->enter($__internal_e87649b73b627f8b6e640594761147d0d0bf1347fedc3edddcc71d654525c2c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DsgagenciaBundle:Contact:contactEmail.txt.twig"));

        // line 1
        echo "Se ha enviado un nuevo mail de contacto de ";
        echo $this->getAttribute((isset($context["contacto"]) ? $context["contacto"] : $this->getContext($context, "contacto")), "name", array());
        echo " at ";
        echo twig_date_format_filter($this->env, "now", "d/m/Y H:i");
        echo ".

Responder a: ";
        // line 3
        echo $this->getAttribute((isset($context["contacto"]) ? $context["contacto"] : $this->getContext($context, "contacto")), "email", array());
        echo "
Asunto: ";
        // line 4
        echo $this->getAttribute((isset($context["contacto"]) ? $context["contacto"] : $this->getContext($context, "contacto")), "subject", array());
        echo "
Cuerpo mensaje:
";
        // line 6
        echo $this->getAttribute((isset($context["contacto"]) ? $context["contacto"] : $this->getContext($context, "contacto")), "body", array());
        
        $__internal_e87649b73b627f8b6e640594761147d0d0bf1347fedc3edddcc71d654525c2c9->leave($__internal_e87649b73b627f8b6e640594761147d0d0bf1347fedc3edddcc71d654525c2c9_prof);

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
        return array (  39 => 6,  34 => 4,  30 => 3,  22 => 1,);
    }
}
/* Se ha enviado un nuevo mail de contacto de {{ contacto.name }} at {{ "now" | date("d/m/Y H:i") }}.*/
/* */
/* Responder a: {{ contacto.email }}*/
/* Asunto: {{ contacto.subject }}*/
/* Cuerpo mensaje:*/
/* {{ contacto.body }}*/
