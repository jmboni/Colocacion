<?php

/* SonataBlockBundle:Block:block_core_action.html.twig */
class __TwigTemplate_a6f7b0d43dac9507337110b296f0d21605bb594aff0d111344328200e3e6c4c7 extends Twig_Template
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
        $__internal_d2c4e2c1718bb83b2a7439bc628494442aaa09c46c8a2f072be6c305be87e9d4 = $this->env->getExtension("native_profiler");
        $__internal_d2c4e2c1718bb83b2a7439bc628494442aaa09c46c8a2f072be6c305be87e9d4->enter($__internal_d2c4e2c1718bb83b2a7439bc628494442aaa09c46c8a2f072be6c305be87e9d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2c4e2c1718bb83b2a7439bc628494442aaa09c46c8a2f072be6c305be87e9d4->leave($__internal_d2c4e2c1718bb83b2a7439bc628494442aaa09c46c8a2f072be6c305be87e9d4_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_42ffd34517d9ec06bab55dc99ae2ea5b1fb76923d5ba3ca61613ea0aa6a8d667 = $this->env->getExtension("native_profiler");
        $__internal_42ffd34517d9ec06bab55dc99ae2ea5b1fb76923d5ba3ca61613ea0aa6a8d667->enter($__internal_42ffd34517d9ec06bab55dc99ae2ea5b1fb76923d5ba3ca61613ea0aa6a8d667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
        echo "
";
        
        $__internal_42ffd34517d9ec06bab55dc99ae2ea5b1fb76923d5ba3ca61613ea0aa6a8d667->leave($__internal_42ffd34517d9ec06bab55dc99ae2ea5b1fb76923d5ba3ca61613ea0aa6a8d667_prof);

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
