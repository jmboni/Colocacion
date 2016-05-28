<?php

/* DsgagenciaBundle::layout.html.twig */
class __TwigTemplate_6e3b4ffd9d6b62c271d115a5ac5e4aa36f1790d729bd930d9e3be5562a3e5f1d extends Twig_Template
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
        $__internal_a13535ac069e456702ce483c249d26516e175a6c9f84b83d095d28fde7f00860 = $this->env->getExtension("native_profiler");
        $__internal_a13535ac069e456702ce483c249d26516e175a6c9f84b83d095d28fde7f00860->enter($__internal_a13535ac069e456702ce483c249d26516e175a6c9f84b83d095d28fde7f00860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DsgagenciaBundle::layout.html.twig"));

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
        // line 14
        $this->displayBlock('title', $context, $blocks);
        // line 17
        echo "        </title>
        
        ";
        // line 19
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 30
        echo "
         ";
        // line 31
        $this->displayBlock('javascripts', $context, $blocks);
        // line 45
        echo "    </head>
    <body>
      <!--Incluimos el menu-->
      ";
        // line 48
        $this->displayBlock('body', $context, $blocks);
        // line 52
        echo "      
        <div id=\"principal\">
          
        <div class=\"container\">
            <p>";
        // line 56
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
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "historial_trabajos"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["trabajo"]) {
            // line 72
            echo "                    <li>
                      <u><a href=";
            // line 73
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
        // line 76
        echo "                  </ul>
                </div>
              </div>
            </div>
            
        ";
        // line 81
        $this->displayBlock('formulario', $context, $blocks);
        // line 83
        echo "        
        <div id=\"content\">
            ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 86
            echo "                <div class=\"flash_notice\">
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
            ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 92
            echo "                <div class=\"flash_error\">
                    ";
            // line 93
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "            
            
            <!--Añadimos el contenido-->
            <div class=\"container\">
              ";
        // line 100
        $this->displayBlock('content', $context, $blocks);
        // line 102
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
        // line 115
        $this->displayBlock('javascripts2', $context, $blocks);
        // line 131
        echo "   </body>
</html>";
        
        $__internal_a13535ac069e456702ce483c249d26516e175a6c9f84b83d095d28fde7f00860->leave($__internal_a13535ac069e456702ce483c249d26516e175a6c9f84b83d095d28fde7f00860_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_cc8dbb8908d805f807221ca716d8a0a53d3e8aca1aa6c5f6264932d5aa969134 = $this->env->getExtension("native_profiler");
        $__internal_cc8dbb8908d805f807221ca716d8a0a53d3e8aca1aa6c5f6264932d5aa969134->enter($__internal_cc8dbb8908d805f807221ca716d8a0a53d3e8aca1aa6c5f6264932d5aa969134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 15
        echo "                DSG - Agencia de Colocación.
            ";
        
        $__internal_cc8dbb8908d805f807221ca716d8a0a53d3e8aca1aa6c5f6264932d5aa969134->leave($__internal_cc8dbb8908d805f807221ca716d8a0a53d3e8aca1aa6c5f6264932d5aa969134_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b9157619f46f0220ebdc6b66dd84c346873392cdd98da7d4d80fd16979fac9df = $this->env->getExtension("native_profiler");
        $__internal_b9157619f46f0220ebdc6b66dd84c346873392cdd98da7d4d80fd16979fac9df->enter($__internal_b9157619f46f0220ebdc6b66dd84c346873392cdd98da7d4d80fd16979fac9df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
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
        
        $__internal_b9157619f46f0220ebdc6b66dd84c346873392cdd98da7d4d80fd16979fac9df->leave($__internal_b9157619f46f0220ebdc6b66dd84c346873392cdd98da7d4d80fd16979fac9df_prof);

    }

    // line 31
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_75a1ec545ca5b40fa26e34ef8abff1f191ac2e252b5e9452487300e723db435c = $this->env->getExtension("native_profiler");
        $__internal_75a1ec545ca5b40fa26e34ef8abff1f191ac2e252b5e9452487300e723db435c->enter($__internal_75a1ec545ca5b40fa26e34ef8abff1f191ac2e252b5e9452487300e723db435c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 32
        echo "         <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/dsgagencia/js/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
         <script src=\"";
        // line 33
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
        
        $__internal_75a1ec545ca5b40fa26e34ef8abff1f191ac2e252b5e9452487300e723db435c->leave($__internal_75a1ec545ca5b40fa26e34ef8abff1f191ac2e252b5e9452487300e723db435c_prof);

    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        $__internal_920e54aaaf4c7d9f4f70424431ae27d2bf5afee3b1fbefe70341849fa799dc23 = $this->env->getExtension("native_profiler");
        $__internal_920e54aaaf4c7d9f4f70424431ae27d2bf5afee3b1fbefe70341849fa799dc23->enter($__internal_920e54aaaf4c7d9f4f70424431ae27d2bf5afee3b1fbefe70341849fa799dc23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 49
        echo "        ";
        echo twig_include($this->env, $context, "DsgagenciaBundle::menu.html.twig");
        echo "
        
      ";
        
        $__internal_920e54aaaf4c7d9f4f70424431ae27d2bf5afee3b1fbefe70341849fa799dc23->leave($__internal_920e54aaaf4c7d9f4f70424431ae27d2bf5afee3b1fbefe70341849fa799dc23_prof);

    }

    // line 81
    public function block_formulario($context, array $blocks = array())
    {
        $__internal_69849af922ad0a0500a076058bd6c4d6358ad83d31f737276598a5e578014c60 = $this->env->getExtension("native_profiler");
        $__internal_69849af922ad0a0500a076058bd6c4d6358ad83d31f737276598a5e578014c60->enter($__internal_69849af922ad0a0500a076058bd6c4d6358ad83d31f737276598a5e578014c60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulario"));

        // line 82
        echo "        ";
        
        $__internal_69849af922ad0a0500a076058bd6c4d6358ad83d31f737276598a5e578014c60->leave($__internal_69849af922ad0a0500a076058bd6c4d6358ad83d31f737276598a5e578014c60_prof);

    }

    // line 100
    public function block_content($context, array $blocks = array())
    {
        $__internal_9a0b43b9f99e9f20d9bb2855fc71f8533bda774dcbbee3ca3bf9b685687f3691 = $this->env->getExtension("native_profiler");
        $__internal_9a0b43b9f99e9f20d9bb2855fc71f8533bda774dcbbee3ca3bf9b685687f3691->enter($__internal_9a0b43b9f99e9f20d9bb2855fc71f8533bda774dcbbee3ca3bf9b685687f3691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 101
        echo "              ";
        
        $__internal_9a0b43b9f99e9f20d9bb2855fc71f8533bda774dcbbee3ca3bf9b685687f3691->leave($__internal_9a0b43b9f99e9f20d9bb2855fc71f8533bda774dcbbee3ca3bf9b685687f3691_prof);

    }

    // line 115
    public function block_javascripts2($context, array $blocks = array())
    {
        $__internal_44e007ce86c084ffeb740bb9fce734dfb3a82ba1d1e3c3e8e68b9375709c5086 = $this->env->getExtension("native_profiler");
        $__internal_44e007ce86c084ffeb740bb9fce734dfb3a82ba1d1e3c3e8e68b9375709c5086->enter($__internal_44e007ce86c084ffeb740bb9fce734dfb3a82ba1d1e3c3e8e68b9375709c5086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts2"));

        // line 116
        echo "      
          <!-- Bootstrap core JavaScript
          ================================================== -->
          <!-- Placed at the end of the document so the pages load faster -->
          <script> window.jQuery || document.write('<script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-2.2.4.min.js"), "html", null, true);
        echo "\">')</script>
          <script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
          <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
          <script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/holder.min.js"), "html", null, true);
        echo "\"></script>
          <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
          <script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/ie10-viewport-bug-workaround.js"), "html", null, true);
        echo "\"></script>
          
           <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
          
          
      ";
        
        $__internal_44e007ce86c084ffeb740bb9fce734dfb3a82ba1d1e3c3e8e68b9375709c5086->leave($__internal_44e007ce86c084ffeb740bb9fce734dfb3a82ba1d1e3c3e8e68b9375709c5086_prof);

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
        return array (  335 => 125,  330 => 123,  325 => 121,  321 => 120,  315 => 116,  309 => 115,  302 => 101,  296 => 100,  289 => 82,  283 => 81,  272 => 49,  266 => 48,  247 => 33,  242 => 32,  236 => 31,  227 => 28,  221 => 25,  215 => 22,  209 => 20,  203 => 19,  195 => 15,  189 => 14,  181 => 131,  179 => 115,  164 => 102,  162 => 100,  156 => 96,  147 => 93,  144 => 92,  140 => 91,  137 => 90,  128 => 87,  125 => 86,  121 => 85,  117 => 83,  115 => 81,  108 => 76,  95 => 73,  92 => 72,  88 => 71,  70 => 56,  64 => 52,  62 => 48,  57 => 45,  55 => 31,  52 => 30,  50 => 19,  46 => 17,  44 => 14,  29 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="es">*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         */
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
