<?php

/* SonataAdminBundle:CRUD:edit_text.html.twig */
class __TwigTemplate_33aa139e5f32b5301c8f3f058e59becac18c938478a2e315ee2c1e52f418fca7 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6e69b83a3ae25f4ccda0f3e0ea610206a567a0abed32b87d1df70e95804322e2 = $this->env->getExtension("native_profiler");
        $__internal_6e69b83a3ae25f4ccda0f3e0ea610206a567a0abed32b87d1df70e95804322e2->enter($__internal_6e69b83a3ae25f4ccda0f3e0ea610206a567a0abed32b87d1df70e95804322e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e69b83a3ae25f4ccda0f3e0ea610206a567a0abed32b87d1df70e95804322e2->leave($__internal_6e69b83a3ae25f4ccda0f3e0ea610206a567a0abed32b87d1df70e95804322e2_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_262e99e0a67a09f02a16aa7c6b4324364c476f35fc144f2c46f7de054645534e = $this->env->getExtension("native_profiler");
        $__internal_262e99e0a67a09f02a16aa7c6b4324364c476f35fc144f2c46f7de054645534e->enter($__internal_262e99e0a67a09f02a16aa7c6b4324364c476f35fc144f2c46f7de054645534e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_262e99e0a67a09f02a16aa7c6b4324364c476f35fc144f2c46f7de054645534e->leave($__internal_262e99e0a67a09f02a16aa7c6b4324364c476f35fc144f2c46f7de054645534e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_text.html.twig";
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
