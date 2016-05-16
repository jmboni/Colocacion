<?php

/* DsgagenciaBundle:Categoria:show.atom.twig */
class __TwigTemplate_16cae22f22554604894553d04c64b797fd45bafbdc35383c645fe08cbdf361a2 extends Twig_Template
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
<feed xmlns=\"http://www.w3.org/2005/Atom\">
    <title>DSG (";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : null), "nombre", array()), "html", null, true);
        echo ")</title>
    <subtitle>Últimos Trabajos</subtitle>
    <link href=";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("DsgagenciaBundle_categoria", array("slug" => $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : null), "slug", array()), "_format" => "atom")), "html", null, true);
        echo " rel=\"self\" />
    <updated>";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["lastUpdated"]) ? $context["lastUpdated"] : null), "html", null, true);
        echo "</updated>
    <author><name>DSG</name></author>
    <id>";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["feedId"]) ? $context["feedId"] : null), "html", null, true);
        echo "</id>
 
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : null), "trabajosactivos", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 11
            echo "        <entry>
            <title>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "posicion", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "localidad", array()), "html", null, true);
            echo ")</title>
            <link href=";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("trabajos_show", array("id" => $this->getAttribute($context["entity"], "id", array()), "compania" => $this->getAttribute($context["entity"], "companiaslug", array()), "localidad" => $this->getAttribute($context["entity"], "localidadslug", array()), "posicion" => $this->getAttribute($context["entity"], "posicionslug", array()))), "html", null, true);
            echo " />
            <id>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</id>
            <updated>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "creado", array()), "format", array(0 => twig_constant("DATE_ATOM")), "method"), "html", null, true);
            echo "</updated>
            <summary type=\"xhtml\">
                <div xmlns=\"http://www.w3.org/1999/xhtml\">
                    ";
            // line 18
            if ($this->getAttribute($context["entity"], "logo", array())) {
                // line 19
                echo "                        <div>
                            <a href=";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "url", array()), "html", null, true);
                echo ">
                                <img src=\"http://";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "host", array()), "html", null, true);
                echo "/uploads/jobs/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "logo", array()), "html", null, true);
                echo " alt=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "compania", array()), "html", null, true);
                echo " logo\" />
                            </a>
                        </div>
                    ";
            }
            // line 25
            echo "                    <div>
                        ";
            // line 26
            echo nl2br(twig_escape_filter($this->env, $this->getAttribute($context["entity"], "descripcion", array()), "html", null, true));
            echo "
                    </div>
                    <h4>Como acceder a la oferta</h4>
                    <p>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "how_to_apply", array()), "html", null, true);
            echo "</p>
                </div>
            </summary>
            <author><name>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "compania", array()), "html", null, true);
            echo "</name></author>
        </entry>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "</feed>";
    }

    public function getTemplateName()
    {
        return "DsgagenciaBundle:Categoria:show.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 35,  104 => 32,  98 => 29,  92 => 26,  89 => 25,  78 => 21,  74 => 20,  71 => 19,  69 => 18,  63 => 15,  59 => 14,  55 => 13,  49 => 12,  46 => 11,  42 => 10,  37 => 8,  32 => 6,  28 => 5,  23 => 3,  19 => 1,);
    }
}
/* <?xml version="1.0" encoding="utf-8"?>*/
/* <feed xmlns="http://www.w3.org/2005/Atom">*/
/*     <title>DSG ({{ categoria.nombre }})</title>*/
/*     <subtitle>Últimos Trabajos</subtitle>*/
/*     <link href={{ url('DsgagenciaBundle_categoria', { 'slug': categoria.slug, '_format': 'atom' }) }} rel="self" />*/
/*     <updated>{{ lastUpdated }}</updated>*/
/*     <author><name>DSG</name></author>*/
/*     <id>{{ feedId }}</id>*/
/*  */
/*     {% for entity in categoria.trabajosactivos %}*/
/*         <entry>*/
/*             <title>{{ entity.posicion }} ({{ entity.localidad }})</title>*/
/*             <link href={{ url('trabajos_show', { 'id': entity.id, 'compania': entity.companiaslug, 'localidad': entity.localidadslug, 'posicion': entity.posicionslug }) }} />*/
/*             <id>{{ entity.id }}</id>*/
/*             <updated>{{ entity.creado.format(constant('DATE_ATOM')) }}</updated>*/
/*             <summary type="xhtml">*/
/*                 <div xmlns="http://www.w3.org/1999/xhtml">*/
/*                     {% if entity.logo %}*/
/*                         <div>*/
/*                             <a href={{ entity.url }}>*/
/*                                 <img src="http://{{ app.request.host }}/uploads/jobs/{{ entity.logo }} alt={{ entity.compania }} logo" />*/
/*                             </a>*/
/*                         </div>*/
/*                     {% endif %}*/
/*                     <div>*/
/*                         {{ entity.descripcion|nl2br }}*/
/*                     </div>*/
/*                     <h4>Como acceder a la oferta</h4>*/
/*                     <p>{{ entity.how_to_apply }}</p>*/
/*                 </div>*/
/*             </summary>*/
/*             <author><name>{{ entity.compania }}</name></author>*/
/*         </entry>*/
/*     {% endfor %}*/
/* </feed>*/
