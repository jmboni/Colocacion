<?php

/* SonataAdminBundle:CRUD:list__select.html.twig */
class __TwigTemplate_f54851f6b935e2bed33ce6b6d84ab897376b6d853624db927bf67ab7dee4178e extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__select.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_36efe80c765789f985c7e0dbf507d94218168ccd219d95fe371c39be71a31aeb = $this->env->getExtension("native_profiler");
        $__internal_36efe80c765789f985c7e0dbf507d94218168ccd219d95fe371c39be71a31aeb->enter($__internal_36efe80c765789f985c7e0dbf507d94218168ccd219d95fe371c39be71a31aeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__select.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36efe80c765789f985c7e0dbf507d94218168ccd219d95fe371c39be71a31aeb->leave($__internal_36efe80c765789f985c7e0dbf507d94218168ccd219d95fe371c39be71a31aeb_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_3f73a9ebd8ac0e4ed3b0d85efb7f660a90d2dfa8fbf3d800c7aded4b45d0fef7 = $this->env->getExtension("native_profiler");
        $__internal_3f73a9ebd8ac0e4ed3b0d85efb7f660a90d2dfa8fbf3d800c7aded4b45d0fef7->enter($__internal_3f73a9ebd8ac0e4ed3b0d85efb7f660a90d2dfa8fbf3d800c7aded4b45d0fef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <a class=\"btn btn-default\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "edit", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
        <i class=\"fa fa-arrow-right\"></i>
        ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("list_select", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_3f73a9ebd8ac0e4ed3b0d85efb7f660a90d2dfa8fbf3d800c7aded4b45d0fef7->leave($__internal_3f73a9ebd8ac0e4ed3b0d85efb7f660a90d2dfa8fbf3d800c7aded4b45d0fef7_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 17,  39 => 15,  33 => 14,  18 => 12,);
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
/*     <a class="btn btn-default" href="{{ admin.generateObjectUrl('edit', object) }}">*/
/*         <i class="fa fa-arrow-right"></i>*/
/*         {{ 'list_select'|trans({}, 'SonataAdminBundle') }}*/
/*     </a>*/
/* {% endblock %}*/
/* */
