<?php

/* DsgagenciaBundle:TrabajosAdmin:list_image.html.twig */
class __TwigTemplate_0fbf50d1a789bb92f313cdd2283e5d41c8b73f951328b89d181021ddb22ddd61 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'show' => array($this, 'block_show'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 13
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "DsgagenciaBundle:TrabajosAdmin:list_image.html.twig", 13);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7e8918dd924f4e058d890c3281cd7411a6d36732867b6818f4931b5aa97318f6 = $this->env->getExtension("native_profiler");
        $__internal_7e8918dd924f4e058d890c3281cd7411a6d36732867b6818f4931b5aa97318f6->enter($__internal_7e8918dd924f4e058d890c3281cd7411a6d36732867b6818f4931b5aa97318f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DsgagenciaBundle:TrabajosAdmin:list_image.html.twig"));

        // line 15
        $context["show_helper"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_macro.html.twig", "DsgagenciaBundle:TrabajosAdmin:list_image.html.twig", 15);
        // line 13
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e8918dd924f4e058d890c3281cd7411a6d36732867b6818f4931b5aa97318f6->leave($__internal_7e8918dd924f4e058d890c3281cd7411a6d36732867b6818f4931b5aa97318f6_prof);

    }

    // line 17
    public function block_actions($context, array $blocks = array())
    {
        $__internal_1c7138e73c3280da8661d118e187ab999fac4113b119d3c4e3680fae40b84203 = $this->env->getExtension("native_profiler");
        $__internal_1c7138e73c3280da8661d118e187ab999fac4113b119d3c4e3680fae40b84203->enter($__internal_1c7138e73c3280da8661d118e187ab999fac4113b119d3c4e3680fae40b84203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 18
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "DsgagenciaBundle:TrabajosAdmin:list_image.html.twig", 18)->display($context);
        
        $__internal_1c7138e73c3280da8661d118e187ab999fac4113b119d3c4e3680fae40b84203->leave($__internal_1c7138e73c3280da8661d118e187ab999fac4113b119d3c4e3680fae40b84203_prof);

    }

    // line 21
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_799e9ecdca2b1befef54521a0a429279474650748ba71303da8fa72c96b640dc = $this->env->getExtension("native_profiler");
        $__internal_799e9ecdca2b1befef54521a0a429279474650748ba71303da8fa72c96b640dc->enter($__internal_799e9ecdca2b1befef54521a0a429279474650748ba71303da8fa72c96b640dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 22
        echo "    ";
        echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute(        // line 24
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        // line 25
        echo "
";
        
        $__internal_799e9ecdca2b1befef54521a0a429279474650748ba71303da8fa72c96b640dc->leave($__internal_799e9ecdca2b1befef54521a0a429279474650748ba71303da8fa72c96b640dc_prof);

    }

    // line 28
    public function block_show($context, array $blocks = array())
    {
        $__internal_c81247d369b8c6c93937132eb42ec791fbb5edf9637b1ac0be6e9dcb9339794d = $this->env->getExtension("native_profiler");
        $__internal_c81247d369b8c6c93937132eb42ec791fbb5edf9637b1ac0be6e9dcb9339794d->enter($__internal_c81247d369b8c6c93937132eb42ec791fbb5edf9637b1ac0be6e9dcb9339794d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show"));

        // line 29
        echo "    <div class=\"sonata-ba-view\">
        ";
        // line 30
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.show.top", array("admin" => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "object" => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")))));
        echo "

        ";
        // line 32
        $context["has_tab"] = (((twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showtabs", array())) == 1) && ($this->getAttribute(twig_get_array_keys_filter($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showtabs", array())), 0, array(), "array") != "default")) || (twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showtabs", array())) > 1));
        // line 33
        echo "
        ";
        // line 34
        if ((isset($context["has_tab"]) ? $context["has_tab"] : $this->getContext($context, "has_tab"))) {
            // line 35
            echo "            <div class=\"nav-tabs-custom\">
                <ul class=\"nav nav-tabs\" role=\"tablist\">
                    ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showtabs", array()));
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
            foreach ($context['_seq'] as $context["name"] => $context["show_tab"]) {
                // line 38
                echo "                        <li";
                if ($this->getAttribute($context["loop"], "first", array())) {
                    echo " class=\"active\"";
                }
                echo ">
                            <a href=\"#tab_";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" data-toggle=\"tab\">
                                <i class=\"fa fa-exclamation-circle has-errors hide\"></i>
                                ";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $context["name"], 1 => array(), 2 => $this->getAttribute($context["show_tab"], "translation_domain", array())), "method"), "html", null, true);
                echo "
                            </a>
                        </li>
                    ";
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
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['show_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "                </ul>

                <div class=\"tab-content\">
                    <tr>
                    ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showtabs", array()));
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
            foreach ($context['_seq'] as $context["code"] => $context["show_tab"]) {
                // line 50
                echo "                        <div
                            <th>Logo</th>
                                <td>Hola</td>
                            </tr>
                                class=\"tab-pane fade";
                // line 54
                if ($this->getAttribute($context["loop"], "first", array())) {
                    echo " in active";
                }
                echo "\"
                                id=\"tab_";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\"
                        >
                            <div class=\"box-body  container-fluid\">
                                <div class=\"sonata-ba-collapsed-fields\">
                                    ";
                // line 59
                if (($this->getAttribute($context["show_tab"], "description", array()) != false)) {
                    // line 60
                    echo "                                        <p>";
                    echo $this->getAttribute($context["show_tab"], "description", array());
                    echo "</p>
                                    ";
                }
                // line 62
                echo "
                                    ";
                // line 63
                echo $context["show_helper"]->getrender_groups((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), (isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), $this->getAttribute($context["show_tab"], "groups", array()), (isset($context["has_tab"]) ? $context["has_tab"] : $this->getContext($context, "has_tab")));
                echo "
                                </div>
                            </div>
                        </div>
                    ";
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
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['show_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "                </div>
            </div>
        ";
        } elseif (twig_test_iterable($this->getAttribute(        // line 70
(isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showtabs", array()))) {
            // line 71
            echo "            ";
            echo $context["show_helper"]->getrender_groups((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), (isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showtabs", array()), "default", array()), "groups", array()), (isset($context["has_tab"]) ? $context["has_tab"] : $this->getContext($context, "has_tab")));
            echo "
        ";
        }
        // line 73
        echo "
    </div>

    ";
        // line 76
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.show.bottom", array("admin" => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "object" => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")))));
        echo "
";
        
        $__internal_c81247d369b8c6c93937132eb42ec791fbb5edf9637b1ac0be6e9dcb9339794d->leave($__internal_c81247d369b8c6c93937132eb42ec791fbb5edf9637b1ac0be6e9dcb9339794d_prof);

    }

    public function getTemplateName()
    {
        return "DsgagenciaBundle:TrabajosAdmin:list_image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 76,  230 => 73,  224 => 71,  222 => 70,  218 => 68,  199 => 63,  196 => 62,  190 => 60,  188 => 59,  179 => 55,  173 => 54,  167 => 50,  150 => 49,  144 => 45,  126 => 41,  119 => 39,  112 => 38,  95 => 37,  91 => 35,  89 => 34,  86 => 33,  84 => 32,  79 => 30,  76 => 29,  70 => 28,  62 => 25,  60 => 24,  58 => 22,  52 => 21,  44 => 18,  38 => 17,  31 => 13,  29 => 15,  20 => 13,);
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
/* */
/* {% extends base_template %}*/
/* */
/* {% import 'SonataAdminBundle:CRUD:base_show_macro.html.twig' as show_helper %}*/
/* */
/* {% block actions %}*/
/*     {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}*/
/* {% endblock %}*/
/* */
/* {% block tab_menu %}*/
/*     {{ knp_menu_render(admin.sidemenu(action), {*/
/*         'currentClass' : 'active',*/
/*         'template': sonata_admin.adminPool.getTemplate('tab_menu_template')*/
/*     }, 'twig') }}*/
/* {% endblock %}*/
/* */
/* {% block show %}*/
/*     <div class="sonata-ba-view">*/
/*         {{ sonata_block_render_event('sonata.admin.show.top', { 'admin': admin, 'object': object }) }}*/
/* */
/*         {% set has_tab = (admin.showtabs|length == 1 and admin.showtabs|keys[0] != 'default') or admin.showtabs|length > 1 %}*/
/* */
/*         {% if has_tab %}*/
/*             <div class="nav-tabs-custom">*/
/*                 <ul class="nav nav-tabs" role="tablist">*/
/*                     {% for name, show_tab in admin.showtabs %}*/
/*                         <li{% if loop.first %} class="active"{% endif %}>*/
/*                             <a href="#tab_{{ admin.uniqid }}_{{ loop.index }}" data-toggle="tab">*/
/*                                 <i class="fa fa-exclamation-circle has-errors hide"></i>*/
/*                                 {{ admin.trans(name, {}, show_tab.translation_domain) }}*/
/*                             </a>*/
/*                         </li>*/
/*                     {% endfor %}*/
/*                 </ul>*/
/* */
/*                 <div class="tab-content">*/
/*                     <tr>*/
/*                     {% for code, show_tab in admin.showtabs %}*/
/*                         <div*/
/*                             <th>Logo</th>*/
/*                                 <td>Hola</td>*/
/*                             </tr>*/
/*                                 class="tab-pane fade{% if loop.first %} in active{% endif %}"*/
/*                                 id="tab_{{ admin.uniqid }}_{{ loop.index }}"*/
/*                         >*/
/*                             <div class="box-body  container-fluid">*/
/*                                 <div class="sonata-ba-collapsed-fields">*/
/*                                     {% if show_tab.description != false %}*/
/*                                         <p>{{ show_tab.description|raw }}</p>*/
/*                                     {% endif %}*/
/* */
/*                                     {{ show_helper.render_groups(admin, object, elements, show_tab.groups, has_tab) }}*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     {% endfor %}*/
/*                 </div>*/
/*             </div>*/
/*         {% elseif admin.showtabs is iterable %}*/
/*             {{ show_helper.render_groups(admin, object, elements, admin.showtabs.default.groups, has_tab) }}*/
/*         {% endif %}*/
/* */
/*     </div>*/
/* */
/*     {{ sonata_block_render_event('sonata.admin.show.bottom', { 'admin': admin, 'object': object }) }}*/
/* {% endblock %}*/
