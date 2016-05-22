<?php

/* DsgagenciaBundle::listar.html.twig */
class __TwigTemplate_61d031c5551dbbe0aae7e3e427c1c9688d25a7f5e5e840e27ff565c59aee2dad extends Twig_Template
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
        $__internal_749dd8e42ae62e56ed28140c58e4a96535e03120903a9c13f8e06a201e5c7d1d = $this->env->getExtension("native_profiler");
        $__internal_749dd8e42ae62e56ed28140c58e4a96535e03120903a9c13f8e06a201e5c7d1d->enter($__internal_749dd8e42ae62e56ed28140c58e4a96535e03120903a9c13f8e06a201e5c7d1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DsgagenciaBundle::listar.html.twig"));

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
            echo " logo\" />
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
            <p>
                <a href=\"";
            // line 10
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
        // line 16
        echo "</div>";
        
        $__internal_749dd8e42ae62e56ed28140c58e4a96535e03120903a9c13f8e06a201e5c7d1d->leave($__internal_749dd8e42ae62e56ed28140c58e4a96535e03120903a9c13f8e06a201e5c7d1d_prof);

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
        return array (  64 => 16,  52 => 10,  45 => 8,  41 => 7,  33 => 5,  29 => 3,  25 => 2,  22 => 1,);
    }
}
/* <div class="row">*/
/*   {% for entity in trabajos %}*/
/*       <div class="col-sm-6 col-md-3">*/
/*         <div class="thumbnail">*/
/*           <img src="{{ asset('public/upload/') }}{{ entity.logo }}" alt="{{ entity.compania }} logo" />*/
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
