<?php

/* SonataAdminBundle:Core:user_block.html.twig */
class __TwigTemplate_bbe3b4b6e5147b65d4adc5920d6b378b97761950ec0be046a4a612cd15292747 extends Twig_Template
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
        // line 2
        echo "
";
    }

    // line 1
    public function block_user_block($context, array $blocks = array())
    {
        echo "<div class=\"modal-footer\"><a ";
        echo $this->env->getExtension('routing')->getPath("logout");
        echo " class=\"btn btn-primary btn-block\">Logout</a></div>";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  27 => 1,  22 => 2,  20 => 1,);
    }
}
/* {% block user_block %}<div class="modal-footer"><a {{ path('logout') }} class="btn btn-primary btn-block">Logout</a></div>{% endblock %}*/
/* */
/* */
