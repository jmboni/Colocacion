<?php

/* DsgagenciaBundle::standard_layout.html.twig */
class __TwigTemplate_4d3e871731bd244912b69255ef90a59ed1f4fe68cf9ec89645f4782b7dff84ae extends Twig_Template
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
        $__internal_7b2254a516eb25fc32ec14fc55747a929d06cec190a4b1f5b88cb08883281609 = $this->env->getExtension("native_profiler");
        $__internal_7b2254a516eb25fc32ec14fc55747a929d06cec190a4b1f5b88cb08883281609->enter($__internal_7b2254a516eb25fc32ec14fc55747a929d06cec190a4b1f5b88cb08883281609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DsgagenciaBundle::standard_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b2254a516eb25fc32ec14fc55747a929d06cec190a4b1f5b88cb08883281609->leave($__internal_7b2254a516eb25fc32ec14fc55747a929d06cec190a4b1f5b88cb08883281609_prof);

    }

    // line 3
    public function block_side_bar_nav($context, array $blocks = array())
    {
        $__internal_a4f0482e6a8a774fc6250164cc2c0f9dca8808de67d1ced76606f5ab2d1603d6 = $this->env->getExtension("native_profiler");
        $__internal_a4f0482e6a8a774fc6250164cc2c0f9dca8808de67d1ced76606f5ab2d1603d6->enter($__internal_a4f0482e6a8a774fc6250164cc2c0f9dca8808de67d1ced76606f5ab2d1603d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_nav"));

        // line 4
        echo "    ";
        echo $this->env->getExtension('knp_menu')->render("sonata_admin_sidebar", array("template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "knp_menu_template"), "method")));
        echo "
";
        
        $__internal_a4f0482e6a8a774fc6250164cc2c0f9dca8808de67d1ced76606f5ab2d1603d6->leave($__internal_a4f0482e6a8a774fc6250164cc2c0f9dca8808de67d1ced76606f5ab2d1603d6_prof);

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
