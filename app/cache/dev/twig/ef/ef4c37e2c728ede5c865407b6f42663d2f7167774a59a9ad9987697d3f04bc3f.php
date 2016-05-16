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
        $__internal_a38209c5e92b0db9b857eae6a8e1855d329cbd0051d7be5abaf815263d7d8920 = $this->env->getExtension("native_profiler");
        $__internal_a38209c5e92b0db9b857eae6a8e1855d329cbd0051d7be5abaf815263d7d8920->enter($__internal_a38209c5e92b0db9b857eae6a8e1855d329cbd0051d7be5abaf815263d7d8920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a38209c5e92b0db9b857eae6a8e1855d329cbd0051d7be5abaf815263d7d8920->leave($__internal_a38209c5e92b0db9b857eae6a8e1855d329cbd0051d7be5abaf815263d7d8920_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_3454a2abff50241b6e1ff05ccf8e28a80a6486aebe9ef7e8ea4f014fcc5e079f = $this->env->getExtension("native_profiler");
        $__internal_3454a2abff50241b6e1ff05ccf8e28a80a6486aebe9ef7e8ea4f014fcc5e079f->enter($__internal_3454a2abff50241b6e1ff05ccf8e28a80a6486aebe9ef7e8ea4f014fcc5e079f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
        echo "
";
        
        $__internal_3454a2abff50241b6e1ff05ccf8e28a80a6486aebe9ef7e8ea4f014fcc5e079f->leave($__internal_3454a2abff50241b6e1ff05ccf8e28a80a6486aebe9ef7e8ea4f014fcc5e079f_prof);

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
