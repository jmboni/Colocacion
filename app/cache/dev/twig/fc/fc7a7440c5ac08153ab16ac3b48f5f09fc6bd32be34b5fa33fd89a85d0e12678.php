<?php

/* SonataAdminBundle:CRUD:history.html.twig */
class __TwigTemplate_60283ec7a4fcda4969a50a0e918107c4bf9cb40173e2a68972255f9102f5d508 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_history.html.twig", "SonataAdminBundle:CRUD:history.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_history.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d85487c3ef2ffff1a7b5770bef27001ea9871398d76b2f78203903c322c28c22 = $this->env->getExtension("native_profiler");
        $__internal_d85487c3ef2ffff1a7b5770bef27001ea9871398d76b2f78203903c322c28c22->enter($__internal_d85487c3ef2ffff1a7b5770bef27001ea9871398d76b2f78203903c322c28c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d85487c3ef2ffff1a7b5770bef27001ea9871398d76b2f78203903c322c28c22->leave($__internal_d85487c3ef2ffff1a7b5770bef27001ea9871398d76b2f78203903c322c28c22_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:history.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
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
/* {% extends 'SonataAdminBundle:CRUD:base_history.html.twig' %}*/
/* */
