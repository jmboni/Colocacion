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
        $__internal_f1c042b2614e46bef7ad7abfcf34774bfe84966d61735d9ecd14f66f3db4d58e = $this->env->getExtension("native_profiler");
        $__internal_f1c042b2614e46bef7ad7abfcf34774bfe84966d61735d9ecd14f66f3db4d58e->enter($__internal_f1c042b2614e46bef7ad7abfcf34774bfe84966d61735d9ecd14f66f3db4d58e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1c042b2614e46bef7ad7abfcf34774bfe84966d61735d9ecd14f66f3db4d58e->leave($__internal_f1c042b2614e46bef7ad7abfcf34774bfe84966d61735d9ecd14f66f3db4d58e_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_d8301c6825790a67bf11f5f81a0810caacfe5c7903aa0a4ffbc35fcf71dcbe47 = $this->env->getExtension("native_profiler");
        $__internal_d8301c6825790a67bf11f5f81a0810caacfe5c7903aa0a4ffbc35fcf71dcbe47->enter($__internal_d8301c6825790a67bf11f5f81a0810caacfe5c7903aa0a4ffbc35fcf71dcbe47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:action.html.twig", 15)->display($context);
        
        $__internal_d8301c6825790a67bf11f5f81a0810caacfe5c7903aa0a4ffbc35fcf71dcbe47->leave($__internal_d8301c6825790a67bf11f5f81a0810caacfe5c7903aa0a4ffbc35fcf71dcbe47_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_bb50a8f8d8df218affacf0d434d9fe38cc92fd567af93eba32fdf51c62077cf7 = $this->env->getExtension("native_profiler");
        $__internal_bb50a8f8d8df218affacf0d434d9fe38cc92fd567af93eba32fdf51c62077cf7->enter($__internal_bb50a8f8d8df218affacf0d434d9fe38cc92fd567af93eba32fdf51c62077cf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_bb50a8f8d8df218affacf0d434d9fe38cc92fd567af93eba32fdf51c62077cf7->leave($__internal_bb50a8f8d8df218affacf0d434d9fe38cc92fd567af93eba32fdf51c62077cf7_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_9c590bfef6ece8756be4ae25256272c7deb99b856eccd36d2748cd79cb4052a7 = $this->env->getExtension("native_profiler");
        $__internal_9c590bfef6ece8756be4ae25256272c7deb99b856eccd36d2748cd79cb4052a7->enter($__internal_9c590bfef6ece8756be4ae25256272c7deb99b856eccd36d2748cd79cb4052a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_9c590bfef6ece8756be4ae25256272c7deb99b856eccd36d2748cd79cb4052a7->leave($__internal_9c590bfef6ece8756be4ae25256272c7deb99b856eccd36d2748cd79cb4052a7_prof);

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
