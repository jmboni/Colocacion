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
            'formulario' => array($this, 'block_formulario'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d8a402bff8e99b942dabc625ecf07b2a8f9f4627c5eb69bd9933fb4ff99c22f4 = $this->env->getExtension("native_profiler");
        $__internal_d8a402bff8e99b942dabc625ecf07b2a8f9f4627c5eb69bd9933fb4ff99c22f4->enter($__internal_d8a402bff8e99b942dabc625ecf07b2a8f9f4627c5eb69bd9933fb4ff99c22f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DsgagenciaBundle::layout.html.twig"));

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
        <!--Incluimos el buscador-->
      ";
        // line 58
        $this->displayBlock('formulario', $context, $blocks);
        // line 59
        echo "      <!--Cargamos el contenido de la página-->
      <div class=\"container marketing\">
        <div id=\"content\">
          ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 63
            echo "            <div class=\"flash_notice\">
              ";
            // line 64
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 68
            echo "            <div class=\"flash_error\">
              ";
            // line 69
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "          
          <!--Añadimos el contenido-->
          <div class=\"content\">
            ";
        // line 75
        $this->displayBlock('content', $context, $blocks);
        // line 77
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
        // line 89
        $this->displayBlock('javascripts', $context, $blocks);
        // line 101
        echo "   </body>
</html>";
        
        $__internal_d8a402bff8e99b942dabc625ecf07b2a8f9f4627c5eb69bd9933fb4ff99c22f4->leave($__internal_d8a402bff8e99b942dabc625ecf07b2a8f9f4627c5eb69bd9933fb4ff99c22f4_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_b436a8068fb75a713ae14f23f1d618139ce334275a335c0c94ceb5233eae8ff6 = $this->env->getExtension("native_profiler");
        $__internal_b436a8068fb75a713ae14f23f1d618139ce334275a335c0c94ceb5233eae8ff6->enter($__internal_b436a8068fb75a713ae14f23f1d618139ce334275a335c0c94ceb5233eae8ff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 14
        echo "                DSG - Agencia de Colocación.
            ";
        
        $__internal_b436a8068fb75a713ae14f23f1d618139ce334275a335c0c94ceb5233eae8ff6->leave($__internal_b436a8068fb75a713ae14f23f1d618139ce334275a335c0c94ceb5233eae8ff6_prof);

    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9f9db4c62e2a753227026903f845e0b4c44ecc89c3643b9de323300e64beccce = $this->env->getExtension("native_profiler");
        $__internal_9f9db4c62e2a753227026903f845e0b4c44ecc89c3643b9de323300e64beccce->enter($__internal_9f9db4c62e2a753227026903f845e0b4c44ecc89c3643b9de323300e64beccce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_9f9db4c62e2a753227026903f845e0b4c44ecc89c3643b9de323300e64beccce->leave($__internal_9f9db4c62e2a753227026903f845e0b4c44ecc89c3643b9de323300e64beccce_prof);

    }

    // line 31
    public function block_javascriptsie($context, array $blocks = array())
    {
        $__internal_7c8ae611adf58b90bb507230311818507d69f4dd7b20fb084283370e6b629d44 = $this->env->getExtension("native_profiler");
        $__internal_7c8ae611adf58b90bb507230311818507d69f4dd7b20fb084283370e6b629d44->enter($__internal_7c8ae611adf58b90bb507230311818507d69f4dd7b20fb084283370e6b629d44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascriptsie"));

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
        
        $__internal_7c8ae611adf58b90bb507230311818507d69f4dd7b20fb084283370e6b629d44->leave($__internal_7c8ae611adf58b90bb507230311818507d69f4dd7b20fb084283370e6b629d44_prof);

    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        $__internal_10132f1070f60aa4d698bb1f326f4366f39067662278c52e9127fabf7747523b = $this->env->getExtension("native_profiler");
        $__internal_10132f1070f60aa4d698bb1f326f4366f39067662278c52e9127fabf7747523b->enter($__internal_10132f1070f60aa4d698bb1f326f4366f39067662278c52e9127fabf7747523b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 49
        echo "        ";
        echo twig_include($this->env, $context, "DsgagenciaBundle::menu.html.twig");
        echo "
      ";
        
        $__internal_10132f1070f60aa4d698bb1f326f4366f39067662278c52e9127fabf7747523b->leave($__internal_10132f1070f60aa4d698bb1f326f4366f39067662278c52e9127fabf7747523b_prof);

    }

    // line 53
    public function block_buscador($context, array $blocks = array())
    {
        $__internal_c07745f3af91e4e092d7244d337a306eebc111168456fa8a1dca0cf59d25dcb0 = $this->env->getExtension("native_profiler");
        $__internal_c07745f3af91e4e092d7244d337a306eebc111168456fa8a1dca0cf59d25dcb0->enter($__internal_c07745f3af91e4e092d7244d337a306eebc111168456fa8a1dca0cf59d25dcb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "buscador"));

        // line 54
        echo "        ";
        echo twig_include($this->env, $context, "DsgagenciaBundle::buscador.html.twig");
        echo "
      ";
        
        $__internal_c07745f3af91e4e092d7244d337a306eebc111168456fa8a1dca0cf59d25dcb0->leave($__internal_c07745f3af91e4e092d7244d337a306eebc111168456fa8a1dca0cf59d25dcb0_prof);

    }

    // line 58
    public function block_formulario($context, array $blocks = array())
    {
        $__internal_b75652ed59a06be00304dba5302691de086fb5c8712fa32928c59339803a7c33 = $this->env->getExtension("native_profiler");
        $__internal_b75652ed59a06be00304dba5302691de086fb5c8712fa32928c59339803a7c33->enter($__internal_b75652ed59a06be00304dba5302691de086fb5c8712fa32928c59339803a7c33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulario"));

        
        $__internal_b75652ed59a06be00304dba5302691de086fb5c8712fa32928c59339803a7c33->leave($__internal_b75652ed59a06be00304dba5302691de086fb5c8712fa32928c59339803a7c33_prof);

    }

    // line 75
    public function block_content($context, array $blocks = array())
    {
        $__internal_f2c6bd67ee12d4937fcd10b37dce1b7e01a417c16913b62450da7670b35941b3 = $this->env->getExtension("native_profiler");
        $__internal_f2c6bd67ee12d4937fcd10b37dce1b7e01a417c16913b62450da7670b35941b3->enter($__internal_f2c6bd67ee12d4937fcd10b37dce1b7e01a417c16913b62450da7670b35941b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 76
        echo "            ";
        
        $__internal_f2c6bd67ee12d4937fcd10b37dce1b7e01a417c16913b62450da7670b35941b3->leave($__internal_f2c6bd67ee12d4937fcd10b37dce1b7e01a417c16913b62450da7670b35941b3_prof);

    }

    // line 89
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fbf7cc83e259ef87b7d2e0a07c927aaa3a9c6bedb2404f14897f764d0053eda1 = $this->env->getExtension("native_profiler");
        $__internal_fbf7cc83e259ef87b7d2e0a07c927aaa3a9c6bedb2404f14897f764d0053eda1->enter($__internal_fbf7cc83e259ef87b7d2e0a07c927aaa3a9c6bedb2404f14897f764d0053eda1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 90
        echo "          <!-- Bootstrap core JavaScript
          ================================================== -->
          <!-- Placed at the end of the document so the pages load faster -->
          <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-1.12.3.min.js"), "html", null, true);
        echo "\"></script>
          <script>window.jQuery || document.write('<script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-1.12.3.min.js"), "html", null, true);
        echo "\"><\\/script>')</script>
          <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
          <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
          <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/holder.min.js"), "html", null, true);
        echo "\"></script>
          <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
          <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/ie10-viewport-bug-workaround.js"), "html", null, true);
        echo "\"></script>
      ";
        
        $__internal_fbf7cc83e259ef87b7d2e0a07c927aaa3a9c6bedb2404f14897f764d0053eda1->leave($__internal_fbf7cc83e259ef87b7d2e0a07c927aaa3a9c6bedb2404f14897f764d0053eda1_prof);

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
        return array (  303 => 99,  298 => 97,  293 => 95,  289 => 94,  285 => 93,  280 => 90,  274 => 89,  267 => 76,  261 => 75,  250 => 58,  240 => 54,  234 => 53,  224 => 49,  218 => 48,  201 => 32,  195 => 31,  186 => 28,  180 => 25,  174 => 22,  167 => 19,  161 => 18,  153 => 14,  147 => 13,  139 => 101,  137 => 89,  123 => 77,  121 => 75,  116 => 72,  107 => 69,  104 => 68,  99 => 67,  90 => 64,  87 => 63,  83 => 62,  78 => 59,  76 => 58,  72 => 56,  70 => 53,  66 => 51,  64 => 48,  57 => 43,  55 => 31,  52 => 30,  50 => 18,  46 => 16,  44 => 13,  30 => 1,);
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
/*         <!--Incluimos el buscador-->*/
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
