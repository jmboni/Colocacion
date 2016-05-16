<?php

/* DsgagenciaBundle:Api:trabajos.yaml.twig */
class __TwigTemplate_a1b9eae39a4c32d944717e98a2a50c649dd485249a2355450af36feffb3fc769 extends Twig_Template
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
        $__internal_0bcb615259d57f5a141cce51b9411a60e332f420b816574a1a59dc6e87e34cce = $this->env->getExtension("native_profiler");
        $__internal_0bcb615259d57f5a141cce51b9411a60e332f420b816574a1a59dc6e87e34cce->enter($__internal_0bcb615259d57f5a141cce51b9411a60e332f420b816574a1a59dc6e87e34cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DsgagenciaBundle:Api:trabajos.yaml.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["trabajos"]) ? $context["trabajos"] : $this->getContext($context, "trabajos")));
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
        
        $__internal_0bcb615259d57f5a141cce51b9411a60e332f420b816574a1a59dc6e87e34cce->leave($__internal_0bcb615259d57f5a141cce51b9411a60e332f420b816574a1a59dc6e87e34cce_prof);

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
        return array (  35 => 4,  31 => 3,  26 => 2,  22 => 1,);
    }
}
/* {% for url,oferta in trabajos %}*/
/*     Url: {{ url }}*/
/* {% for key, value in oferta %}*/
/*         {{ key }}: {{ value }}*/
/* {% endfor %}*/
/* {% endfor %}*/
