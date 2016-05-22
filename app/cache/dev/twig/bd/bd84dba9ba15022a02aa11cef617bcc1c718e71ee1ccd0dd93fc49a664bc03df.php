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
        $__internal_c5d0011f7784322ed86e44cad2beed8c98f1c1c1298d7dbde57c2a6f14d54d33 = $this->env->getExtension("native_profiler");
        $__internal_c5d0011f7784322ed86e44cad2beed8c98f1c1c1298d7dbde57c2a6f14d54d33->enter($__internal_c5d0011f7784322ed86e44cad2beed8c98f1c1c1298d7dbde57c2a6f14d54d33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DsgagenciaBundle::standard_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5d0011f7784322ed86e44cad2beed8c98f1c1c1298d7dbde57c2a6f14d54d33->leave($__internal_c5d0011f7784322ed86e44cad2beed8c98f1c1c1298d7dbde57c2a6f14d54d33_prof);

    }

    // line 3
    public function block_side_bar_nav($context, array $blocks = array())
    {
        $__internal_b1069af1c67c9303c19b9174d8eee0c87f0ac45d3f06873c5c54b09339d249c8 = $this->env->getExtension("native_profiler");
        $__internal_b1069af1c67c9303c19b9174d8eee0c87f0ac45d3f06873c5c54b09339d249c8->enter($__internal_b1069af1c67c9303c19b9174d8eee0c87f0ac45d3f06873c5c54b09339d249c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_nav"));

        // line 4
        echo "    ";
        echo $this->env->getExtension('knp_menu')->render("sonata_admin_sidebar", array("template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "knp_menu_template"), "method")));
        echo "
";
        
        $__internal_b1069af1c67c9303c19b9174d8eee0c87f0ac45d3f06873c5c54b09339d249c8->leave($__internal_b1069af1c67c9303c19b9174d8eee0c87f0ac45d3f06873c5c54b09339d249c8_prof);

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
