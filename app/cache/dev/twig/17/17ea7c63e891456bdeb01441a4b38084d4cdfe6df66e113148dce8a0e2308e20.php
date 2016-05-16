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
        $__internal_115fb3dbc5bf95f5b362c1dc60dcbce75a984198d9e20e321e663b1b29c0a426 = $this->env->getExtension("native_profiler");
        $__internal_115fb3dbc5bf95f5b362c1dc60dcbce75a984198d9e20e321e663b1b29c0a426->enter($__internal_115fb3dbc5bf95f5b362c1dc60dcbce75a984198d9e20e321e663b1b29c0a426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        // line 2
        echo "
";
        
        $__internal_115fb3dbc5bf95f5b362c1dc60dcbce75a984198d9e20e321e663b1b29c0a426->leave($__internal_115fb3dbc5bf95f5b362c1dc60dcbce75a984198d9e20e321e663b1b29c0a426_prof);

    }

    // line 1
    public function block_user_block($context, array $blocks = array())
    {
        $__internal_9c4a74bc1576c94341e1462ee6307484f094b210670976736faa9c3ec807c1ec = $this->env->getExtension("native_profiler");
        $__internal_9c4a74bc1576c94341e1462ee6307484f094b210670976736faa9c3ec807c1ec->enter($__internal_9c4a74bc1576c94341e1462ee6307484f094b210670976736faa9c3ec807c1ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        echo "<div class=\"modal-footer\"><a ";
        echo $this->env->getExtension('routing')->getPath("logout");
        echo " class=\"btn btn-primary btn-block\">Logout</a></div>";
        
        $__internal_9c4a74bc1576c94341e1462ee6307484f094b210670976736faa9c3ec807c1ec->leave($__internal_9c4a74bc1576c94341e1462ee6307484f094b210670976736faa9c3ec807c1ec_prof);

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
