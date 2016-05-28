<?php

/* SonataAdminBundle:CRUD:edit_file.html.twig */
class __TwigTemplate_fa8c811f7db3c55d6458725c3ca0b261db5c71dc4848176ddba50cc997b0b03e extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_file.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d58f1f891d57b50542b555354aeb16a6b3a3efd0b9c2bd0e18cf429f44be2651 = $this->env->getExtension("native_profiler");
        $__internal_d58f1f891d57b50542b555354aeb16a6b3a3efd0b9c2bd0e18cf429f44be2651->enter($__internal_d58f1f891d57b50542b555354aeb16a6b3a3efd0b9c2bd0e18cf429f44be2651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_file.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d58f1f891d57b50542b555354aeb16a6b3a3efd0b9c2bd0e18cf429f44be2651->leave($__internal_d58f1f891d57b50542b555354aeb16a6b3a3efd0b9c2bd0e18cf429f44be2651_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_0442a86befc07bf497f4e18a2abf44c94d6abf288c3f894bee13a0602f21f99f = $this->env->getExtension("native_profiler");
        $__internal_0442a86befc07bf497f4e18a2abf44c94d6abf288c3f894bee13a0602f21f99f->enter($__internal_0442a86befc07bf497f4e18a2abf44c94d6abf288c3f894bee13a0602f21f99f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_0442a86befc07bf497f4e18a2abf44c94d6abf288c3f894bee13a0602f21f99f->leave($__internal_0442a86befc07bf497f4e18a2abf44c94d6abf288c3f894bee13a0602f21f99f_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_file.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 14,  18 => 12,);
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
/* {% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}*/
/* */
