<?php

/* DsgagenciaBundle::menu.html.twig */
class __TwigTemplate_57bb08c38cba0e93204ae7f01e8c6191f44537da56b9aa0f23b8fa277b49fdea extends Twig_Template
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
\t\t\t\t\t\t\t\t<li><a class=\"btn btn-primary\" href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("dsgagencia_contacto");
        echo "\" role=\"button\">Contacto</a><li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t\t\t\t\t<ul class=\"nav navbar-nav navbar-right\">
        \t\t\t\t\t\t<li><a class=\"btn btn-primary\" href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\" role=\"button\">Admin</a><li>
      \t\t\t\t\t\t</ul>
        \t\t\t\t\t\t<li><a class=\"btn btn-primary\" href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("afiliados_new");
        echo "\" role=\"button\">Registro</a><li>
      \t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<div class=\"buscador\">
\t\t\t\t\t\t\t\t<form action=";
        // line 26
        echo $this->env->getExtension('routing')->getPath("trabajos_buscar");
        echo " method=\"get\" class=\"navbar-form navbar-right\" role=\"buscador\">
\t\t\t\t\t\t\t    \t<div class=\"input-group\">
\t\t\t\t\t\t\t        \t<input type=\"text\" name=\"query\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "query"), "method"), "html", null, true);
        echo "\" id=\"buscador\" class=\"form-control\" placeholder=\"Buscar\">
\t\t\t\t\t\t\t        \t<!--<input type=\"submit\" value=\"search\" />-->
\t\t\t\t\t\t\t\t        <div class=\"input-group-btn\">
\t   \t\t\t\t\t\t\t\t\t\t<img id=\"loader\" src=";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/image/loader.gif"), "html", null, true);
        echo " style=\"vertical-align: middle; display: none\" />
\t   \t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-default hidden\" type=\"submit\"><i class=\"fa fa-search\"></i></button>
\t            \t\t\t\t\t\t</div>
            \t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t    \t</div>
\t\t\t\t\t\t</div><!--/.nav-collapse -->
\t\t\t\t\t</div>
\t\t\t\t</nav>";
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
        return array (  75 => 31,  69 => 28,  64 => 26,  58 => 23,  53 => 21,  46 => 17,  42 => 16,  38 => 15,  31 => 11,  19 => 1,);
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
/* 								<li><a class="btn btn-primary" href="{{ path('dsgagencia_contacto')}}" role="button">Contacto</a><li>*/
/* 							</ul>*/
/* 							<ul class="nav navbar-nav navbar-right">*/
/* 								<ul class="nav navbar-nav navbar-right">*/
/*         						<li><a class="btn btn-primary" href="{{ path('login')}}" role="button">Admin</a><li>*/
/*       						</ul>*/
/*         						<li><a class="btn btn-primary" href="{{ path('afiliados_new')}}" role="button">Registro</a><li>*/
/*       						</ul>*/
/* 							<div class="buscador">*/
/* 								<form action={{ path('trabajos_buscar') }} method="get" class="navbar-form navbar-right" role="buscador">*/
/* 							    	<div class="input-group">*/
/* 							        	<input type="text" name="query" value="{{ app.request.get('query') }}" id="buscador" class="form-control" placeholder="Buscar">*/
/* 							        	<!--<input type="submit" value="search" />-->*/
/* 								        <div class="input-group-btn">*/
/* 	   										<img id="loader" src={{ asset('public/image/loader.gif') }} style="vertical-align: middle; display: none" />*/
/* 	   										<button class="btn btn-default hidden" type="submit"><i class="fa fa-search"></i></button>*/
/* 	            						</div>*/
/*             						</div>*/
/* 									</form>*/
/* 								</div>*/
/* 					    	</div>*/
/* 						</div><!--/.nav-collapse -->*/
/* 					</div>*/
/* 				</nav>*/
