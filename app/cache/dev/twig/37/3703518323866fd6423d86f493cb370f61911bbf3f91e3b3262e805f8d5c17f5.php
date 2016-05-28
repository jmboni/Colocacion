<?php

/* SonataAdminBundle:CRUD:list__batch.html.twig */
class __TwigTemplate_7e27b14f5a54211cb0751e467b8ff6161c3712ddf37572fac58568505d2108eb extends Twig_Template
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
        $__internal_1769d0d249d8486989560e1f37d66067d69d1fb4fceda5984a6d0ad67c32e04f = $this->env->getExtension("native_profiler");
        $__internal_1769d0d249d8486989560e1f37d66067d69d1fb4fceda5984a6d0ad67c32e04f->enter($__internal_1769d0d249d8486989560e1f37d66067d69d1fb4fceda5984a6d0ad67c32e04f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1769d0d249d8486989560e1f37d66067d69d1fb4fceda5984a6d0ad67c32e04f->leave($__internal_1769d0d249d8486989560e1f37d66067d69d1fb4fceda5984a6d0ad67c32e04f_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_6bb0856096d647ea4008659699b66e3808efe6527967a183675ac6c12d28b1d2 = $this->env->getExtension("native_profiler");
        $__internal_6bb0856096d647ea4008659699b66e3808efe6527967a183675ac6c12d28b1d2->enter($__internal_6bb0856096d647ea4008659699b66e3808efe6527967a183675ac6c12d28b1d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_6bb0856096d647ea4008659699b66e3808efe6527967a183675ac6c12d28b1d2->leave($__internal_6bb0856096d647ea4008659699b66e3808efe6527967a183675ac6c12d28b1d2_prof);

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
