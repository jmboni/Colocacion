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
        $__internal_d4f57433e372b91f34a2e3cba5a5880fcf50d7c61e696322af476e43c3f8c835 = $this->env->getExtension("native_profiler");
        $__internal_d4f57433e372b91f34a2e3cba5a5880fcf50d7c61e696322af476e43c3f8c835->enter($__internal_d4f57433e372b91f34a2e3cba5a5880fcf50d7c61e696322af476e43c3f8c835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4f57433e372b91f34a2e3cba5a5880fcf50d7c61e696322af476e43c3f8c835->leave($__internal_d4f57433e372b91f34a2e3cba5a5880fcf50d7c61e696322af476e43c3f8c835_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_fb520935caa2ba177385714f5f14ff1f06c00fad6f24058573ab6e3531660928 = $this->env->getExtension("native_profiler");
        $__internal_fb520935caa2ba177385714f5f14ff1f06c00fad6f24058573ab6e3531660928->enter($__internal_fb520935caa2ba177385714f5f14ff1f06c00fad6f24058573ab6e3531660928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_fb520935caa2ba177385714f5f14ff1f06c00fad6f24058573ab6e3531660928->leave($__internal_fb520935caa2ba177385714f5f14ff1f06c00fad6f24058573ab6e3531660928_prof);

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
