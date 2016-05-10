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
        $__internal_05606175a8111aac78816c125c6fe45144b2fefb9d841c1fae2cb25492c4ddf0 = $this->env->getExtension("native_profiler");
        $__internal_05606175a8111aac78816c125c6fe45144b2fefb9d841c1fae2cb25492c4ddf0->enter($__internal_05606175a8111aac78816c125c6fe45144b2fefb9d841c1fae2cb25492c4ddf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_percent.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05606175a8111aac78816c125c6fe45144b2fefb9d841c1fae2cb25492c4ddf0->leave($__internal_05606175a8111aac78816c125c6fe45144b2fefb9d841c1fae2cb25492c4ddf0_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_89d5970222dd8c7db30caa91ee9ce5f85951e4ec921c94b681b66d42e4942187 = $this->env->getExtension("native_profiler");
        $__internal_89d5970222dd8c7db30caa91ee9ce5f85951e4ec921c94b681b66d42e4942187->enter($__internal_89d5970222dd8c7db30caa91ee9ce5f85951e4ec921c94b681b66d42e4942187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_89d5970222dd8c7db30caa91ee9ce5f85951e4ec921c94b681b66d42e4942187->leave($__internal_89d5970222dd8c7db30caa91ee9ce5f85951e4ec921c94b681b66d42e4942187_prof);

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
