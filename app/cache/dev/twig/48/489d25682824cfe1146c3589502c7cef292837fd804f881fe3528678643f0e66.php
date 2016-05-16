<?php

/* SonataAdminBundle:CRUD:list_percent.html.twig */
class __TwigTemplate_8966225536e06960095efa712f195a4d2d51df98ea714ab925224a9237791352 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_percent.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eae21db10f052f421b169188905f0a0c4f2994b1ce149df550f5b94c67845e8e = $this->env->getExtension("native_profiler");
        $__internal_eae21db10f052f421b169188905f0a0c4f2994b1ce149df550f5b94c67845e8e->enter($__internal_eae21db10f052f421b169188905f0a0c4f2994b1ce149df550f5b94c67845e8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_percent.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eae21db10f052f421b169188905f0a0c4f2994b1ce149df550f5b94c67845e8e->leave($__internal_eae21db10f052f421b169188905f0a0c4f2994b1ce149df550f5b94c67845e8e_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_0c300a625e3327057b749578fa8a72f814df4acf40ac2921f1fff50ad11b69cb = $this->env->getExtension("native_profiler");
        $__internal_0c300a625e3327057b749578fa8a72f814df4acf40ac2921f1fff50ad11b69cb->enter($__internal_0c300a625e3327057b749578fa8a72f814df4acf40ac2921f1fff50ad11b69cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_0c300a625e3327057b749578fa8a72f814df4acf40ac2921f1fff50ad11b69cb->leave($__internal_0c300a625e3327057b749578fa8a72f814df4acf40ac2921f1fff50ad11b69cb_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_percent.html.twig";
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
/* {% extends admin.getTemplate('base_list_field') %}*/
/* */
/* {% block field %}*/
/*     {% set value = value * 100 %}*/
/*     {{ value }} %*/
/* {% endblock %}*/
/* */
