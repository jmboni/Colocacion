<?php

/* SonataAdminBundle:CRUD:base_show_field.html.twig */
class __TwigTemplate_1b3b42652109a41e15f7985b1053921a0ab14011c5dcc61ebdd117c368936690 extends Twig_Template
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
        $__internal_e9b15cf433938e6edfdfcebddd75c6b253a43878fa7e9471849f0d51b44ba735 = $this->env->getExtension("native_profiler");
        $__internal_e9b15cf433938e6edfdfcebddd75c6b253a43878fa7e9471849f0d51b44ba735->enter($__internal_e9b15cf433938e6edfdfcebddd75c6b253a43878fa7e9471849f0d51b44ba735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_field.html.twig"));

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
        
        $__internal_e9b15cf433938e6edfdfcebddd75c6b253a43878fa7e9471849f0d51b44ba735->leave($__internal_e9b15cf433938e6edfdfcebddd75c6b253a43878fa7e9471849f0d51b44ba735_prof);

    }

    // line 12
    public function block_name($context, array $blocks = array())
    {
        $__internal_a638f91ff073a619f3039ffce71db7c9fc22424b03a09d1290fc17a1c344e39c = $this->env->getExtension("native_profiler");
        $__internal_a638f91ff073a619f3039ffce71db7c9fc22424b03a09d1290fc17a1c344e39c->enter($__internal_a638f91ff073a619f3039ffce71db7c9fc22424b03a09d1290fc17a1c344e39c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "label", array()), 1 => array(), 2 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain", array())), "method"), "html", null, true);
        
        $__internal_a638f91ff073a619f3039ffce71db7c9fc22424b03a09d1290fc17a1c344e39c->leave($__internal_a638f91ff073a619f3039ffce71db7c9fc22424b03a09d1290fc17a1c344e39c_prof);

    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        $__internal_9996f1d3c6efad7568641c13c7f944861c2b295c12e8f8b2ad96d866d988a295 = $this->env->getExtension("native_profiler");
        $__internal_9996f1d3c6efad7568641c13c7f944861c2b295c12e8f8b2ad96d866d988a295->enter($__internal_9996f1d3c6efad7568641c13c7f944861c2b295c12e8f8b2ad96d866d988a295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
            echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
        } else {
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true));
        }
        
        $__internal_9996f1d3c6efad7568641c13c7f944861c2b295c12e8f8b2ad96d866d988a295->leave($__internal_9996f1d3c6efad7568641c13c7f944861c2b295c12e8f8b2ad96d866d988a295_prof);

    }

    // line 15
    public function block_field_compare($context, array $blocks = array())
    {
        $__internal_84218d70fa3767caca57d196ac84305cf9de857f83d0f7c8cea33f33287a599c = $this->env->getExtension("native_profiler");
        $__internal_84218d70fa3767caca57d196ac84305cf9de857f83d0f7c8cea33f33287a599c->enter($__internal_84218d70fa3767caca57d196ac84305cf9de857f83d0f7c8cea33f33287a599c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_compare"));

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
        
        $__internal_84218d70fa3767caca57d196ac84305cf9de857f83d0f7c8cea33f33287a599c->leave($__internal_84218d70fa3767caca57d196ac84305cf9de857f83d0f7c8cea33f33287a599c_prof);

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
