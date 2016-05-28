<?php

/* DsgagenciaBundle:Api:trabajos.xml.twig */
class __TwigTemplate_237a520d0d297f1848e270abee47591de892e7fe17814e5b783aa18e7b15e3b0 extends Twig_Template
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
        echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>
<trabajos>
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["trabajos"]) ? $context["trabajos"] : null));
        foreach ($context['_seq'] as $context["url"] => $context["trabajo"]) {
            // line 4
            echo "    <oferta url=\"";
            echo twig_escape_filter($this->env, $context["url"], "html", null, true);
            echo "\">
        ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["trabajo"]);
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 6
                echo "                <";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo ">";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "</";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo ">
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "    </oferta>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['url'], $context['trabajo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</trabajos>";
    }

    public function getTemplateName()
    {
        return "DsgagenciaBundle:Api:trabajos.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 10,  49 => 8,  36 => 6,  32 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
/* <?xml version="1.0" encoding="utf-8"?>*/
/* <trabajos>*/
/* {% for url, trabajo in trabajos %}*/
/*     <oferta url="{{ url }}">*/
/*         {% for key,value in trabajo %}*/
/*                 <{{ key }}>{{ value }}</{{ key }}>*/
/*         {% endfor %}*/
/*     </oferta>*/
/* {% endfor %}*/
/* </trabajos>*/
