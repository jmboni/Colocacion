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
        $__internal_225eb25283b7f879e1809b9530072d01a7892e2c90c4d8305a49b4158217f544 = $this->env->getExtension("native_profiler");
        $__internal_225eb25283b7f879e1809b9530072d01a7892e2c90c4d8305a49b4158217f544->enter($__internal_225eb25283b7f879e1809b9530072d01a7892e2c90c4d8305a49b4158217f544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_225eb25283b7f879e1809b9530072d01a7892e2c90c4d8305a49b4158217f544->leave($__internal_225eb25283b7f879e1809b9530072d01a7892e2c90c4d8305a49b4158217f544_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_d054b85817e2d65a87f8c58f97c2e38a1933b99775bf28a8076d0636a3e28a80 = $this->env->getExtension("native_profiler");
        $__internal_d054b85817e2d65a87f8c58f97c2e38a1933b99775bf28a8076d0636a3e28a80->enter($__internal_d054b85817e2d65a87f8c58f97c2e38a1933b99775bf28a8076d0636a3e28a80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 15)->display($context);
        
        $__internal_d054b85817e2d65a87f8c58f97c2e38a1933b99775bf28a8076d0636a3e28a80->leave($__internal_d054b85817e2d65a87f8c58f97c2e38a1933b99775bf28a8076d0636a3e28a80_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_223164ec0033f320a67db9077da2da809be899cf7c6842ec7940c7d5b536b251 = $this->env->getExtension("native_profiler");
        $__internal_223164ec0033f320a67db9077da2da809be899cf7c6842ec7940c7d5b536b251->enter($__internal_223164ec0033f320a67db9077da2da809be899cf7c6842ec7940c7d5b536b251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_223164ec0033f320a67db9077da2da809be899cf7c6842ec7940c7d5b536b251->leave($__internal_223164ec0033f320a67db9077da2da809be899cf7c6842ec7940c7d5b536b251_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_8c345f98f0f345795b534351ec986bf4635e700b070c7cbfada77835977a0793 = $this->env->getExtension("native_profiler");
        $__internal_8c345f98f0f345795b534351ec986bf4635e700b070c7cbfada77835977a0793->enter($__internal_8c345f98f0f345795b534351ec986bf4635e700b070c7cbfada77835977a0793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        // line 22
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclRolesForm"]) ? $context["aclRolesForm"] : $this->getContext($context, "aclRolesForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_role", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_8c345f98f0f345795b534351ec986bf4635e700b070c7cbfada77835977a0793->leave($__internal_8c345f98f0f345795b534351ec986bf4635e700b070c7cbfada77835977a0793_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_991ce92147c4284e309210d1419b7414b09f20684b737f0bef01ea370f704c33 = $this->env->getExtension("native_profiler");
        $__internal_991ce92147c4284e309210d1419b7414b09f20684b737f0bef01ea370f704c33->enter($__internal_991ce92147c4284e309210d1419b7414b09f20684b737f0bef01ea370f704c33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        // line 25
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclUsersForm"]) ? $context["aclUsersForm"] : $this->getContext($context, "aclUsersForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_username", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_991ce92147c4284e309210d1419b7414b09f20684b737f0bef01ea370f704c33->leave($__internal_991ce92147c4284e309210d1419b7414b09f20684b737f0bef01ea370f704c33_prof);

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
