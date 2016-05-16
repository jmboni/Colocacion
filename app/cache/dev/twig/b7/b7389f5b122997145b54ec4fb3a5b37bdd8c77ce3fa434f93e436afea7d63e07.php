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
        $__internal_1f23aff4001e40a9050270f974230a633a62684592ef0c400cdebd25fb517289 = $this->env->getExtension("native_profiler");
        $__internal_1f23aff4001e40a9050270f974230a633a62684592ef0c400cdebd25fb517289->enter($__internal_1f23aff4001e40a9050270f974230a633a62684592ef0c400cdebd25fb517289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f23aff4001e40a9050270f974230a633a62684592ef0c400cdebd25fb517289->leave($__internal_1f23aff4001e40a9050270f974230a633a62684592ef0c400cdebd25fb517289_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_73c059beffa5778802c189851826586fc75ec543c281f9e8f1f2c9f49c6d5cba = $this->env->getExtension("native_profiler");
        $__internal_73c059beffa5778802c189851826586fc75ec543c281f9e8f1f2c9f49c6d5cba->enter($__internal_73c059beffa5778802c189851826586fc75ec543c281f9e8f1f2c9f49c6d5cba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_73c059beffa5778802c189851826586fc75ec543c281f9e8f1f2c9f49c6d5cba->leave($__internal_73c059beffa5778802c189851826586fc75ec543c281f9e8f1f2c9f49c6d5cba_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_8cfccbd6626caddd7e84127a7e1fde4895445d682f62758bc64ceaf418223f5f = $this->env->getExtension("native_profiler");
        $__internal_8cfccbd6626caddd7e84127a7e1fde4895445d682f62758bc64ceaf418223f5f->enter($__internal_8cfccbd6626caddd7e84127a7e1fde4895445d682f62758bc64ceaf418223f5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_8cfccbd6626caddd7e84127a7e1fde4895445d682f62758bc64ceaf418223f5f->leave($__internal_8cfccbd6626caddd7e84127a7e1fde4895445d682f62758bc64ceaf418223f5f_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_b0f850b833db79c9495862e883c376222b27869cb1e2fd54f08fc6e4503a2c7d = $this->env->getExtension("native_profiler");
        $__internal_b0f850b833db79c9495862e883c376222b27869cb1e2fd54f08fc6e4503a2c7d->enter($__internal_b0f850b833db79c9495862e883c376222b27869cb1e2fd54f08fc6e4503a2c7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_b0f850b833db79c9495862e883c376222b27869cb1e2fd54f08fc6e4503a2c7d->leave($__internal_b0f850b833db79c9495862e883c376222b27869cb1e2fd54f08fc6e4503a2c7d_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_09186cd48194055ce2e94e947e10c460ad051b47e36b8487d8c9b0b4c842215e = $this->env->getExtension("native_profiler");
        $__internal_09186cd48194055ce2e94e947e10c460ad051b47e36b8487d8c9b0b4c842215e->enter($__internal_09186cd48194055ce2e94e947e10c460ad051b47e36b8487d8c9b0b4c842215e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_09186cd48194055ce2e94e947e10c460ad051b47e36b8487d8c9b0b4c842215e->leave($__internal_09186cd48194055ce2e94e947e10c460ad051b47e36b8487d8c9b0b4c842215e_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_86a2bce17bc7d89b214a02e1cad1f97b652940aacfaf414f1c153462415ed9bf = $this->env->getExtension("native_profiler");
        $__internal_86a2bce17bc7d89b214a02e1cad1f97b652940aacfaf414f1c153462415ed9bf->enter($__internal_86a2bce17bc7d89b214a02e1cad1f97b652940aacfaf414f1c153462415ed9bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_86a2bce17bc7d89b214a02e1cad1f97b652940aacfaf414f1c153462415ed9bf->leave($__internal_86a2bce17bc7d89b214a02e1cad1f97b652940aacfaf414f1c153462415ed9bf_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_fef6dac185214b9648c4c120f6bcf27c4c02b99aaa8aac11662db43a21f06ddc = $this->env->getExtension("native_profiler");
        $__internal_fef6dac185214b9648c4c120f6bcf27c4c02b99aaa8aac11662db43a21f06ddc->enter($__internal_fef6dac185214b9648c4c120f6bcf27c4c02b99aaa8aac11662db43a21f06ddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_fef6dac185214b9648c4c120f6bcf27c4c02b99aaa8aac11662db43a21f06ddc->leave($__internal_fef6dac185214b9648c4c120f6bcf27c4c02b99aaa8aac11662db43a21f06ddc_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_3cebca0c0e337dea615de2c018f0dfe817e374d3d57a597b9643658b6bb1a360 = $this->env->getExtension("native_profiler");
        $__internal_3cebca0c0e337dea615de2c018f0dfe817e374d3d57a597b9643658b6bb1a360->enter($__internal_3cebca0c0e337dea615de2c018f0dfe817e374d3d57a597b9643658b6bb1a360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_3cebca0c0e337dea615de2c018f0dfe817e374d3d57a597b9643658b6bb1a360->leave($__internal_3cebca0c0e337dea615de2c018f0dfe817e374d3d57a597b9643658b6bb1a360_prof);

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
