<?php

/* DsgagenciaBundle::standard_layout.html.twig */
class __TwigTemplate_37fef6f2fe6d2930e7fc250e3b0e688da28414e7e51ca0a7b47b3de63d357e38 extends Twig_Template
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
        $__internal_9ec04045351ed841b7e6662468f711f80fe9f6ae4aa8306447609e122e1f2b93 = $this->env->getExtension("native_profiler");
        $__internal_9ec04045351ed841b7e6662468f711f80fe9f6ae4aa8306447609e122e1f2b93->enter($__internal_9ec04045351ed841b7e6662468f711f80fe9f6ae4aa8306447609e122e1f2b93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DsgagenciaBundle::standard_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ec04045351ed841b7e6662468f711f80fe9f6ae4aa8306447609e122e1f2b93->leave($__internal_9ec04045351ed841b7e6662468f711f80fe9f6ae4aa8306447609e122e1f2b93_prof);

    }

    // line 3
    public function block_side_bar_nav($context, array $blocks = array())
    {
        $__internal_40cd5d76c13e8084915ae962a8be589d561b62ecf23346bb33aecb63be297aa2 = $this->env->getExtension("native_profiler");
        $__internal_40cd5d76c13e8084915ae962a8be589d561b62ecf23346bb33aecb63be297aa2->enter($__internal_40cd5d76c13e8084915ae962a8be589d561b62ecf23346bb33aecb63be297aa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_nav"));

        // line 4
        echo "    ";
        echo $this->env->getExtension('knp_menu')->render("sonata_admin_sidebar", array("template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "knp_menu_template"), "method")));
        echo "
";
        
        $__internal_40cd5d76c13e8084915ae962a8be589d561b62ecf23346bb33aecb63be297aa2->leave($__internal_40cd5d76c13e8084915ae962a8be589d561b62ecf23346bb33aecb63be297aa2_prof);

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
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'SonataAdminBundle::standard_layout.html.twig' %}*/
/* */
/* {% block side_bar_nav %}*/
/*     {{ knp_menu_render('sonata_admin_sidebar', {template: sonata_admin.adminPool.getTemplate('knp_menu_template')}) }}*/
/* {% endblock %}*/
