<?php

/* SonataBlockBundle:Block:block_core_text.html.twig */
class __TwigTemplate_afe34f07d33fc398385b79dd8843d42617e1ba66a28b4372bf7d14fa4f8132e1 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e40e34116d4f59ce29e0f14eb47634562db135c273126c5424704a9d649c6aa1 = $this->env->getExtension("native_profiler");
        $__internal_e40e34116d4f59ce29e0f14eb47634562db135c273126c5424704a9d649c6aa1->enter($__internal_e40e34116d4f59ce29e0f14eb47634562db135c273126c5424704a9d649c6aa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e40e34116d4f59ce29e0f14eb47634562db135c273126c5424704a9d649c6aa1->leave($__internal_e40e34116d4f59ce29e0f14eb47634562db135c273126c5424704a9d649c6aa1_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_e8b4a9b2f0bf3b240f0e90930954a8000a41713ebc688eb60c031c08162add69 = $this->env->getExtension("native_profiler");
        $__internal_e8b4a9b2f0bf3b240f0e90930954a8000a41713ebc688eb60c031c08162add69->enter($__internal_e8b4a9b2f0bf3b240f0e90930954a8000a41713ebc688eb60c031c08162add69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "content", array());
        echo "
";
        
        $__internal_e8b4a9b2f0bf3b240f0e90930954a8000a41713ebc688eb60c031c08162add69->leave($__internal_e8b4a9b2f0bf3b240f0e90930954a8000a41713ebc688eb60c031c08162add69_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_text.html.twig";
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
/*     {{ settings.content|raw }}*/
/* {% endblock %}*/
/* */
