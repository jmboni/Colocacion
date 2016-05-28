<?php

/* SonataBlockBundle:Block:block_core_action.html.twig */
class __TwigTemplate_20c1ff12e0d5f96af38af1e789442ab1005c55cb27a5de84984fcde18d7ab9fd extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_787ce60452c53682b459e90db916812410188bc0d413ea95ad25f9f5c9ce959c = $this->env->getExtension("native_profiler");
        $__internal_787ce60452c53682b459e90db916812410188bc0d413ea95ad25f9f5c9ce959c->enter($__internal_787ce60452c53682b459e90db916812410188bc0d413ea95ad25f9f5c9ce959c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_787ce60452c53682b459e90db916812410188bc0d413ea95ad25f9f5c9ce959c->leave($__internal_787ce60452c53682b459e90db916812410188bc0d413ea95ad25f9f5c9ce959c_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_43cd1713cbebd5c7d9e37908cd2edc42f92d280a8869ca50f98f6e63d8b9a52c = $this->env->getExtension("native_profiler");
        $__internal_43cd1713cbebd5c7d9e37908cd2edc42f92d280a8869ca50f98f6e63d8b9a52c->enter($__internal_43cd1713cbebd5c7d9e37908cd2edc42f92d280a8869ca50f98f6e63d8b9a52c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
        echo "
";
        
        $__internal_43cd1713cbebd5c7d9e37908cd2edc42f92d280a8869ca50f98f6e63d8b9a52c->leave($__internal_43cd1713cbebd5c7d9e37908cd2edc42f92d280a8869ca50f98f6e63d8b9a52c_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_action.html.twig";
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
/*     {{ content|raw }}*/
/* {% endblock %}*/
/* */
