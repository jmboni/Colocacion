<?php

/* SonataAdminBundle:CRUD:acl.html.twig */
class __TwigTemplate_e3d6000b03f42c5bd53c87256be2e0af32b362498daf6fd4728f3ff08caba324 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl.html.twig", "SonataAdminBundle:CRUD:acl.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3127918702275b1a3330198350fb373e8b2472526ab8f3cb90177482c50ac8b3 = $this->env->getExtension("native_profiler");
        $__internal_3127918702275b1a3330198350fb373e8b2472526ab8f3cb90177482c50ac8b3->enter($__internal_3127918702275b1a3330198350fb373e8b2472526ab8f3cb90177482c50ac8b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:acl.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3127918702275b1a3330198350fb373e8b2472526ab8f3cb90177482c50ac8b3->leave($__internal_3127918702275b1a3330198350fb373e8b2472526ab8f3cb90177482c50ac8b3_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:acl.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_acl.html.twig' %}*/
/* */
