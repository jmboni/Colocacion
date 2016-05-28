<?php

/* DsgagenciaBundle:Afiliados:wait.html.twig */
class __TwigTemplate_4406c9b332071f031cb546ed69f2fdaf8dd77e4f964b69dd222ec7f36574e5e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DsgagenciaBundle::layout.html.twig", "DsgagenciaBundle:Afiliados:wait.html.twig", 1);
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
        echo "    <div class=\"content\">
        <h1>Su cuenta de usuario ha sido creada</h1>
        <div style=\"padding: 20px\">
            Muchas gracias.
            Usted recibirá un mail con su clave tan pronto como su cuenta se haya activado.
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "DsgagenciaBundle:Afiliados:wait.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'DsgagenciaBundle::layout.html.twig' %}*/
/*  */
/* {% block content %}*/
/*     <div class="content">*/
/*         <h1>Su cuenta de usuario ha sido creada</h1>*/
/*         <div style="padding: 20px">*/
/*             Muchas gracias.*/
/*             Usted recibirá un mail con su clave tan pronto como su cuenta se haya activado.*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
