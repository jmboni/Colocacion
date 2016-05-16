<?php

/* SonataBlockBundle:Block:block_exception.html.twig */
class __TwigTemplate_7106382d6fc0785155e6a60b7d6c4dc2926d48a6e3a7736991173f5f10c0e7ea extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_exception.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_78ac63c1b1fe5ea28d6a97f4b47b676c7e33b347d77d547a8081a96ed4e3fc48 = $this->env->getExtension("native_profiler");
        $__internal_78ac63c1b1fe5ea28d6a97f4b47b676c7e33b347d77d547a8081a96ed4e3fc48->enter($__internal_78ac63c1b1fe5ea28d6a97f4b47b676c7e33b347d77d547a8081a96ed4e3fc48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_exception.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78ac63c1b1fe5ea28d6a97f4b47b676c7e33b347d77d547a8081a96ed4e3fc48->leave($__internal_78ac63c1b1fe5ea28d6a97f4b47b676c7e33b347d77d547a8081a96ed4e3fc48_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_2ca2dbd5b3bd4662b8d0141458498dff388edbb110050757960063f5dd3e5ef7 = $this->env->getExtension("native_profiler");
        $__internal_2ca2dbd5b3bd4662b8d0141458498dff388edbb110050757960063f5dd3e5ef7->enter($__internal_2ca2dbd5b3bd4662b8d0141458498dff388edbb110050757960063f5dd3e5ef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <div class=\"cms-block-exception\">
        <h2>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "name", array()), "html", null, true);
        echo "</h2>
        <h3>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo "</h3>
    </div>
";
        
        $__internal_2ca2dbd5b3bd4662b8d0141458498dff388edbb110050757960063f5dd3e5ef7->leave($__internal_2ca2dbd5b3bd4662b8d0141458498dff388edbb110050757960063f5dd3e5ef7_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 17,  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/*     <div class="cms-block-exception">*/
/*         <h2>{{ block.name }}</h2>*/
/*         <h3>{{ exception.message }}</h3>*/
/*     </div>*/
/* {% endblock %}*/
/* */
