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
        $__internal_be0cb3bbcaa29cd69a9ad59843bb71f83e4d41c3586660865ac9930e3264169c = $this->env->getExtension("native_profiler");
        $__internal_be0cb3bbcaa29cd69a9ad59843bb71f83e4d41c3586660865ac9930e3264169c->enter($__internal_be0cb3bbcaa29cd69a9ad59843bb71f83e4d41c3586660865ac9930e3264169c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be0cb3bbcaa29cd69a9ad59843bb71f83e4d41c3586660865ac9930e3264169c->leave($__internal_be0cb3bbcaa29cd69a9ad59843bb71f83e4d41c3586660865ac9930e3264169c_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_2722289b37e873fa2bce6c9b8c701ff8697d35d258c8e11ef7143d7b44cef47e = $this->env->getExtension("native_profiler");
        $__internal_2722289b37e873fa2bce6c9b8c701ff8697d35d258c8e11ef7143d7b44cef47e->enter($__internal_2722289b37e873fa2bce6c9b8c701ff8697d35d258c8e11ef7143d7b44cef47e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <span class=\"edit\">
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        echo "
    </span>
";
        
        $__internal_2722289b37e873fa2bce6c9b8c701ff8697d35d258c8e11ef7143d7b44cef47e->leave($__internal_2722289b37e873fa2bce6c9b8c701ff8697d35d258c8e11ef7143d7b44cef47e_prof);

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
