<?php

/* DsgagenciaBundle:Trabajos:listar.html.twig */
class __TwigTemplate_ba01cf5694c33013219684b1b8a027e1eaa69c99c75ccfe373baa974b5560ec0 extends Twig_Template
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
        $__internal_82209717c2fc6a37060ead676616130c0c62385e372a2a1e3193bacdd3ea8210 = $this->env->getExtension("native_profiler");
        $__internal_82209717c2fc6a37060ead676616130c0c62385e372a2a1e3193bacdd3ea8210->enter($__internal_82209717c2fc6a37060ead676616130c0c62385e372a2a1e3193bacdd3ea8210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DsgagenciaBundle:Trabajos:listar.html.twig"));

        // line 1
        echo "<div class=\"row\">
  ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["trabajos"]) ? $context["trabajos"] : $this->getContext($context, "trabajos")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 3
            echo "      <div class=\"col-sm-6 col-md-3\">
        <div class=\"thumbnail\">
            <img src=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/upload/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "logo", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "compania", array()), "html", null, true);
            echo " logo\" style=\"max-height: 58px; width: auto;\"/>
          <div class=\"caption\">
            <h3>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "compania", array()), "html", null, true);
            echo "</h3>
            <p>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "posicion", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "localidad", array()), "html", null, true);
            echo "</p>
            <p><a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("trabajos_show", array("id" => $this->getAttribute($context["entity"], "id", array()), "compania" => $this->getAttribute($context["entity"], "companiaSlug", array()), "localidad" => $this->getAttribute($context["entity"], "localidadSlug", array()), "posicion" => $this->getAttribute($context["entity"], "posicionSlug", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\" role=\"button\">Leer más</a> </p>
          </div>
        </div>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "</div>";
        
        $__internal_82209717c2fc6a37060ead676616130c0c62385e372a2a1e3193bacdd3ea8210->leave($__internal_82209717c2fc6a37060ead676616130c0c62385e372a2a1e3193bacdd3ea8210_prof);

    }

    public function getTemplateName()
    {
        return "DsgagenciaBundle:Trabajos:listar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 14,  51 => 9,  45 => 8,  41 => 7,  33 => 5,  29 => 3,  25 => 2,  22 => 1,);
    }
}
/* <div class="row">*/
/*   {% for entity in trabajos %}*/
/*       <div class="col-sm-6 col-md-3">*/
/*         <div class="thumbnail">*/
/*             <img src="{{ asset('public/upload/') }}{{ entity.logo }}" alt="{{ entity.compania }} logo" style="max-height: 58px; width: auto;"/>*/
/*           <div class="caption">*/
/*             <h3>{{ entity.compania}}</h3>*/
/*             <p>{{ entity.posicion }} - {{ entity.localidad }}</p>*/
/*             <p><a href="{{ path('trabajos_show', { 'id': entity.id,'compania': entity.companiaSlug,'localidad': entity.localidadSlug,'posicion': entity.posicionSlug}) }}" class="btn btn-primary" role="button">Leer más</a> </p>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     {% endfor %}*/
/* </div>*/
