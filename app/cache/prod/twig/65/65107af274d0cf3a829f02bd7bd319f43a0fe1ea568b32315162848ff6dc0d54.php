<?php

/* DsgagenciaBundle::listar.html.twig */
class __TwigTemplate_f346887b1d3f98e329759a1979e4135f23806171ba8d7a92cadae486461990c2 extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : null), "trabajosactivos", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 2
            echo "    <div class=\"panel-body\">
        <p><strong>";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "posicion", array()), "html", null, true);
            echo "</strong> - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "compania", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "localidad", array()), "html", null, true);
            echo "<a class=\"btn btn-default pull-right\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("trabajos_show", array("id" => $this->getAttribute($context["entity"], "id", array()), "compania" => $this->getAttribute($context["entity"], "companiaSlug", array()), "localidad" => $this->getAttribute($context["entity"], "localidadSlug", array()), "posicion" => $this->getAttribute($context["entity"], "posicionSlug", array()))), "html", null, true);
            echo "\" role=\"button\">Ver más</a></p>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "DsgagenciaBundle::listar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  23 => 2,  19 => 1,);
    }
}
/* {% for entity in categoria.trabajosactivos %}*/
/*     <div class="panel-body">*/
/*         <p><strong>{{ entity.posicion }}</strong> - {{ entity.compania}} - {{ entity.localidad }}<a class="btn btn-default pull-right" href="{{ path('trabajos_show', { 'id': entity.id,'compania': entity.companiaSlug,'localidad': entity.localidadSlug,'posicion': entity.posicionSlug}) }}" role="button">Ver más</a></p>*/
/*     </div>*/
/* {% endfor %}*/
