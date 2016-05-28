<?php

/* DsgagenciaBundle:Trabajos:listar.html.twig */
class __TwigTemplate_0111e2ca85688dede51c7fa6d5933e82e16c6be588d6ab8f3835bd16c7afe10f extends Twig_Template
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
        echo "<div class=\"row\">
  ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["trabajos"]) ? $context["trabajos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 3
            echo "      <div class=\"col-sm-6 col-md-3\">
        <div class=\"thumbnail\">
            ";
            // line 5
            $context["ruta"] = "/public/upload/";
            // line 6
            echo "            ";
            $context["imagen"] = $this->getAttribute($context["entity"], "logo", array());
            // line 7
            echo "            ";
            $context["imagenfinal"] = ((isset($context["ruta"]) ? $context["ruta"] : null) . (isset($context["imagen"]) ? $context["imagen"] : null));
            // line 8
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter((isset($context["imagenfinal"]) ? $context["imagenfinal"] : null), "my_thumb"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "compania", array()), "html", null, true);
            echo " logo\"/>
          <div class=\"caption\">
            <h3>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "compania", array()), "html", null, true);
            echo "</h3>
            <p>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "posicion", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "localidad", array()), "html", null, true);
            echo "</p>
            <p>
                <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("trabajos_show", array("id" => $this->getAttribute($context["entity"], "id", array()), "compania" => $this->getAttribute($context["entity"], "companiaSlug", array()), "localidad" => $this->getAttribute($context["entity"], "localidadSlug", array()), "posicion" => $this->getAttribute($context["entity"], "posicionSlug", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\" role=\"button\">Leer más</a> 
            </p>
          </div>
        </div>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "</div>";
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
        return array (  69 => 19,  57 => 13,  50 => 11,  46 => 10,  38 => 8,  35 => 7,  32 => 6,  30 => 5,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="row">*/
/*   {% for entity in trabajos %}*/
/*       <div class="col-sm-6 col-md-3">*/
/*         <div class="thumbnail">*/
/*             {% set ruta ="/public/upload/" %}*/
/*             {% set imagen = entity.logo %}*/
/*             {% set imagenfinal = ruta ~ imagen  %}*/
/*             <img src="{{ imagenfinal |imagine_filter('my_thumb')}}" alt="{{ entity.compania }} logo"/>*/
/*           <div class="caption">*/
/*             <h3>{{ entity.compania}}</h3>*/
/*             <p>{{ entity.posicion }} - {{ entity.localidad }}</p>*/
/*             <p>*/
/*                 <a href="{{ path('trabajos_show', { 'id': entity.id,'compania': entity.companiaSlug,'localidad': entity.localidadSlug,'posicion': entity.posicionSlug}) }}" class="btn btn-primary" role="button">Leer más</a> */
/*             </p>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     {% endfor %}*/
/* </div>*/
