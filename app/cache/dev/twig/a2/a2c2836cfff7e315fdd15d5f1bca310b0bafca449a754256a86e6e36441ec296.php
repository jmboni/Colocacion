<?php

/* SonataAdminBundle:Button:show_button.html.twig */
class __TwigTemplate_ba50abb35084566b72e807318c0e4f7dbc9507aafb27404832798c6934b2afeb extends Twig_Template
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
        $__internal_a6a7d1539d1f7c9dc75187b2ccc37a4bb55a408c6c7d0d0437d5a4a8268e9873 = $this->env->getExtension("native_profiler");
        $__internal_a6a7d1539d1f7c9dc75187b2ccc37a4bb55a408c6c7d0d0437d5a4a8268e9873->enter($__internal_a6a7d1539d1f7c9dc75187b2ccc37a4bb55a408c6c7d0d0437d5a4a8268e9873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Button:show_button.html.twig"));

        // line 11
        echo "
";
        // line 12
        if (((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "show"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "VIEW", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")) && (twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "show", array())) > 0))) {
            // line 13
            echo "    <a class=\"sonata-action-element\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "show", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\">
        <i class=\"fa fa-eye\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_show", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
";
        }
        
        $__internal_a6a7d1539d1f7c9dc75187b2ccc37a4bb55a408c6c7d0d0437d5a4a8268e9873->leave($__internal_a6a7d1539d1f7c9dc75187b2ccc37a4bb55a408c6c7d0d0437d5a4a8268e9873_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:show_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 15,  27 => 13,  25 => 12,  22 => 11,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% if admin.hasroute('show') and admin.id(object) and admin.isGranted('VIEW', object) and admin.show|length > 0 %}*/
/*     <a class="sonata-action-element" href="{{ admin.generateObjectUrl('show', object) }}">*/
/*         <i class="fa fa-eye"></i>*/
/*         {{ 'link_action_show'|trans({}, 'SonataAdminBundle') }}</a>*/
/* {% endif %}*/
/* */
