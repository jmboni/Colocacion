<?php

/* SonataAdminBundle::empty_layout.html.twig */
class __TwigTemplate_1b08a59f33baf5901335054531947e50d5a270b18e0132e80d7f0e047da2ebfa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "layout"), "method"), "SonataAdminBundle::empty_layout.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ba448bc7bd28e8df8863e1123091d73b9033c95d049c3fe22b1cb0deee644dee = $this->env->getExtension("native_profiler");
        $__internal_ba448bc7bd28e8df8863e1123091d73b9033c95d049c3fe22b1cb0deee644dee->enter($__internal_ba448bc7bd28e8df8863e1123091d73b9033c95d049c3fe22b1cb0deee644dee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba448bc7bd28e8df8863e1123091d73b9033c95d049c3fe22b1cb0deee644dee->leave($__internal_ba448bc7bd28e8df8863e1123091d73b9033c95d049c3fe22b1cb0deee644dee_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_e23e5339cbd4381ecbe06f96bc9bf50e68f440572eb655d13dedacbfe438515a = $this->env->getExtension("native_profiler");
        $__internal_e23e5339cbd4381ecbe06f96bc9bf50e68f440572eb655d13dedacbfe438515a->enter($__internal_e23e5339cbd4381ecbe06f96bc9bf50e68f440572eb655d13dedacbfe438515a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_e23e5339cbd4381ecbe06f96bc9bf50e68f440572eb655d13dedacbfe438515a->leave($__internal_e23e5339cbd4381ecbe06f96bc9bf50e68f440572eb655d13dedacbfe438515a_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_d16ab414b59d0e1e76bbad2d15ad021f9a528dcab2e0020c7968035f1eb36af8 = $this->env->getExtension("native_profiler");
        $__internal_d16ab414b59d0e1e76bbad2d15ad021f9a528dcab2e0020c7968035f1eb36af8->enter($__internal_d16ab414b59d0e1e76bbad2d15ad021f9a528dcab2e0020c7968035f1eb36af8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_d16ab414b59d0e1e76bbad2d15ad021f9a528dcab2e0020c7968035f1eb36af8->leave($__internal_d16ab414b59d0e1e76bbad2d15ad021f9a528dcab2e0020c7968035f1eb36af8_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_64c0e39cdee981f39d79f26ad41c1af9bc4c00cfc7c7f794e0b38f354744bb63 = $this->env->getExtension("native_profiler");
        $__internal_64c0e39cdee981f39d79f26ad41c1af9bc4c00cfc7c7f794e0b38f354744bb63->enter($__internal_64c0e39cdee981f39d79f26ad41c1af9bc4c00cfc7c7f794e0b38f354744bb63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_64c0e39cdee981f39d79f26ad41c1af9bc4c00cfc7c7f794e0b38f354744bb63->leave($__internal_64c0e39cdee981f39d79f26ad41c1af9bc4c00cfc7c7f794e0b38f354744bb63_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_75e90425adc89722163ef34005e7867e5abd97cb760f80331dc208f84ff38e17 = $this->env->getExtension("native_profiler");
        $__internal_75e90425adc89722163ef34005e7867e5abd97cb760f80331dc208f84ff38e17->enter($__internal_75e90425adc89722163ef34005e7867e5abd97cb760f80331dc208f84ff38e17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_75e90425adc89722163ef34005e7867e5abd97cb760f80331dc208f84ff38e17->leave($__internal_75e90425adc89722163ef34005e7867e5abd97cb760f80331dc208f84ff38e17_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_86cbb3cd475d5b50d09e3a52370176f31e5b6b45509ba7e6533074452a6e9e16 = $this->env->getExtension("native_profiler");
        $__internal_86cbb3cd475d5b50d09e3a52370176f31e5b6b45509ba7e6533074452a6e9e16->enter($__internal_86cbb3cd475d5b50d09e3a52370176f31e5b6b45509ba7e6533074452a6e9e16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>

";
        
        $__internal_86cbb3cd475d5b50d09e3a52370176f31e5b6b45509ba7e6533074452a6e9e16->leave($__internal_86cbb3cd475d5b50d09e3a52370176f31e5b6b45509ba7e6533074452a6e9e16_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_55069ea92d24323a1185e9134f9e488891480155e62b375ba2cba1828dc47410 = $this->env->getExtension("native_profiler");
        $__internal_55069ea92d24323a1185e9134f9e488891480155e62b375ba2cba1828dc47410->enter($__internal_55069ea92d24323a1185e9134f9e488891480155e62b375ba2cba1828dc47410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_55069ea92d24323a1185e9134f9e488891480155e62b375ba2cba1828dc47410->leave($__internal_55069ea92d24323a1185e9134f9e488891480155e62b375ba2cba1828dc47410_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_308737cbb90f93e1dc65c1c1fde1a6f87d9975d1cec13aad9d9e219f187dcd04 = $this->env->getExtension("native_profiler");
        $__internal_308737cbb90f93e1dc65c1c1fde1a6f87d9975d1cec13aad9d9e219f187dcd04->enter($__internal_308737cbb90f93e1dc65c1c1fde1a6f87d9975d1cec13aad9d9e219f187dcd04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_308737cbb90f93e1dc65c1c1fde1a6f87d9975d1cec13aad9d9e219f187dcd04->leave($__internal_308737cbb90f93e1dc65c1c1fde1a6f87d9975d1cec13aad9d9e219f187dcd04_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::empty_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 33,  113 => 32,  107 => 31,  89 => 20,  83 => 19,  72 => 17,  61 => 16,  50 => 15,  39 => 14,  24 => 12,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% extends admin_pool.getTemplate('layout') %}*/
/* */
/* {% block sonata_header %}{% endblock %}*/
/* {% block sonata_left_side %}{% endblock %}*/
/* {% block sonata_nav %}{% endblock %}*/
/* {% block sonata_breadcrumb %}{% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/* */
/*     <style>*/
/*         .content {*/
/*             margin: 0px;*/
/*             padding: 0px;*/
/*         }*/
/*     </style>*/
/* */
/* {% endblock %}*/
/* */
/* {% block sonata_wrapper %}*/
/*     {% block sonata_page_content %}*/
/*         {{ parent() }}*/
/*     {% endblock %}*/
/* {% endblock %}*/
/* */
