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
        $__internal_1c4a8303bddd984980845460b5982d4700759cfdc76c07b8acc55f9e9f6dbd15 = $this->env->getExtension("native_profiler");
        $__internal_1c4a8303bddd984980845460b5982d4700759cfdc76c07b8acc55f9e9f6dbd15->enter($__internal_1c4a8303bddd984980845460b5982d4700759cfdc76c07b8acc55f9e9f6dbd15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c4a8303bddd984980845460b5982d4700759cfdc76c07b8acc55f9e9f6dbd15->leave($__internal_1c4a8303bddd984980845460b5982d4700759cfdc76c07b8acc55f9e9f6dbd15_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_47fc628fceeee53c2454a91903a3ce0ffe06c29168e6d61e7d927cd7bdb54673 = $this->env->getExtension("native_profiler");
        $__internal_47fc628fceeee53c2454a91903a3ce0ffe06c29168e6d61e7d927cd7bdb54673->enter($__internal_47fc628fceeee53c2454a91903a3ce0ffe06c29168e6d61e7d927cd7bdb54673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_47fc628fceeee53c2454a91903a3ce0ffe06c29168e6d61e7d927cd7bdb54673->leave($__internal_47fc628fceeee53c2454a91903a3ce0ffe06c29168e6d61e7d927cd7bdb54673_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_5605964e0fb22c2b65bc4b9db851f7ef62e61765e27f232b2a643f45857106b9 = $this->env->getExtension("native_profiler");
        $__internal_5605964e0fb22c2b65bc4b9db851f7ef62e61765e27f232b2a643f45857106b9->enter($__internal_5605964e0fb22c2b65bc4b9db851f7ef62e61765e27f232b2a643f45857106b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_5605964e0fb22c2b65bc4b9db851f7ef62e61765e27f232b2a643f45857106b9->leave($__internal_5605964e0fb22c2b65bc4b9db851f7ef62e61765e27f232b2a643f45857106b9_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_258b37589b77166ecb77d75e9d22258e47c2cd68eda9fac8aa184ee1fb99bfaa = $this->env->getExtension("native_profiler");
        $__internal_258b37589b77166ecb77d75e9d22258e47c2cd68eda9fac8aa184ee1fb99bfaa->enter($__internal_258b37589b77166ecb77d75e9d22258e47c2cd68eda9fac8aa184ee1fb99bfaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_258b37589b77166ecb77d75e9d22258e47c2cd68eda9fac8aa184ee1fb99bfaa->leave($__internal_258b37589b77166ecb77d75e9d22258e47c2cd68eda9fac8aa184ee1fb99bfaa_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_a885b835be19ed2715923ef8ec21696691345884d9f98c72c9615ed117a3551e = $this->env->getExtension("native_profiler");
        $__internal_a885b835be19ed2715923ef8ec21696691345884d9f98c72c9615ed117a3551e->enter($__internal_a885b835be19ed2715923ef8ec21696691345884d9f98c72c9615ed117a3551e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_a885b835be19ed2715923ef8ec21696691345884d9f98c72c9615ed117a3551e->leave($__internal_a885b835be19ed2715923ef8ec21696691345884d9f98c72c9615ed117a3551e_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d015f97488eae197c4084a6c3ea61870a91700778d54a7849b0bc6bd2f1b5ddd = $this->env->getExtension("native_profiler");
        $__internal_d015f97488eae197c4084a6c3ea61870a91700778d54a7849b0bc6bd2f1b5ddd->enter($__internal_d015f97488eae197c4084a6c3ea61870a91700778d54a7849b0bc6bd2f1b5ddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_d015f97488eae197c4084a6c3ea61870a91700778d54a7849b0bc6bd2f1b5ddd->leave($__internal_d015f97488eae197c4084a6c3ea61870a91700778d54a7849b0bc6bd2f1b5ddd_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_2307994efa779e50c80e2da14f90897429ec8b7a2dd70a381135559d3e3f57a1 = $this->env->getExtension("native_profiler");
        $__internal_2307994efa779e50c80e2da14f90897429ec8b7a2dd70a381135559d3e3f57a1->enter($__internal_2307994efa779e50c80e2da14f90897429ec8b7a2dd70a381135559d3e3f57a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_2307994efa779e50c80e2da14f90897429ec8b7a2dd70a381135559d3e3f57a1->leave($__internal_2307994efa779e50c80e2da14f90897429ec8b7a2dd70a381135559d3e3f57a1_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_59f63d5adb94dfa492fde80febe065e3752cab68db35cfde55d4b39ffcd0337d = $this->env->getExtension("native_profiler");
        $__internal_59f63d5adb94dfa492fde80febe065e3752cab68db35cfde55d4b39ffcd0337d->enter($__internal_59f63d5adb94dfa492fde80febe065e3752cab68db35cfde55d4b39ffcd0337d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_59f63d5adb94dfa492fde80febe065e3752cab68db35cfde55d4b39ffcd0337d->leave($__internal_59f63d5adb94dfa492fde80febe065e3752cab68db35cfde55d4b39ffcd0337d_prof);

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
