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
        $__internal_8b4fa76ecd3ed163b70b837eb85ad3286a767b37e77d6a3cd18e54bfaf80f2bb = $this->env->getExtension("native_profiler");
        $__internal_8b4fa76ecd3ed163b70b837eb85ad3286a767b37e77d6a3cd18e54bfaf80f2bb->enter($__internal_8b4fa76ecd3ed163b70b837eb85ad3286a767b37e77d6a3cd18e54bfaf80f2bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_exception.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b4fa76ecd3ed163b70b837eb85ad3286a767b37e77d6a3cd18e54bfaf80f2bb->leave($__internal_8b4fa76ecd3ed163b70b837eb85ad3286a767b37e77d6a3cd18e54bfaf80f2bb_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_c7584eca019b0b146f393392f3cbbe318923e3137b6949d2456558549a5d4b8c = $this->env->getExtension("native_profiler");
        $__internal_c7584eca019b0b146f393392f3cbbe318923e3137b6949d2456558549a5d4b8c->enter($__internal_c7584eca019b0b146f393392f3cbbe318923e3137b6949d2456558549a5d4b8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

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
        
        $__internal_c7584eca019b0b146f393392f3cbbe318923e3137b6949d2456558549a5d4b8c->leave($__internal_c7584eca019b0b146f393392f3cbbe318923e3137b6949d2456558549a5d4b8c_prof);

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