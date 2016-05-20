<?php

/* SonataAdminBundle:CRUD:list_currency.html.twig */
class __TwigTemplate_eb2e9df0a455afa406b6313727596faf91755598a787d9c8423d5fc611d676a6 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_currency.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8ef8704f4b5e214512efa72585d109e1d0dac02832ce38d0dcc7d5ed46ef907f = $this->env->getExtension("native_profiler");
        $__internal_8ef8704f4b5e214512efa72585d109e1d0dac02832ce38d0dcc7d5ed46ef907f->enter($__internal_8ef8704f4b5e214512efa72585d109e1d0dac02832ce38d0dcc7d5ed46ef907f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_currency.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ef8704f4b5e214512efa72585d109e1d0dac02832ce38d0dcc7d5ed46ef907f->leave($__internal_8ef8704f4b5e214512efa72585d109e1d0dac02832ce38d0dcc7d5ed46ef907f_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_e07567f160c3161c4b7b53bd72d96ed10c5ddad037309cc2f3e146733e3d1465 = $this->env->getExtension("native_profiler");
        $__internal_e07567f160c3161c4b7b53bd72d96ed10c5ddad037309cc2f3e146733e3d1465->enter($__internal_e07567f160c3161c4b7b53bd72d96ed10c5ddad037309cc2f3e146733e3d1465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ( !(null === (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_e07567f160c3161c4b7b53bd72d96ed10c5ddad037309cc2f3e146733e3d1465->leave($__internal_e07567f160c3161c4b7b53bd72d96ed10c5ddad037309cc2f3e146733e3d1465_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_currency.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/*     {% if value is not null %}*/
/*         {{ field_description.options.currency }} {{ value }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
