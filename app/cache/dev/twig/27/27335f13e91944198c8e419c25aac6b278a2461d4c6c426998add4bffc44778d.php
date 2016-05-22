<?php

/* DsgagenciaBundle:Afiliados:email.txt.twig */
class __TwigTemplate_646a1903f172eabe41d9fe470060be2c52098179248c25ef66d558e2032e47a8 extends Twig_Template
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
        $__internal_41e53c95ff0781dedd5e186aa7cf90acf5ab2194d3ddf52a1fc04b15ff74a7ae = $this->env->getExtension("native_profiler");
        $__internal_41e53c95ff0781dedd5e186aa7cf90acf5ab2194d3ddf52a1fc04b15ff74a7ae->enter($__internal_41e53c95ff0781dedd5e186aa7cf90acf5ab2194d3ddf52a1fc04b15ff74a7ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DsgagenciaBundle:Afiliados:email.txt.twig"));

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
        
        $__internal_41e53c95ff0781dedd5e186aa7cf90acf5ab2194d3ddf52a1fc04b15ff74a7ae->leave($__internal_41e53c95ff0781dedd5e186aa7cf90acf5ab2194d3ddf52a1fc04b15ff74a7ae_prof);

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
