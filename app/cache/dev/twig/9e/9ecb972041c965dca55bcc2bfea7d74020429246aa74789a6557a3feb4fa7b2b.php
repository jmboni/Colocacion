<?php

/* DsgagenciaBundle:AfiliadosAdmin:list_action_activar.html.twig */
class __TwigTemplate_4fc92494fedfaaa5a09743347adb6bc1edc702941f6f918aab41fe4eb9f41356 extends Twig_Template
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
        $__internal_d9550a790d37126c88f58680649c5579c9952507e316407797a0400b31cb412d = $this->env->getExtension("native_profiler");
        $__internal_d9550a790d37126c88f58680649c5579c9952507e316407797a0400b31cb412d->enter($__internal_d9550a790d37126c88f58680649c5579c9952507e316407797a0400b31cb412d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DsgagenciaBundle:AfiliadosAdmin:list_action_activar.html.twig"));

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
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Activar", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    </a>
";
        }
        
        $__internal_d9550a790d37126c88f58680649c5579c9952507e316407797a0400b31cb412d->leave($__internal_d9550a790d37126c88f58680649c5579c9952507e316407797a0400b31cb412d_prof);

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
/*         {{ 'Activar'|trans({}, 'SonataAdminBundle') }}*/
/*     </a>*/
/* {% endif %}*/
