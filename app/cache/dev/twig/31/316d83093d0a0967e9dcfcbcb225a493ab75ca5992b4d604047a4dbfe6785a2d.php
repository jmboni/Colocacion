<?php

/* DsgagenciaBundle:AfiliadosAdmin:list_action_desactivar.html.twig */
class __TwigTemplate_f6872b3d78bb064bfc2618f3601726c158a15cc783e3ec877b6381bbb4e15233 extends Twig_Template
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
        $__internal_c88b877eea4fd1ef040c5f62f00847c768d99a442dd2a28dcd7c0970f422b58f = $this->env->getExtension("native_profiler");
        $__internal_c88b877eea4fd1ef040c5f62f00847c768d99a442dd2a28dcd7c0970f422b58f->enter($__internal_c88b877eea4fd1ef040c5f62f00847c768d99a442dd2a28dcd7c0970f422b58f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DsgagenciaBundle:AfiliadosAdmin:list_action_desactivar.html.twig"));

        // line 1
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "EDIT", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "deactivate"), "method"))) {
            // line 2
            echo "    <a href=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "deactivate", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
            echo " class=\"btn edit_link\" title=";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action_deactivate", array(), "SonataAdminBundle"), "html", null, true);
            echo ">
        <i class=\"icon-edit\"></i>
        ";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Desactivar", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    </a>
";
        }
        
        $__internal_c88b877eea4fd1ef040c5f62f00847c768d99a442dd2a28dcd7c0970f422b58f->leave($__internal_c88b877eea4fd1ef040c5f62f00847c768d99a442dd2a28dcd7c0970f422b58f_prof);

    }

    public function getTemplateName()
    {
        return "DsgagenciaBundle:AfiliadosAdmin:list_action_desactivar.html.twig";
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
/* {% if admin.isGranted('EDIT', object) and admin.hasRoute('deactivate') %}*/
/*     <a href={{ admin.generateObjectUrl('deactivate', object) }} class="btn edit_link" title={{ 'action_deactivate'|trans({}, 'SonataAdminBundle') }}>*/
/*         <i class="icon-edit"></i>*/
/*         {{ 'Desactivar'|trans({}, 'SonataAdminBundle') }}*/
/*     </a>*/
/* {% endif %}*/
