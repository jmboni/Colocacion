<?php

/* SonataAdminBundle:Pager:links.html.twig */
class __TwigTemplate_8bcad442a85f9cdddeea978ad751fa957b83028d543f2f33ee53218ac3f2f5fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_links.html.twig", "SonataAdminBundle:Pager:links.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_links.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_93fd3a768d67fc7fb9fa4fd771c9e0803614433e9ca8c68da062adac4cb895a8 = $this->env->getExtension("native_profiler");
        $__internal_93fd3a768d67fc7fb9fa4fd771c9e0803614433e9ca8c68da062adac4cb895a8->enter($__internal_93fd3a768d67fc7fb9fa4fd771c9e0803614433e9ca8c68da062adac4cb895a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:links.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93fd3a768d67fc7fb9fa4fd771c9e0803614433e9ca8c68da062adac4cb895a8->leave($__internal_93fd3a768d67fc7fb9fa4fd771c9e0803614433e9ca8c68da062adac4cb895a8_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:links.html.twig";
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
/* {% extends 'SonataAdminBundle:Pager:base_links.html.twig' %}*/
/* */
