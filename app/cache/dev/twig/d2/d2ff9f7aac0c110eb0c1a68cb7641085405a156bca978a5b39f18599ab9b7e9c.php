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
        $__internal_7a1fc11ceda0ccc071e68e8473e76d55fdf72ae3f63b10a09ce6a30392807f01 = $this->env->getExtension("native_profiler");
        $__internal_7a1fc11ceda0ccc071e68e8473e76d55fdf72ae3f63b10a09ce6a30392807f01->enter($__internal_7a1fc11ceda0ccc071e68e8473e76d55fdf72ae3f63b10a09ce6a30392807f01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a1fc11ceda0ccc071e68e8473e76d55fdf72ae3f63b10a09ce6a30392807f01->leave($__internal_7a1fc11ceda0ccc071e68e8473e76d55fdf72ae3f63b10a09ce6a30392807f01_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_79fc046bab7e89136e1abad0120106094e89b534ed7ea760905d4dd55ca7a7fc = $this->env->getExtension("native_profiler");
        $__internal_79fc046bab7e89136e1abad0120106094e89b534ed7ea760905d4dd55ca7a7fc->enter($__internal_79fc046bab7e89136e1abad0120106094e89b534ed7ea760905d4dd55ca7a7fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 15)->display($context);
        
        $__internal_79fc046bab7e89136e1abad0120106094e89b534ed7ea760905d4dd55ca7a7fc->leave($__internal_79fc046bab7e89136e1abad0120106094e89b534ed7ea760905d4dd55ca7a7fc_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_27f0f933fa9fa4fe81b44dbc0d34bca6671b5ad7c59c46806faa5dbe47099777 = $this->env->getExtension("native_profiler");
        $__internal_27f0f933fa9fa4fe81b44dbc0d34bca6671b5ad7c59c46806faa5dbe47099777->enter($__internal_27f0f933fa9fa4fe81b44dbc0d34bca6671b5ad7c59c46806faa5dbe47099777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_27f0f933fa9fa4fe81b44dbc0d34bca6671b5ad7c59c46806faa5dbe47099777->leave($__internal_27f0f933fa9fa4fe81b44dbc0d34bca6671b5ad7c59c46806faa5dbe47099777_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_6d3265fa25c76df3cab3de5beb698bdfd9073c24c9dc5ab04e0a6befdd70e82d = $this->env->getExtension("native_profiler");
        $__internal_6d3265fa25c76df3cab3de5beb698bdfd9073c24c9dc5ab04e0a6befdd70e82d->enter($__internal_6d3265fa25c76df3cab3de5beb698bdfd9073c24c9dc5ab04e0a6befdd70e82d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        // line 22
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclRolesForm"]) ? $context["aclRolesForm"] : $this->getContext($context, "aclRolesForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_role", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_6d3265fa25c76df3cab3de5beb698bdfd9073c24c9dc5ab04e0a6befdd70e82d->leave($__internal_6d3265fa25c76df3cab3de5beb698bdfd9073c24c9dc5ab04e0a6befdd70e82d_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_cfd4720b3ae6faaa9efc6a5d016b7da795c8577e81e8b04496dd21780010e1fc = $this->env->getExtension("native_profiler");
        $__internal_cfd4720b3ae6faaa9efc6a5d016b7da795c8577e81e8b04496dd21780010e1fc->enter($__internal_cfd4720b3ae6faaa9efc6a5d016b7da795c8577e81e8b04496dd21780010e1fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        // line 25
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclUsersForm"]) ? $context["aclUsersForm"] : $this->getContext($context, "aclUsersForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_username", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_cfd4720b3ae6faaa9efc6a5d016b7da795c8577e81e8b04496dd21780010e1fc->leave($__internal_cfd4720b3ae6faaa9efc6a5d016b7da795c8577e81e8b04496dd21780010e1fc_prof);

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
