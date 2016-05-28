<?php

/* DsgagenciaBundle:Afiliados:wait.html.twig */
class __TwigTemplate_fdb750ea0fb1f36c967dd19c223769b15ff2b16bd8add970620326222cd90082 extends Twig_Template
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
        $__internal_6724194edd85599c1f20965ecf55d58a460cd78f3a687dda23e9222615008238 = $this->env->getExtension("native_profiler");
        $__internal_6724194edd85599c1f20965ecf55d58a460cd78f3a687dda23e9222615008238->enter($__internal_6724194edd85599c1f20965ecf55d58a460cd78f3a687dda23e9222615008238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DsgagenciaBundle:Afiliados:wait.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6724194edd85599c1f20965ecf55d58a460cd78f3a687dda23e9222615008238->leave($__internal_6724194edd85599c1f20965ecf55d58a460cd78f3a687dda23e9222615008238_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_34d39771e576befdb12c9309ab1777c51c537b33142f534a0f25cfdad42b5824 = $this->env->getExtension("native_profiler");
        $__internal_34d39771e576befdb12c9309ab1777c51c537b33142f534a0f25cfdad42b5824->enter($__internal_34d39771e576befdb12c9309ab1777c51c537b33142f534a0f25cfdad42b5824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"content\">
        <h1>Su cuenta de usuario ha sido creada</h1>
        <div style=\"padding: 20px\">
            Muchas gracias.
            Usted recibirá un mail con su clave tan pronto como su cuenta se haya activado.
        </div>
    </div>
";
        
        $__internal_34d39771e576befdb12c9309ab1777c51c537b33142f534a0f25cfdad42b5824->leave($__internal_34d39771e576befdb12c9309ab1777c51c537b33142f534a0f25cfdad42b5824_prof);

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
