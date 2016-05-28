<?php

/* SonataAdminBundle:CRUD:action.html.twig */
class __TwigTemplate_a766fff20be69a82782586b52c54336c4b5839053688f655adffe818076b5b56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e92b25c8ba0848c3eb9d1d36e63770ac0ac3950dcddb1c540d6e2ef325f153bd = $this->env->getExtension("native_profiler");
        $__internal_e92b25c8ba0848c3eb9d1d36e63770ac0ac3950dcddb1c540d6e2ef325f153bd->enter($__internal_e92b25c8ba0848c3eb9d1d36e63770ac0ac3950dcddb1c540d6e2ef325f153bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e92b25c8ba0848c3eb9d1d36e63770ac0ac3950dcddb1c540d6e2ef325f153bd->leave($__internal_e92b25c8ba0848c3eb9d1d36e63770ac0ac3950dcddb1c540d6e2ef325f153bd_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_51014114118a5f57b978d10d1d1a5be8a007bdfcd1298af7d5946f1310f4f888 = $this->env->getExtension("native_profiler");
        $__internal_51014114118a5f57b978d10d1d1a5be8a007bdfcd1298af7d5946f1310f4f888->enter($__internal_51014114118a5f57b978d10d1d1a5be8a007bdfcd1298af7d5946f1310f4f888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:action.html.twig", 15)->display($context);
        
        $__internal_51014114118a5f57b978d10d1d1a5be8a007bdfcd1298af7d5946f1310f4f888->leave($__internal_51014114118a5f57b978d10d1d1a5be8a007bdfcd1298af7d5946f1310f4f888_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_20f21986acfab0cc98d70da209be9ebf7aef3c42f5667d99b461ddfeaa9f710f = $this->env->getExtension("native_profiler");
        $__internal_20f21986acfab0cc98d70da209be9ebf7aef3c42f5667d99b461ddfeaa9f710f->enter($__internal_20f21986acfab0cc98d70da209be9ebf7aef3c42f5667d99b461ddfeaa9f710f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_20f21986acfab0cc98d70da209be9ebf7aef3c42f5667d99b461ddfeaa9f710f->leave($__internal_20f21986acfab0cc98d70da209be9ebf7aef3c42f5667d99b461ddfeaa9f710f_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_e277791c901752ecc36d33364c2c1bf32d7b8e0a33aa3f4a1e09a841ad272091 = $this->env->getExtension("native_profiler");
        $__internal_e277791c901752ecc36d33364c2c1bf32d7b8e0a33aa3f4a1e09a841ad272091->enter($__internal_e277791c901752ecc36d33364c2c1bf32d7b8e0a33aa3f4a1e09a841ad272091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_e277791c901752ecc36d33364c2c1bf32d7b8e0a33aa3f4a1e09a841ad272091->leave($__internal_e277791c901752ecc36d33364c2c1bf32d7b8e0a33aa3f4a1e09a841ad272091_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 25,  69 => 24,  58 => 20,  55 => 19,  49 => 18,  41 => 15,  35 => 14,  20 => 12,);
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
/* {% block tab_menu %}*/
/*     {% if action is defined %}*/
/*         {{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* */
/*     Redefine the content block in your action template*/
/* */
/* {% endblock %}*/
/* */
