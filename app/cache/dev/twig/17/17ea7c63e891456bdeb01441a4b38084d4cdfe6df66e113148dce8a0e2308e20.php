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
        $__internal_43ed744284a401a649de4ba2d9eb0b55be89c717c4ff314563ea83d1b1fcfd0a = $this->env->getExtension("native_profiler");
        $__internal_43ed744284a401a649de4ba2d9eb0b55be89c717c4ff314563ea83d1b1fcfd0a->enter($__internal_43ed744284a401a649de4ba2d9eb0b55be89c717c4ff314563ea83d1b1fcfd0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        // line 2
        echo "
";
        
        $__internal_43ed744284a401a649de4ba2d9eb0b55be89c717c4ff314563ea83d1b1fcfd0a->leave($__internal_43ed744284a401a649de4ba2d9eb0b55be89c717c4ff314563ea83d1b1fcfd0a_prof);

    }

    // line 1
    public function block_user_block($context, array $blocks = array())
    {
        $__internal_eaa2ac52486804676e6edaf8dde36782171aa0ed02734f015ce4c4113605e392 = $this->env->getExtension("native_profiler");
        $__internal_eaa2ac52486804676e6edaf8dde36782171aa0ed02734f015ce4c4113605e392->enter($__internal_eaa2ac52486804676e6edaf8dde36782171aa0ed02734f015ce4c4113605e392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        echo "<div class=\"modal-footer\"><a ";
        echo $this->env->getExtension('routing')->getPath("logout");
        echo " class=\"btn btn-primary btn-block\">Logout</a></div>";
        
        $__internal_eaa2ac52486804676e6edaf8dde36782171aa0ed02734f015ce4c4113605e392->leave($__internal_eaa2ac52486804676e6edaf8dde36782171aa0ed02734f015ce4c4113605e392_prof);

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
