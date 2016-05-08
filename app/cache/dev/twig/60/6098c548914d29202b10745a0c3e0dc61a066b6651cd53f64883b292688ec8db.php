<?php

/* DsgagenciaBundle::layout.html.twig */
class __TwigTemplate_726ead6c0bb799fed565c24336b120d1c4ab1ea6622d706a3c31c9de6d7f919b extends Twig_Template
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
        $__internal_16a8aa932977b10c06893654525b11c00ad38b24823d10b43ffa040dd357c873 = $this->env->getExtension("native_profiler");
        $__internal_16a8aa932977b10c06893654525b11c00ad38b24823d10b43ffa040dd357c873->enter($__internal_16a8aa932977b10c06893654525b11c00ad38b24823d10b43ffa040dd357c873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DsgagenciaBundle::layout.html.twig"));

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
        
        $__internal_16a8aa932977b10c06893654525b11c00ad38b24823d10b43ffa040dd357c873->leave($__internal_16a8aa932977b10c06893654525b11c00ad38b24823d10b43ffa040dd357c873_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_b370f6962e7d1fe2f380a6c0022453a74b9bdf84277e33b2978dbf6622fee493 = $this->env->getExtension("native_profiler");
        $__internal_b370f6962e7d1fe2f380a6c0022453a74b9bdf84277e33b2978dbf6622fee493->enter($__internal_b370f6962e7d1fe2f380a6c0022453a74b9bdf84277e33b2978dbf6622fee493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 14
        echo "                DSG - Agencia de Colocación.
            ";
        
        $__internal_b370f6962e7d1fe2f380a6c0022453a74b9bdf84277e33b2978dbf6622fee493->leave($__internal_b370f6962e7d1fe2f380a6c0022453a74b9bdf84277e33b2978dbf6622fee493_prof);

    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_41cf1b96438ef85da9b4e6f95231db9f8e765ef2b1d26faeece83062dc067eea = $this->env->getExtension("native_profiler");
        $__internal_41cf1b96438ef85da9b4e6f95231db9f8e765ef2b1d26faeece83062dc067eea->enter($__internal_41cf1b96438ef85da9b4e6f95231db9f8e765ef2b1d26faeece83062dc067eea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_41cf1b96438ef85da9b4e6f95231db9f8e765ef2b1d26faeece83062dc067eea->leave($__internal_41cf1b96438ef85da9b4e6f95231db9f8e765ef2b1d26faeece83062dc067eea_prof);

    }

    // line 31
    public function block_javascriptsie($context, array $blocks = array())
    {
        $__internal_ce2798d66347066868320ccaf2ba1034ee4cb16fb79b2a2595ab246c65e0ecf9 = $this->env->getExtension("native_profiler");
        $__internal_ce2798d66347066868320ccaf2ba1034ee4cb16fb79b2a2595ab246c65e0ecf9->enter($__internal_ce2798d66347066868320ccaf2ba1034ee4cb16fb79b2a2595ab246c65e0ecf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascriptsie"));

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
        
        $__internal_ce2798d66347066868320ccaf2ba1034ee4cb16fb79b2a2595ab246c65e0ecf9->leave($__internal_ce2798d66347066868320ccaf2ba1034ee4cb16fb79b2a2595ab246c65e0ecf9_prof);

    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        $__internal_eecd3cd153ecf5d3d29ee002f15656c620ed38918277ae899b4dc00e493e5b9f = $this->env->getExtension("native_profiler");
        $__internal_eecd3cd153ecf5d3d29ee002f15656c620ed38918277ae899b4dc00e493e5b9f->enter($__internal_eecd3cd153ecf5d3d29ee002f15656c620ed38918277ae899b4dc00e493e5b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 49
        echo "        ";
        echo twig_include($this->env, $context, "DsgagenciaBundle::menu.html.twig");
        echo "
      ";
        
        $__internal_eecd3cd153ecf5d3d29ee002f15656c620ed38918277ae899b4dc00e493e5b9f->leave($__internal_eecd3cd153ecf5d3d29ee002f15656c620ed38918277ae899b4dc00e493e5b9f_prof);

    }

    // line 52
    public function block_formulario($context, array $blocks = array())
    {
        $__internal_1b3ad11721a065869314734e4ca06182359feb265abb663d80608484c76f22e2 = $this->env->getExtension("native_profiler");
        $__internal_1b3ad11721a065869314734e4ca06182359feb265abb663d80608484c76f22e2->enter($__internal_1b3ad11721a065869314734e4ca06182359feb265abb663d80608484c76f22e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulario"));

        
        $__internal_1b3ad11721a065869314734e4ca06182359feb265abb663d80608484c76f22e2->leave($__internal_1b3ad11721a065869314734e4ca06182359feb265abb663d80608484c76f22e2_prof);

    }

    // line 69
    public function block_content($context, array $blocks = array())
    {
        $__internal_039c8f5879db9be4ff830c36e32b6d747af785c433c98dafb87373487cebf6e4 = $this->env->getExtension("native_profiler");
        $__internal_039c8f5879db9be4ff830c36e32b6d747af785c433c98dafb87373487cebf6e4->enter($__internal_039c8f5879db9be4ff830c36e32b6d747af785c433c98dafb87373487cebf6e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 70
        echo "            ";
        
        $__internal_039c8f5879db9be4ff830c36e32b6d747af785c433c98dafb87373487cebf6e4->leave($__internal_039c8f5879db9be4ff830c36e32b6d747af785c433c98dafb87373487cebf6e4_prof);

    }

    // line 83
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_32f21715216f5e7b1865a5fcd34a0470c2a5852356b508b86b4cd6e4b16197f6 = $this->env->getExtension("native_profiler");
        $__internal_32f21715216f5e7b1865a5fcd34a0470c2a5852356b508b86b4cd6e4b16197f6->enter($__internal_32f21715216f5e7b1865a5fcd34a0470c2a5852356b508b86b4cd6e4b16197f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_32f21715216f5e7b1865a5fcd34a0470c2a5852356b508b86b4cd6e4b16197f6->leave($__internal_32f21715216f5e7b1865a5fcd34a0470c2a5852356b508b86b4cd6e4b16197f6_prof);

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
