<?php

/* DsgagenciaBundle:AfiliadosAdmin:list_action_activar.html.twig */
class __TwigTemplate_ff5bc28b287cab1343501ceb07248bb3453252904870f1bc9d2210bd5f3ba9c5 extends Twig_Template
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
        $__internal_a5b7ace2f67a556f38b1d2378e7adda2512f8543b46b822e53b52ca9a2585e8e = $this->env->getExtension("native_profiler");
        $__internal_a5b7ace2f67a556f38b1d2378e7adda2512f8543b46b822e53b52ca9a2585e8e->enter($__internal_a5b7ace2f67a556f38b1d2378e7adda2512f8543b46b822e53b52ca9a2585e8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DsgagenciaBundle:AfiliadosAdmin:list_action_activar.html.twig"));

        // line 1
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "EDIT", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "activate"), "method"))) {
            // line 2
            echo "    <a href=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "activate", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
            echo " class=\"btn edit_link\" title=";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action_activate", array(), "SonataAdminBundle"), "html", null, true);
            echo ">
        <i class=\"icon-edit\"></i>
        ";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("activate", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    </a>
";
        }
        
        $__internal_a5b7ace2f67a556f38b1d2378e7adda2512f8543b46b822e53b52ca9a2585e8e->leave($__internal_a5b7ace2f67a556f38b1d2378e7adda2512f8543b46b822e53b52ca9a2585e8e_prof);

    }

    public function getTemplateName()
    {
        return "DsgagenciaBundle:AfiliadosAdmin:list_action_activar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 4,  24 => 2,  22 => 1,);
    }
}
/* {% if admin.isGranted('EDIT', object) and admin.hasRoute('activate') %}*/
/*     <a href={{ admin.generateObjectUrl('activate', object) }} class="btn edit_link" title={{ 'action_activate'|trans({}, 'SonataAdminBundle') }}>*/
/*         <i class="icon-edit"></i>*/
/*         {{ 'activate'|trans({}, 'SonataAdminBundle') }}*/
/*     </a>*/
/* {% endif %}*/
