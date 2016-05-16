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
        $__internal_232523b9e7155a6cf31a4fb288f45a8eceafcd2f98667a27aca4425554e2b0fa = $this->env->getExtension("native_profiler");
        $__internal_232523b9e7155a6cf31a4fb288f45a8eceafcd2f98667a27aca4425554e2b0fa->enter($__internal_232523b9e7155a6cf31a4fb288f45a8eceafcd2f98667a27aca4425554e2b0fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_232523b9e7155a6cf31a4fb288f45a8eceafcd2f98667a27aca4425554e2b0fa->leave($__internal_232523b9e7155a6cf31a4fb288f45a8eceafcd2f98667a27aca4425554e2b0fa_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_d244c5b9691358cfe96a1ec63d29c5c3c1a61f83a333d8b7e377c64e17a04e20 = $this->env->getExtension("native_profiler");
        $__internal_d244c5b9691358cfe96a1ec63d29c5c3c1a61f83a333d8b7e377c64e17a04e20->enter($__internal_d244c5b9691358cfe96a1ec63d29c5c3c1a61f83a333d8b7e377c64e17a04e20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_d244c5b9691358cfe96a1ec63d29c5c3c1a61f83a333d8b7e377c64e17a04e20->leave($__internal_d244c5b9691358cfe96a1ec63d29c5c3c1a61f83a333d8b7e377c64e17a04e20_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_eaea33763f524035cbc2e4ea83ab687f65701970a5737d1ba411be0e745d3dc8 = $this->env->getExtension("native_profiler");
        $__internal_eaea33763f524035cbc2e4ea83ab687f65701970a5737d1ba411be0e745d3dc8->enter($__internal_eaea33763f524035cbc2e4ea83ab687f65701970a5737d1ba411be0e745d3dc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_eaea33763f524035cbc2e4ea83ab687f65701970a5737d1ba411be0e745d3dc8->leave($__internal_eaea33763f524035cbc2e4ea83ab687f65701970a5737d1ba411be0e745d3dc8_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_c0518492a69614bdf564c3ecf561128c4bd1af16346d43332e1e387195f4a408 = $this->env->getExtension("native_profiler");
        $__internal_c0518492a69614bdf564c3ecf561128c4bd1af16346d43332e1e387195f4a408->enter($__internal_c0518492a69614bdf564c3ecf561128c4bd1af16346d43332e1e387195f4a408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_c0518492a69614bdf564c3ecf561128c4bd1af16346d43332e1e387195f4a408->leave($__internal_c0518492a69614bdf564c3ecf561128c4bd1af16346d43332e1e387195f4a408_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_8053e84dfc37dec0e18518841b9af175a9ae31f4b0ba12b578c86d8e9c746e8a = $this->env->getExtension("native_profiler");
        $__internal_8053e84dfc37dec0e18518841b9af175a9ae31f4b0ba12b578c86d8e9c746e8a->enter($__internal_8053e84dfc37dec0e18518841b9af175a9ae31f4b0ba12b578c86d8e9c746e8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_8053e84dfc37dec0e18518841b9af175a9ae31f4b0ba12b578c86d8e9c746e8a->leave($__internal_8053e84dfc37dec0e18518841b9af175a9ae31f4b0ba12b578c86d8e9c746e8a_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_614670ca0f5d34c0792e6cb8234d290abf852d2c61ed1fdaa5c1e0090e9f756d = $this->env->getExtension("native_profiler");
        $__internal_614670ca0f5d34c0792e6cb8234d290abf852d2c61ed1fdaa5c1e0090e9f756d->enter($__internal_614670ca0f5d34c0792e6cb8234d290abf852d2c61ed1fdaa5c1e0090e9f756d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_614670ca0f5d34c0792e6cb8234d290abf852d2c61ed1fdaa5c1e0090e9f756d->leave($__internal_614670ca0f5d34c0792e6cb8234d290abf852d2c61ed1fdaa5c1e0090e9f756d_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_c771aa398b27249ed44975626470d16791b3e1539ca5e0a15084db07ac2c524c = $this->env->getExtension("native_profiler");
        $__internal_c771aa398b27249ed44975626470d16791b3e1539ca5e0a15084db07ac2c524c->enter($__internal_c771aa398b27249ed44975626470d16791b3e1539ca5e0a15084db07ac2c524c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_c771aa398b27249ed44975626470d16791b3e1539ca5e0a15084db07ac2c524c->leave($__internal_c771aa398b27249ed44975626470d16791b3e1539ca5e0a15084db07ac2c524c_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_99a52167e74ccc37d39dfc4f966a47d82b4106a6c40244a79fcb36a1417bc31d = $this->env->getExtension("native_profiler");
        $__internal_99a52167e74ccc37d39dfc4f966a47d82b4106a6c40244a79fcb36a1417bc31d->enter($__internal_99a52167e74ccc37d39dfc4f966a47d82b4106a6c40244a79fcb36a1417bc31d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_99a52167e74ccc37d39dfc4f966a47d82b4106a6c40244a79fcb36a1417bc31d->leave($__internal_99a52167e74ccc37d39dfc4f966a47d82b4106a6c40244a79fcb36a1417bc31d_prof);

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
