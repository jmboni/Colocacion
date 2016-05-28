<?php

/* SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_one.html.twig */
class __TwigTemplate_24161a6aa9e8f2fe69a43ac16ab6d60703603fba8113cd67974351773e8cc00d extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_one.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_681a31cfc6f195fb14c0c0899202aec2c488ddbf1845ee632ceb121c7ed7cafd = $this->env->getExtension("native_profiler");
        $__internal_681a31cfc6f195fb14c0c0899202aec2c488ddbf1845ee632ceb121c7ed7cafd->enter($__internal_681a31cfc6f195fb14c0c0899202aec2c488ddbf1845ee632ceb121c7ed7cafd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_one.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_681a31cfc6f195fb14c0c0899202aec2c488ddbf1845ee632ceb121c7ed7cafd->leave($__internal_681a31cfc6f195fb14c0c0899202aec2c488ddbf1845ee632ceb121c7ed7cafd_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_856061201fe49700e60a939ab8b182d1f9db314e5b393d2c507a4cb928d0e53c = $this->env->getExtension("native_profiler");
        $__internal_856061201fe49700e60a939ab8b182d1f9db314e5b393d2c507a4cb928d0e53c->enter($__internal_856061201fe49700e60a939ab8b182d1f9db314e5b393d2c507a4cb928d0e53c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["route_name"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "name", array());
        // line 16
        echo "    ";
        $context["route_role"] = twig_upper_filter($this->env, (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")));
        // line 17
        echo "    ";
        if (((($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "hasAssociationAdmin", array()) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "id", array(0 => (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "method")) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "isGranted", array(0 => (isset($context["route_role"]) ? $context["route_role"] : $this->getContext($context, "route_role")), 1 => (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "method")) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "hasRoute", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name"))), "method"))) {
            // line 18
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "generateObjectUrl", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")), 1 => (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
            echo "</a>
    ";
        } else {
            // line 20
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
            echo "
    ";
        }
        
        $__internal_856061201fe49700e60a939ab8b182d1f9db314e5b393d2c507a4cb928d0e53c->leave($__internal_856061201fe49700e60a939ab8b182d1f9db314e5b393d2c507a4cb928d0e53c_prof);

    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 20,  48 => 18,  45 => 17,  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/*     {% set route_name = field_description.options.route.name %}*/
/*     {% set route_role = route_name | upper %}*/
/*     {% if field_description.hasAssociationAdmin and field_description.associationadmin.id(value) and field_description.associationadmin.isGranted(route_role, value) and field_description.associationadmin.hasRoute(route_name) %}*/
/*         <a href="{{ field_description.associationadmin.generateObjectUrl(route_name, value, field_description.options.route.parameters) }}">{{ value|render_relation_element(field_description) }}</a>*/
/*     {% else %}*/
/*         {{ value|render_relation_element(field_description) }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
