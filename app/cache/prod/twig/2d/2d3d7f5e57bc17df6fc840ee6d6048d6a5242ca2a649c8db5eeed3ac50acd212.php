<?php

/* DsgagenciaBundle:AfiliadosAdmin:list_action_desactivar.html.twig */
class __TwigTemplate_affda64e8d8fa2dc91dcfbc2571fec0af0e4f4dd08e41bc9b05cb039643454e6 extends Twig_Template
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
        // line 1
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isGranted", array(0 => "EDIT", 1 => (isset($context["object"]) ? $context["object"] : null)), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", array(0 => "deactivate"), "method"))) {
            // line 2
            echo "    <a href=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateObjectUrl", array(0 => "deactivate", 1 => (isset($context["object"]) ? $context["object"] : null)), "method"), "html", null, true);
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
        return array (  29 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if admin.isGranted('EDIT', object) and admin.hasRoute('deactivate') %}*/
/*     <a href={{ admin.generateObjectUrl('deactivate', object) }} class="btn edit_link" title={{ 'action_deactivate'|trans({}, 'SonataAdminBundle') }}>*/
/*         <i class="icon-edit"></i>*/
/*         {{ 'Desactivar'|trans({}, 'SonataAdminBundle') }}*/
/*     </a>*/
/* {% endif %}*/
