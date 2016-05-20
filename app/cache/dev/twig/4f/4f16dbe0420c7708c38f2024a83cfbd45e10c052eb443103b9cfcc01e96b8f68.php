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
        $__internal_da4145b3492814df26051805d46957215246c0c77cf11da615133141d86f9765 = $this->env->getExtension("native_profiler");
        $__internal_da4145b3492814df26051805d46957215246c0c77cf11da615133141d86f9765->enter($__internal_da4145b3492814df26051805d46957215246c0c77cf11da615133141d86f9765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da4145b3492814df26051805d46957215246c0c77cf11da615133141d86f9765->leave($__internal_da4145b3492814df26051805d46957215246c0c77cf11da615133141d86f9765_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_3697123a8768d5c0f26cf791673bd3d38a51ca767896e05f48f485cdadf23797 = $this->env->getExtension("native_profiler");
        $__internal_3697123a8768d5c0f26cf791673bd3d38a51ca767896e05f48f485cdadf23797->enter($__internal_3697123a8768d5c0f26cf791673bd3d38a51ca767896e05f48f485cdadf23797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:action.html.twig", 15)->display($context);
        
        $__internal_3697123a8768d5c0f26cf791673bd3d38a51ca767896e05f48f485cdadf23797->leave($__internal_3697123a8768d5c0f26cf791673bd3d38a51ca767896e05f48f485cdadf23797_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_1d28c40329852af6831cb32e90729fce0e52d0fac28edc16357522061fb218a7 = $this->env->getExtension("native_profiler");
        $__internal_1d28c40329852af6831cb32e90729fce0e52d0fac28edc16357522061fb218a7->enter($__internal_1d28c40329852af6831cb32e90729fce0e52d0fac28edc16357522061fb218a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_1d28c40329852af6831cb32e90729fce0e52d0fac28edc16357522061fb218a7->leave($__internal_1d28c40329852af6831cb32e90729fce0e52d0fac28edc16357522061fb218a7_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_17b08d2b32b9f570f2f7e14a92fd68d926080619645be507c4cc694433ad822c = $this->env->getExtension("native_profiler");
        $__internal_17b08d2b32b9f570f2f7e14a92fd68d926080619645be507c4cc694433ad822c->enter($__internal_17b08d2b32b9f570f2f7e14a92fd68d926080619645be507c4cc694433ad822c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_17b08d2b32b9f570f2f7e14a92fd68d926080619645be507c4cc694433ad822c->leave($__internal_17b08d2b32b9f570f2f7e14a92fd68d926080619645be507c4cc694433ad822c_prof);

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
