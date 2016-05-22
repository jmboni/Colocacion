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
        $__internal_c6d7064d9dddd4c0dd8a6fee33ea5d8b28793d89f39bff24fa91df9f7249541b = $this->env->getExtension("native_profiler");
        $__internal_c6d7064d9dddd4c0dd8a6fee33ea5d8b28793d89f39bff24fa91df9f7249541b->enter($__internal_c6d7064d9dddd4c0dd8a6fee33ea5d8b28793d89f39bff24fa91df9f7249541b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        // line 33
        $context["form_helper"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form_macro.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 33);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6d7064d9dddd4c0dd8a6fee33ea5d8b28793d89f39bff24fa91df9f7249541b->leave($__internal_c6d7064d9dddd4c0dd8a6fee33ea5d8b28793d89f39bff24fa91df9f7249541b_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_f525a034cbeb0111e6b9c06e91a8337bd8da7f3b1fec5342d614ec2c5f0a78f5 = $this->env->getExtension("native_profiler");
        $__internal_f525a034cbeb0111e6b9c06e91a8337bd8da7f3b1fec5342d614ec2c5f0a78f5->enter($__internal_f525a034cbeb0111e6b9c06e91a8337bd8da7f3b1fec5342d614ec2c5f0a78f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

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
        
        $__internal_f525a034cbeb0111e6b9c06e91a8337bd8da7f3b1fec5342d614ec2c5f0a78f5->leave($__internal_f525a034cbeb0111e6b9c06e91a8337bd8da7f3b1fec5342d614ec2c5f0a78f5_prof);

    }

    // line 22
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_af6cbb43b788bb2aafb82fe2fc7850c519350a6f3fd6b59716fdd6fd1cfb26f5 = $this->env->getExtension("native_profiler");
        $__internal_af6cbb43b788bb2aafb82fe2fc7850c519350a6f3fd6b59716fdd6fd1cfb26f5->enter($__internal_af6cbb43b788bb2aafb82fe2fc7850c519350a6f3fd6b59716fdd6fd1cfb26f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 23
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_af6cbb43b788bb2aafb82fe2fc7850c519350a6f3fd6b59716fdd6fd1cfb26f5->leave($__internal_af6cbb43b788bb2aafb82fe2fc7850c519350a6f3fd6b59716fdd6fd1cfb26f5_prof);

    }

    // line 26
    public function block_actions($context, array $blocks = array())
    {
        $__internal_d44d8b080168ce551d226a8b4c1365624f89eb67c1babfd98fb6814541cace6e = $this->env->getExtension("native_profiler");
        $__internal_d44d8b080168ce551d226a8b4c1365624f89eb67c1babfd98fb6814541cace6e->enter($__internal_d44d8b080168ce551d226a8b4c1365624f89eb67c1babfd98fb6814541cace6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 27
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 27)->display($context);
        
        $__internal_d44d8b080168ce551d226a8b4c1365624f89eb67c1babfd98fb6814541cace6e->leave($__internal_d44d8b080168ce551d226a8b4c1365624f89eb67c1babfd98fb6814541cace6e_prof);

    }

    // line 30
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_e3040b305eba3c3af31a28250d772257420633dbfc51e91b63567a0943507bbf = $this->env->getExtension("native_profiler");
        $__internal_e3040b305eba3c3af31a28250d772257420633dbfc51e91b63567a0943507bbf->enter($__internal_e3040b305eba3c3af31a28250d772257420633dbfc51e91b63567a0943507bbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_e3040b305eba3c3af31a28250d772257420633dbfc51e91b63567a0943507bbf->leave($__internal_e3040b305eba3c3af31a28250d772257420633dbfc51e91b63567a0943507bbf_prof);

    }

    // line 35
    public function block_form($context, array $blocks = array())
    {
        $__internal_b4c56ad7169fc459bdbc33562ef01a9bdb19484c4b515e7d1cf4a3431bcc8fce = $this->env->getExtension("native_profiler");
        $__internal_b4c56ad7169fc459bdbc33562ef01a9bdb19484c4b515e7d1cf4a3431bcc8fce->enter($__internal_b4c56ad7169fc459bdbc33562ef01a9bdb19484c4b515e7d1cf4a3431bcc8fce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 36
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
        
        $__internal_b4c56ad7169fc459bdbc33562ef01a9bdb19484c4b515e7d1cf4a3431bcc8fce->leave($__internal_b4c56ad7169fc459bdbc33562ef01a9bdb19484c4b515e7d1cf4a3431bcc8fce_prof);

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
