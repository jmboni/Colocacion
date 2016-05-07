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
        $__internal_1462d7fb1a82f9a2068b1afdc922b0d2f868cd0f8c4499774f9ada84fdac5194 = $this->env->getExtension("native_profiler");
        $__internal_1462d7fb1a82f9a2068b1afdc922b0d2f868cd0f8c4499774f9ada84fdac5194->enter($__internal_1462d7fb1a82f9a2068b1afdc922b0d2f868cd0f8c4499774f9ada84fdac5194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DsgagenciaBundle::menu.html.twig"));

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
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<form class=\"navbar-form navbar-right\">
\t\t\t\t\t\t\t\t <a class=\"btn btn-primary\" href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("trabajos_new");
        echo "\" role=\"button\">Nueva Oferta</a>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div><!--/.nav-collapse -->
\t\t\t\t\t</div>
\t\t\t\t</nav>";
        
        $__internal_1462d7fb1a82f9a2068b1afdc922b0d2f868cd0f8c4499774f9ada84fdac5194->leave($__internal_1462d7fb1a82f9a2068b1afdc922b0d2f868cd0f8c4499774f9ada84fdac5194_prof);

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
        return array (  47 => 18,  41 => 15,  34 => 11,  22 => 1,);
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
/* 							</ul>*/
/* 							<form class="navbar-form navbar-right">*/
/* 								 <a class="btn btn-primary" href="{{ path('trabajos_new')}}" role="button">Nueva Oferta</a>*/
/* 							</form>*/
/* 						</div><!--/.nav-collapse -->*/
/* 					</div>*/
/* 				</nav>*/
