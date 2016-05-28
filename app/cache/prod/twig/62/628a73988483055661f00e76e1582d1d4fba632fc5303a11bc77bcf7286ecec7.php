<?php

/* WhiteOctoberBreadcrumbsBundle::breadcrumbs.html.twig */
class __TwigTemplate_e03a579d15941de1db605bcff89560203e2d4c3fd22bb9486d15adff5035c2cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (twig_length_filter($this->env, $this->env->getExtension('breadcrumbs')->getBreadcrumbs())) {
            // line 2
            ob_start();
            // line 3
            echo "<ul id=\"";
            echo twig_escape_filter($this->env, (isset($context["listId"]) ? $context["listId"] : null), "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, (isset($context["listClass"]) ? $context["listClass"] : null), "html", null, true);
            echo "\" itemscope itemtype=\"http://schema.org/BreadcrumbList\">
            ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
                // line 5
                echo "                <li";
                if ((array_key_exists("itemClass", $context) && twig_length_filter($this->env, (isset($context["itemClass"]) ? $context["itemClass"] : null)))) {
                    echo " class=\"";
                    echo twig_escape_filter($this->env, (isset($context["itemClass"]) ? $context["itemClass"] : null), "html", null, true);
                    echo "\"";
                }
                echo " itemprop=\"itemListElement\" itemscope itemtype=\"http://schema.org/ListItem\">
                    ";
                // line 6
                if (($this->getAttribute($context["b"], "url", array()) &&  !$this->getAttribute($context["loop"], "last", array()))) {
                    // line 7
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["b"], "url", array()), "html", null, true);
                    echo "\" itemprop=\"item\"";
                    if ((array_key_exists("linkRel", $context) && twig_length_filter($this->env, (isset($context["linkRel"]) ? $context["linkRel"] : null)))) {
                        echo " rel=\"";
                        echo twig_escape_filter($this->env, (isset($context["linkRel"]) ? $context["linkRel"] : null), "html", null, true);
                        echo "\"";
                    }
                    echo ">
                    ";
                }
                // line 9
                echo "                            <span itemprop=\"name\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["b"], "text", array()), $this->getAttribute($context["b"], "translationParameters", array()), (isset($context["translation_domain"]) ? $context["translation_domain"] : null), (isset($context["locale"]) ? $context["locale"] : null)), "html", null, true);
                echo "</span>
                    ";
                // line 10
                if (($this->getAttribute($context["b"], "url", array()) &&  !$this->getAttribute($context["loop"], "last", array()))) {
                    // line 11
                    echo "                        </a>
                    ";
                }
                // line 13
                echo "                    <meta itemprop=\"position\" content=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" />
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "        </ul>";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        }
    }

    public function getTemplateName()
    {
        return "WhiteOctoberBreadcrumbsBundle::breadcrumbs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 16,  81 => 13,  77 => 11,  75 => 10,  70 => 9,  58 => 7,  56 => 6,  47 => 5,  30 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if wo_breadcrumbs()|length %}*/
/*     {%- spaceless -%}*/
/*         <ul id="{{ listId }}" class="{{ listClass }}" itemscope itemtype="http://schema.org/BreadcrumbList">*/
/*             {% for b in breadcrumbs %}*/
/*                 <li{% if itemClass is defined and itemClass|length %} class="{{ itemClass }}"{% endif %} itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">*/
/*                     {% if b.url and not loop.last %}*/
/*                         <a href="{{ b.url }}" itemprop="item"{% if linkRel is defined and linkRel|length %} rel="{{ linkRel }}"{% endif %}>*/
/*                     {% endif %}*/
/*                             <span itemprop="name">{{- b.text | trans(b.translationParameters, translation_domain, locale) -}}</span>*/
/*                     {% if b.url and not loop.last %}*/
/*                         </a>*/
/*                     {% endif %}*/
/*                     <meta itemprop="position" content="{{ loop.index }}" />*/
/*                 </li>*/
/*             {% endfor %}*/
/*         </ul>*/
/*     {%- endspaceless -%}*/
/* {% endif %}*/
