<?php

/* SonataAdminBundle:CRUD:list_string.html.twig */
class __TwigTemplate_ed41bf3c5c24873f41ca71e8a61d7cd5b513961ec3b0831dd78012ba3bb408ea extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_62a47ab88f1ce9746e1797f5137200c12692e3177bfd91f3cd4be83593c98c9f = $this->env->getExtension("native_profiler");
        $__internal_62a47ab88f1ce9746e1797f5137200c12692e3177bfd91f3cd4be83593c98c9f->enter($__internal_62a47ab88f1ce9746e1797f5137200c12692e3177bfd91f3cd4be83593c98c9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62a47ab88f1ce9746e1797f5137200c12692e3177bfd91f3cd4be83593c98c9f->leave($__internal_62a47ab88f1ce9746e1797f5137200c12692e3177bfd91f3cd4be83593c98c9f_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  9 => 12,);
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
/* {% extends admin.getTemplate('base_list_field') %}*/
/* */
