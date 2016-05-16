<?php

/* SonataAdminBundle:CRUD:list_array.html.twig */
class __TwigTemplate_a0037010212364a8b10fc0c90594773a08e0527fd81d21ef5cfc65e57ca06851 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a061e05c583afc242b49d9b5df98d0c8c3ff78ba8df7413f709ad1cfdd1140ae = $this->env->getExtension("native_profiler");
        $__internal_a061e05c583afc242b49d9b5df98d0c8c3ff78ba8df7413f709ad1cfdd1140ae->enter($__internal_a061e05c583afc242b49d9b5df98d0c8c3ff78ba8df7413f709ad1cfdd1140ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a061e05c583afc242b49d9b5df98d0c8c3ff78ba8df7413f709ad1cfdd1140ae->leave($__internal_a061e05c583afc242b49d9b5df98d0c8c3ff78ba8df7413f709ad1cfdd1140ae_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_06b02c999fe7cff4f27bdaea937551a95f1186fff5ad05145ecc3c02e5bc4f6c = $this->env->getExtension("native_profiler");
        $__internal_06b02c999fe7cff4f27bdaea937551a95f1186fff5ad05145ecc3c02e5bc4f6c->enter($__internal_06b02c999fe7cff4f27bdaea937551a95f1186fff5ad05145ecc3c02e5bc4f6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            // line 16
            echo "        [";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo " => ";
            echo twig_escape_filter($this->env, $context["val"], "html", null, true);
            echo "]
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_06b02c999fe7cff4f27bdaea937551a95f1186fff5ad05145ecc3c02e5bc4f6c->leave($__internal_06b02c999fe7cff4f27bdaea937551a95f1186fff5ad05145ecc3c02e5bc4f6c_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/*     {% for key, val in value %}*/
/*         [{{ key }} => {{ val }}]*/
/*     {% endfor %}*/
/* {% endblock %}*/
/* */
