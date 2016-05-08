<?php

/* DsgagenciaBundle::menu.html.twig */
class __TwigTemplate_bc2e3362d47044baf50c1de0bd210f0bfbf54eeb1723a57f4428ee144d01fd3d extends Twig_Template
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
        $__internal_d2407863f57194aaff82f6e93c0edbce4c84f4a72e4876ace73165e0a9bb050a = $this->env->getExtension("native_profiler");
        $__internal_d2407863f57194aaff82f6e93c0edbce4c84f4a72e4876ace73165e0a9bb050a->enter($__internal_d2407863f57194aaff82f6e93c0edbce4c84f4a72e4876ace73165e0a9bb050a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DsgagenciaBundle::menu.html.twig"));

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
\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("dsgagencia_index");
        echo "\">Inicio</a></li>
\t\t\t\t\t\t\t\t<li><a class=\"btn btn-primary\" href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("trabajos_new");
        echo "\" role=\"button\">Nueva Oferta</a><li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<form class=\"navbar-form navbar-right\" role=\"search\">
\t\t\t\t\t\t        <div class=\"form-group\">
\t\t\t\t\t\t        \t<input type=\"text\" class=\"form-control\" placeholder=\"Search\">
\t\t\t\t\t\t        </div>
\t\t\t\t\t\t        <button type=\"submit\" class=\"btn btn-default\">Buscar</button>
\t\t\t\t\t    \t</form>
\t\t\t\t\t\t</div><!--/.nav-collapse -->
\t\t\t\t\t</div>
\t\t\t\t</nav>";
        
        $__internal_d2407863f57194aaff82f6e93c0edbce4c84f4a72e4876ace73165e0a9bb050a->leave($__internal_d2407863f57194aaff82f6e93c0edbce4c84f4a72e4876ace73165e0a9bb050a_prof);

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
        return array (  45 => 16,  41 => 15,  34 => 11,  22 => 1,);
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
/* 								<li class="active"><a href="{{ path('dsgagencia_index') }}">Inicio</a></li>*/
/* 								<li><a class="btn btn-primary" href="{{ path('trabajos_new')}}" role="button">Nueva Oferta</a><li>*/
/* 							</ul>*/
/* 							<form class="navbar-form navbar-right" role="search">*/
/* 						        <div class="form-group">*/
/* 						        	<input type="text" class="form-control" placeholder="Search">*/
/* 						        </div>*/
/* 						        <button type="submit" class="btn btn-default">Buscar</button>*/
/* 					    	</form>*/
/* 						</div><!--/.nav-collapse -->*/
/* 					</div>*/
/* 				</nav>*/
