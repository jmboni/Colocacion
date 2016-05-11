<?php

/* SonataAdminBundle:CRUD:list.html.twig */
class __TwigTemplate_e20a8b554db01fd9bffa9d6e736d8c9c229a871d1971515092f23e429692e7ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "SonataAdminBundle:CRUD:list.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0c2edd2686a0238093af0ecf6349b851ec3fc1359f0a7d354ee64243f5ddbb05 = $this->env->getExtension("native_profiler");
        $__internal_0c2edd2686a0238093af0ecf6349b851ec3fc1359f0a7d354ee64243f5ddbb05->enter($__internal_0c2edd2686a0238093af0ecf6349b851ec3fc1359f0a7d354ee64243f5ddbb05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c2edd2686a0238093af0ecf6349b851ec3fc1359f0a7d354ee64243f5ddbb05->leave($__internal_0c2edd2686a0238093af0ecf6349b851ec3fc1359f0a7d354ee64243f5ddbb05_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_list.html.twig' %}*/
/* */
