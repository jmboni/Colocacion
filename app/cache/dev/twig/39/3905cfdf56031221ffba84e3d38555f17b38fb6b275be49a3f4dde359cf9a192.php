<?php

/* SonataAdminBundle:CRUD:edit_array.html.twig */
class __TwigTemplate_649b2cfcab510c37c9ce55c6c8f65d1a1697ff2058be01320335262617ec7096 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c7c3e1bd152347b9b7672361442f21e5689d79339bbd1123c403381637e5efc7 = $this->env->getExtension("native_profiler");
        $__internal_c7c3e1bd152347b9b7672361442f21e5689d79339bbd1123c403381637e5efc7->enter($__internal_c7c3e1bd152347b9b7672361442f21e5689d79339bbd1123c403381637e5efc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7c3e1bd152347b9b7672361442f21e5689d79339bbd1123c403381637e5efc7->leave($__internal_c7c3e1bd152347b9b7672361442f21e5689d79339bbd1123c403381637e5efc7_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_1d202b275e98a301101d0c8f2cf4f576c98bb20166119b91404228306787cf59 = $this->env->getExtension("native_profiler");
        $__internal_1d202b275e98a301101d0c8f2cf4f576c98bb20166119b91404228306787cf59->enter($__internal_1d202b275e98a301101d0c8f2cf4f576c98bb20166119b91404228306787cf59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <span class=\"edit\">
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        echo "
    </span>
";
        
        $__internal_1d202b275e98a301101d0c8f2cf4f576c98bb20166119b91404228306787cf59->leave($__internal_1d202b275e98a301101d0c8f2cf4f576c98bb20166119b91404228306787cf59_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_array.html.twig";
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
/* {% extends base_template %}*/
/* */
/* {% block field %}*/
/*     <span class="edit">*/
/*         {{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}*/
/*     </span>*/
/* {% endblock %}*/
/* */
