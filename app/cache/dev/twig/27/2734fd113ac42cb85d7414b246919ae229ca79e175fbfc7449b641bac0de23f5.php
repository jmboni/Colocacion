<?php

/* SonataAdminBundle:Pager:links.html.twig */
class __TwigTemplate_1c9c27c573e0ee18fece45dc018d4e8e7a3b36f8eea2520821a8a9ed5bb6ba6c extends Twig_Template
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
        $__internal_9a374dfb287a93d2b75dd2059eec1dceb71615889a306d370bfb3de7ef617ac3 = $this->env->getExtension("native_profiler");
        $__internal_9a374dfb287a93d2b75dd2059eec1dceb71615889a306d370bfb3de7ef617ac3->enter($__internal_9a374dfb287a93d2b75dd2059eec1dceb71615889a306d370bfb3de7ef617ac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:links.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a374dfb287a93d2b75dd2059eec1dceb71615889a306d370bfb3de7ef617ac3->leave($__internal_9a374dfb287a93d2b75dd2059eec1dceb71615889a306d370bfb3de7ef617ac3_prof);

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
