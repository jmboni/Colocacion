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
        $__internal_32eb87f3bc1139c18e693d5daaada752ed1c92698dce3b2bee2ff44120ee9ef5 = $this->env->getExtension("native_profiler");
        $__internal_32eb87f3bc1139c18e693d5daaada752ed1c92698dce3b2bee2ff44120ee9ef5->enter($__internal_32eb87f3bc1139c18e693d5daaada752ed1c92698dce3b2bee2ff44120ee9ef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DsgagenciaBundle::layout.html.twig"));

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
          <div id=\"job_history\">
            Últimas ofertas visitadas:
              <ul>
                  ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "historial_trabajos"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["trabajo"]) {
            // line 60
            echo "                      <li>
                          <a href=";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("trabajos_show", array("id" => $this->getAttribute($context["trabajo"], "id", array()), "compania" => $this->getAttribute($context["trabajo"], "companiaslug", array()), "localidad" => $this->getAttribute($context["trabajo"], "localidadslug", array()), "posicion" => $this->getAttribute($context["trabajo"], "posicionslug", array()))), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["trabajo"], "posicion", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["trabajo"], "compania", array()), "html", null, true);
            echo "</a>
                      </li>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trabajo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "              </ul>
          </div>
          ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 67
            echo "            <div>
              ";
            // line 68
            echo twig_escape_filter($this->env, (isset($context["flassMessage"]) ? $context["flassMessage"] : $this->getContext($context, "flassMessage")), "html", null, true);
            echo "
            </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "          <div id=\"content\">
            ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 73
            echo "              <div class=\"flash_notice\">
                ";
            // line 74
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
              </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 78
            echo "              <div class=\"flash_error\">
                ";
            // line 79
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
              </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "            
            <!--Añadimos el contenido-->
            <div class=\"content\">
              ";
        // line 85
        $this->displayBlock('content', $context, $blocks);
        // line 87
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
        // line 99
        $this->displayBlock('javascripts', $context, $blocks);
        // line 111
        echo "   </body>
</html>";
        
        $__internal_32eb87f3bc1139c18e693d5daaada752ed1c92698dce3b2bee2ff44120ee9ef5->leave($__internal_32eb87f3bc1139c18e693d5daaada752ed1c92698dce3b2bee2ff44120ee9ef5_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_04fd9de23cc838b00dfb50e7ae32f4fffe4caa66360803c1c60262e3f58cc558 = $this->env->getExtension("native_profiler");
        $__internal_04fd9de23cc838b00dfb50e7ae32f4fffe4caa66360803c1c60262e3f58cc558->enter($__internal_04fd9de23cc838b00dfb50e7ae32f4fffe4caa66360803c1c60262e3f58cc558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 14
        echo "                DSG - Agencia de Colocación.
            ";
        
        $__internal_04fd9de23cc838b00dfb50e7ae32f4fffe4caa66360803c1c60262e3f58cc558->leave($__internal_04fd9de23cc838b00dfb50e7ae32f4fffe4caa66360803c1c60262e3f58cc558_prof);

    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9567b7201484319bce3f9c65de0a54d541e5aecd3b58bc24379506a338f91cc2 = $this->env->getExtension("native_profiler");
        $__internal_9567b7201484319bce3f9c65de0a54d541e5aecd3b58bc24379506a338f91cc2->enter($__internal_9567b7201484319bce3f9c65de0a54d541e5aecd3b58bc24379506a338f91cc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_9567b7201484319bce3f9c65de0a54d541e5aecd3b58bc24379506a338f91cc2->leave($__internal_9567b7201484319bce3f9c65de0a54d541e5aecd3b58bc24379506a338f91cc2_prof);

    }

    // line 31
    public function block_javascriptsie($context, array $blocks = array())
    {
        $__internal_b9b6c9dcd749fc36f3ff2dd9a733858553ecf5de0e35e24b098639f459b05226 = $this->env->getExtension("native_profiler");
        $__internal_b9b6c9dcd749fc36f3ff2dd9a733858553ecf5de0e35e24b098639f459b05226->enter($__internal_b9b6c9dcd749fc36f3ff2dd9a733858553ecf5de0e35e24b098639f459b05226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascriptsie"));

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
        
        $__internal_b9b6c9dcd749fc36f3ff2dd9a733858553ecf5de0e35e24b098639f459b05226->leave($__internal_b9b6c9dcd749fc36f3ff2dd9a733858553ecf5de0e35e24b098639f459b05226_prof);

    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        $__internal_d43ace9502b93462ed9e613a689f6eae8b53225b33f1b4e1839e80fe4ad788ae = $this->env->getExtension("native_profiler");
        $__internal_d43ace9502b93462ed9e613a689f6eae8b53225b33f1b4e1839e80fe4ad788ae->enter($__internal_d43ace9502b93462ed9e613a689f6eae8b53225b33f1b4e1839e80fe4ad788ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 49
        echo "        ";
        echo twig_include($this->env, $context, "DsgagenciaBundle::menu.html.twig");
        echo "
      ";
        
        $__internal_d43ace9502b93462ed9e613a689f6eae8b53225b33f1b4e1839e80fe4ad788ae->leave($__internal_d43ace9502b93462ed9e613a689f6eae8b53225b33f1b4e1839e80fe4ad788ae_prof);

    }

    // line 52
    public function block_formulario($context, array $blocks = array())
    {
        $__internal_0229f331998b572a8f221ee2d264b37614c47a0ab03c46efec410d8724834f03 = $this->env->getExtension("native_profiler");
        $__internal_0229f331998b572a8f221ee2d264b37614c47a0ab03c46efec410d8724834f03->enter($__internal_0229f331998b572a8f221ee2d264b37614c47a0ab03c46efec410d8724834f03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulario"));

        
        $__internal_0229f331998b572a8f221ee2d264b37614c47a0ab03c46efec410d8724834f03->leave($__internal_0229f331998b572a8f221ee2d264b37614c47a0ab03c46efec410d8724834f03_prof);

    }

    // line 85
    public function block_content($context, array $blocks = array())
    {
        $__internal_0368d709217922ff5b948ac1bd6259248ce13897eecbcce4c7432ebcb0855745 = $this->env->getExtension("native_profiler");
        $__internal_0368d709217922ff5b948ac1bd6259248ce13897eecbcce4c7432ebcb0855745->enter($__internal_0368d709217922ff5b948ac1bd6259248ce13897eecbcce4c7432ebcb0855745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 86
        echo "              ";
        
        $__internal_0368d709217922ff5b948ac1bd6259248ce13897eecbcce4c7432ebcb0855745->leave($__internal_0368d709217922ff5b948ac1bd6259248ce13897eecbcce4c7432ebcb0855745_prof);

    }

    // line 99
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a764a4cb99f8e04cef63b31fd87826a26d5d21eb6e16fe647bc30d02e402651c = $this->env->getExtension("native_profiler");
        $__internal_a764a4cb99f8e04cef63b31fd87826a26d5d21eb6e16fe647bc30d02e402651c->enter($__internal_a764a4cb99f8e04cef63b31fd87826a26d5d21eb6e16fe647bc30d02e402651c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 100
        echo "          <!-- Bootstrap core JavaScript
          ================================================== -->
          <!-- Placed at the end of the document so the pages load faster -->
          <script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-1.12.3.min.js"), "html", null, true);
        echo "\"></script>
          <script>window.jQuery || document.write('<script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-1.12.3.min.js"), "html", null, true);
        echo "\"><\\/script>')</script>
          <script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
          <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
          <script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/holder.min.js"), "html", null, true);
        echo "\"></script>
          <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
          <script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/ie10-viewport-bug-workaround.js"), "html", null, true);
        echo "\"></script>
      ";
        
        $__internal_a764a4cb99f8e04cef63b31fd87826a26d5d21eb6e16fe647bc30d02e402651c->leave($__internal_a764a4cb99f8e04cef63b31fd87826a26d5d21eb6e16fe647bc30d02e402651c_prof);

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
        return array (  325 => 109,  320 => 107,  315 => 105,  311 => 104,  307 => 103,  302 => 100,  296 => 99,  289 => 86,  283 => 85,  272 => 52,  262 => 49,  256 => 48,  239 => 32,  233 => 31,  224 => 28,  218 => 25,  212 => 22,  205 => 19,  199 => 18,  191 => 14,  185 => 13,  177 => 111,  175 => 99,  161 => 87,  159 => 85,  154 => 82,  145 => 79,  142 => 78,  137 => 77,  128 => 74,  125 => 73,  121 => 72,  118 => 71,  109 => 68,  106 => 67,  102 => 66,  98 => 64,  85 => 61,  82 => 60,  78 => 59,  70 => 53,  68 => 52,  65 => 51,  63 => 48,  56 => 43,  54 => 31,  51 => 30,  49 => 18,  45 => 16,  43 => 13,  29 => 1,);
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
/*           <div id="job_history">*/
/*             Últimas ofertas visitadas:*/
/*               <ul>*/
/*                   {% for trabajo in app.session.get('historial_trabajos') %}*/
/*                       <li>*/
/*                           <a href={{ path('trabajos_show', { 'id': trabajo.id, 'compania': trabajo.companiaslug, 'localidad': trabajo.localidadslug, 'posicion': trabajo.posicionslug }) }}>{{ trabajo.posicion }} - {{ trabajo.compania }}</a>*/
/*                       </li>*/
/*                   {% endfor %}*/
/*               </ul>*/
/*           </div>*/
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
/*       {% endblock %}*/
/*    </body>*/
/* </html>*/
