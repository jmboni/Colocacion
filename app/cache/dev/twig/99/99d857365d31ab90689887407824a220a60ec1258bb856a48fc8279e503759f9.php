<?php

/* SonataAdminBundle:CRUD:list__select.html.twig */
class __TwigTemplate_f54851f6b935e2bed33ce6b6d84ab897376b6d853624db927bf67ab7dee4178e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__select.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_49e317c01cf0ada9c9a1e63dd09fbaef2949508b07b4bba9fb031348227c158b = $this->env->getExtension("native_profiler");
        $__internal_49e317c01cf0ada9c9a1e63dd09fbaef2949508b07b4bba9fb031348227c158b->enter($__internal_49e317c01cf0ada9c9a1e63dd09fbaef2949508b07b4bba9fb031348227c158b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__select.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49e317c01cf0ada9c9a1e63dd09fbaef2949508b07b4bba9fb031348227c158b->leave($__internal_49e317c01cf0ada9c9a1e63dd09fbaef2949508b07b4bba9fb031348227c158b_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_e5e8b41f5790350a5417c9b08c41f2226d767d87f927439f53dc4f577439212b = $this->env->getExtension("native_profiler");
        $__internal_e5e8b41f5790350a5417c9b08c41f2226d767d87f927439f53dc4f577439212b->enter($__internal_e5e8b41f5790350a5417c9b08c41f2226d767d87f927439f53dc4f577439212b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <a class=\"btn btn-default\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "edit", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
        <i class=\"fa fa-arrow-right\"></i>
        ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("list_select", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_e5e8b41f5790350a5417c9b08c41f2226d767d87f927439f53dc4f577439212b->leave($__internal_e5e8b41f5790350a5417c9b08c41f2226d767d87f927439f53dc4f577439212b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 17,  39 => 15,  33 => 14,  18 => 12,);
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
/* {% block field %}*/
/*     <a class="btn btn-default" href="{{ admin.generateObjectUrl('edit', object) }}">*/
/*         <i class="fa fa-arrow-right"></i>*/
/*         {{ 'list_select'|trans({}, 'SonataAdminBundle') }}*/
/*     </a>*/
/* {% endblock %}*/
/* */
