<?php

/* SonataAdminBundle:Block:block_search_result.html.twig */
class __TwigTemplate_f42982f729dc27be86a3abff00b578a1d460489f54b4af4aaf5402d79574b0f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataAdminBundle:Block:block_search_result.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e20f3a175d0514493b964acb4043cb2552e927a2d67c8d2c4e020f4a54bed72d = $this->env->getExtension("native_profiler");
        $__internal_e20f3a175d0514493b964acb4043cb2552e927a2d67c8d2c4e020f4a54bed72d->enter($__internal_e20f3a175d0514493b964acb4043cb2552e927a2d67c8d2c4e020f4a54bed72d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Block:block_search_result.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e20f3a175d0514493b964acb4043cb2552e927a2d67c8d2c4e020f4a54bed72d->leave($__internal_e20f3a175d0514493b964acb4043cb2552e927a2d67c8d2c4e020f4a54bed72d_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_ba93a916bc4c0a1f7e4d0c6e745f1c8dcac095240ef5ebbde6219c5010dca00c = $this->env->getExtension("native_profiler");
        $__internal_ba93a916bc4c0a1f7e4d0c6e745f1c8dcac095240ef5ebbde6219c5010dca00c->enter($__internal_ba93a916bc4c0a1f7e4d0c6e745f1c8dcac095240ef5ebbde6219c5010dca00c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <div class=\"col-lg-4 col-md-6\">
        <div class=\"box\">
            <div class=\"box-header with-border\">
                ";
        // line 18
        $context["icon"] = (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icon", array()), "")) : (""));
        // line 19
        echo "                ";
        echo (isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon"));
        echo "
                <h3 class=\"box-title\">
                    ";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "label", array()), array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationdomain", array())), "html", null, true);
        echo "
                </h3>

                <div class=\"box-tools pull-right\">
                    ";
        // line 25
        if (((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")) && ($this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "getNbResults", array(), "method") > 0))) {
            // line 26
            echo "                        <span class=\"badge\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "getNbResults", array(), "method"), "html", null, true);
            echo "</span>
                    ";
        } elseif (($this->getAttribute(        // line 27
(isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "create"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "CREATE"), "method"))) {
            // line 28
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "create"), "method"), "html", null, true);
            echo "\" class=\"btn btn-box-tool\">
                            <i class=\"fa fa-plus\"></i>
                        </a>
                    ";
        }
        // line 32
        echo "                    ";
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method"))) {
            // line 33
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\" class=\"btn btn-box-tool\">
                            <i class=\"fa fa-list\"></i>
                        </a>
                    ";
        }
        // line 37
        echo "                </div>
            </div>
            ";
        // line 39
        if (((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")) && twig_length_filter($this->env, $this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "getResults", array(), "method")))) {
            // line 40
            echo "                <div class=\"box-body no-padding\">
                    <ul class=\"nav nav-stacked sonata-search-result-list\">
                        ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "getResults", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 43
                echo "                            ";
                if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "edit"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "EDIT", 1 => $context["result"]), "method"))) {
                    // line 44
                    echo "                                <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "edit", 1 => $context["result"]), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "toString", array(0 => $context["result"]), "method"), "html", null, true);
                    echo "</a></li>
                            ";
                } else {
                    // line 46
                    echo "                                <li><a>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "toString", array(0 => $context["result"]), "method"), "html", null, true);
                    echo "</a></li>
                            ";
                }
                // line 48
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "                    </ul>
                </div>
            ";
        } else {
            // line 52
            echo "                <div class=\"box-body\">
                    <p>
                        <em>";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_results_found", array(), "SonataAdminBundle"), "html", null, true);
            echo "</em>
                    </p>
                </div>
            ";
        }
        // line 58
        echo "        </div>
    </div>
";
        
        $__internal_ba93a916bc4c0a1f7e4d0c6e745f1c8dcac095240ef5ebbde6219c5010dca00c->leave($__internal_ba93a916bc4c0a1f7e4d0c6e745f1c8dcac095240ef5ebbde6219c5010dca00c_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Block:block_search_result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 58,  133 => 54,  129 => 52,  124 => 49,  118 => 48,  112 => 46,  104 => 44,  101 => 43,  97 => 42,  93 => 40,  91 => 39,  87 => 37,  79 => 33,  76 => 32,  68 => 28,  66 => 27,  61 => 26,  59 => 25,  52 => 21,  46 => 19,  44 => 18,  39 => 15,  33 => 14,  18 => 12,);
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
/* {% extends sonata_block.templates.block_base %}*/
/* */
/* {% block block %}*/
/*     <div class="col-lg-4 col-md-6">*/
/*         <div class="box">*/
/*             <div class="box-header with-border">*/
/*                 {% set icon = settings.icon|default('') %}*/
/*                 {{ icon|raw }}*/
/*                 <h3 class="box-title">*/
/*                     {{ admin.label|trans({}, admin.translationdomain) }}*/
/*                 </h3>*/
/* */
/*                 <div class="box-tools pull-right">*/
/*                     {% if pager and pager.getNbResults() > 0 %}*/
/*                         <span class="badge">{{ pager.getNbResults() }}</span>*/
/*                     {% elseif admin.hasRoute('create') and admin.isGranted('CREATE') %}*/
/*                         <a href="{{ admin.generateUrl('create') }}" class="btn btn-box-tool">*/
/*                             <i class="fa fa-plus"></i>*/
/*                         </a>*/
/*                     {% endif %}*/
/*                     {% if admin.hasRoute('list') and admin.isGranted('LIST') %}*/
/*                         <a href="{{ admin.generateUrl('list') }}" class="btn btn-box-tool">*/
/*                             <i class="fa fa-list"></i>*/
/*                         </a>*/
/*                     {% endif %}*/
/*                 </div>*/
/*             </div>*/
/*             {% if pager and pager.getResults()|length %}*/
/*                 <div class="box-body no-padding">*/
/*                     <ul class="nav nav-stacked sonata-search-result-list">*/
/*                         {% for result in pager.getResults() %}*/
/*                             {% if admin.hasRoute('edit') and admin.isGranted('EDIT', result) %}*/
/*                                 <li><a href="{{ admin.generateObjectUrl('edit', result) }}">{{ admin.toString(result) }}</a></li>*/
/*                             {% else %}*/
/*                                 <li><a>{{ admin.toString(result) }}</a></li>*/
/*                             {% endif %}*/
/*                         {% endfor %}*/
/*                     </ul>*/
/*                 </div>*/
/*             {% else %}*/
/*                 <div class="box-body">*/
/*                     <p>*/
/*                         <em>{{ 'no_results_found'|trans({}, 'SonataAdminBundle') }}</em>*/
/*                     </p>*/
/*                 </div>*/
/*             {% endif %}*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
