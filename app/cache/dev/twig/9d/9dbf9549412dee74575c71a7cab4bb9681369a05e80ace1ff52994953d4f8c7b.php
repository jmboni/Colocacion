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
        $__internal_849ae2463ca8fe678734cf2c796ba3e9abd12585194e7a4372fb80d9eed01167 = $this->env->getExtension("native_profiler");
        $__internal_849ae2463ca8fe678734cf2c796ba3e9abd12585194e7a4372fb80d9eed01167->enter($__internal_849ae2463ca8fe678734cf2c796ba3e9abd12585194e7a4372fb80d9eed01167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_849ae2463ca8fe678734cf2c796ba3e9abd12585194e7a4372fb80d9eed01167->leave($__internal_849ae2463ca8fe678734cf2c796ba3e9abd12585194e7a4372fb80d9eed01167_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_9495985d8f0e75a0e685fbd87282a544d66c46cd3d4af7e146d0a379240ceaf1 = $this->env->getExtension("native_profiler");
        $__internal_9495985d8f0e75a0e685fbd87282a544d66c46cd3d4af7e146d0a379240ceaf1->enter($__internal_9495985d8f0e75a0e685fbd87282a544d66c46cd3d4af7e146d0a379240ceaf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_9495985d8f0e75a0e685fbd87282a544d66c46cd3d4af7e146d0a379240ceaf1->leave($__internal_9495985d8f0e75a0e685fbd87282a544d66c46cd3d4af7e146d0a379240ceaf1_prof);

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
