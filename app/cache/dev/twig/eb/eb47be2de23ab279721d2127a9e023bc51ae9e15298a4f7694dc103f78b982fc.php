<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_d519f10710bd0df4d4cf4231273a2092e92c21088cc4e5538a203da4abaf3859 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0af25b9cc086da08f7223592cc67ef4a1062c87dd40f3330e221cc45d4b9f709 = $this->env->getExtension("native_profiler");
        $__internal_0af25b9cc086da08f7223592cc67ef4a1062c87dd40f3330e221cc45d4b9f709->enter($__internal_0af25b9cc086da08f7223592cc67ef4a1062c87dd40f3330e221cc45d4b9f709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "id", array()), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
        
        $__internal_0af25b9cc086da08f7223592cc67ef4a1062c87dd40f3330e221cc45d4b9f709->leave($__internal_0af25b9cc086da08f7223592cc67ef4a1062c87dd40f3330e221cc45d4b9f709_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_850d744d4856dcdf11cac49e38bc5a167d703b2e9ffc72ff593f412b2cac3b40 = $this->env->getExtension("native_profiler");
        $__internal_850d744d4856dcdf11cac49e38bc5a167d703b2e9ffc72ff593f412b2cac3b40->enter($__internal_850d744d4856dcdf11cac49e38bc5a167d703b2e9ffc72ff593f412b2cac3b40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_850d744d4856dcdf11cac49e38bc5a167d703b2e9ffc72ff593f412b2cac3b40->leave($__internal_850d744d4856dcdf11cac49e38bc5a167d703b2e9ffc72ff593f412b2cac3b40_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 12,  30 => 13,  28 => 12,  23 => 11,);
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
/* <div id="cms-block-{{ block.id }}" class="cms-block cms-block-element">*/
/*     {% block block %}EMPTY CONTENT{% endblock %}*/
/* </div>*/
/* */
