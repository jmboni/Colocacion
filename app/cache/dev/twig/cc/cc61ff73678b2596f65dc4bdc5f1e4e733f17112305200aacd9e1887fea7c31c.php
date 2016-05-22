<?php

/* base.html.twig */
class __TwigTemplate_5312b4f480058c576bf27354f48572eac2a23c13e50878e3d79771893f860191 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bf800c455b5f8422b66cffc18917966b90b7238ece68d824cb9da8f953cf25ee = $this->env->getExtension("native_profiler");
        $__internal_bf800c455b5f8422b66cffc18917966b90b7238ece68d824cb9da8f953cf25ee->enter($__internal_bf800c455b5f8422b66cffc18917966b90b7238ece68d824cb9da8f953cf25ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_bf800c455b5f8422b66cffc18917966b90b7238ece68d824cb9da8f953cf25ee->leave($__internal_bf800c455b5f8422b66cffc18917966b90b7238ece68d824cb9da8f953cf25ee_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_60360a08776cdc6eaa8af53897e7e90e72af38fe49c18b56527adea8771ad3f3 = $this->env->getExtension("native_profiler");
        $__internal_60360a08776cdc6eaa8af53897e7e90e72af38fe49c18b56527adea8771ad3f3->enter($__internal_60360a08776cdc6eaa8af53897e7e90e72af38fe49c18b56527adea8771ad3f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_60360a08776cdc6eaa8af53897e7e90e72af38fe49c18b56527adea8771ad3f3->leave($__internal_60360a08776cdc6eaa8af53897e7e90e72af38fe49c18b56527adea8771ad3f3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_027b24964e1a4144c24ad830bbc70df8e0ad9d894c10b41f74b56a9e349a5af1 = $this->env->getExtension("native_profiler");
        $__internal_027b24964e1a4144c24ad830bbc70df8e0ad9d894c10b41f74b56a9e349a5af1->enter($__internal_027b24964e1a4144c24ad830bbc70df8e0ad9d894c10b41f74b56a9e349a5af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_027b24964e1a4144c24ad830bbc70df8e0ad9d894c10b41f74b56a9e349a5af1->leave($__internal_027b24964e1a4144c24ad830bbc70df8e0ad9d894c10b41f74b56a9e349a5af1_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_4bddc5b7dacd0fba1a7c570cae1b21e7863485fc166756fb2267b54f8171efe6 = $this->env->getExtension("native_profiler");
        $__internal_4bddc5b7dacd0fba1a7c570cae1b21e7863485fc166756fb2267b54f8171efe6->enter($__internal_4bddc5b7dacd0fba1a7c570cae1b21e7863485fc166756fb2267b54f8171efe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4bddc5b7dacd0fba1a7c570cae1b21e7863485fc166756fb2267b54f8171efe6->leave($__internal_4bddc5b7dacd0fba1a7c570cae1b21e7863485fc166756fb2267b54f8171efe6_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1918cd1e2cc481f81a897571b325e96fcf1c4b6c7db0a2ec5b16bd49cd6dda08 = $this->env->getExtension("native_profiler");
        $__internal_1918cd1e2cc481f81a897571b325e96fcf1c4b6c7db0a2ec5b16bd49cd6dda08->enter($__internal_1918cd1e2cc481f81a897571b325e96fcf1c4b6c7db0a2ec5b16bd49cd6dda08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1918cd1e2cc481f81a897571b325e96fcf1c4b6c7db0a2ec5b16bd49cd6dda08->leave($__internal_1918cd1e2cc481f81a897571b325e96fcf1c4b6c7db0a2ec5b16bd49cd6dda08_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
