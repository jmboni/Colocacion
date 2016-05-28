<?php

/* WhiteOctoberBreadcrumbsBundle::breadcrumbs.html.twig */
class __TwigTemplate_8dcfd9d2e3fc92a643d0c795a577e495cdbf3cddc1a7aefc9fa052b1cf8c2695 extends Twig_Template
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
        $__internal_1e903d0894e22299caeaa4372f3c2bf3ed23d72f68011fe2b1132e8669b73e1f = $this->env->getExtension("native_profiler");
        $__internal_1e903d0894e22299caeaa4372f3c2bf3ed23d72f68011fe2b1132e8669b73e1f->enter($__internal_1e903d0894e22299caeaa4372f3c2bf3ed23d72f68011fe2b1132e8669b73e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WhiteOctoberBreadcrumbsBundle::breadcrumbs.html.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->env->getExtension('breadcrumbs')->getBreadcrumbs())) {
            // line 2
            ob_start();
            // line 3
            echo "<ul id=\"";
            echo twig_escape_filter($this->env, (isset($context["listId"]) ? $context["listId"] : $this->getContext($context, "listId")), "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, (isset($context["listClass"]) ? $context["listClass"] : $this->getContext($context, "listClass")), "html", null, true);
            echo "\" itemscope itemtype=\"http://schema.org/BreadcrumbList\">
            ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : $this->getContext($context, "breadcrumbs")));
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
                if ((array_key_exists("itemClass", $context) && twig_length_filter($this->env, (isset($context["itemClass"]) ? $context["itemClass"] : $this->getContext($context, "itemClass"))))) {
                    echo " class=\"";
                    echo twig_escape_filter($this->env, (isset($context["itemClass"]) ? $context["itemClass"] : $this->getContext($context, "itemClass")), "html", null, true);
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
                    if ((array_key_exists("linkRel", $context) && twig_length_filter($this->env, (isset($context["linkRel"]) ? $context["linkRel"] : $this->getContext($context, "linkRel"))))) {
                        echo " rel=\"";
                        echo twig_escape_filter($this->env, (isset($context["linkRel"]) ? $context["linkRel"] : $this->getContext($context, "linkRel")), "html", null, true);
                        echo "\"";
                    }
                    echo ">
                    ";
                }
                // line 9
                echo "                            <span itemprop=\"name\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["b"], "text", array()), $this->getAttribute($context["b"], "translationParameters", array()), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")), (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale"))), "html", null, true);
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
        
        $__internal_1e903d0894e22299caeaa4372f3c2bf3ed23d72f68011fe2b1132e8669b73e1f->leave($__internal_1e903d0894e22299caeaa4372f3c2bf3ed23d72f68011fe2b1132e8669b73e1f_prof);

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
        return array (  102 => 16,  84 => 13,  80 => 11,  78 => 10,  73 => 9,  61 => 7,  59 => 6,  50 => 5,  33 => 4,  26 => 3,  24 => 2,  22 => 1,);
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
