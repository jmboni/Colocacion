<?php

/* DsgagenciaBundle:Api:trabajos.yaml.twig */
class __TwigTemplate_bff545e310b649fae7bc507491274d987f09b83b16fc22b41fa2a9614d19fcf1 extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["trabajos"]) ? $context["trabajos"] : null));
        foreach ($context['_seq'] as $context["url"] => $context["oferta"]) {
            // line 2
            echo "    Url: ";
            echo twig_escape_filter($this->env, $context["url"], "html", null, true);
            echo "
";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["oferta"]);
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 4
                echo "        ";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['url'], $context['oferta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "DsgagenciaBundle:Api:trabajos.yaml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 4,  28 => 3,  23 => 2,  19 => 1,);
    }
}
/* {% for url,oferta in trabajos %}*/
/*     Url: {{ url }}*/
/* {% for key, value in oferta %}*/
/*         {{ key }}: {{ value }}*/
/* {% endfor %}*/
/* {% endfor %}*/
