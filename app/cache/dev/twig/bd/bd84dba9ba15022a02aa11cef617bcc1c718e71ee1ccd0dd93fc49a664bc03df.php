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
        $__internal_77079a7a97b7e4f492f9a1f751d5a0785d9db04b05d6cc807b541872faf5627e = $this->env->getExtension("native_profiler");
        $__internal_77079a7a97b7e4f492f9a1f751d5a0785d9db04b05d6cc807b541872faf5627e->enter($__internal_77079a7a97b7e4f492f9a1f751d5a0785d9db04b05d6cc807b541872faf5627e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DsgagenciaBundle::standard_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77079a7a97b7e4f492f9a1f751d5a0785d9db04b05d6cc807b541872faf5627e->leave($__internal_77079a7a97b7e4f492f9a1f751d5a0785d9db04b05d6cc807b541872faf5627e_prof);

    }

    // line 3
    public function block_side_bar_nav($context, array $blocks = array())
    {
        $__internal_3f66f864388489652b5375db0b603bfaace5d1b1b471f703a33c7b9a94139f8c = $this->env->getExtension("native_profiler");
        $__internal_3f66f864388489652b5375db0b603bfaace5d1b1b471f703a33c7b9a94139f8c->enter($__internal_3f66f864388489652b5375db0b603bfaace5d1b1b471f703a33c7b9a94139f8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_nav"));

        // line 4
        echo "    ";
        echo $this->env->getExtension('knp_menu')->render("sonata_admin_sidebar", array("template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "knp_menu_template"), "method")));
        echo "
";
        
        $__internal_3f66f864388489652b5375db0b603bfaace5d1b1b471f703a33c7b9a94139f8c->leave($__internal_3f66f864388489652b5375db0b603bfaace5d1b1b471f703a33c7b9a94139f8c_prof);

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
