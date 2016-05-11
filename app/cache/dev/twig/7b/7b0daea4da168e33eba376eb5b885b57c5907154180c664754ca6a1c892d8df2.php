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
        $__internal_45b6c7d5486605d437097aae457d6f7b14f7cc87a78d5e7ef829de30b012ea9c = $this->env->getExtension("native_profiler");
        $__internal_45b6c7d5486605d437097aae457d6f7b14f7cc87a78d5e7ef829de30b012ea9c->enter($__internal_45b6c7d5486605d437097aae457d6f7b14f7cc87a78d5e7ef829de30b012ea9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DsgagenciaBundle::layout.html.twig"));

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
        echo "      <!--Cargamos el contenido de la página-->
      <div class=\"container marketing\">
        <div id=\"content\">
          ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 57
            echo "            <div class=\"flash_notice\">
              ";
            // line 58
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 62
            echo "            <div class=\"flash_error\">
              ";
            // line 63
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "          
          <!--Añadimos el contenido-->
          <div class=\"content\">
            ";
        // line 69
        $this->displayBlock('content', $context, $blocks);
        // line 71
        echo "          </div>
        </div>
        </div><!-- /.container -->
        
        
        <!-- FOOTER -->
        <footer class=\"clase-general\">
          <p class=\"footer\"><a class=\"pull-right\" href=\"#\">Back to top</a>
            &copy; 2015 Company, Inc. &middot; <a href=\"#\">Privacy</a> &middot; <a href=\"#\">Terms</a>
          </p>
        </footer>
       
      ";
        // line 83
        $this->displayBlock('javascripts', $context, $blocks);
        // line 95
        echo "   </body>
</html>";
        
        $__internal_45b6c7d5486605d437097aae457d6f7b14f7cc87a78d5e7ef829de30b012ea9c->leave($__internal_45b6c7d5486605d437097aae457d6f7b14f7cc87a78d5e7ef829de30b012ea9c_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_1ce90ff7d5cc23308b9500ca26b4d01399e4762099ee81f3c3c45a37b18dcdfd = $this->env->getExtension("native_profiler");
        $__internal_1ce90ff7d5cc23308b9500ca26b4d01399e4762099ee81f3c3c45a37b18dcdfd->enter($__internal_1ce90ff7d5cc23308b9500ca26b4d01399e4762099ee81f3c3c45a37b18dcdfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 14
        echo "                DSG - Agencia de Colocación.
            ";
        
        $__internal_1ce90ff7d5cc23308b9500ca26b4d01399e4762099ee81f3c3c45a37b18dcdfd->leave($__internal_1ce90ff7d5cc23308b9500ca26b4d01399e4762099ee81f3c3c45a37b18dcdfd_prof);

    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0340274ebbf55602bdac02e887ea7bc28f38fdeb99b1d71f652851059224d550 = $this->env->getExtension("native_profiler");
        $__internal_0340274ebbf55602bdac02e887ea7bc28f38fdeb99b1d71f652851059224d550->enter($__internal_0340274ebbf55602bdac02e887ea7bc28f38fdeb99b1d71f652851059224d550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 19
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
            
            <!--BUscador-->
            <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/buscador.css"), "html", null, true);
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
        
        $__internal_0340274ebbf55602bdac02e887ea7bc28f38fdeb99b1d71f652851059224d550->leave($__internal_0340274ebbf55602bdac02e887ea7bc28f38fdeb99b1d71f652851059224d550_prof);

    }

    // line 31
    public function block_javascriptsie($context, array $blocks = array())
    {
        $__internal_82fa2bd2c86eeb25fd231f17f077134951423c40ccdaa6e2321e1ed98a839766 = $this->env->getExtension("native_profiler");
        $__internal_82fa2bd2c86eeb25fd231f17f077134951423c40ccdaa6e2321e1ed98a839766->enter($__internal_82fa2bd2c86eeb25fd231f17f077134951423c40ccdaa6e2321e1ed98a839766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascriptsie"));

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
        
        $__internal_82fa2bd2c86eeb25fd231f17f077134951423c40ccdaa6e2321e1ed98a839766->leave($__internal_82fa2bd2c86eeb25fd231f17f077134951423c40ccdaa6e2321e1ed98a839766_prof);

    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e969b998e9a88d617f9e16085e75d7a36f011e18972bd0a4cfd49161b870b31 = $this->env->getExtension("native_profiler");
        $__internal_1e969b998e9a88d617f9e16085e75d7a36f011e18972bd0a4cfd49161b870b31->enter($__internal_1e969b998e9a88d617f9e16085e75d7a36f011e18972bd0a4cfd49161b870b31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 49
        echo "        ";
        echo twig_include($this->env, $context, "DsgagenciaBundle::menu.html.twig");
        echo "
      ";
        
        $__internal_1e969b998e9a88d617f9e16085e75d7a36f011e18972bd0a4cfd49161b870b31->leave($__internal_1e969b998e9a88d617f9e16085e75d7a36f011e18972bd0a4cfd49161b870b31_prof);

    }

    // line 52
    public function block_formulario($context, array $blocks = array())
    {
        $__internal_3259105e84cbfdb82442054673766a77f024811950cd4d83fe810c5b669e9e93 = $this->env->getExtension("native_profiler");
        $__internal_3259105e84cbfdb82442054673766a77f024811950cd4d83fe810c5b669e9e93->enter($__internal_3259105e84cbfdb82442054673766a77f024811950cd4d83fe810c5b669e9e93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulario"));

        
        $__internal_3259105e84cbfdb82442054673766a77f024811950cd4d83fe810c5b669e9e93->leave($__internal_3259105e84cbfdb82442054673766a77f024811950cd4d83fe810c5b669e9e93_prof);

    }

    // line 69
    public function block_content($context, array $blocks = array())
    {
        $__internal_6cfbf5a7c2ecfd7edfb0d3a83af26aa4fbba0915f2053c3a799c6faacc2c239d = $this->env->getExtension("native_profiler");
        $__internal_6cfbf5a7c2ecfd7edfb0d3a83af26aa4fbba0915f2053c3a799c6faacc2c239d->enter($__internal_6cfbf5a7c2ecfd7edfb0d3a83af26aa4fbba0915f2053c3a799c6faacc2c239d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 70
        echo "            ";
        
        $__internal_6cfbf5a7c2ecfd7edfb0d3a83af26aa4fbba0915f2053c3a799c6faacc2c239d->leave($__internal_6cfbf5a7c2ecfd7edfb0d3a83af26aa4fbba0915f2053c3a799c6faacc2c239d_prof);

    }

    // line 83
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7d2dbffebb97f174b58eda7b84fc8fa841d2e0087bf00dbe10b9fe54fd5eea1e = $this->env->getExtension("native_profiler");
        $__internal_7d2dbffebb97f174b58eda7b84fc8fa841d2e0087bf00dbe10b9fe54fd5eea1e->enter($__internal_7d2dbffebb97f174b58eda7b84fc8fa841d2e0087bf00dbe10b9fe54fd5eea1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 84
        echo "          <!-- Bootstrap core JavaScript
          ================================================== -->
          <!-- Placed at the end of the document so the pages load faster -->
          <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-1.12.3.min.js"), "html", null, true);
        echo "\"></script>
          <script>window.jQuery || document.write('<script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-1.12.3.min.js"), "html", null, true);
        echo "\"><\\/script>')</script>
          <script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
          <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
          <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/holder.min.js"), "html", null, true);
        echo "\"></script>
          <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
          <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/ie10-viewport-bug-workaround.js"), "html", null, true);
        echo "\"></script>
      ";
        
        $__internal_7d2dbffebb97f174b58eda7b84fc8fa841d2e0087bf00dbe10b9fe54fd5eea1e->leave($__internal_7d2dbffebb97f174b58eda7b84fc8fa841d2e0087bf00dbe10b9fe54fd5eea1e_prof);

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
        return array (  279 => 93,  274 => 91,  269 => 89,  265 => 88,  261 => 87,  256 => 84,  250 => 83,  243 => 70,  237 => 69,  226 => 52,  216 => 49,  210 => 48,  193 => 32,  187 => 31,  178 => 28,  172 => 25,  166 => 22,  159 => 19,  153 => 18,  145 => 14,  139 => 13,  131 => 95,  129 => 83,  115 => 71,  113 => 69,  108 => 66,  99 => 63,  96 => 62,  91 => 61,  82 => 58,  79 => 57,  75 => 56,  70 => 53,  68 => 52,  65 => 51,  63 => 48,  56 => 43,  54 => 31,  51 => 30,  49 => 18,  45 => 16,  43 => 13,  29 => 1,);
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
/*             <link rel="stylesheet" href="{{ asset('public/css/buscador.css') }}" type="text/css" media="all" />*/
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
/*       <!--Cargamos el contenido de la página-->*/
/*       <div class="container marketing">*/
/*         <div id="content">*/
/*           {% for flashMessage in app.session.flashbag.get('notice') %}*/
/*             <div class="flash_notice">*/
/*               {{ flashMessage }}*/
/*             </div>*/
/*           {% endfor %}*/
/*           {% for flashMessage in app.session.flashbag.get('error') %}*/
/*             <div class="flash_error">*/
/*               {{ flashMessage }}*/
/*             </div>*/
/*           {% endfor %}*/
/*           */
/*           <!--Añadimos el contenido-->*/
/*           <div class="content">*/
/*             {% block content %}*/
/*             {% endblock %}*/
/*           </div>*/
/*         </div>*/
/*         </div><!-- /.container -->*/
/*         */
/*         */
/*         <!-- FOOTER -->*/
/*         <footer class="clase-general">*/
/*           <p class="footer"><a class="pull-right" href="#">Back to top</a>*/
/*             &copy; 2015 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a>*/
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
/*       {% endblock %}*/
/*    </body>*/
/* </html>*/
