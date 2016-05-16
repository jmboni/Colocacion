<?php

/* SonataAdminBundle:Button:acl_button.html.twig */
class __TwigTemplate_57b37c359068714b61c876a1a89460faf4e1d9612aa6ae17f277d75ec7cbce09 extends Twig_Template
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
        $__internal_c2cf700a1409d8941166d590909ee60fa07b3d045437ef44c8fd25b3022e19be = $this->env->getExtension("native_profiler");
        $__internal_c2cf700a1409d8941166d590909ee60fa07b3d045437ef44c8fd25b3022e19be->enter($__internal_c2cf700a1409d8941166d590909ee60fa07b3d045437ef44c8fd25b3022e19be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Button:acl_button.html.twig"));

        // line 11
        echo "
";
        // line 12
        if (((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isAclEnabled", array(), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "acl"), "method")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "MASTER", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
            // line 13
            echo "    <a class=\"sonata-action-element\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "acl", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\">
        <i class=\"fa fa-users\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_acl", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
";
        }
        
        $__internal_c2cf700a1409d8941166d590909ee60fa07b3d045437ef44c8fd25b3022e19be->leave($__internal_c2cf700a1409d8941166d590909ee60fa07b3d045437ef44c8fd25b3022e19be_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:acl_button.html.twig";
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
/* {% if admin.isAclEnabled() and admin.hasRoute('acl') and admin.id(object) and admin.isGranted('MASTER', object)%}*/
/*     <a class="sonata-action-element" href="{{ admin.generateObjectUrl('acl', object) }}">*/
/*         <i class="fa fa-users"></i>*/
/*         {{ 'link_action_acl'|trans({}, 'SonataAdminBundle') }}</a>*/
/* {% endif %}*/
/* */
