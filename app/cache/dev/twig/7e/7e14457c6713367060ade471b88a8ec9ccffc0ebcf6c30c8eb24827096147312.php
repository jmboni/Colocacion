<?php

/* SonataCoreBundle:Form:colorpicker.html.twig */
class __TwigTemplate_b2059eab57012e39d884ed0c40c520cc507494b65ed1b9d5d57746fabc69c2e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_type_color_selector_widget' => array($this, 'block_sonata_type_color_selector_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_85100d8d1a1605fa2ed6d9765d8ce287abb1b1d7a524210452e11f2d31ea0b37 = $this->env->getExtension("native_profiler");
        $__internal_85100d8d1a1605fa2ed6d9765d8ce287abb1b1d7a524210452e11f2d31ea0b37->enter($__internal_85100d8d1a1605fa2ed6d9765d8ce287abb1b1d7a524210452e11f2d31ea0b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataCoreBundle:Form:colorpicker.html.twig"));

        // line 11
        $this->displayBlock('sonata_type_color_selector_widget', $context, $blocks);
        
        $__internal_85100d8d1a1605fa2ed6d9765d8ce287abb1b1d7a524210452e11f2d31ea0b37->leave($__internal_85100d8d1a1605fa2ed6d9765d8ce287abb1b1d7a524210452e11f2d31ea0b37_prof);

    }

    public function block_sonata_type_color_selector_widget($context, array $blocks = array())
    {
        $__internal_21b84c946ff0c996cac63cff6833fcbf4f428786a94ce1fc0ab466b60d027d6c = $this->env->getExtension("native_profiler");
        $__internal_21b84c946ff0c996cac63cff6833fcbf4f428786a94ce1fc0ab466b60d027d6c->enter($__internal_21b84c946ff0c996cac63cff6833fcbf4f428786a94ce1fc0ab466b60d027d6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_color_selector_widget"));

        // line 12
        echo "    ";
        $this->displayBlock("choice_widget", $context, $blocks);
        echo "
    ";
        // line 13
        ob_start();
        // line 14
        echo "        <script type=\"text/javascript\">
            jQuery(function (\$) {
                var select2FormatColorSelect = function format(state) {
                    if (!state.id || state.disabled) {
                        return state.text;
                    }

                    return ' <i class=\"fa fa-square\" style=\"color: '+ state.id +'\"></i> ' + state.text;
                };

                \$('#";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "').select2({
                    formatResult:    select2FormatColorSelect,
                    formatSelection: select2FormatColorSelect,
                    width:           '100%',
                    escapeMarkup:    function(m) { return m; }
                });
            });
        </script>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_21b84c946ff0c996cac63cff6833fcbf4f428786a94ce1fc0ab466b60d027d6c->leave($__internal_21b84c946ff0c996cac63cff6833fcbf4f428786a94ce1fc0ab466b60d027d6c_prof);

    }

    public function getTemplateName()
    {
        return "SonataCoreBundle:Form:colorpicker.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  54 => 24,  42 => 14,  40 => 13,  35 => 12,  23 => 11,);
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
/* {% block sonata_type_color_selector_widget %}*/
/*     {{ block('choice_widget') }}*/
/*     {% spaceless %}*/
/*         <script type="text/javascript">*/
/*             jQuery(function ($) {*/
/*                 var select2FormatColorSelect = function format(state) {*/
/*                     if (!state.id || state.disabled) {*/
/*                         return state.text;*/
/*                     }*/
/* */
/*                     return ' <i class="fa fa-square" style="color: '+ state.id +'"></i> ' + state.text;*/
/*                 };*/
/* */
/*                 $('#{{ id }}').select2({*/
/*                     formatResult:    select2FormatColorSelect,*/
/*                     formatSelection: select2FormatColorSelect,*/
/*                     width:           '100%',*/
/*                     escapeMarkup:    function(m) { return m; }*/
/*                 });*/
/*             });*/
/*         </script>*/
/*     {% endspaceless %}*/
/* {% endblock sonata_type_color_selector_widget %}*/
/* */
