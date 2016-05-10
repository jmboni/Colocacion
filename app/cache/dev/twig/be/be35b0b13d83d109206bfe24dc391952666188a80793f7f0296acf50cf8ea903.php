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
        $__internal_25eb93e398ee039e9fffa05732c724f830f1a85402f8464750d96686249a06d2 = $this->env->getExtension("native_profiler");
        $__internal_25eb93e398ee039e9fffa05732c724f830f1a85402f8464750d96686249a06d2->enter($__internal_25eb93e398ee039e9fffa05732c724f830f1a85402f8464750d96686249a06d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_field.html.twig"));

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
        
        $__internal_25eb93e398ee039e9fffa05732c724f830f1a85402f8464750d96686249a06d2->leave($__internal_25eb93e398ee039e9fffa05732c724f830f1a85402f8464750d96686249a06d2_prof);

    }

    // line 12
    public function block_name($context, array $blocks = array())
    {
        $__internal_93613a9c6c4786c31bb59f21ef65302cf2370f997b4cddaa414e63d61add4819 = $this->env->getExtension("native_profiler");
        $__internal_93613a9c6c4786c31bb59f21ef65302cf2370f997b4cddaa414e63d61add4819->enter($__internal_93613a9c6c4786c31bb59f21ef65302cf2370f997b4cddaa414e63d61add4819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "label", array()), 1 => array(), 2 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain", array())), "method"), "html", null, true);
        
        $__internal_93613a9c6c4786c31bb59f21ef65302cf2370f997b4cddaa414e63d61add4819->leave($__internal_93613a9c6c4786c31bb59f21ef65302cf2370f997b4cddaa414e63d61add4819_prof);

    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        $__internal_91daed8714a880f89734198af29b70b62171d1c6d327c29e08376e92ba85a0ba = $this->env->getExtension("native_profiler");
        $__internal_91daed8714a880f89734198af29b70b62171d1c6d327c29e08376e92ba85a0ba->enter($__internal_91daed8714a880f89734198af29b70b62171d1c6d327c29e08376e92ba85a0ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
            echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
        } else {
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true));
        }
        
        $__internal_91daed8714a880f89734198af29b70b62171d1c6d327c29e08376e92ba85a0ba->leave($__internal_91daed8714a880f89734198af29b70b62171d1c6d327c29e08376e92ba85a0ba_prof);

    }

    // line 15
    public function block_field_compare($context, array $blocks = array())
    {
        $__internal_6b65930a48eef7a20c3e0fc84be6b3271d8cbbad6c9dad71b89caf92aafce2a9 = $this->env->getExtension("native_profiler");
        $__internal_6b65930a48eef7a20c3e0fc84be6b3271d8cbbad6c9dad71b89caf92aafce2a9->enter($__internal_6b65930a48eef7a20c3e0fc84be6b3271d8cbbad6c9dad71b89caf92aafce2a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_compare"));

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
        
        $__internal_6b65930a48eef7a20c3e0fc84be6b3271d8cbbad6c9dad71b89caf92aafce2a9->leave($__internal_6b65930a48eef7a20c3e0fc84be6b3271d8cbbad6c9dad71b89caf92aafce2a9_prof);

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
