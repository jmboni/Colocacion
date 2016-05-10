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
        $__internal_70cc55afbbd3bdc18eedfc5a46b7061388ae8650fa17439ff2f3537bf6567960 = $this->env->getExtension("native_profiler");
        $__internal_70cc55afbbd3bdc18eedfc5a46b7061388ae8650fa17439ff2f3537bf6567960->enter($__internal_70cc55afbbd3bdc18eedfc5a46b7061388ae8650fa17439ff2f3537bf6567960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70cc55afbbd3bdc18eedfc5a46b7061388ae8650fa17439ff2f3537bf6567960->leave($__internal_70cc55afbbd3bdc18eedfc5a46b7061388ae8650fa17439ff2f3537bf6567960_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_cfe6f29deab7ef71be8dd81585ae674a3fa93aff2ec5fd113760a1f6f3e2d3bd = $this->env->getExtension("native_profiler");
        $__internal_cfe6f29deab7ef71be8dd81585ae674a3fa93aff2ec5fd113760a1f6f3e2d3bd->enter($__internal_cfe6f29deab7ef71be8dd81585ae674a3fa93aff2ec5fd113760a1f6f3e2d3bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
        echo "
";
        
        $__internal_cfe6f29deab7ef71be8dd81585ae674a3fa93aff2ec5fd113760a1f6f3e2d3bd->leave($__internal_cfe6f29deab7ef71be8dd81585ae674a3fa93aff2ec5fd113760a1f6f3e2d3bd_prof);

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
