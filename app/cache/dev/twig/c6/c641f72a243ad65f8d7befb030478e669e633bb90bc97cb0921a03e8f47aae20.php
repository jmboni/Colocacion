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
        $__internal_8709b1412160215c88002b66913c682ac536fb452fcb548180724c6ecf91f0f9 = $this->env->getExtension("native_profiler");
        $__internal_8709b1412160215c88002b66913c682ac536fb452fcb548180724c6ecf91f0f9->enter($__internal_8709b1412160215c88002b66913c682ac536fb452fcb548180724c6ecf91f0f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DsgagenciaBundle:Afiliados:wait.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8709b1412160215c88002b66913c682ac536fb452fcb548180724c6ecf91f0f9->leave($__internal_8709b1412160215c88002b66913c682ac536fb452fcb548180724c6ecf91f0f9_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_0a54ae5b74b36565b8ee779896adf0ffefdfc2cac593b1d741a5fbdcbf1e5f3a = $this->env->getExtension("native_profiler");
        $__internal_0a54ae5b74b36565b8ee779896adf0ffefdfc2cac593b1d741a5fbdcbf1e5f3a->enter($__internal_0a54ae5b74b36565b8ee779896adf0ffefdfc2cac593b1d741a5fbdcbf1e5f3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"content\">
        <h1>Su cuenta de usuario ha sido creada</h1>
        <div style=\"padding: 20px\">
            Muchas gracias.
            Usted recibirá un mail con su clave tan pronto como su cuenta se haya activado.
        </div>
    </div>
";
        
        $__internal_0a54ae5b74b36565b8ee779896adf0ffefdfc2cac593b1d741a5fbdcbf1e5f3a->leave($__internal_0a54ae5b74b36565b8ee779896adf0ffefdfc2cac593b1d741a5fbdcbf1e5f3a_prof);

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
/*         <h1>Su cuenta de usuario ha sido creada</h1>*/
/*         <div style="padding: 20px">*/
/*             Muchas gracias.*/
/*             Usted recibirá un mail con su clave tan pronto como su cuenta se haya activado.*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
