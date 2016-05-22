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
        $__internal_ad20beff70431d91abff687c14b1da2b069020e36a30019ab20d9c91a70825f2 = $this->env->getExtension("native_profiler");
        $__internal_ad20beff70431d91abff687c14b1da2b069020e36a30019ab20d9c91a70825f2->enter($__internal_ad20beff70431d91abff687c14b1da2b069020e36a30019ab20d9c91a70825f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad20beff70431d91abff687c14b1da2b069020e36a30019ab20d9c91a70825f2->leave($__internal_ad20beff70431d91abff687c14b1da2b069020e36a30019ab20d9c91a70825f2_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_0efbf38e89fe7d5ec6c46d3adcce54e3f32c0ac0825c3cc5cb724468da4093cf = $this->env->getExtension("native_profiler");
        $__internal_0efbf38e89fe7d5ec6c46d3adcce54e3f32c0ac0825c3cc5cb724468da4093cf->enter($__internal_0efbf38e89fe7d5ec6c46d3adcce54e3f32c0ac0825c3cc5cb724468da4093cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_0efbf38e89fe7d5ec6c46d3adcce54e3f32c0ac0825c3cc5cb724468da4093cf->leave($__internal_0efbf38e89fe7d5ec6c46d3adcce54e3f32c0ac0825c3cc5cb724468da4093cf_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_25a70bbabb967b0b4f8fe27845f7084768f9bd3ace956a49f2ca1299c901b75b = $this->env->getExtension("native_profiler");
        $__internal_25a70bbabb967b0b4f8fe27845f7084768f9bd3ace956a49f2ca1299c901b75b->enter($__internal_25a70bbabb967b0b4f8fe27845f7084768f9bd3ace956a49f2ca1299c901b75b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_25a70bbabb967b0b4f8fe27845f7084768f9bd3ace956a49f2ca1299c901b75b->leave($__internal_25a70bbabb967b0b4f8fe27845f7084768f9bd3ace956a49f2ca1299c901b75b_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_e43cff80b2cb3e09f7f48f850db1f242c7cab2ad86740a1832cf1eecc7c6f3e6 = $this->env->getExtension("native_profiler");
        $__internal_e43cff80b2cb3e09f7f48f850db1f242c7cab2ad86740a1832cf1eecc7c6f3e6->enter($__internal_e43cff80b2cb3e09f7f48f850db1f242c7cab2ad86740a1832cf1eecc7c6f3e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_e43cff80b2cb3e09f7f48f850db1f242c7cab2ad86740a1832cf1eecc7c6f3e6->leave($__internal_e43cff80b2cb3e09f7f48f850db1f242c7cab2ad86740a1832cf1eecc7c6f3e6_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_776c804f1832724369d4915f2dd3153de8a2847a2f1f72bb606a659413889990 = $this->env->getExtension("native_profiler");
        $__internal_776c804f1832724369d4915f2dd3153de8a2847a2f1f72bb606a659413889990->enter($__internal_776c804f1832724369d4915f2dd3153de8a2847a2f1f72bb606a659413889990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_776c804f1832724369d4915f2dd3153de8a2847a2f1f72bb606a659413889990->leave($__internal_776c804f1832724369d4915f2dd3153de8a2847a2f1f72bb606a659413889990_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e9dd0c06de233c7188b6c97dff6857074595a93eb90e7350a6ce79f3bfbe6b25 = $this->env->getExtension("native_profiler");
        $__internal_e9dd0c06de233c7188b6c97dff6857074595a93eb90e7350a6ce79f3bfbe6b25->enter($__internal_e9dd0c06de233c7188b6c97dff6857074595a93eb90e7350a6ce79f3bfbe6b25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_e9dd0c06de233c7188b6c97dff6857074595a93eb90e7350a6ce79f3bfbe6b25->leave($__internal_e9dd0c06de233c7188b6c97dff6857074595a93eb90e7350a6ce79f3bfbe6b25_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_5d2eb25b0443ad83caa1f9deb6c67c532afcacb2f3e0be3a8155ce8adb1b61a3 = $this->env->getExtension("native_profiler");
        $__internal_5d2eb25b0443ad83caa1f9deb6c67c532afcacb2f3e0be3a8155ce8adb1b61a3->enter($__internal_5d2eb25b0443ad83caa1f9deb6c67c532afcacb2f3e0be3a8155ce8adb1b61a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_5d2eb25b0443ad83caa1f9deb6c67c532afcacb2f3e0be3a8155ce8adb1b61a3->leave($__internal_5d2eb25b0443ad83caa1f9deb6c67c532afcacb2f3e0be3a8155ce8adb1b61a3_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_88594f699dd06efe1099046b1f069b8daf5ec8af8ddb85d2d66eba5f073fbf9f = $this->env->getExtension("native_profiler");
        $__internal_88594f699dd06efe1099046b1f069b8daf5ec8af8ddb85d2d66eba5f073fbf9f->enter($__internal_88594f699dd06efe1099046b1f069b8daf5ec8af8ddb85d2d66eba5f073fbf9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_88594f699dd06efe1099046b1f069b8daf5ec8af8ddb85d2d66eba5f073fbf9f->leave($__internal_88594f699dd06efe1099046b1f069b8daf5ec8af8ddb85d2d66eba5f073fbf9f_prof);

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
