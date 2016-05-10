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
        $__internal_e89cd4c5aff458cbd058e7602beed07f5a08f9be620cd72e805fce97be7040c7 = $this->env->getExtension("native_profiler");
        $__internal_e89cd4c5aff458cbd058e7602beed07f5a08f9be620cd72e805fce97be7040c7->enter($__internal_e89cd4c5aff458cbd058e7602beed07f5a08f9be620cd72e805fce97be7040c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        // line 33
        $context["form_helper"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form_macro.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 33);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e89cd4c5aff458cbd058e7602beed07f5a08f9be620cd72e805fce97be7040c7->leave($__internal_e89cd4c5aff458cbd058e7602beed07f5a08f9be620cd72e805fce97be7040c7_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_fbb6d39452acf26781515af8421b8cabe49b6a836a97d222c493b134f8e9cfb3 = $this->env->getExtension("native_profiler");
        $__internal_fbb6d39452acf26781515af8421b8cabe49b6a836a97d222c493b134f8e9cfb3->enter($__internal_fbb6d39452acf26781515af8421b8cabe49b6a836a97d222c493b134f8e9cfb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

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
        
        $__internal_fbb6d39452acf26781515af8421b8cabe49b6a836a97d222c493b134f8e9cfb3->leave($__internal_fbb6d39452acf26781515af8421b8cabe49b6a836a97d222c493b134f8e9cfb3_prof);

    }

    // line 22
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_5608f16e3d8635a7319cbb87f41fde658498d02e21af84a74f973ad14becd291 = $this->env->getExtension("native_profiler");
        $__internal_5608f16e3d8635a7319cbb87f41fde658498d02e21af84a74f973ad14becd291->enter($__internal_5608f16e3d8635a7319cbb87f41fde658498d02e21af84a74f973ad14becd291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 23
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_5608f16e3d8635a7319cbb87f41fde658498d02e21af84a74f973ad14becd291->leave($__internal_5608f16e3d8635a7319cbb87f41fde658498d02e21af84a74f973ad14becd291_prof);

    }

    // line 26
    public function block_actions($context, array $blocks = array())
    {
        $__internal_2998fa0dd17943f900c275226a7efa9abd268a6f7960810814582346c5c380aa = $this->env->getExtension("native_profiler");
        $__internal_2998fa0dd17943f900c275226a7efa9abd268a6f7960810814582346c5c380aa->enter($__internal_2998fa0dd17943f900c275226a7efa9abd268a6f7960810814582346c5c380aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 27
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 27)->display($context);
        
        $__internal_2998fa0dd17943f900c275226a7efa9abd268a6f7960810814582346c5c380aa->leave($__internal_2998fa0dd17943f900c275226a7efa9abd268a6f7960810814582346c5c380aa_prof);

    }

    // line 30
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_840dcffe8facc748568d4c011b9dae0a838c8938b7da968a302a3b21a564b218 = $this->env->getExtension("native_profiler");
        $__internal_840dcffe8facc748568d4c011b9dae0a838c8938b7da968a302a3b21a564b218->enter($__internal_840dcffe8facc748568d4c011b9dae0a838c8938b7da968a302a3b21a564b218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_840dcffe8facc748568d4c011b9dae0a838c8938b7da968a302a3b21a564b218->leave($__internal_840dcffe8facc748568d4c011b9dae0a838c8938b7da968a302a3b21a564b218_prof);

    }

    // line 35
    public function block_form($context, array $blocks = array())
    {
        $__internal_903f3c4c9c6cedf174ca8326d61ed140d4bf8030a0999865b63874255d08f38e = $this->env->getExtension("native_profiler");
        $__internal_903f3c4c9c6cedf174ca8326d61ed140d4bf8030a0999865b63874255d08f38e->enter($__internal_903f3c4c9c6cedf174ca8326d61ed140d4bf8030a0999865b63874255d08f38e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 36
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
        
        $__internal_903f3c4c9c6cedf174ca8326d61ed140d4bf8030a0999865b63874255d08f38e->leave($__internal_903f3c4c9c6cedf174ca8326d61ed140d4bf8030a0999865b63874255d08f38e_prof);

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
