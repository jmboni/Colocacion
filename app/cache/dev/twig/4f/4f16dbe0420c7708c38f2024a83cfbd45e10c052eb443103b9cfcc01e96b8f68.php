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
        $__internal_ce1f87f66dfd13f01cdc4a854276d58c9ec50d56754f5076fc01e21ef86c7e22 = $this->env->getExtension("native_profiler");
        $__internal_ce1f87f66dfd13f01cdc4a854276d58c9ec50d56754f5076fc01e21ef86c7e22->enter($__internal_ce1f87f66dfd13f01cdc4a854276d58c9ec50d56754f5076fc01e21ef86c7e22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce1f87f66dfd13f01cdc4a854276d58c9ec50d56754f5076fc01e21ef86c7e22->leave($__internal_ce1f87f66dfd13f01cdc4a854276d58c9ec50d56754f5076fc01e21ef86c7e22_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_ef8df4d05c01c7c7e92939e880fddf97dd49e7463def6ac050839d39a569f118 = $this->env->getExtension("native_profiler");
        $__internal_ef8df4d05c01c7c7e92939e880fddf97dd49e7463def6ac050839d39a569f118->enter($__internal_ef8df4d05c01c7c7e92939e880fddf97dd49e7463def6ac050839d39a569f118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:action.html.twig", 15)->display($context);
        
        $__internal_ef8df4d05c01c7c7e92939e880fddf97dd49e7463def6ac050839d39a569f118->leave($__internal_ef8df4d05c01c7c7e92939e880fddf97dd49e7463def6ac050839d39a569f118_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_d9ee3731c46caf67a2675d984bcb378a8e1bc9dc0f0fadc211470daa39ab96cc = $this->env->getExtension("native_profiler");
        $__internal_d9ee3731c46caf67a2675d984bcb378a8e1bc9dc0f0fadc211470daa39ab96cc->enter($__internal_d9ee3731c46caf67a2675d984bcb378a8e1bc9dc0f0fadc211470daa39ab96cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_d9ee3731c46caf67a2675d984bcb378a8e1bc9dc0f0fadc211470daa39ab96cc->leave($__internal_d9ee3731c46caf67a2675d984bcb378a8e1bc9dc0f0fadc211470daa39ab96cc_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_bc974c9f5e87fbb804c313f93395a627361c98e468f308a45503bf4d5af847dd = $this->env->getExtension("native_profiler");
        $__internal_bc974c9f5e87fbb804c313f93395a627361c98e468f308a45503bf4d5af847dd->enter($__internal_bc974c9f5e87fbb804c313f93395a627361c98e468f308a45503bf4d5af847dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_bc974c9f5e87fbb804c313f93395a627361c98e468f308a45503bf4d5af847dd->leave($__internal_bc974c9f5e87fbb804c313f93395a627361c98e468f308a45503bf4d5af847dd_prof);

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
