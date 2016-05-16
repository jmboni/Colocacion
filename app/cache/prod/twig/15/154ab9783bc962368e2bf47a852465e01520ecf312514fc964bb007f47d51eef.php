<?php

/* DsgagenciaBundle:Default:login.html.twig */
class __TwigTemplate_70334fac5273cf937fd5d51e66161b1f98172c1026b08d5bfbf21dbe32629d3d extends Twig_Template
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
        // line 1
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 2
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "message", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "' />
 
    <label for=\"password\">Password:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />
 
    <button type=\"submit\">login</button>
</form>";
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
        return array (  35 => 7,  30 => 5,  27 => 4,  21 => 2,  19 => 1,);
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
