<?php

/* SonataAdminBundle:CRUD:base_edit.html.twig */
class __TwigTemplate_66cafde2c0be8bc57cf4893748a0be97a39104807eb9b4ecfb5e416dce3232db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $_trait_0 = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 32);
        // line 32
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."SonataAdminBundle:CRUD:base_edit_form.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        if (!isset($_trait_0_blocks["form"])) {
            throw new Twig_Error_Runtime(sprintf('Block "form" is not defined in trait "SonataAdminBundle:CRUD:base_edit_form.html.twig".'));
        }

        $_trait_0_blocks["parentForm"] = $_trait_0_blocks["form"]; unset($_trait_0_blocks["form"]);

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'title' => array($this, 'block_title'),
                'navbar_title' => array($this, 'block_navbar_title'),
                'actions' => array($this, 'block_actions'),
                'tab_menu' => array($this, 'block_tab_menu'),
                'form' => array($this, 'block_form'),
            )
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_edit.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dfb0cda9f21cf5fe18a2b731e54709dbfa5d4d978553fe8469bfaae0a8ffbba8 = $this->env->getExtension("native_profiler");
        $__internal_dfb0cda9f21cf5fe18a2b731e54709dbfa5d4d978553fe8469bfaae0a8ffbba8->enter($__internal_dfb0cda9f21cf5fe18a2b731e54709dbfa5d4d978553fe8469bfaae0a8ffbba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        // line 33
        $context["form_helper"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form_macro.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 33);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dfb0cda9f21cf5fe18a2b731e54709dbfa5d4d978553fe8469bfaae0a8ffbba8->leave($__internal_dfb0cda9f21cf5fe18a2b731e54709dbfa5d4d978553fe8469bfaae0a8ffbba8_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_d8b74ffd9c135171e06f95ca142232d5edfddecae2591045c4d993606938f024 = $this->env->getExtension("native_profiler");
        $__internal_d8b74ffd9c135171e06f95ca142232d5edfddecae2591045c4d993606938f024->enter($__internal_d8b74ffd9c135171e06f95ca142232d5edfddecae2591045c4d993606938f024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 15
        echo "    ";
        if ( !(null === $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_edit", array("%name%" => twig_truncate_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "toString", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), 15)), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        } else {
            // line 18
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_create", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
        
        $__internal_d8b74ffd9c135171e06f95ca142232d5edfddecae2591045c4d993606938f024->leave($__internal_d8b74ffd9c135171e06f95ca142232d5edfddecae2591045c4d993606938f024_prof);

    }

    // line 22
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_3901c656c19f6a0191c2c1b60875bf2a4c0e711c0a1713a4eb20a39e88549146 = $this->env->getExtension("native_profiler");
        $__internal_3901c656c19f6a0191c2c1b60875bf2a4c0e711c0a1713a4eb20a39e88549146->enter($__internal_3901c656c19f6a0191c2c1b60875bf2a4c0e711c0a1713a4eb20a39e88549146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 23
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_3901c656c19f6a0191c2c1b60875bf2a4c0e711c0a1713a4eb20a39e88549146->leave($__internal_3901c656c19f6a0191c2c1b60875bf2a4c0e711c0a1713a4eb20a39e88549146_prof);

    }

    // line 26
    public function block_actions($context, array $blocks = array())
    {
        $__internal_08e50b53177c2145458652ebce72e2c8af66b7eb2ee7dfaf3c4c17c1d8a695ce = $this->env->getExtension("native_profiler");
        $__internal_08e50b53177c2145458652ebce72e2c8af66b7eb2ee7dfaf3c4c17c1d8a695ce->enter($__internal_08e50b53177c2145458652ebce72e2c8af66b7eb2ee7dfaf3c4c17c1d8a695ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 27
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 27)->display($context);
        
        $__internal_08e50b53177c2145458652ebce72e2c8af66b7eb2ee7dfaf3c4c17c1d8a695ce->leave($__internal_08e50b53177c2145458652ebce72e2c8af66b7eb2ee7dfaf3c4c17c1d8a695ce_prof);

    }

    // line 30
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_3d73e559c568fb5b554b04b2ddcbe9142dfab4f9acb771adf5fa0e1fbf0fa117 = $this->env->getExtension("native_profiler");
        $__internal_3d73e559c568fb5b554b04b2ddcbe9142dfab4f9acb771adf5fa0e1fbf0fa117->enter($__internal_3d73e559c568fb5b554b04b2ddcbe9142dfab4f9acb771adf5fa0e1fbf0fa117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_3d73e559c568fb5b554b04b2ddcbe9142dfab4f9acb771adf5fa0e1fbf0fa117->leave($__internal_3d73e559c568fb5b554b04b2ddcbe9142dfab4f9acb771adf5fa0e1fbf0fa117_prof);

    }

    // line 35
    public function block_form($context, array $blocks = array())
    {
        $__internal_81defaccebe45944ef80cc0f5c337c6fbcacbf1954232688e6aba1db0f44dae1 = $this->env->getExtension("native_profiler");
        $__internal_81defaccebe45944ef80cc0f5c337c6fbcacbf1954232688e6aba1db0f44dae1->enter($__internal_81defaccebe45944ef80cc0f5c337c6fbcacbf1954232688e6aba1db0f44dae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 36
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
        
        $__internal_81defaccebe45944ef80cc0f5c337c6fbcacbf1954232688e6aba1db0f44dae1->leave($__internal_81defaccebe45944ef80cc0f5c337c6fbcacbf1954232688e6aba1db0f44dae1_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 36,  126 => 35,  114 => 30,  106 => 27,  100 => 26,  90 => 23,  84 => 22,  73 => 18,  67 => 16,  64 => 15,  58 => 14,  51 => 12,  49 => 33,  40 => 12,  12 => 32,);
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
/* {% block title %}*/
/*     {% if admin.id(object) is not null %}*/
/*         {{ "title_edit"|trans({'%name%': admin.toString(object)|truncate(15) }, 'SonataAdminBundle') }}*/
/*     {% else %}*/
/*         {{ "title_create"|trans({}, 'SonataAdminBundle') }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block navbar_title %}*/
/*     {{ block('title') }}*/
/* {% endblock %}*/
/* */
/* {% block actions %}*/
/*     {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}*/
/* {% endblock %}*/
/* */
/* {% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}{% endblock %}*/
/* */
/* {% use 'SonataAdminBundle:CRUD:base_edit_form.html.twig' with form as parentForm %}*/
/* {% import "SonataAdminBundle:CRUD:base_edit_form_macro.html.twig" as form_helper %}*/
/* */
/* {% block form %}*/
/*     {{ block('parentForm') }}*/
/* {% endblock %}*/
/* */
