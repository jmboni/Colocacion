<?php

/* SonataAdminBundle:CRUD:show_currency.html.twig */
class __TwigTemplate_90fbe637530924ca468ee7a477536c5ac315ce47fb2895d76eb71260b1025a9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_currency.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_960de665f33b176d85fca936e140917d82a7252e186b72ce9900ebe0e8b1a835 = $this->env->getExtension("native_profiler");
        $__internal_960de665f33b176d85fca936e140917d82a7252e186b72ce9900ebe0e8b1a835->enter($__internal_960de665f33b176d85fca936e140917d82a7252e186b72ce9900ebe0e8b1a835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_currency.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_960de665f33b176d85fca936e140917d82a7252e186b72ce9900ebe0e8b1a835->leave($__internal_960de665f33b176d85fca936e140917d82a7252e186b72ce9900ebe0e8b1a835_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_dc86946dad42be4a06d17f5b5a530988082e8148616fda92b9e407ee34bb59dd = $this->env->getExtension("native_profiler");
        $__internal_dc86946dad42be4a06d17f5b5a530988082e8148616fda92b9e407ee34bb59dd->enter($__internal_dc86946dad42be4a06d17f5b5a530988082e8148616fda92b9e407ee34bb59dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ( !(null === (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_dc86946dad42be4a06d17f5b5a530988082e8148616fda92b9e407ee34bb59dd->leave($__internal_dc86946dad42be4a06d17f5b5a530988082e8148616fda92b9e407ee34bb59dd_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_currency.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
/* {% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}*/
/* */
/* {% block field %}*/
/*     {% if value is not null %}*/
/*         {{ field_description.options.currency }} {{ value }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
