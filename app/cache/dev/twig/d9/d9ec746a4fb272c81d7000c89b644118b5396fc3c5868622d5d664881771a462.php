<?php

/* SonataAdminBundle:Pager:results.html.twig */
class __TwigTemplate_769ce01ba12f10d3c083ea0b8e88f1af8248f047295afdbb95517d5af7529b3a extends Twig_Template
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
        $__internal_76f0feb16539771cf67d54725d81fa884a4674adc7a8ba2fe76bc45791593aeb = $this->env->getExtension("native_profiler");
        $__internal_76f0feb16539771cf67d54725d81fa884a4674adc7a8ba2fe76bc45791593aeb->enter($__internal_76f0feb16539771cf67d54725d81fa884a4674adc7a8ba2fe76bc45791593aeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76f0feb16539771cf67d54725d81fa884a4674adc7a8ba2fe76bc45791593aeb->leave($__internal_76f0feb16539771cf67d54725d81fa884a4674adc7a8ba2fe76bc45791593aeb_prof);

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
