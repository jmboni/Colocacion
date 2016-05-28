<?php

/* SonataAdminBundle:CRUD:list_array.html.twig */
class __TwigTemplate_c1e5a98d383addd262f03a382ed7c642c818be9820c6dfa6015cc99e614e1a2a extends Twig_Template
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
        $__internal_ac4a8e201a5994407153f189ec37b66b33fbcb770c1d50686d2791933e894e2b = $this->env->getExtension("native_profiler");
        $__internal_ac4a8e201a5994407153f189ec37b66b33fbcb770c1d50686d2791933e894e2b->enter($__internal_ac4a8e201a5994407153f189ec37b66b33fbcb770c1d50686d2791933e894e2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac4a8e201a5994407153f189ec37b66b33fbcb770c1d50686d2791933e894e2b->leave($__internal_ac4a8e201a5994407153f189ec37b66b33fbcb770c1d50686d2791933e894e2b_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_1169383ebad0c86dea8a8c45926da4a180e19be1d75e873eafc329e44fc96ae5 = $this->env->getExtension("native_profiler");
        $__internal_1169383ebad0c86dea8a8c45926da4a180e19be1d75e873eafc329e44fc96ae5->enter($__internal_1169383ebad0c86dea8a8c45926da4a180e19be1d75e873eafc329e44fc96ae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_1169383ebad0c86dea8a8c45926da4a180e19be1d75e873eafc329e44fc96ae5->leave($__internal_1169383ebad0c86dea8a8c45926da4a180e19be1d75e873eafc329e44fc96ae5_prof);

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
