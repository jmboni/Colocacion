<?php

/* DsgagenciaBundle:Afiliados:email.txt.twig */
class __TwigTemplate_fc4d2a5f5385b42f7a36a733c0a7271945b1673f0c550d9dc0b0bdef614a7d37 extends Twig_Template
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
        echo "Su cuenta de usuario ha sido activada.
Su número secreto de afiliado es ";
        // line 2
        echo (isset($context["afiliados"]) ? $context["afiliados"] : null);
        echo ".
Usted podrá ver la lista de ofertas en las siguientes direcciones:

https://agencias-jmboni.c9users.io/web/app_dev.php/api/";
        // line 5
        echo (isset($context["afiliados"]) ? $context["afiliados"] : null);
        echo "/trabajos.xml
or https://agencias-jmboni.c9users.io/web/app_dev.php/api/";
        // line 6
        echo (isset($context["afiliados"]) ? $context["afiliados"] : null);
        echo "/trabajos.json
or https://agencias-jmboni.c9users.io/web/app_dev.php/api/";
        // line 7
        echo (isset($context["afiliados"]) ? $context["afiliados"] : null);
        echo "/trabajos.yaml";
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
        return array (  36 => 7,  32 => 6,  28 => 5,  22 => 2,  19 => 1,);
    }
}
/* Su cuenta de usuario ha sido activada.*/
/* Su número secreto de afiliado es {{ afiliados }}.*/
/* Usted podrá ver la lista de ofertas en las siguientes direcciones:*/
/* */
/* https://agencias-jmboni.c9users.io/web/app_dev.php/api/{{afiliados}}/trabajos.xml*/
/* or https://agencias-jmboni.c9users.io/web/app_dev.php/api/{{afiliados}}/trabajos.json*/
/* or https://agencias-jmboni.c9users.io/web/app_dev.php/api/{{afiliados}}/trabajos.yaml*/
