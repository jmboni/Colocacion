<?php

/* SonataAdminBundle:CRUD:base_acl.html.twig */
class __TwigTemplate_09ff5bcd5746e685f6656054911e113a3dc5fb4a88a51c23a45a9f27e2b7630a extends Twig_Template
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
        $__internal_2bf764c3ea211f0b2b2fffa227850af22c619942b3703bd2047bafe5d4392731 = $this->env->getExtension("native_profiler");
        $__internal_2bf764c3ea211f0b2b2fffa227850af22c619942b3703bd2047bafe5d4392731->enter($__internal_2bf764c3ea211f0b2b2fffa227850af22c619942b3703bd2047bafe5d4392731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2bf764c3ea211f0b2b2fffa227850af22c619942b3703bd2047bafe5d4392731->leave($__internal_2bf764c3ea211f0b2b2fffa227850af22c619942b3703bd2047bafe5d4392731_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_4fd1cfdb9989c34256a0f04c6ab31b47b31e910e3110a3e96dc40a80cce73711 = $this->env->getExtension("native_profiler");
        $__internal_4fd1cfdb9989c34256a0f04c6ab31b47b31e910e3110a3e96dc40a80cce73711->enter($__internal_4fd1cfdb9989c34256a0f04c6ab31b47b31e910e3110a3e96dc40a80cce73711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 15)->display($context);
        
        $__internal_4fd1cfdb9989c34256a0f04c6ab31b47b31e910e3110a3e96dc40a80cce73711->leave($__internal_4fd1cfdb9989c34256a0f04c6ab31b47b31e910e3110a3e96dc40a80cce73711_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_25b340d4efcfd621935692b123a381ae2163250940c09989c8c6501af85a24e2 = $this->env->getExtension("native_profiler");
        $__internal_25b340d4efcfd621935692b123a381ae2163250940c09989c8c6501af85a24e2->enter($__internal_25b340d4efcfd621935692b123a381ae2163250940c09989c8c6501af85a24e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_25b340d4efcfd621935692b123a381ae2163250940c09989c8c6501af85a24e2->leave($__internal_25b340d4efcfd621935692b123a381ae2163250940c09989c8c6501af85a24e2_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_58abef69449dede4ea7d66246cc7eac7a52fc33f5af98ce224ae38e45f4638e3 = $this->env->getExtension("native_profiler");
        $__internal_58abef69449dede4ea7d66246cc7eac7a52fc33f5af98ce224ae38e45f4638e3->enter($__internal_58abef69449dede4ea7d66246cc7eac7a52fc33f5af98ce224ae38e45f4638e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        // line 22
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclRolesForm"]) ? $context["aclRolesForm"] : $this->getContext($context, "aclRolesForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_role", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_58abef69449dede4ea7d66246cc7eac7a52fc33f5af98ce224ae38e45f4638e3->leave($__internal_58abef69449dede4ea7d66246cc7eac7a52fc33f5af98ce224ae38e45f4638e3_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_faf8ae7cfc472d9f1785c8970c9f7602167b2a2f41203612472f6f9fbb9e8aba = $this->env->getExtension("native_profiler");
        $__internal_faf8ae7cfc472d9f1785c8970c9f7602167b2a2f41203612472f6f9fbb9e8aba->enter($__internal_faf8ae7cfc472d9f1785c8970c9f7602167b2a2f41203612472f6f9fbb9e8aba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        // line 25
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclUsersForm"]) ? $context["aclUsersForm"] : $this->getContext($context, "aclUsersForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_username", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_faf8ae7cfc472d9f1785c8970c9f7602167b2a2f41203612472f6f9fbb9e8aba->leave($__internal_faf8ae7cfc472d9f1785c8970c9f7602167b2a2f41203612472f6f9fbb9e8aba_prof);

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
