<?php

/* SonataAdminBundle:CRUD:base_show_field.html.twig */
class __TwigTemplate_c8dab812ed12ad586dd1ad5171653a16126c66987ee89c1feea41fc473b8a014 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'name' => array($this, 'block_name'),
            'field' => array($this, 'block_field'),
            'field_compare' => array($this, 'block_field_compare'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e6da630d864de0008778d9d17bffb6bf408b7561c2d6d771634492ad36de1e8c = $this->env->getExtension("native_profiler");
        $__internal_e6da630d864de0008778d9d17bffb6bf408b7561c2d6d771634492ad36de1e8c->enter($__internal_e6da630d864de0008778d9d17bffb6bf408b7561c2d6d771634492ad36de1e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_field.html.twig"));

        // line 11
        echo "
<th";
        // line 12
        if (((array_key_exists("is_diff", $context)) ? (_twig_default_filter((isset($context["is_diff"]) ? $context["is_diff"] : $this->getContext($context, "is_diff")), false)) : (false))) {
            echo " class=\"diff\"";
        }
        echo ">";
        $this->displayBlock('name', $context, $blocks);
        echo "</th>
<td>";
        // line 13
        $this->displayBlock('field', $context, $blocks);
        echo "</td>

";
        // line 15
        $this->displayBlock('field_compare', $context, $blocks);
        
        $__internal_e6da630d864de0008778d9d17bffb6bf408b7561c2d6d771634492ad36de1e8c->leave($__internal_e6da630d864de0008778d9d17bffb6bf408b7561c2d6d771634492ad36de1e8c_prof);

    }

    // line 12
    public function block_name($context, array $blocks = array())
    {
        $__internal_55f10dccae671c72aa9d2666b85d1f9ae6a23d4dbdd6ef4b7b2f6fb267f2ae39 = $this->env->getExtension("native_profiler");
        $__internal_55f10dccae671c72aa9d2666b85d1f9ae6a23d4dbdd6ef4b7b2f6fb267f2ae39->enter($__internal_55f10dccae671c72aa9d2666b85d1f9ae6a23d4dbdd6ef4b7b2f6fb267f2ae39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "label", array()), 1 => array(), 2 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain", array())), "method"), "html", null, true);
        
        $__internal_55f10dccae671c72aa9d2666b85d1f9ae6a23d4dbdd6ef4b7b2f6fb267f2ae39->leave($__internal_55f10dccae671c72aa9d2666b85d1f9ae6a23d4dbdd6ef4b7b2f6fb267f2ae39_prof);

    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        $__internal_7c50138c28e16e629597aeb0a763ac9ca1a2223337a634c1ea0edecc65199a47 = $this->env->getExtension("native_profiler");
        $__internal_7c50138c28e16e629597aeb0a763ac9ca1a2223337a634c1ea0edecc65199a47->enter($__internal_7c50138c28e16e629597aeb0a763ac9ca1a2223337a634c1ea0edecc65199a47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
            echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
        } else {
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true));
        }
        
        $__internal_7c50138c28e16e629597aeb0a763ac9ca1a2223337a634c1ea0edecc65199a47->leave($__internal_7c50138c28e16e629597aeb0a763ac9ca1a2223337a634c1ea0edecc65199a47_prof);

    }

    // line 15
    public function block_field_compare($context, array $blocks = array())
    {
        $__internal_db182e420c341383e264da4adb73d36d30cede9584a30177b321c1ddd316dce9 = $this->env->getExtension("native_profiler");
        $__internal_db182e420c341383e264da4adb73d36d30cede9584a30177b321c1ddd316dce9->enter($__internal_db182e420c341383e264da4adb73d36d30cede9584a30177b321c1ddd316dce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_compare"));

        // line 16
        echo "    ";
        if (array_key_exists("value_compare", $context)) {
            // line 17
            echo "        <td>
            ";
            // line 18
            $context["value"] = (isset($context["value_compare"]) ? $context["value_compare"] : $this->getContext($context, "value_compare"));
            // line 19
            echo "            ";
            $this->displayBlock("field", $context, $blocks);
            echo "
        </td>
    ";
        }
        
        $__internal_db182e420c341383e264da4adb73d36d30cede9584a30177b321c1ddd316dce9->leave($__internal_db182e420c341383e264da4adb73d36d30cede9584a30177b321c1ddd316dce9_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 19,  88 => 18,  85 => 17,  82 => 16,  76 => 15,  60 => 13,  48 => 12,  41 => 15,  36 => 13,  28 => 12,  25 => 11,);
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
/* <th{% if(is_diff|default(false)) %} class="diff"{% endif %}>{% block name %}{{ admin.trans(field_description.label, {}, field_description.translationDomain) }}{% endblock %}</th>*/
/* <td>{% block field %}{% if field_description.options.safe %}{{ value|raw }}{% else %}{{ value|nl2br }}{% endif %}{% endblock %}</td>*/
/* */
/* {% block field_compare %}*/
/*     {% if(value_compare is defined) %}*/
/*         <td>*/
/*             {% set value = value_compare %}*/
/*             {{ block('field') }}*/
/*         </td>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
