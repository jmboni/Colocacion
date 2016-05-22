<?php

/* DsgagenciaBundle::layout.html.twig */
class __TwigTemplate_3fcfebb10c3638380d68e508042fac1d6d362e92de5e21cc5b8ac67b85e8208c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascriptsie' => array($this, 'block_javascriptsie'),
            'body' => array($this, 'block_body'),
            'formulario' => array($this, 'block_formulario'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3d2b5dd6cbc13fd3c0b24124016a5bebc217e7f415bf90ab9c01711a1749550a = $this->env->getExtension("native_profiler");
        $__internal_3d2b5dd6cbc13fd3c0b24124016a5bebc217e7f415bf90ab9c01711a1749550a->enter($__internal_3d2b5dd6cbc13fd3c0b24124016a5bebc217e7f415bf90ab9c01711a1749550a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DsgagenciaBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
        <link rel=\"icon\" href=\"https://getbootstrap.com/favicon.ico\">

       <title>
            ";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        // line 16
        echo "        </title>
        
        ";
        // line 18
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 30
        echo "
         ";
        // line 31
        $this->displayBlock('javascriptsie', $context, $blocks);
        // line 43
        echo "
  </head>
    </head>
    <body>
      <!--Incluimos el menu-->
      ";
        // line 48
        $this->displayBlock('body', $context, $blocks);
        // line 51
        echo "      <!--Incluimos el buscador-->
      ";
        // line 52
        $this->displayBlock('formulario', $context, $blocks);
        // line 53
        echo "      <div id=\"principal\">
        <!--Cargamos el contenido de la página-->
        <div class=\"container marketing\">
          
          <div class=\"modal-dialog\">
            <div class=\"modal-content\">
              <div class=\"modal-header\">
                <h4 class=\"modal-title\">Últimas ofertas visitadas:</h4>
              </div>
              <div class=\"modal-body\">
                <ul class=\"list-inline\">
                  ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "historial_trabajos"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["trabajo"]) {
            // line 65
            echo "                  <li>
                    <u><a href=";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("trabajos_show", array("id" => $this->getAttribute($context["trabajo"], "id", array()), "compania" => $this->getAttribute($context["trabajo"], "companiaslug", array()), "localidad" => $this->getAttribute($context["trabajo"], "localidadslug", array()), "posicion" => $this->getAttribute($context["trabajo"], "posicionslug", array()))), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["trabajo"], "posicion", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["trabajo"], "compania", array()), "html", null, true);
            echo " </a></u> 
                  </li>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trabajo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "                </ul>
              </div>
            </div>
          </div>
     
          ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 75
            echo "            <div>
              ";
            // line 76
            echo twig_escape_filter($this->env, (isset($context["flassMessage"]) ? $context["flassMessage"] : $this->getContext($context, "flassMessage")), "html", null, true);
            echo "
            </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "          <div id=\"content\">
            ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 81
            echo "              <div class=\"flash_notice\">
                ";
            // line 82
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
              </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 86
            echo "              <div class=\"flash_error\">
                ";
            // line 87
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
              </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "            
            <!--Añadimos el contenido-->
            <div class=\"content\">
              ";
        // line 93
        $this->displayBlock('content', $context, $blocks);
        // line 95
        echo "            </div>
          </div>
          </div><!-- /.container -->
        </div>
        
        <!-- FOOTER -->
        <footer class=\"clase-general\">
          <p class=\"footer\"><a class=\"pull-right\" href=\"#\">Subir</a>
            &copy; 2016 Compañia, Inc. &middot; <a href=\"#\">Privacidad</a> &middot; <a href=\"#\">Terms</a>
          </p>
        </footer>
       
      ";
        // line 107
        $this->displayBlock('javascripts', $context, $blocks);
        // line 137
        echo "   </body>
</html>";
        
        $__internal_3d2b5dd6cbc13fd3c0b24124016a5bebc217e7f415bf90ab9c01711a1749550a->leave($__internal_3d2b5dd6cbc13fd3c0b24124016a5bebc217e7f415bf90ab9c01711a1749550a_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_43c0864afe7e17dc663910ee2da5f4bbf10a1a51a890a5cf52f7ddcab143fde0 = $this->env->getExtension("native_profiler");
        $__internal_43c0864afe7e17dc663910ee2da5f4bbf10a1a51a890a5cf52f7ddcab143fde0->enter($__internal_43c0864afe7e17dc663910ee2da5f4bbf10a1a51a890a5cf52f7ddcab143fde0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 14
        echo "                DSG - Agencia de Colocación.
            ";
        
        $__internal_43c0864afe7e17dc663910ee2da5f4bbf10a1a51a890a5cf52f7ddcab143fde0->leave($__internal_43c0864afe7e17dc663910ee2da5f4bbf10a1a51a890a5cf52f7ddcab143fde0_prof);

    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_162d39d2fb5766e21d91bda0d70eb6fc3229d308cc04d22efe03f61fde69e936 = $this->env->getExtension("native_profiler");
        $__internal_162d39d2fb5766e21d91bda0d70eb6fc3229d308cc04d22efe03f61fde69e936->enter($__internal_162d39d2fb5766e21d91bda0d70eb6fc3229d308cc04d22efe03f61fde69e936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 19
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
            
            <!--BUscador-->
            <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/general.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
            
            <!--Pie de página fijo-->
            <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/sticky-footer-navbar.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
            
            <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
            <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/ie10-viewport-bug-workaround.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        ";
        
        $__internal_162d39d2fb5766e21d91bda0d70eb6fc3229d308cc04d22efe03f61fde69e936->leave($__internal_162d39d2fb5766e21d91bda0d70eb6fc3229d308cc04d22efe03f61fde69e936_prof);

    }

    // line 31
    public function block_javascriptsie($context, array $blocks = array())
    {
        $__internal_294a157798ec593359ab9e6c6a480124be515306cacb4b8f07f9e44f24e57991 = $this->env->getExtension("native_profiler");
        $__internal_294a157798ec593359ab9e6c6a480124be515306cacb4b8f07f9e44f24e57991->enter($__internal_294a157798ec593359ab9e6c6a480124be515306cacb4b8f07f9e44f24e57991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascriptsie"));

        // line 32
        echo "
        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src=\"../../assets/js/ie8-responsive-file-warning.js\"></script><![endif]-->
        <script src=\"https://getbootstrap.com/assets/js/ie-emulation-modes-warning.js\"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
          <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
        <![endif]-->
        ";
        
        $__internal_294a157798ec593359ab9e6c6a480124be515306cacb4b8f07f9e44f24e57991->leave($__internal_294a157798ec593359ab9e6c6a480124be515306cacb4b8f07f9e44f24e57991_prof);

    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e2643914f16d710953b1a29dca0dfe2a753c060d48ee03212311e0415de4b74 = $this->env->getExtension("native_profiler");
        $__internal_2e2643914f16d710953b1a29dca0dfe2a753c060d48ee03212311e0415de4b74->enter($__internal_2e2643914f16d710953b1a29dca0dfe2a753c060d48ee03212311e0415de4b74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 49
        echo "        ";
        echo twig_include($this->env, $context, "DsgagenciaBundle::menu.html.twig");
        echo "
      ";
        
        $__internal_2e2643914f16d710953b1a29dca0dfe2a753c060d48ee03212311e0415de4b74->leave($__internal_2e2643914f16d710953b1a29dca0dfe2a753c060d48ee03212311e0415de4b74_prof);

    }

    // line 52
    public function block_formulario($context, array $blocks = array())
    {
        $__internal_85bab64e0593d0ffb5a41f9d931cdb1b918d207c18eac9589e9584b95f09f7e5 = $this->env->getExtension("native_profiler");
        $__internal_85bab64e0593d0ffb5a41f9d931cdb1b918d207c18eac9589e9584b95f09f7e5->enter($__internal_85bab64e0593d0ffb5a41f9d931cdb1b918d207c18eac9589e9584b95f09f7e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulario"));

        
        $__internal_85bab64e0593d0ffb5a41f9d931cdb1b918d207c18eac9589e9584b95f09f7e5->leave($__internal_85bab64e0593d0ffb5a41f9d931cdb1b918d207c18eac9589e9584b95f09f7e5_prof);

    }

    // line 93
    public function block_content($context, array $blocks = array())
    {
        $__internal_348007722f8ac1b5057b7c91209554bcde0ef9ee211f2d456a8045dd84839ae3 = $this->env->getExtension("native_profiler");
        $__internal_348007722f8ac1b5057b7c91209554bcde0ef9ee211f2d456a8045dd84839ae3->enter($__internal_348007722f8ac1b5057b7c91209554bcde0ef9ee211f2d456a8045dd84839ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 94
        echo "              ";
        
        $__internal_348007722f8ac1b5057b7c91209554bcde0ef9ee211f2d456a8045dd84839ae3->leave($__internal_348007722f8ac1b5057b7c91209554bcde0ef9ee211f2d456a8045dd84839ae3_prof);

    }

    // line 107
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_659e06b75868da65b1e0f54f60e63e468b2b16779ef5add53223d4882cb2829e = $this->env->getExtension("native_profiler");
        $__internal_659e06b75868da65b1e0f54f60e63e468b2b16779ef5add53223d4882cb2829e->enter($__internal_659e06b75868da65b1e0f54f60e63e468b2b16779ef5add53223d4882cb2829e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 108
        echo "          <!-- Bootstrap core JavaScript
          ================================================== -->
          <!-- Placed at the end of the document so the pages load faster -->
          <script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-1.12.3.min.js"), "html", null, true);
        echo "\"></script>
          <script>window.jQuery || document.write('<script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-1.12.3.min.js"), "html", null, true);
        echo "\"><\\/script>')</script>
          <script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
          <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
          <script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/holder.min.js"), "html", null, true);
        echo "\"></script>
          <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
          <script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/ie10-viewport-bug-workaround.js"), "html", null, true);
        echo "\"></script>
          
           <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
          <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/buscar.js"), "html", null, true);
        echo "\"></script>
          
          <script type=\"text/javascript\">
            \$(document).ready(function(){
            var cambio = false;
            \$('.nav li a').each(function(index) {
            if(this.href.trim() == window.location){
                \$(this).parent().addClass(\"active\");
                cambio = true;
            }
            });
            if(!cambio){
              \$('.nav li:first').addClass(\"active\");
            }
            });
          </script>
      ";
        
        $__internal_659e06b75868da65b1e0f54f60e63e468b2b16779ef5add53223d4882cb2829e->leave($__internal_659e06b75868da65b1e0f54f60e63e468b2b16779ef5add53223d4882cb2829e_prof);

    }

    public function getTemplateName()
    {
        return "DsgagenciaBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  339 => 120,  333 => 117,  328 => 115,  323 => 113,  319 => 112,  315 => 111,  310 => 108,  304 => 107,  297 => 94,  291 => 93,  280 => 52,  270 => 49,  264 => 48,  247 => 32,  241 => 31,  232 => 28,  226 => 25,  220 => 22,  213 => 19,  207 => 18,  199 => 14,  193 => 13,  185 => 137,  183 => 107,  169 => 95,  167 => 93,  162 => 90,  153 => 87,  150 => 86,  145 => 85,  136 => 82,  133 => 81,  129 => 80,  126 => 79,  117 => 76,  114 => 75,  110 => 74,  103 => 69,  90 => 66,  87 => 65,  83 => 64,  70 => 53,  68 => 52,  65 => 51,  63 => 48,  56 => 43,  54 => 31,  51 => 30,  49 => 18,  45 => 16,  43 => 13,  29 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="es">*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->*/
/*         <meta name="description" content="">*/
/*         <meta name="author" content="">*/
/*         <link rel="icon" href="https://getbootstrap.com/favicon.ico">*/
/* */
/*        <title>*/
/*             {% block title %}*/
/*                 DSG - Agencia de Colocación.*/
/*             {% endblock %}*/
/*         </title>*/
/*         */
/*         {% block stylesheets %}*/
/*             <link rel="stylesheet" href="{{ asset('public/css/bootstrap.min.css') }}" type="text/css" media="all" />*/
/*             */
/*             <!--BUscador-->*/
/*             <link rel="stylesheet" href="{{ asset('public/css/general.css') }}" type="text/css" media="all" />*/
/*             */
/*             <!--Pie de página fijo-->*/
/*             <link rel="stylesheet" href="{{ asset('public/css/sticky-footer-navbar.css') }}" type="text/css" media="all" />*/
/*             */
/*             <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->*/
/*             <link rel="stylesheet" href="{{ asset('public/css/ie10-viewport-bug-workaround.css') }}" type="text/css" media="all" />*/
/*         {% endblock %}*/
/* */
/*          {% block javascriptsie %}*/
/* */
/*         <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->*/
/*         <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->*/
/*         <script src="https://getbootstrap.com/assets/js/ie-emulation-modes-warning.js"></script>*/
/* */
/*         <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->*/
/*         <!--[if lt IE 9]>*/
/*           <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>*/
/*           <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/*         <![endif]-->*/
/*         {% endblock %}*/
/* */
/*   </head>*/
/*     </head>*/
/*     <body>*/
/*       <!--Incluimos el menu-->*/
/*       {% block body %}*/
/*         {{ include('DsgagenciaBundle::menu.html.twig') }}*/
/*       {% endblock %}*/
/*       <!--Incluimos el buscador-->*/
/*       {% block formulario %}{% endblock %}*/
/*       <div id="principal">*/
/*         <!--Cargamos el contenido de la página-->*/
/*         <div class="container marketing">*/
/*           */
/*           <div class="modal-dialog">*/
/*             <div class="modal-content">*/
/*               <div class="modal-header">*/
/*                 <h4 class="modal-title">Últimas ofertas visitadas:</h4>*/
/*               </div>*/
/*               <div class="modal-body">*/
/*                 <ul class="list-inline">*/
/*                   {% for trabajo in app.session.get('historial_trabajos') %}*/
/*                   <li>*/
/*                     <u><a href={{ path('trabajos_show', { 'id': trabajo.id, 'compania': trabajo.companiaslug, 'localidad': trabajo.localidadslug, 'posicion': trabajo.posicionslug }) }}>{{ trabajo.posicion }} - {{ trabajo.compania }} </a></u> */
/*                   </li>*/
/*                   {% endfor %}*/
/*                 </ul>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*      */
/*           {% for flashMessage in app.session.flashbag.get('notice') %}*/
/*             <div>*/
/*               {{ flassMessage }}*/
/*             </div>*/
/*           {% endfor %}*/
/*           <div id="content">*/
/*             {% for flashMessage in app.session.flashbag.get('notice') %}*/
/*               <div class="flash_notice">*/
/*                 {{ flashMessage }}*/
/*               </div>*/
/*             {% endfor %}*/
/*             {% for flashMessage in app.session.flashbag.get('error') %}*/
/*               <div class="flash_error">*/
/*                 {{ flashMessage }}*/
/*               </div>*/
/*             {% endfor %}*/
/*             */
/*             <!--Añadimos el contenido-->*/
/*             <div class="content">*/
/*               {% block content %}*/
/*               {% endblock %}*/
/*             </div>*/
/*           </div>*/
/*           </div><!-- /.container -->*/
/*         </div>*/
/*         */
/*         <!-- FOOTER -->*/
/*         <footer class="clase-general">*/
/*           <p class="footer"><a class="pull-right" href="#">Subir</a>*/
/*             &copy; 2016 Compañia, Inc. &middot; <a href="#">Privacidad</a> &middot; <a href="#">Terms</a>*/
/*           </p>*/
/*         </footer>*/
/*        */
/*       {% block javascripts %}*/
/*           <!-- Bootstrap core JavaScript*/
/*           ================================================== -->*/
/*           <!-- Placed at the end of the document so the pages load faster -->*/
/*           <script src="{{ asset('public/js/jquery-1.12.3.min.js') }}"></script>*/
/*           <script>window.jQuery || document.write('<script src="{{ asset('public/js/jquery-1.12.3.min.js') }}"><\/script>')</script>*/
/*           <script src="{{ asset('public/js/bootstrap.min.js') }}"></script>*/
/*           <!-- Just to make our placeholder images work. Don't actually copy the next line! -->*/
/*           <script src="{{ asset('public/js/holder.min.js') }}"></script>*/
/*           <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->*/
/*           <script src="{{ asset('public/js/ie10-viewport-bug-workaround.js') }}"></script>*/
/*           */
/*            <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->*/
/*           <script src="{{ asset('public/js/buscar.js') }}"></script>*/
/*           */
/*           <script type="text/javascript">*/
/*             $(document).ready(function(){*/
/*             var cambio = false;*/
/*             $('.nav li a').each(function(index) {*/
/*             if(this.href.trim() == window.location){*/
/*                 $(this).parent().addClass("active");*/
/*                 cambio = true;*/
/*             }*/
/*             });*/
/*             if(!cambio){*/
/*               $('.nav li:first').addClass("active");*/
/*             }*/
/*             });*/
/*           </script>*/
/*       {% endblock %}*/
/*    </body>*/
/* </html>*/
