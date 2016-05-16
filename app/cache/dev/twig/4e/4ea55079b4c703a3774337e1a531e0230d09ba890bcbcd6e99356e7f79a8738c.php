<?php

/* SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_many.html.twig */
class __TwigTemplate_e576462a0438b659ef125e1b7f0a654e4e827cebebc63e429952bcfcf27f274a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'relation_link' => array($this, 'block_relation_link'),
            'relation_value' => array($this, 'block_relation_value'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_many.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_457cb734f8e2784561bbf97e96353ab041d7e08b7af7bee63654520873010de8 = $this->env->getExtension("native_profiler");
        $__internal_457cb734f8e2784561bbf97e96353ab041d7e08b7af7bee63654520873010de8->enter($__internal_457cb734f8e2784561bbf97e96353ab041d7e08b7af7bee63654520873010de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_many.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_457cb734f8e2784561bbf97e96353ab041d7e08b7af7bee63654520873010de8->leave($__internal_457cb734f8e2784561bbf97e96353ab041d7e08b7af7bee63654520873010de8_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_002a0a05569eab4b38b26839c2ea766b45d87191fb6ae9f883465eb4cacc5d6a = $this->env->getExtension("native_profiler");
        $__internal_002a0a05569eab4b38b26839c2ea766b45d87191fb6ae9f883465eb4cacc5d6a->enter($__internal_002a0a05569eab4b38b26839c2ea766b45d87191fb6ae9f883465eb4cacc5d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["route_name"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "name", array());
        // line 16
        echo "    ";
        $context["route_role"] = twig_upper_filter($this->env, (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")));
        // line 17
        echo "    ";
        if (($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "hasassociationadmin", array()) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "hasRoute", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name"))), "method"))) {
            // line 18
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 19
                if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "isGranted", array(0 => (isset($context["route_role"]) ? $context["route_role"] : $this->getContext($context, "route_role")), 1 => (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "method")) {
                    // line 20
                    $this->displayBlock("relation_link", $context, $blocks);
                } else {
                    // line 22
                    $this->displayBlock("relation_value", $context, $blocks);
                }
                // line 24
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 25
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "    ";
        } else {
            // line 27
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 28
                echo "            ";
                $this->displayBlock("relation_value", $context, $blocks);
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 29
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "    ";
        }
        
        $__internal_002a0a05569eab4b38b26839c2ea766b45d87191fb6ae9f883465eb4cacc5d6a->leave($__internal_002a0a05569eab4b38b26839c2ea766b45d87191fb6ae9f883465eb4cacc5d6a_prof);

    }

    // line 33
    public function block_relation_link($context, array $blocks = array())
    {
        $__internal_5babc487f3de79714538ff60f4e2c8b594ec39ba0842a660505f292a10c6523d = $this->env->getExtension("native_profiler");
        $__internal_5babc487f3de79714538ff60f4e2c8b594ec39ba0842a660505f292a10c6523d->enter($__internal_5babc487f3de79714538ff60f4e2c8b594ec39ba0842a660505f292a10c6523d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_link"));

        // line 34
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "generateObjectUrl", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")), 1 => (isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
        echo "\">
        ";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
        echo "
    </a>";
        
        $__internal_5babc487f3de79714538ff60f4e2c8b594ec39ba0842a660505f292a10c6523d->leave($__internal_5babc487f3de79714538ff60f4e2c8b594ec39ba0842a660505f292a10c6523d_prof);

    }

    // line 39
    public function block_relation_value($context, array $blocks = array())
    {
        $__internal_d6f5e4c633e56e28c934b6ee97d21bc1ec110532614af28cc2f56fc92988d78e = $this->env->getExtension("native_profiler");
        $__internal_d6f5e4c633e56e28c934b6ee97d21bc1ec110532614af28cc2f56fc92988d78e->enter($__internal_d6f5e4c633e56e28c934b6ee97d21bc1ec110532614af28cc2f56fc92988d78e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_value"));

        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
        
        $__internal_d6f5e4c633e56e28c934b6ee97d21bc1ec110532614af28cc2f56fc92988d78e->leave($__internal_d6f5e4c633e56e28c934b6ee97d21bc1ec110532614af28cc2f56fc92988d78e_prof);

    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 40,  163 => 39,  154 => 35,  149 => 34,  143 => 33,  135 => 30,  121 => 29,  115 => 28,  97 => 27,  94 => 26,  80 => 25,  76 => 24,  73 => 22,  70 => 20,  68 => 19,  50 => 18,  47 => 17,  44 => 16,  41 => 15,  35 => 14,  20 => 12,);
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
/*     {% set route_name = field_description.options.route.name %}*/
/*     {% set route_role = route_name | upper %}*/
/*     {% if field_description.hasassociationadmin and field_description.associationadmin.hasRoute(route_name) %}*/
/*         {% for element in value %}*/
/*             {%- if field_description.associationadmin.isGranted(route_role, value) -%}*/
/*                 {{ block('relation_link') }}*/
/*             {%- else -%}*/
/*                 {{ block('relation_value') }}*/
/*             {%- endif -%}*/
/*             {% if not loop.last %}, {% endif %}*/
/*         {% endfor %}*/
/*     {% else %}*/
/*         {% for element in value%}*/
/*             {{ block('relation_value') }}{% if not loop.last %}, {% endif %}*/
/*         {% endfor %}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {%- block relation_link -%}*/
/*     <a href="{{ field_description.associationadmin.generateObjectUrl(route_name, element, field_description.options.route.parameters) }}">*/
/*         {{ element|render_relation_element(field_description) }}*/
/*     </a>*/
/* {%- endblock -%}*/
/* */
/* {%- block relation_value -%}*/
/*     {{ element|render_relation_element(field_description) }}*/
/* {%- endblock -%}*/
/* */
