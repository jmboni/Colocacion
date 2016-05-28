<?php

/* SonataAdminBundle::empty_layout.html.twig */
class __TwigTemplate_7fce81cebd313dd3cc309742b4429931ba890b494f1b94d12af8b8e3ce2a6c2d extends Twig_Template
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
        $__internal_276b759a4b32c302182cda1b879593722a6f74f177eedc13b4ce5e790e0091e1 = $this->env->getExtension("native_profiler");
        $__internal_276b759a4b32c302182cda1b879593722a6f74f177eedc13b4ce5e790e0091e1->enter($__internal_276b759a4b32c302182cda1b879593722a6f74f177eedc13b4ce5e790e0091e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_276b759a4b32c302182cda1b879593722a6f74f177eedc13b4ce5e790e0091e1->leave($__internal_276b759a4b32c302182cda1b879593722a6f74f177eedc13b4ce5e790e0091e1_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_54b556d1d870d2091b8af084fefd88fae9e83a04213f6eddef8e5e84f032d5db = $this->env->getExtension("native_profiler");
        $__internal_54b556d1d870d2091b8af084fefd88fae9e83a04213f6eddef8e5e84f032d5db->enter($__internal_54b556d1d870d2091b8af084fefd88fae9e83a04213f6eddef8e5e84f032d5db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_54b556d1d870d2091b8af084fefd88fae9e83a04213f6eddef8e5e84f032d5db->leave($__internal_54b556d1d870d2091b8af084fefd88fae9e83a04213f6eddef8e5e84f032d5db_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_c5c56dc98170e397a5519888466cd03a2fba5a34431da5cecc4a428d9938e43e = $this->env->getExtension("native_profiler");
        $__internal_c5c56dc98170e397a5519888466cd03a2fba5a34431da5cecc4a428d9938e43e->enter($__internal_c5c56dc98170e397a5519888466cd03a2fba5a34431da5cecc4a428d9938e43e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_c5c56dc98170e397a5519888466cd03a2fba5a34431da5cecc4a428d9938e43e->leave($__internal_c5c56dc98170e397a5519888466cd03a2fba5a34431da5cecc4a428d9938e43e_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_b369d9ed5119904bd36e07e19f7b634d1cd512ca0d1c49f95fe16e928dd9677d = $this->env->getExtension("native_profiler");
        $__internal_b369d9ed5119904bd36e07e19f7b634d1cd512ca0d1c49f95fe16e928dd9677d->enter($__internal_b369d9ed5119904bd36e07e19f7b634d1cd512ca0d1c49f95fe16e928dd9677d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_b369d9ed5119904bd36e07e19f7b634d1cd512ca0d1c49f95fe16e928dd9677d->leave($__internal_b369d9ed5119904bd36e07e19f7b634d1cd512ca0d1c49f95fe16e928dd9677d_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_f504b53098e8c6bc6398fb3bdb28a241cccfd4f519efa811bfc0afc91a56ac77 = $this->env->getExtension("native_profiler");
        $__internal_f504b53098e8c6bc6398fb3bdb28a241cccfd4f519efa811bfc0afc91a56ac77->enter($__internal_f504b53098e8c6bc6398fb3bdb28a241cccfd4f519efa811bfc0afc91a56ac77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_f504b53098e8c6bc6398fb3bdb28a241cccfd4f519efa811bfc0afc91a56ac77->leave($__internal_f504b53098e8c6bc6398fb3bdb28a241cccfd4f519efa811bfc0afc91a56ac77_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_283451313c08fcec69c3d2e000eb9f8347589c457418bace77f1b5f25af752b1 = $this->env->getExtension("native_profiler");
        $__internal_283451313c08fcec69c3d2e000eb9f8347589c457418bace77f1b5f25af752b1->enter($__internal_283451313c08fcec69c3d2e000eb9f8347589c457418bace77f1b5f25af752b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_283451313c08fcec69c3d2e000eb9f8347589c457418bace77f1b5f25af752b1->leave($__internal_283451313c08fcec69c3d2e000eb9f8347589c457418bace77f1b5f25af752b1_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_09db329bf6a47341efe46d9f2c40010d9ea4c8f20828961aa83e60b7e180ff45 = $this->env->getExtension("native_profiler");
        $__internal_09db329bf6a47341efe46d9f2c40010d9ea4c8f20828961aa83e60b7e180ff45->enter($__internal_09db329bf6a47341efe46d9f2c40010d9ea4c8f20828961aa83e60b7e180ff45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_09db329bf6a47341efe46d9f2c40010d9ea4c8f20828961aa83e60b7e180ff45->leave($__internal_09db329bf6a47341efe46d9f2c40010d9ea4c8f20828961aa83e60b7e180ff45_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_306dcd046cb54758355bfa2683eec3fc2fd3a1f84ae86821ad30c105133f57db = $this->env->getExtension("native_profiler");
        $__internal_306dcd046cb54758355bfa2683eec3fc2fd3a1f84ae86821ad30c105133f57db->enter($__internal_306dcd046cb54758355bfa2683eec3fc2fd3a1f84ae86821ad30c105133f57db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_306dcd046cb54758355bfa2683eec3fc2fd3a1f84ae86821ad30c105133f57db->leave($__internal_306dcd046cb54758355bfa2683eec3fc2fd3a1f84ae86821ad30c105133f57db_prof);

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
