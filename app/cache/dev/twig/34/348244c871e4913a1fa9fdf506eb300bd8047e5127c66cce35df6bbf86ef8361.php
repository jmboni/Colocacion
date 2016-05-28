<?php

/* SonataAdminBundle:Core:user_block.html.twig */
class __TwigTemplate_387d428b4bcfd5a3a4da46e4f2b144de9e5a38a7cf136d73273490f998cc485b extends Twig_Template
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
        $__internal_a0dc1e74b1f320ba345d373d91cabf56a166e043f836767c0e10a76fa52fa091 = $this->env->getExtension("native_profiler");
        $__internal_a0dc1e74b1f320ba345d373d91cabf56a166e043f836767c0e10a76fa52fa091->enter($__internal_a0dc1e74b1f320ba345d373d91cabf56a166e043f836767c0e10a76fa52fa091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_a0dc1e74b1f320ba345d373d91cabf56a166e043f836767c0e10a76fa52fa091->leave($__internal_a0dc1e74b1f320ba345d373d91cabf56a166e043f836767c0e10a76fa52fa091_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_8a5703432c247c3abdfb4a452e70b72b82f934d620aadab3cb787a16c770dd37 = $this->env->getExtension("native_profiler");
        $__internal_8a5703432c247c3abdfb4a452e70b72b82f934d620aadab3cb787a16c770dd37->enter($__internal_8a5703432c247c3abdfb4a452e70b72b82f934d620aadab3cb787a16c770dd37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        echo "<div class=\"modal-footer\"><a href=";
        echo $this->env->getExtension('routing')->getPath("logout");
        echo " class=\"btn btn-primary btn-block\">Salir</a></div>";
        
        $__internal_8a5703432c247c3abdfb4a452e70b72b82f934d620aadab3cb787a16c770dd37->leave($__internal_8a5703432c247c3abdfb4a452e70b72b82f934d620aadab3cb787a16c770dd37_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block user_block %}<div class="modal-footer"><a href={{ path('logout') }} class="btn btn-primary btn-block">Salir</a></div>{% endblock %}*/
