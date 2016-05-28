<?php

/* SonataAdminBundle:Core:user_block.html.twig */
class __TwigTemplate_e5a8ce7981d6f7c147a97f03bfdabf183b412786d65b613b23b082cedf9a6aa6 extends Twig_Template
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
        // line 1
        $this->displayBlock('user_block', $context, $blocks);
    }

    public function block_user_block($context, array $blocks = array())
    {
        echo "<div class=\"modal-footer\"><a href=";
        echo $this->env->getExtension('routing')->getPath("logout");
        echo " class=\"btn btn-primary btn-block\">Salir</a></div>";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  20 => 1,);
    }
}
/* {% block user_block %}<div class="modal-footer"><a href={{ path('logout') }} class="btn btn-primary btn-block">Salir</a></div>{% endblock %}*/
