<?php

/* SonataAdminBundle:CRUD:acl.html.twig */
class __TwigTemplate_46c91d36a1856dfe1d8cdf22e9f7446e1d1926f473c1f30878186fc67ca2d673 extends Twig_Template
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
        $__internal_f18272e5b3fa82c7422fc38c154f0ede085cd9ade242c6eb3e72818487aab03a = $this->env->getExtension("native_profiler");
        $__internal_f18272e5b3fa82c7422fc38c154f0ede085cd9ade242c6eb3e72818487aab03a->enter($__internal_f18272e5b3fa82c7422fc38c154f0ede085cd9ade242c6eb3e72818487aab03a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:acl.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f18272e5b3fa82c7422fc38c154f0ede085cd9ade242c6eb3e72818487aab03a->leave($__internal_f18272e5b3fa82c7422fc38c154f0ede085cd9ade242c6eb3e72818487aab03a_prof);

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
