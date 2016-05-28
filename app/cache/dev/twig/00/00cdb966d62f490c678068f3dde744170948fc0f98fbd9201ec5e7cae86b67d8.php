<?php

/* SonataAdminBundle:CRUD:show_compare.html.twig */
class __TwigTemplate_037d571bded5cdc40c44c9dbe71949be0cf70f8aab7bb91e51984ef71e255749 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_compare.html.twig", "SonataAdminBundle:CRUD:show_compare.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_compare.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cdfeaafc776883fbea85dea339b34c24ca0d48c0e241d7a26f32a224f0e71e35 = $this->env->getExtension("native_profiler");
        $__internal_cdfeaafc776883fbea85dea339b34c24ca0d48c0e241d7a26f32a224f0e71e35->enter($__internal_cdfeaafc776883fbea85dea339b34c24ca0d48c0e241d7a26f32a224f0e71e35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_compare.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cdfeaafc776883fbea85dea339b34c24ca0d48c0e241d7a26f32a224f0e71e35->leave($__internal_cdfeaafc776883fbea85dea339b34c24ca0d48c0e241d7a26f32a224f0e71e35_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_compare.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_show_compare.html.twig' %}*/
/* */
