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
        $__internal_60297691f62f18d20f82b0e1ee70960d69a913885d7514a6ffe4a8146211f0da = $this->env->getExtension("native_profiler");
        $__internal_60297691f62f18d20f82b0e1ee70960d69a913885d7514a6ffe4a8146211f0da->enter($__internal_60297691f62f18d20f82b0e1ee70960d69a913885d7514a6ffe4a8146211f0da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DsgagenciaBundle:Afiliados:wait.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60297691f62f18d20f82b0e1ee70960d69a913885d7514a6ffe4a8146211f0da->leave($__internal_60297691f62f18d20f82b0e1ee70960d69a913885d7514a6ffe4a8146211f0da_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_5d18a39278f22a0436411045cb7090ac5614d507d37968591272ebaa5fe7fbec = $this->env->getExtension("native_profiler");
        $__internal_5d18a39278f22a0436411045cb7090ac5614d507d37968591272ebaa5fe7fbec->enter($__internal_5d18a39278f22a0436411045cb7090ac5614d507d37968591272ebaa5fe7fbec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"content\">
        <h1>Su registro cuenta de usuario ha sido creada</h1>
        <div style=\"padding: 20px\">
            Muchas gracias.
            Usted recibirá un mail con su clave tan pronto como su cuenta se haya activado.
        </div>
    </div>
";
        
        $__internal_5d18a39278f22a0436411045cb7090ac5614d507d37968591272ebaa5fe7fbec->leave($__internal_5d18a39278f22a0436411045cb7090ac5614d507d37968591272ebaa5fe7fbec_prof);

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
