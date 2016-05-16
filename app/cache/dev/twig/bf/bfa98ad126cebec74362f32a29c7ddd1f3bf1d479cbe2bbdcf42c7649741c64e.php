<?php

/* SonataAdminBundle:CRUD:edit.html.twig */
class __TwigTemplate_bdfc63c1da5e9715ae72ea17202d10a9b6871e03627fe189f7708cda61849440 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit.html.twig", "SonataAdminBundle:CRUD:edit.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_842bd95dc663d442ccbeadafec1cf07f0a9b2d75542c2e777de9e660ce445ece = $this->env->getExtension("native_profiler");
        $__internal_842bd95dc663d442ccbeadafec1cf07f0a9b2d75542c2e777de9e660ce445ece->enter($__internal_842bd95dc663d442ccbeadafec1cf07f0a9b2d75542c2e777de9e660ce445ece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_842bd95dc663d442ccbeadafec1cf07f0a9b2d75542c2e777de9e660ce445ece->leave($__internal_842bd95dc663d442ccbeadafec1cf07f0a9b2d75542c2e777de9e660ce445ece_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_edit.html.twig' %}*/
/* */
