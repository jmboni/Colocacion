<?php

/* DsgagenciaBundle::standard_layout.html.twig */
class __TwigTemplate_459d58eaf51c24fe44a86c6b61b37ab1b9b6248df5c0287a76670ef00edebb91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle::standard_layout.html.twig", "DsgagenciaBundle::standard_layout.html.twig", 1);
        $this->blocks = array(
            'side_bar_nav' => array($this, 'block_side_bar_nav'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle::standard_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_side_bar_nav($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        echo $this->env->getExtension('knp_menu')->render("sonata_admin_sidebar", array("template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "adminPool", array()), "getTemplate", array(0 => "knp_menu_template"), "method")));
        echo "
";
    }

    public function getTemplateName()
    {
        return "DsgagenciaBundle::standard_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'SonataAdminBundle::standard_layout.html.twig' %}*/
/* */
/* {% block side_bar_nav %}*/
/*     {{ knp_menu_render('sonata_admin_sidebar', {template: sonata_admin.adminPool.getTemplate('knp_menu_template')}) }}*/
/* {% endblock %}*/
