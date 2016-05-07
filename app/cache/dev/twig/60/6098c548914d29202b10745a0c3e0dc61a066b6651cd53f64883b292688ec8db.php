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
            'buscador' => array($this, 'block_buscador'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0bbf2bf2c193084a9aa098edca4ccf11137b8aceebbf9dbfd8fe7a0bfafdcbf9 = $this->env->getExtension("native_profiler");
        $__internal_0bbf2bf2c193084a9aa098edca4ccf11137b8aceebbf9dbfd8fe7a0bfafdcbf9->enter($__internal_0bbf2bf2c193084a9aa098edca4ccf11137b8aceebbf9dbfd8fe7a0bfafdcbf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DsgagenciaBundle::layout.html.twig"));

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
        echo "      
       <!--Incluimos el buscador-->
      ";
        // line 53
        $this->displayBlock('buscador', $context, $blocks);
        // line 56
        echo "      
      
      <!--Cargamos el contenido de la página-->
      <div class=\"container marketing\">
        <div id=\"content\">
          ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 62
            echo "            <div class=\"flash_notice\">
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
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 67
            echo "            <div class=\"flash_error\">
              ";
            // line 68
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "          
          <!--Añadimos el contenido-->
          <div class=\"content\">
            ";
        // line 74
        $this->displayBlock('content', $context, $blocks);
        // line 76
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
        // line 88
        $this->displayBlock('javascripts', $context, $blocks);
        // line 100
        echo "   </body>
</html>";
        
        $__internal_0bbf2bf2c193084a9aa098edca4ccf11137b8aceebbf9dbfd8fe7a0bfafdcbf9->leave($__internal_0bbf2bf2c193084a9aa098edca4ccf11137b8aceebbf9dbfd8fe7a0bfafdcbf9_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_67886054200332a143d352dc31138cb2510594c1c3de62caffa17432aa06a7c5 = $this->env->getExtension("native_profiler");
        $__internal_67886054200332a143d352dc31138cb2510594c1c3de62caffa17432aa06a7c5->enter($__internal_67886054200332a143d352dc31138cb2510594c1c3de62caffa17432aa06a7c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 14
        echo "                DSG - Agencia de Colocación.
            ";
        
        $__internal_67886054200332a143d352dc31138cb2510594c1c3de62caffa17432aa06a7c5->leave($__internal_67886054200332a143d352dc31138cb2510594c1c3de62caffa17432aa06a7c5_prof);

    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8fb4270aa0e9a91a970f3482cba4042e460d8bfe3fdcbf73f9909bb6042063df = $this->env->getExtension("native_profiler");
        $__internal_8fb4270aa0e9a91a970f3482cba4042e460d8bfe3fdcbf73f9909bb6042063df->enter($__internal_8fb4270aa0e9a91a970f3482cba4042e460d8bfe3fdcbf73f9909bb6042063df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_8fb4270aa0e9a91a970f3482cba4042e460d8bfe3fdcbf73f9909bb6042063df->leave($__internal_8fb4270aa0e9a91a970f3482cba4042e460d8bfe3fdcbf73f9909bb6042063df_prof);

    }

    // line 31
    public function block_javascriptsie($context, array $blocks = array())
    {
        $__internal_e3aa15310dc6414ae5e0cb8acb4e8b947b7b63b8d96a95ac06ec65c685a0aa86 = $this->env->getExtension("native_profiler");
        $__internal_e3aa15310dc6414ae5e0cb8acb4e8b947b7b63b8d96a95ac06ec65c685a0aa86->enter($__internal_e3aa15310dc6414ae5e0cb8acb4e8b947b7b63b8d96a95ac06ec65c685a0aa86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascriptsie"));

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
        
        $__internal_e3aa15310dc6414ae5e0cb8acb4e8b947b7b63b8d96a95ac06ec65c685a0aa86->leave($__internal_e3aa15310dc6414ae5e0cb8acb4e8b947b7b63b8d96a95ac06ec65c685a0aa86_prof);

    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        $__internal_0ca8a15af5e0ea68a642c4db88951174a73442597a6932234df6d0dbcd704445 = $this->env->getExtension("native_profiler");
        $__internal_0ca8a15af5e0ea68a642c4db88951174a73442597a6932234df6d0dbcd704445->enter($__internal_0ca8a15af5e0ea68a642c4db88951174a73442597a6932234df6d0dbcd704445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 49
        echo "        ";
        echo twig_include($this->env, $context, "DsgagenciaBundle::menu.html.twig");
        echo "
      ";
        
        $__internal_0ca8a15af5e0ea68a642c4db88951174a73442597a6932234df6d0dbcd704445->leave($__internal_0ca8a15af5e0ea68a642c4db88951174a73442597a6932234df6d0dbcd704445_prof);

    }

    // line 53
    public function block_buscador($context, array $blocks = array())
    {
        $__internal_5e22ad0a476d985218bbdd069cd248ea82584ea6af3f4a76cf871a436eef7736 = $this->env->getExtension("native_profiler");
        $__internal_5e22ad0a476d985218bbdd069cd248ea82584ea6af3f4a76cf871a436eef7736->enter($__internal_5e22ad0a476d985218bbdd069cd248ea82584ea6af3f4a76cf871a436eef7736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "buscador"));

        // line 54
        echo "        ";
        echo twig_include($this->env, $context, "DsgagenciaBundle::buscador.html.twig");
        echo "
      ";
        
        $__internal_5e22ad0a476d985218bbdd069cd248ea82584ea6af3f4a76cf871a436eef7736->leave($__internal_5e22ad0a476d985218bbdd069cd248ea82584ea6af3f4a76cf871a436eef7736_prof);

    }

    // line 74
    public function block_content($context, array $blocks = array())
    {
        $__internal_a9b3f71414b4a024ff33ed1679673d4457bd277dac4bfd3e723e7a3bb8ca4ba4 = $this->env->getExtension("native_profiler");
        $__internal_a9b3f71414b4a024ff33ed1679673d4457bd277dac4bfd3e723e7a3bb8ca4ba4->enter($__internal_a9b3f71414b4a024ff33ed1679673d4457bd277dac4bfd3e723e7a3bb8ca4ba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 75
        echo "            ";
        
        $__internal_a9b3f71414b4a024ff33ed1679673d4457bd277dac4bfd3e723e7a3bb8ca4ba4->leave($__internal_a9b3f71414b4a024ff33ed1679673d4457bd277dac4bfd3e723e7a3bb8ca4ba4_prof);

    }

    // line 88
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5d0ace78938cae17bf9951473d9b8ac9eaa176343de932bfe4385316928ab80d = $this->env->getExtension("native_profiler");
        $__internal_5d0ace78938cae17bf9951473d9b8ac9eaa176343de932bfe4385316928ab80d->enter($__internal_5d0ace78938cae17bf9951473d9b8ac9eaa176343de932bfe4385316928ab80d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 89
        echo "          <!-- Bootstrap core JavaScript
          ================================================== -->
          <!-- Placed at the end of the document so the pages load faster -->
          <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-1.12.3.min.js"), "html", null, true);
        echo "\"></script>
          <script>window.jQuery || document.write('<script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-1.12.3.min.js"), "html", null, true);
        echo "\"><\\/script>')</script>
          <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
          <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
          <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/holder.min.js"), "html", null, true);
        echo "\"></script>
          <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
          <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/ie10-viewport-bug-workaround.js"), "html", null, true);
        echo "\"></script>
      ";
        
        $__internal_5d0ace78938cae17bf9951473d9b8ac9eaa176343de932bfe4385316928ab80d->leave($__internal_5d0ace78938cae17bf9951473d9b8ac9eaa176343de932bfe4385316928ab80d_prof);

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
        return array (  287 => 98,  282 => 96,  277 => 94,  273 => 93,  269 => 92,  264 => 89,  258 => 88,  251 => 75,  245 => 74,  235 => 54,  229 => 53,  219 => 49,  213 => 48,  196 => 32,  190 => 31,  181 => 28,  175 => 25,  169 => 22,  162 => 19,  156 => 18,  148 => 14,  142 => 13,  134 => 100,  132 => 88,  118 => 76,  116 => 74,  111 => 71,  102 => 68,  99 => 67,  94 => 66,  85 => 63,  82 => 62,  78 => 61,  71 => 56,  69 => 53,  65 => 51,  63 => 48,  56 => 43,  54 => 31,  51 => 30,  49 => 18,  45 => 16,  43 => 13,  29 => 1,);
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
/*       */
/*        <!--Incluimos el buscador-->*/
/*       {% block buscador %}*/
/*         {{ include('DsgagenciaBundle::buscador.html.twig') }}*/
/*       {% endblock %}*/
/*       */
/*       */
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
