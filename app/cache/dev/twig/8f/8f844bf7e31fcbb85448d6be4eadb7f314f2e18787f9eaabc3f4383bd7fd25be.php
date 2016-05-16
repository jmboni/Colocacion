<?php

/* DsgagenciaBundle:Api:trabajos.xml.twig */
class __TwigTemplate_7d01fc15f259f642cc3891fa23d86321f1e557f7f2b037aee681825064ca4a3c extends Twig_Template
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
        $__internal_3bfacd18d8deb840194846b764c818907f221f666b1935cb241544a7861ca68f = $this->env->getExtension("native_profiler");
        $__internal_3bfacd18d8deb840194846b764c818907f221f666b1935cb241544a7861ca68f->enter($__internal_3bfacd18d8deb840194846b764c818907f221f666b1935cb241544a7861ca68f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DsgagenciaBundle:Api:trabajos.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>
<trabajos>
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["trabajos"]) ? $context["trabajos"] : $this->getContext($context, "trabajos")));
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
        
        $__internal_3bfacd18d8deb840194846b764c818907f221f666b1935cb241544a7861ca68f->leave($__internal_3bfacd18d8deb840194846b764c818907f221f666b1935cb241544a7861ca68f_prof);

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
        return array (  59 => 10,  52 => 8,  39 => 6,  35 => 5,  30 => 4,  26 => 3,  22 => 1,);
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
