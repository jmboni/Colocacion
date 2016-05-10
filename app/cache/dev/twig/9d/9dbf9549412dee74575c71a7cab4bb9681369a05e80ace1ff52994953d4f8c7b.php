<?php

/* SonataAdminBundle:CRUD:list__batch.html.twig */
class __TwigTemplate_e2ea982a7eac7deec270f888458001ee03650c01277f258b4740c9e336e473cb extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__batch.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a4011730856e156b2f7a0d37aa444aab5f5b1540153f614236dedb910253c19a = $this->env->getExtension("native_profiler");
        $__internal_a4011730856e156b2f7a0d37aa444aab5f5b1540153f614236dedb910253c19a->enter($__internal_a4011730856e156b2f7a0d37aa444aab5f5b1540153f614236dedb910253c19a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4011730856e156b2f7a0d37aa444aab5f5b1540153f614236dedb910253c19a->leave($__internal_a4011730856e156b2f7a0d37aa444aab5f5b1540153f614236dedb910253c19a_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_ebf82d7b1f68764dd340c84faa436c572ba4ff0cd9b2bc4bac96fbae5548b26d = $this->env->getExtension("native_profiler");
        $__internal_ebf82d7b1f68764dd340c84faa436c572ba4ff0cd9b2bc4bac96fbae5548b26d->enter($__internal_ebf82d7b1f68764dd340c84faa436c572ba4ff0cd9b2bc4bac96fbae5548b26d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_ebf82d7b1f68764dd340c84faa436c572ba4ff0cd9b2bc4bac96fbae5548b26d->leave($__internal_ebf82d7b1f68764dd340c84faa436c572ba4ff0cd9b2bc4bac96fbae5548b26d_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__batch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
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
/*     <input type="checkbox" name="idx[]" value="{{ admin.id(object) }}">*/
/* {% endblock %}*/
/* */
