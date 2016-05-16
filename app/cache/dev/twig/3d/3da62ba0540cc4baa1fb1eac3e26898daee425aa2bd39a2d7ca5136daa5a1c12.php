<?php

/* DsgagenciaBundle:Default:login.html.twig */
class __TwigTemplate_3c031550695df4581b61671a052ad0b1d99327d14469f125a369833facff3ec9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e10d2051296e44ea563ba457c78af881726dd0d9eed9bd85415e3a16023faf7a = $this->env->getExtension("native_profiler");
        $__internal_e10d2051296e44ea563ba457c78af881726dd0d9eed9bd85415e3a16023faf7a->enter($__internal_e10d2051296e44ea563ba457c78af881726dd0d9eed9bd85415e3a16023faf7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DsgagenciaBundle:Default:login.html.twig"));

        // line 1
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 2
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
";
        }
        // line 4
        echo " 
<form action=";
        // line 5
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo " method=\"post\">
    <label for=\"username\">Username:</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value='";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "' />
 
    <label for=\"password\">Password:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />
 
    <button type=\"submit\">login</button>
</form>";
        
        $__internal_e10d2051296e44ea563ba457c78af881726dd0d9eed9bd85415e3a16023faf7a->leave($__internal_e10d2051296e44ea563ba457c78af881726dd0d9eed9bd85415e3a16023faf7a_prof);

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
        return array (  38 => 7,  33 => 5,  30 => 4,  24 => 2,  22 => 1,);
    }
}
/* {% if error %}*/
/*     <div>{{ error.message }}</div>*/
/* {% endif %}*/
/*  */
/* <form action={{ path('login_check') }} method="post">*/
/*     <label for="username">Username:</label>*/
/*     <input type="text" id="username" name="_username" value='{{ last_username }}' />*/
/*  */
/*     <label for="password">Password:</label>*/
/*     <input type="password" id="password" name="_password" />*/
/*  */
/*     <button type="submit">login</button>*/
/* </form>*/
