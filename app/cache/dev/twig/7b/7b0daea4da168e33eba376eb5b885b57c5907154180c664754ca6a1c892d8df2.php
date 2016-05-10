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
        $__internal_57d53797cdcdbdd87523e96bb665046ff653c846bcb8b4f1ee126a6dd0d15a3a = $this->env->getExtension("native_profiler");
        $__internal_57d53797cdcdbdd87523e96bb665046ff653c846bcb8b4f1ee126a6dd0d15a3a->enter($__internal_57d53797cdcdbdd87523e96bb665046ff653c846bcb8b4f1ee126a6dd0d15a3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DsgagenciaBundle::layout.html.twig"));

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
        
        $__internal_57d53797cdcdbdd87523e96bb665046ff653c846bcb8b4f1ee126a6dd0d15a3a->leave($__internal_57d53797cdcdbdd87523e96bb665046ff653c846bcb8b4f1ee126a6dd0d15a3a_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_13b4903468f35db52f875599a29d66d19ecffc298a56b116634f1268308791bd = $this->env->getExtension("native_profiler");
        $__internal_13b4903468f35db52f875599a29d66d19ecffc298a56b116634f1268308791bd->enter($__internal_13b4903468f35db52f875599a29d66d19ecffc298a56b116634f1268308791bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 14
        echo "                DSG - Agencia de Colocación.
            ";
        
        $__internal_13b4903468f35db52f875599a29d66d19ecffc298a56b116634f1268308791bd->leave($__internal_13b4903468f35db52f875599a29d66d19ecffc298a56b116634f1268308791bd_prof);

    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5547d9fe60ef67801a781cd4f85891a62d3c66fe19f3a3196e4ccc09ab79ba33 = $this->env->getExtension("native_profiler");
        $__internal_5547d9fe60ef67801a781cd4f85891a62d3c66fe19f3a3196e4ccc09ab79ba33->enter($__internal_5547d9fe60ef67801a781cd4f85891a62d3c66fe19f3a3196e4ccc09ab79ba33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_5547d9fe60ef67801a781cd4f85891a62d3c66fe19f3a3196e4ccc09ab79ba33->leave($__internal_5547d9fe60ef67801a781cd4f85891a62d3c66fe19f3a3196e4ccc09ab79ba33_prof);

    }

    // line 31
    public function block_javascriptsie($context, array $blocks = array())
    {
        $__internal_f581a9f78a5293b3257b61993e11e5b6941574fcd684a338e38da329b49df1bb = $this->env->getExtension("native_profiler");
        $__internal_f581a9f78a5293b3257b61993e11e5b6941574fcd684a338e38da329b49df1bb->enter($__internal_f581a9f78a5293b3257b61993e11e5b6941574fcd684a338e38da329b49df1bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascriptsie"));

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
        
        $__internal_f581a9f78a5293b3257b61993e11e5b6941574fcd684a338e38da329b49df1bb->leave($__internal_f581a9f78a5293b3257b61993e11e5b6941574fcd684a338e38da329b49df1bb_prof);

    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        $__internal_6500188d96529c802f84bb136c7dabced2b3c41130fd3042d9abc0ff0f75c1a4 = $this->env->getExtension("native_profiler");
        $__internal_6500188d96529c802f84bb136c7dabced2b3c41130fd3042d9abc0ff0f75c1a4->enter($__internal_6500188d96529c802f84bb136c7dabced2b3c41130fd3042d9abc0ff0f75c1a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 49
        echo "        ";
        echo twig_include($this->env, $context, "DsgagenciaBundle::menu.html.twig");
        echo "
      ";
        
        $__internal_6500188d96529c802f84bb136c7dabced2b3c41130fd3042d9abc0ff0f75c1a4->leave($__internal_6500188d96529c802f84bb136c7dabced2b3c41130fd3042d9abc0ff0f75c1a4_prof);

    }

    // line 52
    public function block_formulario($context, array $blocks = array())
    {
        $__internal_05f56d640ec0954d312a0af9e2ec9eb6c630ed7c6530eaa46ef0b22106f859bb = $this->env->getExtension("native_profiler");
        $__internal_05f56d640ec0954d312a0af9e2ec9eb6c630ed7c6530eaa46ef0b22106f859bb->enter($__internal_05f56d640ec0954d312a0af9e2ec9eb6c630ed7c6530eaa46ef0b22106f859bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulario"));

        
        $__internal_05f56d640ec0954d312a0af9e2ec9eb6c630ed7c6530eaa46ef0b22106f859bb->leave($__internal_05f56d640ec0954d312a0af9e2ec9eb6c630ed7c6530eaa46ef0b22106f859bb_prof);

    }

    // line 69
    public function block_content($context, array $blocks = array())
    {
        $__internal_1d6e5650adf8f528f124b50d9766fe8c72d0f5ccc814e797a69a832cb968be88 = $this->env->getExtension("native_profiler");
        $__internal_1d6e5650adf8f528f124b50d9766fe8c72d0f5ccc814e797a69a832cb968be88->enter($__internal_1d6e5650adf8f528f124b50d9766fe8c72d0f5ccc814e797a69a832cb968be88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 70
        echo "            ";
        
        $__internal_1d6e5650adf8f528f124b50d9766fe8c72d0f5ccc814e797a69a832cb968be88->leave($__internal_1d6e5650adf8f528f124b50d9766fe8c72d0f5ccc814e797a69a832cb968be88_prof);

    }

    // line 83
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f030e995843bb3ec0d7b1be6c6c96cbc124ac0fead946769af407afb2d2670b3 = $this->env->getExtension("native_profiler");
        $__internal_f030e995843bb3ec0d7b1be6c6c96cbc124ac0fead946769af407afb2d2670b3->enter($__internal_f030e995843bb3ec0d7b1be6c6c96cbc124ac0fead946769af407afb2d2670b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_f030e995843bb3ec0d7b1be6c6c96cbc124ac0fead946769af407afb2d2670b3->leave($__internal_f030e995843bb3ec0d7b1be6c6c96cbc124ac0fead946769af407afb2d2670b3_prof);

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
