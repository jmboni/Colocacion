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
        $__internal_ec4e128361b9d421e51af78dee926b58a80bc1a8ce608829c85d245e25f253ed = $this->env->getExtension("native_profiler");
        $__internal_ec4e128361b9d421e51af78dee926b58a80bc1a8ce608829c85d245e25f253ed->enter($__internal_ec4e128361b9d421e51af78dee926b58a80bc1a8ce608829c85d245e25f253ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DsgagenciaBundle::standard_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec4e128361b9d421e51af78dee926b58a80bc1a8ce608829c85d245e25f253ed->leave($__internal_ec4e128361b9d421e51af78dee926b58a80bc1a8ce608829c85d245e25f253ed_prof);

    }

    // line 3
    public function block_side_bar_nav($context, array $blocks = array())
    {
        $__internal_9b8d4f39096f1ce76289e169770cce236cbead384541783ed3dfa2696d4a3f08 = $this->env->getExtension("native_profiler");
        $__internal_9b8d4f39096f1ce76289e169770cce236cbead384541783ed3dfa2696d4a3f08->enter($__internal_9b8d4f39096f1ce76289e169770cce236cbead384541783ed3dfa2696d4a3f08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_nav"));

        // line 4
        echo "    ";
        echo $this->env->getExtension('knp_menu')->render("sonata_admin_sidebar", array("template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "knp_menu_template"), "method")));
        echo "
";
        
        $__internal_9b8d4f39096f1ce76289e169770cce236cbead384541783ed3dfa2696d4a3f08->leave($__internal_9b8d4f39096f1ce76289e169770cce236cbead384541783ed3dfa2696d4a3f08_prof);

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
