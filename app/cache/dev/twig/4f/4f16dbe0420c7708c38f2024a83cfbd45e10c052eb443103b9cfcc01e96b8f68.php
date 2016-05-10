<?php

/* SonataAdminBundle:CRUD:action.html.twig */
class __TwigTemplate_daee82c31db80ebacddf74fe11a794e7e84f8267420fcb3d08ea31ac73f48c12 extends Twig_Template
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
        $__internal_070d77d03c7a153f197f6a6c31a9d5a9b4d4034cce20c0537d1c8d0cbf1b5278 = $this->env->getExtension("native_profiler");
        $__internal_070d77d03c7a153f197f6a6c31a9d5a9b4d4034cce20c0537d1c8d0cbf1b5278->enter($__internal_070d77d03c7a153f197f6a6c31a9d5a9b4d4034cce20c0537d1c8d0cbf1b5278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_070d77d03c7a153f197f6a6c31a9d5a9b4d4034cce20c0537d1c8d0cbf1b5278->leave($__internal_070d77d03c7a153f197f6a6c31a9d5a9b4d4034cce20c0537d1c8d0cbf1b5278_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_f233e4c42416426dcf26949c150a125002cd45c059c21c534cf761db6de7e1e1 = $this->env->getExtension("native_profiler");
        $__internal_f233e4c42416426dcf26949c150a125002cd45c059c21c534cf761db6de7e1e1->enter($__internal_f233e4c42416426dcf26949c150a125002cd45c059c21c534cf761db6de7e1e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:action.html.twig", 15)->display($context);
        
        $__internal_f233e4c42416426dcf26949c150a125002cd45c059c21c534cf761db6de7e1e1->leave($__internal_f233e4c42416426dcf26949c150a125002cd45c059c21c534cf761db6de7e1e1_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_24306d0997d754e106da7f4a0ebffd81a562876088c925ab9f3fb34949e91184 = $this->env->getExtension("native_profiler");
        $__internal_24306d0997d754e106da7f4a0ebffd81a562876088c925ab9f3fb34949e91184->enter($__internal_24306d0997d754e106da7f4a0ebffd81a562876088c925ab9f3fb34949e91184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_24306d0997d754e106da7f4a0ebffd81a562876088c925ab9f3fb34949e91184->leave($__internal_24306d0997d754e106da7f4a0ebffd81a562876088c925ab9f3fb34949e91184_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_65987c2581348e565d56e39828e7d1918c32f6b48b06c52f83c3be59866ecc97 = $this->env->getExtension("native_profiler");
        $__internal_65987c2581348e565d56e39828e7d1918c32f6b48b06c52f83c3be59866ecc97->enter($__internal_65987c2581348e565d56e39828e7d1918c32f6b48b06c52f83c3be59866ecc97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_65987c2581348e565d56e39828e7d1918c32f6b48b06c52f83c3be59866ecc97->leave($__internal_65987c2581348e565d56e39828e7d1918c32f6b48b06c52f83c3be59866ecc97_prof);

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
