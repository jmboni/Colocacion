<?php

/* DsgagenciaBundle:Afiliados:email.txt.twig */
class __TwigTemplate_95b4e8f8dfec99f53554b8f08f962303dacfa5b72ec1afd9ffb7af5c789d1824 extends Twig_Template
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
        $__internal_f96801a3373c4a34ccde37561ed4e2f9c0cd8ff8eac7ae6da73a2c1c73f32ba2 = $this->env->getExtension("native_profiler");
        $__internal_f96801a3373c4a34ccde37561ed4e2f9c0cd8ff8eac7ae6da73a2c1c73f32ba2->enter($__internal_f96801a3373c4a34ccde37561ed4e2f9c0cd8ff8eac7ae6da73a2c1c73f32ba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DsgagenciaBundle:Afiliados:email.txt.twig"));

        // line 1
        echo "Su cuenta de usuario ha sido activada.
Su número secreto de afiliado es ";
        // line 2
        echo (isset($context["afiliados"]) ? $context["afiliados"] : $this->getContext($context, "afiliados"));
        echo ".
Usted podrá ver la lista de ofertas en las siguientes direcciones:

https://agencias-jmboni.c9users.io/web/app_dev.php/api/";
        // line 5
        echo (isset($context["afiliados"]) ? $context["afiliados"] : $this->getContext($context, "afiliados"));
        echo "/trabajos.xml
or https://agencias-jmboni.c9users.io/web/app_dev.php/api/";
        // line 6
        echo (isset($context["afiliados"]) ? $context["afiliados"] : $this->getContext($context, "afiliados"));
        echo "/trabajos.json
or https://agencias-jmboni.c9users.io/web/app_dev.php/api/";
        // line 7
        echo (isset($context["afiliados"]) ? $context["afiliados"] : $this->getContext($context, "afiliados"));
        echo "/trabajos.yaml";
        
        $__internal_f96801a3373c4a34ccde37561ed4e2f9c0cd8ff8eac7ae6da73a2c1c73f32ba2->leave($__internal_f96801a3373c4a34ccde37561ed4e2f9c0cd8ff8eac7ae6da73a2c1c73f32ba2_prof);

    }

    public function getTemplateName()
    {
        return "DsgagenciaBundle:Afiliados:email.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 7,  35 => 6,  31 => 5,  25 => 2,  22 => 1,);
    }
}
/* Su cuenta de usuario ha sido activada.*/
/* Su número secreto de afiliado es {{ afiliados }}.*/
/* Usted podrá ver la lista de ofertas en las siguientes direcciones:*/
/* */
/* https://agencias-jmboni.c9users.io/web/app_dev.php/api/{{afiliados}}/trabajos.xml*/
/* or https://agencias-jmboni.c9users.io/web/app_dev.php/api/{{afiliados}}/trabajos.json*/
/* or https://agencias-jmboni.c9users.io/web/app_dev.php/api/{{afiliados}}/trabajos.yaml*/
