<?php

/* DsgagenciaBundle::menu.html.twig */
class __TwigTemplate_c506b30bbb7fa593a466a1bf88a83409e2157e8ba7a4a91d1a4642b825926555 extends Twig_Template
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
        $__internal_0c82207dd8711ed8e836915c24556943bebed23af4b4512582c7ba1f189b0591 = $this->env->getExtension("native_profiler");
        $__internal_0c82207dd8711ed8e836915c24556943bebed23af4b4512582c7ba1f189b0591->enter($__internal_0c82207dd8711ed8e836915c24556943bebed23af4b4512582c7ba1f189b0591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DsgagenciaBundle::menu.html.twig"));

        // line 1
        echo " <!-- Fixed navbar -->
\t\t\t\t<nav class=\"navbar navbar-default navbar-fixed-top\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
\t\t\t\t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("dsgagencia_index");
        echo "\">DSG Agencia Colocación</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"navbar\" class=\"navbar-collapse collapse\">
\t\t\t\t\t\t\t<ul class=\"nav navbar-nav \">
\t\t\t\t\t\t\t\t<li><a class=\"btn btn-primary\" href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("dsgagencia_index");
        echo "\">Inicio</a></li>
\t\t\t\t\t\t\t\t<li><a class=\"btn btn-primary\" href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("trabajos_new");
        echo "\" role=\"button\">Nueva Oferta</a><li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<ul class=\"nav navbar-nav navbar-right\">
        \t\t\t\t\t\t<li><a class=\"btn btn-primary\" href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("afiliados_new");
        echo "\" role=\"button\">Registro</a><li>
      \t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<div class=\"buscador\">
\t\t\t\t\t\t\t\t<form action=";
        // line 22
        echo $this->env->getExtension('routing')->getPath("trabajos_buscar");
        echo " method=\"get\" class=\"navbar-form navbar-right\" role=\"search\">
\t\t\t\t\t\t\t    \t<div class=\"form-group\">
\t\t\t\t\t\t\t        \t<input type=\"text\" name=\"query\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "query"), "method"), "html", null, true);
        echo "\" id=\"buscador\" class=\"form-control\" placeholder=\"Buscar\" required>
\t\t\t\t\t\t\t        \t<!--<input type=\"submit\" value=\"search\" />-->
            \t\t\t\t\t\t\t<img id=\"loader\" src=";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/image/loader.gif"), "html", null, true);
        echo " style=\"vertical-align: middle; display: none\" />
            \t\t\t\t\t\t</div>
            \t\t\t\t\t\t<input type=\"submit\" value=\"Buscar\" class=\"btn btn-default\"></button>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div
\t\t\t\t\t\t    </form>
\t\t\t\t\t    \t</div>
\t\t\t\t\t\t</div><!--/.nav-collapse -->
\t\t\t\t\t</div>
\t\t\t\t</nav>";
        
        $__internal_0c82207dd8711ed8e836915c24556943bebed23af4b4512582c7ba1f189b0591->leave($__internal_0c82207dd8711ed8e836915c24556943bebed23af4b4512582c7ba1f189b0591_prof);

    }

    public function getTemplateName()
    {
        return "DsgagenciaBundle::menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 26,  62 => 24,  57 => 22,  51 => 19,  45 => 16,  41 => 15,  34 => 11,  22 => 1,);
    }
}
/*  <!-- Fixed navbar -->*/
/* 				<nav class="navbar navbar-default navbar-fixed-top">*/
/* 					<div class="container">*/
/* 						<div class="navbar-header">*/
/* 							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">*/
/* 								<span class="sr-only">Toggle navigation</span>*/
/* 								<span class="icon-bar"></span>*/
/* 								<span class="icon-bar"></span>*/
/* 								<span class="icon-bar"></span>*/
/* 							</button>*/
/* 							<a class="navbar-brand" href="{{ path('dsgagencia_index') }}">DSG Agencia Colocación</a>*/
/* 						</div>*/
/* 						<div id="navbar" class="navbar-collapse collapse">*/
/* 							<ul class="nav navbar-nav ">*/
/* 								<li><a class="btn btn-primary" href="{{ path('dsgagencia_index') }}">Inicio</a></li>*/
/* 								<li><a class="btn btn-primary" href="{{ path('trabajos_new')}}" role="button">Nueva Oferta</a><li>*/
/* 							</ul>*/
/* 							<ul class="nav navbar-nav navbar-right">*/
/*         						<li><a class="btn btn-primary" href="{{ path('afiliados_new')}}" role="button">Registro</a><li>*/
/*       						</ul>*/
/* 							<div class="buscador">*/
/* 								<form action={{ path('trabajos_buscar') }} method="get" class="navbar-form navbar-right" role="search">*/
/* 							    	<div class="form-group">*/
/* 							        	<input type="text" name="query" value="{{ app.request.get('query') }}" id="buscador" class="form-control" placeholder="Buscar" required>*/
/* 							        	<!--<input type="submit" value="search" />-->*/
/*             							<img id="loader" src={{ asset('public/image/loader.gif') }} style="vertical-align: middle; display: none" />*/
/*             						</div>*/
/*             						<input type="submit" value="Buscar" class="btn btn-default"></button>*/
/* 								</form>*/
/* 							</div*/
/* 						    </form>*/
/* 					    	</div>*/
/* 						</div><!--/.nav-collapse -->*/
/* 					</div>*/
/* 				</nav>*/
