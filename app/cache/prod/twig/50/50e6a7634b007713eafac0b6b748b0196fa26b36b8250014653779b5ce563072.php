<?php

/* DsgagenciaBundle::layout.html.twig */
class __TwigTemplate_f92840e0776c6227835e90613b9d975d35afd21d615bfb7ab32f782dd657cb0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
            'formulario' => array($this, 'block_formulario'),
            'content' => array($this, 'block_content'),
            'javascripts2' => array($this, 'block_javascripts2'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
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
        // line 29
        echo "
         ";
        // line 30
        $this->displayBlock('javascripts', $context, $blocks);
        // line 44
        echo "    </head>
    <body>
      <!--Incluimos el menu-->
      ";
        // line 47
        $this->displayBlock('body', $context, $blocks);
        // line 51
        echo "      
        <div id=\"principal\">
          
        <div class=\"container\">
            <p>";
        // line 55
        echo $this->env->getExtension('breadcrumbs')->renderBreadcrumbs();
        echo "</p>
        </div>
        
        
        
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
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "get", array(0 => "historial_trabajos"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["trabajo"]) {
            // line 71
            echo "                    <li>
                      <u><a href=";
            // line 72
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
        // line 75
        echo "                  </ul>
                </div>
              </div>
            </div>
            
        ";
        // line 80
        $this->displayBlock('formulario', $context, $blocks);
        // line 82
        echo "        
        <div id=\"content\">
            ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 85
            echo "                <div class=\"flash_notice\">
                    ";
            // line 86
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                  </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "            
            ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 91
            echo "                <div class=\"flash_error\">
                    ";
            // line 92
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "            
            
            <!--Añadimos el contenido-->
            <div class=\"container\">
              ";
        // line 99
        $this->displayBlock('content', $context, $blocks);
        // line 101
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
        // line 114
        $this->displayBlock('javascripts2', $context, $blocks);
        // line 130
        echo "   </body>
</html>";
    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        // line 14
        echo "                DSG - Agencia de Colocación.
            ";
    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 19
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
            <!--BUscador-->
            <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/general.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
            
            <!--Pie de página fijo-->
            <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/sticky-footer-navbar.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
            
            <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
            <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/ie10-viewport-bug-workaround.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        ";
    }

    // line 30
    public function block_javascripts($context, array $blocks = array())
    {
        // line 31
        echo "         <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/dsgagencia/js/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
         <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/buscar.js"), "html", null, true);
        echo "\"></script>

        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src=\"../../assets/js/ie8-responsive-file-warning.js\"></script><![endif]-->
        <script src=\"https://getbootstrap.com/assets/js/ie-emulation-modes-warning.js\"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
          <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
        <![endif]-->
        ";
    }

    // line 47
    public function block_body($context, array $blocks = array())
    {
        // line 48
        echo "        ";
        echo twig_include($this->env, $context, "DsgagenciaBundle::menu.html.twig");
        echo "
        
      ";
    }

    // line 80
    public function block_formulario($context, array $blocks = array())
    {
        // line 81
        echo "        ";
    }

    // line 99
    public function block_content($context, array $blocks = array())
    {
        // line 100
        echo "              ";
    }

    // line 114
    public function block_javascripts2($context, array $blocks = array())
    {
        // line 115
        echo "      
          <!-- Bootstrap core JavaScript
          ================================================== -->
          <!-- Placed at the end of the document so the pages load faster -->
          <script> window.jQuery || document.write('<script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-2.2.4.min.js"), "html", null, true);
        echo "\">')</script>
          <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
          <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
          <script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/holder.min.js"), "html", null, true);
        echo "\"></script>
          <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
          <script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/ie10-viewport-bug-workaround.js"), "html", null, true);
        echo "\"></script>
          
           <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
          
          
      ";
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
        return array (  289 => 124,  284 => 122,  279 => 120,  275 => 119,  269 => 115,  266 => 114,  262 => 100,  259 => 99,  255 => 81,  252 => 80,  244 => 48,  241 => 47,  225 => 32,  220 => 31,  217 => 30,  211 => 27,  205 => 24,  199 => 21,  193 => 19,  190 => 18,  185 => 14,  182 => 13,  177 => 130,  175 => 114,  160 => 101,  158 => 99,  152 => 95,  143 => 92,  140 => 91,  136 => 90,  133 => 89,  124 => 86,  121 => 85,  117 => 84,  113 => 82,  111 => 80,  104 => 75,  91 => 72,  88 => 71,  84 => 70,  66 => 55,  60 => 51,  58 => 47,  53 => 44,  51 => 30,  48 => 29,  46 => 18,  42 => 16,  40 => 13,  26 => 1,);
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
/*          {% block javascripts %}*/
/*          <script src="{{ asset('bundles/dsgagencia/js/jquery-2.2.4.min.js') }}"></script>*/
/*          <script src="{{ asset('public/js/buscar.js') }}"></script>*/
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
/*     </head>*/
/*     <body>*/
/*       <!--Incluimos el menu-->*/
/*       {% block body %}*/
/*         {{ include('DsgagenciaBundle::menu.html.twig') }}*/
/*         */
/*       {% endblock %}*/
/*       */
/*         <div id="principal">*/
/*           */
/*         <div class="container">*/
/*             <p>{{wo_render_breadcrumbs() }}</p>*/
/*         </div>*/
/*         */
/*         */
/*         */
/*         <!--Cargamos el contenido de la página-->*/
/*           <div class="container marketing">*/
/*             */
/*             <div class="modal-dialog">*/
/*               <div class="modal-content">*/
/*                 <div class="modal-header">*/
/*                   <h4 class="modal-title">Últimas ofertas visitadas:</h4>*/
/*                 </div>*/
/*                 <div class="modal-body">*/
/*                   <ul class="list-inline">*/
/*                     {% for trabajo in app.session.get('historial_trabajos') %}*/
/*                     <li>*/
/*                       <u><a href={{ path('trabajos_show', { 'id': trabajo.id, 'compania': trabajo.companiaslug, 'localidad': trabajo.localidadslug, 'posicion': trabajo.posicionslug }) }}>{{ trabajo.posicion }} - {{ trabajo.compania }} </a></u> */
/*                     </li>*/
/*                     {% endfor %}*/
/*                   </ul>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             */
/*         {% block formulario %}*/
/*         {% endblock %}*/
/*         */
/*         <div id="content">*/
/*             {% for flashMessage in app.session.flashbag.get('notice') %}*/
/*                 <div class="flash_notice">*/
/*                     {{ flashMessage }}*/
/*                   </div>*/
/*             {% endfor %}*/
/*             */
/*             {% for flashMessage in app.session.flashbag.get('error') %}*/
/*                 <div class="flash_error">*/
/*                     {{ flashMessage }}*/
/*                 </div>*/
/*             {% endfor %}*/
/*             */
/*             */
/*             <!--Añadimos el contenido-->*/
/*             <div class="container">*/
/*               {% block content %}*/
/*               {% endblock %}*/
/*             </div>*/
/*           */
/*           </div>*/
/*           </div><!-- /.container -->*/
/*     </div>*/
/*         */
/*         <!-- FOOTER -->*/
/*         <footer class="clase-general">*/
/*           <p class="footer"><a class="pull-right" href="#">Subir</a>*/
/*             &copy; 2016 Compañia, Inc. &middot; <a href="#">Privacidad</a> &middot; <a href="#">Terms</a>*/
/*           </p>*/
/*         </footer>*/
/*        */
/*       {% block javascripts2 %}*/
/*       */
/*           <!-- Bootstrap core JavaScript*/
/*           ================================================== -->*/
/*           <!-- Placed at the end of the document so the pages load faster -->*/
/*           <script> window.jQuery || document.write('<script src="{{ asset('public/js/jquery-2.2.4.min.js') }}">')</script>*/
/*           <script src="{{ asset('public/js/bootstrap.min.js') }}"></script>*/
/*           <!-- Just to make our placeholder images work. Don't actually copy the next line! -->*/
/*           <script src="{{ asset('public/js/holder.min.js') }}"></script>*/
/*           <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->*/
/*           <script src="{{ asset('public/js/ie10-viewport-bug-workaround.js') }}"></script>*/
/*           */
/*            <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->*/
/*           */
/*           */
/*       {% endblock %}*/
/*    </body>*/
/* </html>*/
