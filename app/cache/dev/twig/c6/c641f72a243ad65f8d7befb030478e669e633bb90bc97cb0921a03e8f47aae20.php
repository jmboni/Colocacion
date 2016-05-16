<?php

/* DsgagenciaBundle:Afiliados:wait.html.twig */
class __TwigTemplate_82a3cfc44d03886e70f1178b96b7201601e65b6dd65b5de9d8daeaa58bbc52d0 extends Twig_Template
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
        $__internal_10ab3c701e505352766ebb7da341e136c38be43eb1759d28d71b6b8dbfca449e = $this->env->getExtension("native_profiler");
        $__internal_10ab3c701e505352766ebb7da341e136c38be43eb1759d28d71b6b8dbfca449e->enter($__internal_10ab3c701e505352766ebb7da341e136c38be43eb1759d28d71b6b8dbfca449e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DsgagenciaBundle:Afiliados:wait.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10ab3c701e505352766ebb7da341e136c38be43eb1759d28d71b6b8dbfca449e->leave($__internal_10ab3c701e505352766ebb7da341e136c38be43eb1759d28d71b6b8dbfca449e_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_66f53275160850705c6e41ec0a588d205fb96221b8c6d05c6db7e29f961eb6a9 = $this->env->getExtension("native_profiler");
        $__internal_66f53275160850705c6e41ec0a588d205fb96221b8c6d05c6db7e29f961eb6a9->enter($__internal_66f53275160850705c6e41ec0a588d205fb96221b8c6d05c6db7e29f961eb6a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"content\">
        <h1>Su registro cuenta de usuario ha sido creada</h1>
        <div style=\"padding: 20px\">
            Muchas gracias.
            Usted recibirá un mail con su clave tan pronto como su cuenta se haya activado.
        </div>
    </div>
";
        
        $__internal_66f53275160850705c6e41ec0a588d205fb96221b8c6d05c6db7e29f961eb6a9->leave($__internal_66f53275160850705c6e41ec0a588d205fb96221b8c6d05c6db7e29f961eb6a9_prof);

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
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'DsgagenciaBundle::layout.html.twig' %}*/
/*  */
/* {% block content %}*/
/*     <div class="content">*/
/*         <h1>Su registro cuenta de usuario ha sido creada</h1>*/
/*         <div style="padding: 20px">*/
/*             Muchas gracias.*/
/*             Usted recibirá un mail con su clave tan pronto como su cuenta se haya activado.*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
