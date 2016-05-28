<?php

/* SonataBlockBundle:Block:block_core_menu.html.twig */
class __TwigTemplate_769b1a32ba34071063eeeeeba0d430f812a5820736597b02d73c6bf8196bb5de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_menu.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7b5cc203c109efb226675ab6b7b3335a34ab5b83b65c7ae8a6d13934f03c7ec8 = $this->env->getExtension("native_profiler");
        $__internal_7b5cc203c109efb226675ab6b7b3335a34ab5b83b65c7ae8a6d13934f03c7ec8->enter($__internal_7b5cc203c109efb226675ab6b7b3335a34ab5b83b65c7ae8a6d13934f03c7ec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_menu.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b5cc203c109efb226675ab6b7b3335a34ab5b83b65c7ae8a6d13934f03c7ec8->leave($__internal_7b5cc203c109efb226675ab6b7b3335a34ab5b83b65c7ae8a6d13934f03c7ec8_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_30e04f5c41c4ce39c7e9087e82bc189fbeef23924d36df4e29bd5e3f46f02a41 = $this->env->getExtension("native_profiler");
        $__internal_30e04f5c41c4ce39c7e9087e82bc189fbeef23924d36df4e29bd5e3f46f02a41->enter($__internal_30e04f5c41c4ce39c7e9087e82bc189fbeef23924d36df4e29bd5e3f46f02a41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->env->getExtension('knp_menu')->render((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), (isset($context["menu_options"]) ? $context["menu_options"] : $this->getContext($context, "menu_options")));
        echo "
";
        
        $__internal_30e04f5c41c4ce39c7e9087e82bc189fbeef23924d36df4e29bd5e3f46f02a41->leave($__internal_30e04f5c41c4ce39c7e9087e82bc189fbeef23924d36df4e29bd5e3f46f02a41_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
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
/* {% extends sonata_block.templates.block_base %}*/
/* */
/* {% block block %}*/
/*     {{ knp_menu_render(menu, menu_options) }}*/
/* {% endblock %}*/
/* */
