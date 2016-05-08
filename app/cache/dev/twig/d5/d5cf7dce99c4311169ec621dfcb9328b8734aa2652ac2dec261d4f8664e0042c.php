<?php

/* DsgagenciaBundle::listar.html.twig */
class __TwigTemplate_9928a5d1d1ca927652b80e7a881c80d7df5b463dde1ca00674f9f6a4d495d55a extends Twig_Template
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
        $__internal_72ecda7fb7c04c32a0614a9c6c2b02c79514db81ee1019d367e19b70d7dfa63b = $this->env->getExtension("native_profiler");
        $__internal_72ecda7fb7c04c32a0614a9c6c2b02c79514db81ee1019d367e19b70d7dfa63b->enter($__internal_72ecda7fb7c04c32a0614a9c6c2b02c79514db81ee1019d367e19b70d7dfa63b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DsgagenciaBundle::listar.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : $this->getContext($context, "categoria")), "trabajosactivos", array()));
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
        
        $__internal_72ecda7fb7c04c32a0614a9c6c2b02c79514db81ee1019d367e19b70d7dfa63b->leave($__internal_72ecda7fb7c04c32a0614a9c6c2b02c79514db81ee1019d367e19b70d7dfa63b_prof);

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
        return array (  29 => 3,  26 => 2,  22 => 1,);
    }
}
/* {% for entity in categoria.trabajosactivos %}*/
/*     <div class="panel-body">*/
/*         <p><strong>{{ entity.posicion }}</strong> - {{ entity.compania}} - {{ entity.localidad }}<a class="btn btn-default pull-right" href="{{ path('trabajos_show', { 'id': entity.id,'compania': entity.companiaSlug,'localidad': entity.localidadSlug,'posicion': entity.posicionSlug}) }}" role="button">Ver más</a></p>*/
/*     </div>*/
/* {% endfor %}*/
