<?php

/* SonataAdminBundle:Pager:results.html.twig */
class __TwigTemplate_d21eb136a578b7ddc6f547f5f2ec31cc0e0002802e77129b1a8e09768f3e2cd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_results.html.twig", "SonataAdminBundle:Pager:results.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_364f90e24f9848c9741864b1e4662bc455672d3a526bb55aaa4b763c8f6e943b = $this->env->getExtension("native_profiler");
        $__internal_364f90e24f9848c9741864b1e4662bc455672d3a526bb55aaa4b763c8f6e943b->enter($__internal_364f90e24f9848c9741864b1e4662bc455672d3a526bb55aaa4b763c8f6e943b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_364f90e24f9848c9741864b1e4662bc455672d3a526bb55aaa4b763c8f6e943b->leave($__internal_364f90e24f9848c9741864b1e4662bc455672d3a526bb55aaa4b763c8f6e943b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:results.html.twig";
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
/* {% extends 'SonataAdminBundle:Pager:base_results.html.twig' %}*/
/* */
