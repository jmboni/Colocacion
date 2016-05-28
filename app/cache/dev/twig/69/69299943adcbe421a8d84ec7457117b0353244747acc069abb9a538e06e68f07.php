<?php

/* DsgagenciaBundle:Default:login.html.twig */
class __TwigTemplate_b5c503c32c45f34a8178622fb5b2877fc27db64b1558f2f25f8409f4a0bd2523 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DsgagenciaBundle::layout.html.twig", "DsgagenciaBundle:Default:login.html.twig", 1);
        $this->blocks = array(
            'formulario' => array($this, 'block_formulario'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DsgagenciaBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_896606fbd7cf3bd94c25de19402f93f3215a00b2dac8e2e66998f62c3a1f7e9e = $this->env->getExtension("native_profiler");
        $__internal_896606fbd7cf3bd94c25de19402f93f3215a00b2dac8e2e66998f62c3a1f7e9e->enter($__internal_896606fbd7cf3bd94c25de19402f93f3215a00b2dac8e2e66998f62c3a1f7e9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DsgagenciaBundle:Default:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_896606fbd7cf3bd94c25de19402f93f3215a00b2dac8e2e66998f62c3a1f7e9e->leave($__internal_896606fbd7cf3bd94c25de19402f93f3215a00b2dac8e2e66998f62c3a1f7e9e_prof);

    }

    // line 3
    public function block_formulario($context, array $blocks = array())
    {
        $__internal_7838811fc047011b54db74e2e07962239fe3a4e42bcceefb5871edc6d785f9c5 = $this->env->getExtension("native_profiler");
        $__internal_7838811fc047011b54db74e2e07962239fe3a4e42bcceefb5871edc6d785f9c5->enter($__internal_7838811fc047011b54db74e2e07962239fe3a4e42bcceefb5871edc6d785f9c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulario"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">  
            
        <div class=\"col-xs-12 col-sm-4 col-sm-offset-4\">
          <form class=\"form-signin\" action=";
        // line 8
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo " method=\"post\">
            <h3 class=\"text-center\">Por favor introduce tus datos</h3>
            ";
        // line 10
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 11
            echo "                <div class=\"alert alert-dismissible alert-danger\">
                  <strong>¡¡Error!!</strong> Usuario o contraseña incorrectos.
                </div>
            ";
        }
        // line 15
        echo "            <div class=\"form-group\">
                <label for=\"inputEmail\" class=\"sr-only\">Username</label>
                <div class=\"input-group\">
                    <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-user\"></span></span>
                    <input type=\"text\" id=\"username\" name=\"_username\" class=\"form-control\" value='";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "' placeholder=\"Username\" required autofocus>
                </div>
            </div>
            <div class=\"form-group\">
                <div class=\"input-group\">
                    <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-lock\"></span></span>
                    <label for=\"Password\" class=\"sr-only\">Password</label>
                    <input type=\"password\" id=\"Password\" name=\"_password\" class=\"form-control\" placeholder=\"Password\" required>
                </div>    
            </div>
            <p><button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Acceder</button></p>
          </form>
        </div>
        </div>
    </div>
";
        
        $__internal_7838811fc047011b54db74e2e07962239fe3a4e42bcceefb5871edc6d785f9c5->leave($__internal_7838811fc047011b54db74e2e07962239fe3a4e42bcceefb5871edc6d785f9c5_prof);

    }

    public function getTemplateName()
    {
        return "DsgagenciaBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 19,  59 => 15,  53 => 11,  51 => 10,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'DsgagenciaBundle::layout.html.twig' %}*/
/* */
/* {% block formulario %}*/
/*     <div class="container">*/
/*         <div class="row">  */
/*             */
/*         <div class="col-xs-12 col-sm-4 col-sm-offset-4">*/
/*           <form class="form-signin" action={{ path('login_check') }} method="post">*/
/*             <h3 class="text-center">Por favor introduce tus datos</h3>*/
/*             {% if error %}*/
/*                 <div class="alert alert-dismissible alert-danger">*/
/*                   <strong>¡¡Error!!</strong> Usuario o contraseña incorrectos.*/
/*                 </div>*/
/*             {% endif %}*/
/*             <div class="form-group">*/
/*                 <label for="inputEmail" class="sr-only">Username</label>*/
/*                 <div class="input-group">*/
/*                     <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>*/
/*                     <input type="text" id="username" name="_username" class="form-control" value='{{ last_username }}' placeholder="Username" required autofocus>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <div class="input-group">*/
/*                     <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>*/
/*                     <label for="Password" class="sr-only">Password</label>*/
/*                     <input type="password" id="Password" name="_password" class="form-control" placeholder="Password" required>*/
/*                 </div>    */
/*             </div>*/
/*             <p><button class="btn btn-lg btn-primary btn-block" type="submit">Acceder</button></p>*/
/*           </form>*/
/*         </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
