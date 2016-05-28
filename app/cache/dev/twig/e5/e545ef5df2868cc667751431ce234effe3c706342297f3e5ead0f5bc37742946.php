<?php

/* SonataAdminBundle:CRUD:list_string.html.twig */
class __TwigTemplate_5bcaee6553b562ac2b3167ab1c69616e0b2bf50f009a2f8f9287c4449db8b18f extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8d6f97c1cb3445d876364a7b18071426d619e3dec8200cc7845bd12179a903bb = $this->env->getExtension("native_profiler");
        $__internal_8d6f97c1cb3445d876364a7b18071426d619e3dec8200cc7845bd12179a903bb->enter($__internal_8d6f97c1cb3445d876364a7b18071426d619e3dec8200cc7845bd12179a903bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d6f97c1cb3445d876364a7b18071426d619e3dec8200cc7845bd12179a903bb->leave($__internal_8d6f97c1cb3445d876364a7b18071426d619e3dec8200cc7845bd12179a903bb_prof);

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
