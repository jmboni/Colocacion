<?php

/* SonataAdminBundle:Core:user_block.html.twig */
class __TwigTemplate_b31a5d4d2e4c72c3deab3b2fb47ca1d21e8cbee68c5a607e4492b55806b671f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4abc1c496671afa471f89cbe5fecc0210c964427f6f10af8832e22ce8421f33c = $this->env->getExtension("native_profiler");
        $__internal_4abc1c496671afa471f89cbe5fecc0210c964427f6f10af8832e22ce8421f33c->enter($__internal_4abc1c496671afa471f89cbe5fecc0210c964427f6f10af8832e22ce8421f33c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        // line 2
        echo "
";
        
        $__internal_4abc1c496671afa471f89cbe5fecc0210c964427f6f10af8832e22ce8421f33c->leave($__internal_4abc1c496671afa471f89cbe5fecc0210c964427f6f10af8832e22ce8421f33c_prof);

    }

    // line 1
    public function block_user_block($context, array $blocks = array())
    {
        $__internal_470f9b9d1f86b228758a59df4b2213cdbca156e69090a223193656c823bfe643 = $this->env->getExtension("native_profiler");
        $__internal_470f9b9d1f86b228758a59df4b2213cdbca156e69090a223193656c823bfe643->enter($__internal_470f9b9d1f86b228758a59df4b2213cdbca156e69090a223193656c823bfe643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        echo "<div class=\"modal-footer\"><a ";
        echo $this->env->getExtension('routing')->getPath("logout");
        echo " class=\"btn btn-primary btn-block\">Logout</a></div>";
        
        $__internal_470f9b9d1f86b228758a59df4b2213cdbca156e69090a223193656c823bfe643->leave($__internal_470f9b9d1f86b228758a59df4b2213cdbca156e69090a223193656c823bfe643_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  33 => 1,  25 => 2,  23 => 1,);
    }
}
/* {% block user_block %}<div class="modal-footer"><a {{ path('logout') }} class="btn btn-primary btn-block">Logout</a></div>{% endblock %}*/
/* */
/* */
