<?php

/* SonataAdminBundle:Core:create_button.html.twig */
class __TwigTemplate_3f6dc056838ea1fb0ffbbcf5dca112ca77465c20bb4a8c8c125bcb0e43e02f35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 15
        $this->parent = $this->loadTemplate("SonataAdminBundle:Button:create_button.html.twig", "SonataAdminBundle:Core:create_button.html.twig", 15);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Button:create_button.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e33d4bbc0276547af7badb4838e8e959bd9201f71cd466fd465b4cf39bbb8c33 = $this->env->getExtension("native_profiler");
        $__internal_e33d4bbc0276547af7badb4838e8e959bd9201f71cd466fd465b4cf39bbb8c33->enter($__internal_e33d4bbc0276547af7badb4838e8e959bd9201f71cd466fd465b4cf39bbb8c33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:create_button.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e33d4bbc0276547af7badb4838e8e959bd9201f71cd466fd465b4cf39bbb8c33->leave($__internal_e33d4bbc0276547af7badb4838e8e959bd9201f71cd466fd465b4cf39bbb8c33_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:create_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 15,);
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
/* {# DEPRECATED #}*/
/* {# This file is kept here for backward compatibility - Rather use SonataAdminBundle:Button:create_button.html.twig #}*/
/* */
/* {% extends 'SonataAdminBundle:Button:create_button.html.twig' %}*/
/* */