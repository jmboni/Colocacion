<?php

/* SonataAdminBundle:CRUD:base_acl.html.twig */
class __TwigTemplate_fe33f4aa317a5097f41b1e41be15e340169277af10b86cad75e97bb671f4b245 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'form' => array($this, 'block_form'),
            'form_acl_roles' => array($this, 'block_form_acl_roles'),
            'form_acl_users' => array($this, 'block_form_acl_users'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_acl.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_72ce4456ff034553fa8a3336ad9dc0157b82de64b97c74457369b799a4ae798f = $this->env->getExtension("native_profiler");
        $__internal_72ce4456ff034553fa8a3336ad9dc0157b82de64b97c74457369b799a4ae798f->enter($__internal_72ce4456ff034553fa8a3336ad9dc0157b82de64b97c74457369b799a4ae798f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72ce4456ff034553fa8a3336ad9dc0157b82de64b97c74457369b799a4ae798f->leave($__internal_72ce4456ff034553fa8a3336ad9dc0157b82de64b97c74457369b799a4ae798f_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_548914952d802c32913625bce47b11edc3d1fceec63f53b12678e6afdff06331 = $this->env->getExtension("native_profiler");
        $__internal_548914952d802c32913625bce47b11edc3d1fceec63f53b12678e6afdff06331->enter($__internal_548914952d802c32913625bce47b11edc3d1fceec63f53b12678e6afdff06331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 15)->display($context);
        
        $__internal_548914952d802c32913625bce47b11edc3d1fceec63f53b12678e6afdff06331->leave($__internal_548914952d802c32913625bce47b11edc3d1fceec63f53b12678e6afdff06331_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_81d56972eaea2133a04ed1713af168cbf92085e3506c027a404ac20e4be86d67 = $this->env->getExtension("native_profiler");
        $__internal_81d56972eaea2133a04ed1713af168cbf92085e3506c027a404ac20e4be86d67->enter($__internal_81d56972eaea2133a04ed1713af168cbf92085e3506c027a404ac20e4be86d67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_81d56972eaea2133a04ed1713af168cbf92085e3506c027a404ac20e4be86d67->leave($__internal_81d56972eaea2133a04ed1713af168cbf92085e3506c027a404ac20e4be86d67_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_0b2ccc315b4bc230a1f59387f39ba2269539ab60aef6e45710b60efdb370ae28 = $this->env->getExtension("native_profiler");
        $__internal_0b2ccc315b4bc230a1f59387f39ba2269539ab60aef6e45710b60efdb370ae28->enter($__internal_0b2ccc315b4bc230a1f59387f39ba2269539ab60aef6e45710b60efdb370ae28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        // line 22
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclRolesForm"]) ? $context["aclRolesForm"] : $this->getContext($context, "aclRolesForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_role", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_0b2ccc315b4bc230a1f59387f39ba2269539ab60aef6e45710b60efdb370ae28->leave($__internal_0b2ccc315b4bc230a1f59387f39ba2269539ab60aef6e45710b60efdb370ae28_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_c3bb170dec5a27800d706aa47b1378a4cf0abdcd7176ca56a3287a82c0f8ab9f = $this->env->getExtension("native_profiler");
        $__internal_c3bb170dec5a27800d706aa47b1378a4cf0abdcd7176ca56a3287a82c0f8ab9f->enter($__internal_c3bb170dec5a27800d706aa47b1378a4cf0abdcd7176ca56a3287a82c0f8ab9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        // line 25
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclUsersForm"]) ? $context["aclUsersForm"] : $this->getContext($context, "aclUsersForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_username", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_c3bb170dec5a27800d706aa47b1378a4cf0abdcd7176ca56a3287a82c0f8ab9f->leave($__internal_c3bb170dec5a27800d706aa47b1378a4cf0abdcd7176ca56a3287a82c0f8ab9f_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 25,  86 => 24,  76 => 22,  70 => 21,  62 => 24,  59 => 21,  53 => 20,  45 => 15,  39 => 14,  32 => 12,  30 => 18,  21 => 12,);
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
/* {% extends base_template %}*/
/* */
/* {% block actions %}*/
/*     {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}*/
/* {% endblock %}*/
/* */
/* {% import 'SonataAdminBundle:CRUD:base_acl_macro.html.twig' as acl %}*/
/* */
/* {% block form %}*/
/*     {% block form_acl_roles %}*/
/*         {{ acl.render_form(aclRolesForm, permissions, 'td_role', admin, sonata_admin.adminPool, object) }}*/
/*     {% endblock %}*/
/*     {% block form_acl_users %}*/
/*         {{ acl.render_form(aclUsersForm, permissions, 'td_username', admin, sonata_admin.adminPool, object) }}*/
/*     {% endblock %}*/
/* {% endblock %}*/
/* */
