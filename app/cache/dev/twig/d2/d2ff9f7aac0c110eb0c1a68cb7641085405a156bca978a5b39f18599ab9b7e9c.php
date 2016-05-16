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
        $__internal_5a1cb7b992e6662eca27f6be7881de5ce8cd6af0755a3f2327e0ecf93e5a6d2b = $this->env->getExtension("native_profiler");
        $__internal_5a1cb7b992e6662eca27f6be7881de5ce8cd6af0755a3f2327e0ecf93e5a6d2b->enter($__internal_5a1cb7b992e6662eca27f6be7881de5ce8cd6af0755a3f2327e0ecf93e5a6d2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a1cb7b992e6662eca27f6be7881de5ce8cd6af0755a3f2327e0ecf93e5a6d2b->leave($__internal_5a1cb7b992e6662eca27f6be7881de5ce8cd6af0755a3f2327e0ecf93e5a6d2b_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_addb978ee937b5da8bf537e0a00a4f6ffa47db85e4dadedfddec888028e0ff41 = $this->env->getExtension("native_profiler");
        $__internal_addb978ee937b5da8bf537e0a00a4f6ffa47db85e4dadedfddec888028e0ff41->enter($__internal_addb978ee937b5da8bf537e0a00a4f6ffa47db85e4dadedfddec888028e0ff41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 15)->display($context);
        
        $__internal_addb978ee937b5da8bf537e0a00a4f6ffa47db85e4dadedfddec888028e0ff41->leave($__internal_addb978ee937b5da8bf537e0a00a4f6ffa47db85e4dadedfddec888028e0ff41_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_dc70918c895098158cbf2f1d50559175b8138d56a03c95b6d63e4d4e74cbd3b8 = $this->env->getExtension("native_profiler");
        $__internal_dc70918c895098158cbf2f1d50559175b8138d56a03c95b6d63e4d4e74cbd3b8->enter($__internal_dc70918c895098158cbf2f1d50559175b8138d56a03c95b6d63e4d4e74cbd3b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_dc70918c895098158cbf2f1d50559175b8138d56a03c95b6d63e4d4e74cbd3b8->leave($__internal_dc70918c895098158cbf2f1d50559175b8138d56a03c95b6d63e4d4e74cbd3b8_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_b36798254c1fa85c724335f55500b77bb884abc195d1351f835f97d28c14b894 = $this->env->getExtension("native_profiler");
        $__internal_b36798254c1fa85c724335f55500b77bb884abc195d1351f835f97d28c14b894->enter($__internal_b36798254c1fa85c724335f55500b77bb884abc195d1351f835f97d28c14b894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        // line 22
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclRolesForm"]) ? $context["aclRolesForm"] : $this->getContext($context, "aclRolesForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_role", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_b36798254c1fa85c724335f55500b77bb884abc195d1351f835f97d28c14b894->leave($__internal_b36798254c1fa85c724335f55500b77bb884abc195d1351f835f97d28c14b894_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_6f25c6f686773f742557a163a6470b4922e7ecc369cfa78ef21b2097e35c811c = $this->env->getExtension("native_profiler");
        $__internal_6f25c6f686773f742557a163a6470b4922e7ecc369cfa78ef21b2097e35c811c->enter($__internal_6f25c6f686773f742557a163a6470b4922e7ecc369cfa78ef21b2097e35c811c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        // line 25
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclUsersForm"]) ? $context["aclUsersForm"] : $this->getContext($context, "aclUsersForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_username", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_6f25c6f686773f742557a163a6470b4922e7ecc369cfa78ef21b2097e35c811c->leave($__internal_6f25c6f686773f742557a163a6470b4922e7ecc369cfa78ef21b2097e35c811c_prof);

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
